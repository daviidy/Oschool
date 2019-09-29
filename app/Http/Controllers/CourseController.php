<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\Category;
use App\Pricing;
use Illuminate\Http\Request;
use Auth;
use Image;
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
            $course = Course::create($request->all()
            + [
               'slug' => $request->name,
          ]);

          $slug = new SlugCourse();
          $course->slug = $slug->createSlug($request['name']);
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

        return view('courses.show', ['course' => $course]);
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
         return view('admin_views.courses.curriculum', ['school' => $school, 'course' => $course]);
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
     public function certificates(School $school, Course $course)
     {
         if (Auth::check()) {
         return view('admin_views.courses.certificates', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
     }








}
