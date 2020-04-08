<?php

namespace App\Http\Controllers;

use App\School;
use Auth;
use App\User;
use App\Color;
use App\Purchase;
use App\Lesson;
use App\Course;
use App\Author;
use App\Classroom;
use Exception;
use App\Faq;
use Image;
use Input;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\SlugSchool;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::where('status', 'active')->orderby('id','asc')->paginate(9);
        return view('schools.index', ['schools' => $schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {

          return view('admin_views.schools.create');
        }
        else {
          return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school=School::create([

                          'name' => $request['name'],
                          'user_id' => $request['user_id']

                        ]);

       return redirect('home')->with('status', 'L\'école a bien été créée');
    }

    public function storeSchoolBusiness(Request $request)
    {
        $school=School::create([

                          'name' => $request['name'],
                          'slug' => Str::slug($request->input('name'), '-') . '-' . uniqid(),
                          'user_id' => $request['user_id'],
                          'domain' => $request->input('domain'),

                        ]);

        $slug = new SlugSchool();
        $school->slug = $slug->createSlug($request->name);
        $school->save();

        $color = Color::create();

        $color->school()->associate($school)->save();

       return redirect('home')->with('status', 'L\'école a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     * the view is returned to default user
     */
    public function show(School $school)
    {
        if ($school->user->isAdmin()) {
            return view('schools.show', ['school' => $school]);
        }

        else {
            if (Auth::check()) {

                $type = 'all';
                $courses = Course::where('school_id', $school->id)->where('state', 'active')->get();
                return view('schools.showBusinessIn', ['school' => $school, 'courses' => $courses, 'type' => $type]);

            }
            else {
                $type = 'all';
                $courses = Course::where('school_id', $school->id)->where('state', 'active')->get();
                return view('schools.showBusinessOut', ['school' => $school, 'courses' => $courses, 'type' => $type]);
            }
        }

    }




    //to show school all courses
    public function showCourses(School $school)
    {
        $type = 'all';
        $courses = Course::where('school_id', $school->id)->where('state', 'active')->get();
        return view('schools.showCourses', ['school' => $school, 'courses' => $courses, 'type' => $type]);
    }

    /*public function showCourses(School $school)
    {
        return view('schools.showCourses', ['school' => $school]);
    }*/


    /**
     * [showForAdmin description]
     * @param  School $school [description]
     * @return \Illuminate\Http\Response
     * [function to show school dashboard to admin]
     */
    //tableau admin pour oschool
    public function showForAdmin(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.show', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.edit', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolPayments(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.payments', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolFaqs(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.school.faq', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * [monthlyPayments description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function schoolmonthlyPayments(School $school, Request $request)

    {
      //on récupere le mois et l'annee choisi par le prof, et on les caste en entier
      //ensuite on selectionne toutes les payements du mois, de l'annee et appartenant
      //à l'école
      if (Auth::check()) {

        //ensemble de tous les achats du mois en cours
        $current_month_purchases = Purchase::whereMonth('date', '=', date('m'))->where('status', 'Validé')->get();
        return view('admin_views.schools.payments', ['school' => $school, 'current_month_purchases' => $current_month_purchases])->with('status', 'Retrouvez ci-dessous la liste des achats pour le mois sélectionné');
      }

      else {
        return redirect('home');
      }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolStudents(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.students', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolOwners(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.owners', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolTeachers(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.teachers', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolTransactions(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.transactions', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolStatements(School $school)
    {
        if (Auth::check()) {
        return view('admin_views.schools.statements', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->update($request->all());

        if($request->hasFile('logo')){
          $image = $request->file('logo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/schools/logos/' . $filename));
          $school->logo = $filename;
          $school->save();
        }

        if($request->hasFile('background')){
          $image = $request->file('background');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/schools/backgrounds/' . $filename));
          $school->background = $filename;
          $school->save();
        }




        return redirect()->back()->with('status', 'Les modifications ont bien été enregistrées');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function updateSchool(Request $request)
    {
        //$result = json_decode($request->getContent());

        $data = School::find($request->id);

        $data->description = $request->description;

        $data->save();

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect('home')->with('status', 'Ecole supprimée de la base de données' );
    }


    /**
     * [editItem description]
     * @param  Request $req [description]
     * @return [type]       [description]
     */
    public function updateSchoolStatus(Request $req) {
        $data = School::find($req->id);
        $data->status = $req->status;
        $data->save();
        return response()->json($data);
    }


    /**
     * [editItem description]
     * @param  Request $req [description]
     * @return [type]       [description]
     */
    public function deleteSchool(Request $req) {
        $data = School::find($req->id);
        $data->delete();
        Session::flash('status', 'Ecole supprimée de la base de données');
        return response()->json();
    }


    /**
     * [editItem description]
     * @param  Request $req [description]
     * @return [type]       [description]
     */
    public function addAuthor(Request $req) {
        if ($req->headline) {
          $data = Author::create($req->all());
          $image = $req->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/users/authors/' . $filename));
          $data->image = $filename;
          $data->save();

        }
        else {
            $data = Author::create([
                'school_id' => $req->id,
                'full_name' => $req->full_name,
            ]);
        }

        return response()->json($data);
    }



    //filters

    //to show school mooc
    public function showMooc(School $school)
    {
        $type = 'mooc';
        $courses = Course::where('school_id', $school->id)->where('type', 'mooc')->where('state', 'active')->get();
        return view('schools.showCourses', ['school' => $school, 'courses' => $courses, 'type' => $type]);
    }

    //to show school path
    public function showPath(School $school)
    {
        $type = 'path';
        $courses = Course::where('school_id', $school->id)->where('type', 'path')->where('state', 'active')->get();
        return view('schools.showCourses', ['school' => $school, 'courses' => $courses, 'type' => $type]);
    }

    //to show school bootcamp
    public function showBootcamp(School $school)
    {
        $type = 'bootcamp';
        $courses = Course::where('school_id', $school->id)->where('type', 'bootcamp')->where('state', 'active')->get();
        return view('schools.showCourses', ['school' => $school, 'courses' => $courses, 'type' => $type]);
    }


    /*
    for subdomain schools
     */

     //tableau admin pour sous domaine
     public function showForBusiness($school_id, Request $request)
     {
         if (Auth::check()) {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();
         return view('admin_views.schools.show', ['school' => $school]);
         }
         else {
             return redirect('home');
         }
     }


     //apercu ecole en mode inscrit
     public function showBusinessIn($school_id, Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();
         if (Auth::check() && Auth::user()->createSchools->contains($school->id)) {
             $type = 'all';
             $courses = Course::where('school_id', $school->id)->where('state', 'active')->get();
             return view('schools.showBusinessIn', ['school' => $school, 'courses' => $courses, 'type' => $type]);
         }
     }

     //apercu ecole en mode visiteur
     public function showBusinessOut($school_id, Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();
         if (Auth::check() && Auth::user()->createSchools->contains($school->id)) {

             return view('schools.showBusinessOut', ['school' => $school]);
         }
     }

     //page d'accueil du sous domaine
     public function showBusinessHome(Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();
             if (Auth::check()) {

                 $type = 'all';
                 $courses = Course::where('school_id', $school->id)->where('state', 'active')->get();
                 return view('schools.showBusinessIn', ['school' => $school, 'courses' => $courses, 'type' => $type]);

             }
             else {
                 $type = 'all';
                 $courses = Course::where('school_id', $school->id)->where('state', 'active')->get();
                 return view('schools.showBusinessOut', ['school' => $school, 'courses' => $courses, 'type' => $type]);
             }

     }

     //page de login du sous domaine
     public function showBusinessLogin(Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();

        if (Auth::check()) {
            return redirect('home');
        }
        else {
            return view('auth.login_subdomain', ['school' => $school]);
        }


     }

     //page de register du sous domaine
     public function showBusinessRegister(Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();

             if (Auth::check()) {
                 return redirect('home');
             }
             else {
                 return view('auth.register_subdomain', ['school' => $school]);
             }

     }


     //subdomain users home
     public function showBusinessHomeUsers(Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();
        //si on ne retrouve pas l'école
        //on revient à la page précédente
        if ($school === null) {
          return redirect()->back();
        }

        if (Auth::check()) {
            //si le user est le proprio de l'ecole
            //on l'envoie au tableau de bord d'admin
            //de l'école
            if ($school->user_id == Auth::user()->id) {
                return view('admin_views.schools.show', ['school' => $school]);
            }
            else {
                return view('users.dashboard_subdomain', ['school' => $school]);
            }

        }

        else {
            return view('auth.login_subdomain', ['school' => $school]);
        }


     }


     public function contactSubDomain(Request $request)
     {

                 //on vas prendre l'input sujet et message ainsi que
                // le mail de l'étudiant


                     $content = $request->content;
                     $student_mail = $request->student_mail;

                //on retrouve le proprio du school
                $user = User::find($request->user_id);

                     Mail::send('mails.users.contact.send', ['user' => $user, 'content' => $content, 'student_mail' => $student_mail], function($message) use($user){
                 //on vas prendre l'input sujet et message ainsi que
                // le mail de l'utilisateur et celui du propriétaire
                 $user = User::find($request->user_id);

                    //on retrouve le proprietaire de l'école dans la bdd
                     $user = User::where('name', $user_id)->first();
                     $content = $request->content;
                     $user_mail = $request->user_mail;

                     Mail::send('mails.users.contact.send', ['user' => $user, 'content' => $content, 'user_mail' => $user_mail], function($message) use($user){

                       $message->to($user->email, 'Un.e étudiant.e vous a envoyé un message')->subject('Un.e étudiant.e vous a envoyé un message');
                       $message->from('eventsoschool@gmail.com', 'Oschool');
                     });


                     return back()->with('status', 'Votre message a bien été envoyé');

                    }
                  );

                     return back()->with('status', 'Votre message a bien été envoyé');


        }



        public function integrations(School $school)
        {
            return view('schools.integrations', ['school' => $school]);
        }


        public function callback(Request $request)
        {
			$state = $request->input('state');
			$code = $request->input('code');
			$school = School::find($state);

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
                         CURLOPT_SSL_VERIFYPEER => true,
                         CURLOPT_HTTPHEADER => array(
                         "Authorization: Basic ". base64_encode("IMCA3UZyQISOyBdKQR3oeA:qyANCnjRxNsoaUmpCtzfWXYn9Y8jS6Ju"),
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
                      $params = array('grant_type' => 'authorization_code',
                                      'code' => $code,
                                      'redirect_uri' => "https://".$school->slug.".oschoolelearning.com/callback?state=".$school->id,
                                      );
                      $url = "https://zoom.us/oauth/token";
                      //Appel de fonction postData()
                      $resultat = postData($params, $url) ;
                      $json = json_decode($resultat, true);


                     Session::put('token', $json['access_token']);

					return view('schools.integrations', ['school' => $school]);




        }//fin function callback


        public function listMeetings(Lesson $lesson, User $user)
        {

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
                         CURLOPT_CUSTOMREQUEST => "GET",
                         CURLOPT_POSTFIELDS => $postfield,
                         CURLOPT_SSL_VERIFYPEER => true,
                         CURLOPT_HTTPHEADER => array(
                         "Authorization: Bearer ". Session::get('token'),
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
                      $params = array('type' => 'scheduled',
                                      'page_size' => 20,
                                      'page_number' => 1,
                                      );
                      $url = "https://api.zoom.us/v2/users/".$user->email."/meetings";
                      //Appel de fonction postData()
                      $resultat = postData($params, $url) ;
                      $json = json_decode($resultat, true);

                      return view('admin_views.meetings.index', ['school' => $lesson->section->course->school,
                                                       'json' => $json['meetings'],
                                                    ]);




        }




}
