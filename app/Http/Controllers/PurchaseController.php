<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\School;
use App\User;
use App\Course;
use App\Payments;
use App\Pricing;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;
use Auth;

class PurchaseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $purchases = Purchase::where('status', 'Validé')->orderby('created_at','asc')->paginate(30);
      return view('achats.index', ['achats' => $purchases]);
    }

    public function thankYou()
    {
        if (Auth::check()) {
            return view('thank-you');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check() && Auth::user()->isAdmin()) {
        $users = User::orderby('id','asc')->paginate(1000);
        $courses = Course::orderby('id','asc')->paginate(30);
        return view('achats.ajout', ['users' => $users, 'courses' => $courses]);
      }

    }

    //recuperation des infos utilisateur a envoyer
    //a la page de paiement
    //pour les nouveaux paiements

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function checkout($slug, Pricing $pricing)
    {
        //si user est connecté on fait l'api call
        //vers cinetpay pour récuperer la signature
        //et le transid

        //Recuperation des paramètres mobile money de l'ecole
        $param_mobile_money = Payments::where('school_id',$pricing->course->school_id)->first();
        // dd($param_mobile_money);

        if (Auth::check()) {

            if ($pricing->course->type == 'mooc') {
                //si user connecté et inscrit au cours
                if (Auth::user()->courses->contains($pricing->course->id)) {
                return view('courses.curriculum', ['course' => $pricing->course]);
                }

            }
            elseif ($pricing->course->type == 'path' || $pricing->course->type == 'bootcamp') {
                if (Auth::user()->courses->contains($pricing->course->id)) {
                return view('paths.show', ['course' => $pricing->course]);
                }

            }

            //si l'offre est gratuite, alors
            //on redirige user vers
            //la vue free
            if ($pricing->type == "Free") {
                $purchase=Purchase::create([
                                  'price' => 0,
                                  'date' => Carbon::now(),
                                  'user_id' => Auth::user()->id,
                                  'pricing_id' => $pricing->id,
                                  'course_id' => $pricing->course_id,
                                ]);

                return view('pricings.free',[
                                             'purchase' => $purchase,
                                             'pricing' => $pricing,
                                           ]);
            }

            $price = $pricing->price;

            function postData($params, $url)
                {
                 try {
                 $curl = curl_init();
                 $postfield = '';
                 foreach ($params as $index => $value) {
                 $postfield .= $index . '=' . $value . "&";
                 }
                 $postfield = substr($postfield, 0, -1);
                 curl_setopt_array($curl, array(
                 CURLOPT_URL => $url,
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_ENCODING => "",
                 CURLOPT_MAXREDIRS => 10,
                 CURLOPT_TIMEOUT => 45,
                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                 CURLOPT_CUSTOMREQUEST => "POST",
                 CURLOPT_POSTFIELDS => $postfield,
                 CURLOPT_SSL_VERIFYPEER => false,
                 CURLOPT_HTTPHEADER => array(
                 "cache-control: no-cache",
                 "content-type: application/x-www-form-urlencoded",
                 ),
                 ));
                 $response = curl_exec($curl);
                 $err = curl_error($curl);
                 curl_close($curl);
                 if ($err) {
                 throw new Exception("cURL Error #:" . $err);
                 return $err;
                 } else {
                 return $response;
                 }
                 } catch (Exception $e) {
                 throw new Exception($e);
                 }
                }
                $time = Carbon::now();
                $temps = date("YmdHis");
              $params = array('cpm_amount' => $price,
                              'cpm_currency' => 'CFA',
                              'cpm_site_id' => $param_mobile_money->site_id,
                              'cpm_trans_id' => $temps,
                              'cpm_trans_date' => $time,
                              'cpm_payment_config' => 'SINGLE',
                              'cpm_page_action' => 'PAYMENT',
                              'cpm_version' => 'V1',
                              'cpm_language' => 'fr',
                              'cpm_designation' => 'Abonnement à la formation '.$pricing->course->name,
                              'apikey' => $param_mobile_money->api_key,
                              );
              $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
              //Appel de fonction postData()
              $resultat = postData($params, $url) ;
              $signature = json_decode($resultat, true);


              /*
              Session::put('trans_id', $temps);

              */
              Session::put('signature', str_replace('"',"",$resultat));

              //on crée l'achat qui aura un status en cours par défaut
              $purchase=Purchase::create([
                                'price' => $price,
                                'trans_id' => $temps,
                                'signature' => str_replace('"',"",$resultat),
                                'date' => Carbon::now(),
                                'user_id' => Auth::user()->id,
                                'pricing_id' => $pricing->id,
                                'course_id' => $pricing->course_id,
                              ]);

              return view('pricings.show',['signature' => str_replace('"',"",$resultat),
                                           'temps' => $temps,
                                           'time' => $time,
                                           'purchase' => $purchase,
                                           'pricing' => $pricing,
                                           'param_mobile_money'=>$param_mobile_money
                                         ]);
        }

        //si user est pas connecté on redirige directement
        //vers la page de pricings show

        else {
            return view('pricings.show',['pricing' => $pricing,'param_mobile_money'=>$param_mobile_money]);
        }


    }






    public function notify(Request $request){

      //cinetpay envoie a l'app des données en post apres le premier api call
      //il faut decoder la reponse et en ressortir les parametres apikey, site i et trans id



    //on récupère la signature stockée dans la bdd et qui correspond au trans_id de l'achat
    //on obtient une collection
    //etant donné qu'on sait que c'est un seul élément qu'on aura dans la collection
    //on peut utiliser la methode first pour le transformer en objet
    $purchase = Purchase::where('trans_id', $request['cpm_trans_id'])->first();
    if ($purchase->status == 'Validé') {
      return;
    }


      //on fait un api call a https://api.cinetpay.com/v1/?method=checkPayStatus avec
      //les donnees recueillies dans $request (trans_id et site_id)
      //et notre apikey etant deja connu

      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
          $temps = date("YmdHis");
        $params = array(
                        'cpm_site_id' => $request['cpm_site_id'],
                        'cpm_trans_id' => $request['cpm_trans_id'],
                        'apikey' => $request['apikey'],
                        );
        $url = "https://api.cinetpay.com/v1/?method=checkPayStatus";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $json = json_decode($resultat, true);

        //apres avoir décodé la reponse de l'apî call on fait les tests

      if ($json['transaction']['cpm_result'] == '00' && $json['transaction']['cpm_amount'] == $purchase->price && $json['transaction']['signature'] == $purchase->signature)
      {

                  //on récupère l'id Utilisateur
                  $user = User::find($purchase->user_id);

                  //on met le status de l'achat à jour
                    $purchase->status = 'Validé';
                    $purchase->save();

                  //si l'étudiant n'est pas déjà
                  //inscrit a la course en question
                  //on l'inscrit

                    $course = Course::where('name', $purchase->pricing->course->name)->first();

                    if ($user->courses->contains($course->id)) {

                        //envoi mail utilisateur
                         Mail::send('mails.users.purchases.success', ['purchase' => $purchase], function($message) use($purchase){
                           $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a été effectué avec succès !');
                           $message->from('eventsoschool@gmail.com', 'Oschool');
                         });

                         $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(1000);

                         foreach ($admins as $admin) {
                           //envoi mail admin
                           Mail::send('mails.admins.purchases.success', ['purchase' => $purchase], function($message) use($admin){
                             $message->to($admin->email, 'Aux Admins Oschool')->subject('Une commande a été traitée avec succès');
                             $message->from('eventsoschool@gmail.com', 'Oschool');
                           });
                         }


                        }

                        //sinon on l'inscrit au cours

                    else {

                        $user->courses()->attach($course);

                        //envoi mail utilisateur
                         Mail::send('mails.users.purchases.success', ['purchase' => $purchase], function($message) use($purchase){
                           $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a été effectué avec succès !');
                           $message->from('eventsoschool@gmail.com', 'Oschool');
                         });

                         $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(1000);

                         foreach ($admins as $admin) {
                           //envoi mail admin
                           Mail::send('mails.admins.purchases.success', ['purchase' => $purchase], function($message) use($admin){
                             $message->to($admin->email, 'Aux Admins Oschool')->subject('Une commande a été traitée avec succès');
                             $message->from('eventsoschool@gmail.com', 'Oschool');
                           });
                         }

                         //si c'est une spécialisation on l'inscrit
                         //à tous les cours de cxette spécialisation
                         if ($course->type == 'path') {
                             foreach ($course->resources as $resource) {
                                 $course_path = Course::where('name', $resource->title)->first();
                                 if (!$user->courses->contains($course_path->id)) {
                                     $user->courses()->attach($course_path);
                                 }

                             }
                         }



                  }

                  //si ce n'est pas encore fait
                  //on inscrit l'utilsateur dans l'école
                  $school = School::where('id', $course->school_id)->first();
                  $in_school = $user->schools->contains($course->school_id);
                  if (!$in_school) {
                      $user->schools()->attach($school);
                  }


        }//fin grand if


      else {

        $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(1000);

        foreach ($admins as $admin) {
        //envoi mail admin pour échec
        Mail::send('mails.admins.purchases.fail', ['purchase' => $purchase], function($message){
          $message->to($admin->email, 'Aux Admins Oschool')->subject('Un paiement a échoué');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }


      }


    } //fin fonction notify


    //make user subscribe for free
    public function subscribeForFree(Request $request)
    {
        //on récupère le purchase du user
        $purchase = Purchase::find($request->purchase_id);

        //on met le status de l'achat à jour
          $purchase->status = 'Validé';
          $purchase->save();

        //si l'étudiant n'est pas déjà
        //inscrit a la course en question
        //on l'inscrit

          $course = Course::where('name', $purchase->pricing->course->name)->first();

          if (Auth::user()->courses->contains($course->id)) {

              //envoi mail utilisateur
               Mail::send('mails.users.purchases.success', ['purchase' => $purchase], function($message) use($purchase){
                 $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a été effectué avec succès !');
                 $message->from('eventsoschool@gmail.com', 'Oschool');
               });

               $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(1000);

               foreach ($admins as $admin) {
                 //envoi mail admin
                 Mail::send('mails.admins.purchases.success', ['purchase' => $purchase], function($message) use($admin){
                   $message->to($admin->email, 'Aux Admins Oschool')->subject('Une commande a été traitée avec succès');
                   $message->from('eventsoschool@gmail.com', 'Oschool');
                 });
               }




              }



          else {

              Auth::user()->courses()->attach($course);

              //envoi mail utilisateur
               Mail::send('mails.users.purchases.success', ['purchase' => $purchase], function($message) use($purchase){
                 $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a été effectué avec succès !');
                 $message->from('eventsoschool@gmail.com', 'Oschool');
               });

               $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(1000);

               foreach ($admins as $admin) {
                 //envoi mail admin
                 Mail::send('mails.admins.purchases.success', ['purchase' => $purchase], function($message) use($admin){
                   $message->to($admin->email, 'Aux Admins Oschool')->subject('Une commande a été traitée avec succès');
                   $message->from('eventsoschool@gmail.com', 'Oschool');
                 });
               }



        }

        //si ce n'est pas encore fait
        //on inscrit l'utilsateur dans l'école
        $school = School::where('id', $course->school_id)->first();
        $in_school = Auth::user()->schools->contains($course->school_id);
        if (!$in_school) {
            Auth::user()->schools()->attach($school);
        }


        if ($course->type == 'mooc') {
            return redirect('/course/enrolled/'.$course->slug);
        }
        else {
            return redirect('/path/'.$course->slug);
        }


    }


    //fonction pour rajouter un achat
    public function add(School $school, Course $course, User $user)
    {
        //on retrouve le dernier achat fait par l'étudiant
        $last_purchase = $user->purchases->where('user_id', $user->id)->where('status', 'Validé')->where('course_id', $course->id)->last();
        //on détermine le prix et l'offre de cet achat
        //on crée un nouveau purchase pour le student
        $purchase=Purchase::create([
                          'price' => $last_purchase->price,
                          'date' => Carbon::now(),
                          'user_id' => $user->id,
                          'pricing_id' => $last_purchase->pricing_id,
                          'course_id' => $course->id,
                          'status' => 'Validé',
                        ]);


        //envoi mail utilisateur
         Mail::send('mails.users.purchases.success', ['purchase' => $purchase], function($message) use($purchase){
           $message->to($purchase->user->email, 'Cher(ère) Etudiant(e)')->subject('Votre paiement a été enregistré avec succès !');
           $message->from('eventsoschool@gmail.com', 'Oschool');
         });

         $admins = User::where('type1', 'admin')->orderby('id', 'asc')->paginate(1000);

         foreach ($admins as $admin) {
           //envoi mail admin
           Mail::send('mails.admins.purchases.success', ['purchase' => $purchase], function($message) use($admin){
             $message->to($admin->email, 'Aux Admins Oschool')->subject('Un achat a été ajouté manuellement');
             $message->from('eventsoschool@gmail.com', 'Oschool');
           });
         }


        return redirect()->back()->with('status', 'Achat ajouté avec succès');
    }



    /**
     * Pour une nouvelle inscription
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /*fonction pour ajouter un achat manuellement*/

    public function achat(Request $request)
    {



    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
