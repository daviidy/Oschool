<?php

namespace App\Http\Controllers;

use App\School;
use Auth;
use App\User;
use App\Course;
use App\Author;
use App\Classroom;
use Image;
use Input;
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

       return redirect()->back()->with('status', 'L\'école a bien été créée');
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

       return redirect()->back()->with('status', 'L\'école a bien été créée');
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

         return view('auth.login_subdomain', ['school' => $school]);


     }

     //page de register du sous domaine
     public function showBusinessRegister(Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();

         return view('auth.register_subdomain', ['school' => $school]);


     }


     //subdomain users home
     public function showBusinessHomeUsers(Request $request)
     {
         $subdomain = $request->route('domain') ?? $request->route('subdomain');
         $school = School::where('id', $subdomain)
             ->orWhere('slug', $subdomain)
             ->orWhere('domain', $subdomain)
             ->firstOrFail();

        if (Auth::check()) {
            return view('users.dashboard_subdomain');
        }

        else {
            return view('auth.login_subdomain', ['school' => $school]);
        }


     }


}
