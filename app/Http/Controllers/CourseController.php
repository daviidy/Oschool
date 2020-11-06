<?php

namespace App\Http\Controllers;

use App\Course;
use App\CsvFile;

use App\Faq;
use App\School;
use App\Category;
use App\Pricing;
use App\Certificate;
use App\Project;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Auth;
use Image;
use PDF;
use App\Services\SlugCourse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_views.courses.create');
    }

    /**
     * [createAdmin description]
     * @param  School $school [description]
     * @return [type]         [description]
     */
    public function createAdmin(School $school)
    {
        if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
        $categories = Category::orderby('id', 'asc')->paginate(100);
        return view('admin_views.courses.create', ['school' => $school, 'categories' => $categories]);
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
        $course = Course::where('name', $request->name)->first();
        if ($course === null) {
            $course = Course::create($request->all());

          $slug = new SlugCourse();
          $course->slug = $slug->createSlug($request->name);
          $course->save();
            /*
            $category_id = Category::find($request->category_id);
            $course->categories()->attach($category_id);
            */
            return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$course->id.'/curriculum');
        }
        else {
            return redirect()->back()->with('status', 'Le nom existe déjà');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        if ($school->user->isAdmin()) {
            return view('courses.show', ['course' => $course]);
        }
        else {
            return view('courses.showBusiness', ['course' => $course]);
        }
    }


    /**
     * Display the specified resource, this time with slug.
     *
     * @param  \App\Course  $formation
     * @return \Illuminate\Http\Response
     */
    public function showSlug($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $school = School::find($course->school_id);
            //si le proprio de l'école
            //est admin
            if ($course->school->user->isAdmin()) {
                //si le cours est un mooc
                if ($course->type == 'mooc') {
                        return view('courses.show', ['course' => $course]);
                    }
                //sinon si le cours path
                else{

                    return view('paths.show', ['course' => $course]);
                }
            }
            //sinon (proprio owner)
            else {
                if ($course->type == 'mooc') {
                    return view('courses.showCourseOut', ['course' => $course, 'school' => $school]);
                }
                elseif ($course->type == 'path' || $course->type == 'bootcamp') {
                    return view('paths.show', ['course' => $course]);
                }
            }
    }



    /**
     * Display the specified resource, this time with slug.
     *
     * @param  \App\Course  $formation
     * @return \Illuminate\Http\Response
     */
    public function showCurriculum($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        //si utilisateur est ni admin ni owner
        if (Auth::check() && !Auth::user()->isAdmin() && !Auth::user()->isOwner()) {

            if ($course->type == 'mooc') {
                if (Auth::user()->courses->contains($course->id)) {
                    //take first lesson not ended and redirect user to this lesson
                    foreach ($course->lessons->sortBy('position') as $lesson) {
                        if (!Auth::user()->lessons->contains($lesson->id)) {
                            return redirect('/course/'.$course->slug.'/lessons/'.$lesson->slug)->with('status', 'Content de vous revoir');
                        }
                    }
                }
                else {
                    return view('courses.show', ['course' => $course]);
                }
            }
            else {
                if (Auth::user()->courses->contains($course->id)) {
                    return view('paths.curriculum', ['course' => $course]);
                }
                else {
                    return view('paths.show', ['course' => $course]);
                }
            }
        }
        //sinon
        elseif (!Auth::check()) {
            return redirect()->back()->with('status', 'Connectez-vous d\'abord');
        } else {
            if ($course->type == 'mooc') {
                $lesson = $course->lessons->first();
                return redirect('/course/'.$course->slug.'/lessons/'.$lesson->slug);
            }
            else {
                return view('paths.curriculum', ['course' => $course]);
            }
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }




    public function updateCourseDescription(Request $request)
    {
        //$result = json_decode($request->getContent());

        $data = Course::find($request->id);

        $data->description = $request->description;

        $data->save();

        return response()->json($data);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());

        if($request->hasFile('logo')){
          $image = $request->file('logo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/courses/logos/' . $filename));
          $course->logo = $filename;
          $course->save();
        }
        return redirect()->back()->with('status', 'Les modifications ont bien été enregistrées');

    }

    public function updateCourseState(Request $req)
    {
        $data = Course::find($req->id);
        $data->state = $req->state;
        $data->save();
        return response()->json($data);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $school = School::find($course->school_id);
        $course->delete();
        //return redirect('/schoolAdmin/'.$course->school_id.'/courses')->with('status', 'Cours supprimé');
        //return redirect()->back()->with('status', 'Cours supprimé');
        return redirect('/schoolAdmin/'.$school->id)->with('status', 'Cours supprimé');
    }



    /*
    ****************************************
    ******FOR ADMIN********************
     */

     /**
      * [indexForAdmin description]
      * @param  School $school [description]
      * @return [type]         [description]
      */
     public function indexForAdmin(School $school)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
         return view('admin_views.courses.index', ['school' => $school]);
        }
        else {
            return redirect('home');
        }
     }

     /**
      * [information description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function information(School $school, Course $course)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
         $categories = Category::orderby('id', 'asc')->paginate(100);
         return view('admin_views.courses.information', ['school' => $school,
                                                         'course' => $course,
                                                         'categories' => $categories
                                                     ]);
        }
        else {
            return redirect('home');
        }
     }

     /**
      * [pages description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function pages(School $school, Course $course)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
         return view('admin_views.courses.pages', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
     }

     /**
      * [curriculum description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function curriculum(School $school, Course $course)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
             if ($course->type == "mooc") {
                 return view('admin_views.courses.curriculum', ['school' => $school, 'course' => $course]);
             }
             elseif ($course->type == "path" || $course->type == "bootcamp") {
                 return view('admin_views.paths.curriculum', ['school' => $school, 'course' => $course]);
             }

        }
        else {
            return redirect('home');
        }
     }


     /**
      * [pricing description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function pricing(School $school, Course $course)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
         return view('admin_views.courses.pricing', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
     }

     //show students of the course
     public function students(School $school, Course $course)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
         return view('admin_views.courses.students', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
     }

     //show students of the course
     public function unsubscribe(Request $request)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
             $user = User::find($request->user_id);
             $course = Course::find($request->course_id);
             $school = School::find($course->school_id);
             $user->courses()->detach($course);
             $user->schools()->detach($school);
         return redirect()->back()->with('status', 'Utilisateur désinscrit avec succès');
        }
        else {
            return redirect('home');
        }
     }

     /**
      * [certificates description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function certificate(Course $course)
     {
         if (Auth::check() && Auth::user()->courses->contains($course->id)) {
         return view('admin_views.courses.certificates', ['course' => $course]);
        }
        else {
            return redirect('home');
        }
     }

     //administrer le certificat d'un cours
     public function certificateAdmin(School $school, Course $course)
     {
         if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {
         return view('admin_views.courses.certificate_admin', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
     }

     public function addResult(Request $request)
     {
         $course = Course::find($request->course_id);
         $course->result = $request->result;
         $course->save();
         return redirect()->back()->with('status', 'La note de passage a bien été ajoutée');

     }



     /**
      * [certificates description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function getCertificate(Course $course)
     {
         if (Auth::check() && Auth::user()->courses->contains($course->id)) {
             if (count(Auth::user()->lessons->where('course_id', $course->id)) == count($course->lessons)) {

                 //si user a un certificat pour ce cours
                 $certificate = Certificate::where('course_id', $course->id)->where('user_id', Auth::user()->id)->first();
                 if ($certificate !== null) {
                     $data = [
                         'username' => Auth::user()->name,
                         'course_name' => $course->name,
                         'certificate_number' => $certificate->number,
                         'date' => $certificate->date,
                         'school_name' => $course->school->name,
                         'course_logo' => $course->logo,
                     ];

                     /*
                     $html = View::make('pdf.certificate', $data);
                     $pdf = PDF::loadHTML($html);
                     return $pdf->stream();
                      */
                     PDF::setOptions(['dpi' => 150, 'defaultFont' => 'helvetica']);
                     $pdf = PDF::loadView('pdf.certificate', $data);
                     $pdf->setPaper('A4', 'landscape');
                     return $pdf->download('certificat_'.$course->name.'_oschool.pdf');

                 }
                 //sinon
                 //
                 else {
                     $certificate = Certificate::create([
                         'user_id' => Auth::user()->id,
                         'course_id' => $course->id,
                         'date' => Carbon::now(),
                         'number' => date("YmdHis"),
                     ]);

                     $data = [
                         'username' => Auth::user()->name,
                         'course_name' => $course->name,
                         'certificate_number' => $certificate->number,
                         'date' => $certificate->date,
                         'school_name' => $course->school->name,
                         'course_logo' => $course->logo,

                     ];

                     PDF::setOptions(['dpi' => 150, 'defaultFont' => 'helvetica']);
                     $pdf = PDF::loadView('pdf.certificate', $data);
                     return $pdf->download('certificat_'.$course->name.'_oschool.pdf');
                 }




             }

             else {
                 return redirect()->back();
             }

        }
        else {
            return redirect()->back();
        }
     }



     /*
     for subdomin schools
      */
      //apercu ecole en mode visiteur
      public function showCourseOut($course_id, Request $request)
      {
          $subdomain = $request->route('domain') ?? $request->route('subdomain');
          $course = Course::find($course_id);
          if (Auth::check() && Auth::user()->createSchools->contains($school->id)) {

              return view('schools.showBusinessOut', ['school' => $school]);
          }
      }








}
