<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\Category;
use App\Pricing;
use App\Certificate;
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
        if (Auth::check()) {
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
        return view('courses.show', ['course' => $course]);
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

        if ($course->type == 'course') {
            return view('courses.show', ['course' => $course]);
        }
        elseif ($course->type == 'path') {
            return view('paths.show', ['course' => $course]);
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

        return view('courses.curriculum', ['course' => $course]);
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
        $course->delete();
        return redirect('/schoolAdmin/'.$course->school_id.'/courses')->with('status', 'Cours supprimé');
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
         if (Auth::check()) {
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
         if (Auth::check()) {
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
         if (Auth::check()) {
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
         if (Auth::check()) {
             if ($course->type == "course") {
                 return view('admin_views.courses.curriculum', ['school' => $school, 'course' => $course]);
             }
             elseif ($course->type == "path") {
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
         if (Auth::check()) {
         return view('admin_views.courses.pricing', ['school' => $school, 'course' => $course]);
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
                     ];

                     /*
                     $html = View::make('pdf.certificate', $data);
                     $pdf = PDF::loadHTML($html);
                     return $pdf->stream();
                      */
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

                     ];

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








}
