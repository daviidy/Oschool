<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Course;
use App\School;
use App\Purchase;
use App\Pricing;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;
use Auth;
use Mail;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school, Course $course)
    {
        return view('admin_views.coupons.index', ['course' => $course, 'school' => $school]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school, Course $course)
    {
            $allCourses = Course::all();
            return view('admin_views.coupons.create', ['school' => $school, 'allCourses' => $allCourses, 'course' => $course]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::create($request->all());
        if(is_array($request->courses_id))
        {
            foreach($request->courses_id as $course_id)
            {
                $course_found = Course::find($course_id);
                $coupon->courses()->attach($course_found);
            }
        }

        return back()->with('status', 'Nouveau coupon ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit( School $school, Course $course,Coupon $coupon)
    {
        $allCourses = Course::all();
        return view('admin_views.coupons.edit', ['coupon' => $coupon,'allCourses' => $allCourses,'school' => $school, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $coupon->update($request->all());
        if(is_array($request->courses_id))
        {
            foreach($request->courses_id as $course_id)
            {
                $course_found = Course::find($course_id);
                // $coupon->courses()->attach($course_found);
                if ($coupon->courses->contains($course_found->id)) {
                    continue;
                }
                else {
                    $coupon->courses()->attach($course_found);
                }

            }
        }
        // $coupon->save();
        return back()->with('status', 'Coupon modifié');
    }


    public function applyCoupon(Request $request)
    {
        $date = Carbon::now();
        $coupon = Coupon::where('code', $request->code)->where('school_id', $request->school_id)->first();
        $course = Course::find($request->course_id);
        $pricing = Pricing::find($request->pricing_id);

        //on check si il n'ya pas de code coupon
        if ($coupon === null || !$coupon->courses->contains($course->id) || Carbon::parse($coupon->date_exp) < $date) {
            return redirect('/course/'.$course->slug.'/checkout/'.$pricing->id)->with('status', 'Coupon Invalide');
        }
        else {
            $discount_value = ($pricing->price * $coupon->value)/100;
            $price = $pricing->price - $discount_value;
            if ($price == 0) {
                if (Auth::check()) {
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
                else {
                    return redirect('/course/'.$course->slug.'/checkout/'.$pricing->id)->with('status', 'Connectez-vous d\'abord ci-dessous, pour ajouter le code coupon');
                }


            }
            if (Auth::check()) {
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
                                  'cpm_site_id' => '113043',
                                  'cpm_trans_id' => $temps,
                                  'cpm_trans_date' => $time,
                                  'cpm_payment_config' => 'SINGLE',
                                  'cpm_page_action' => 'PAYMENT',
                                  'cpm_version' => 'V1',
                                  'cpm_language' => 'fr',
                                  'cpm_designation' => 'Abonnement à la formation '.$pricing->course->name,
                                  'apikey' => '134714631658c289ed716950.86091611',
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

                  return view('pricings.coupon',['signature' => str_replace('"',"",$resultat),
                                               'temps' => $temps,
                                               'time' => $time,
                                               'purchase' => $purchase,
                                               'pricing' => $pricing,
                                               'price' => $price
                                             ]);

            }
            else {
                return redirect('/course/'.$course->slug.'/checkout/'.$pricing->id)->with('status', 'Connectez-vous d\'abord ci-dessous, pour ajouter le code coupon');
            }



        }


        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }


    //accès au cours par mot de passe
    public function applyPassword(Request $request)
    {
        $course = Course::find($request->course_id);
        $pricing = Pricing::find($request->pricing_id);

        //on check si le mot de passe est erroné
        if ($pricing->password !== $request->password) {
            return redirect('/course/'.$course->slug.'/checkout/'.$pricing->id)->with('status', 'Mot de passe invalide');
        }
        //sinon on l'inscrit
        else {
            //on récupère le purchase du user
            $purchase = Purchase::find($request->purchase_id);

            //on met le status de l'achat à jour
              $purchase->status = 'Validé';
              $purchase->save();

            //si l'étudiant n'est pas déjà
            //inscrit a la course en question
            //on l'inscrit

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

        }//fin processus inscription

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return back()->with('status', 'Coupon supprimé');
    }
}
