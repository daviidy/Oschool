<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\Category;
use App\Pricing;
use Illuminate\Http\Request;
use Image;

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
        $categories = Category::orderby('id', 'asc')->paginate(100);
        return view('admin_views.courses.create', ['school' => $school, 'categories' => $categories]);
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
        //
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
        $formation->delete();
        return redirect('home')->with('status', 'Cours supprimé définitivement de la base de données' );
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
         return view('admin_views.courses.index', ['school' => $school]);
     }

     /**
      * [information description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function information(School $school, Course $course)
     {
         $categories = Category::orderby('id', 'asc')->paginate(100);
         return view('admin_views.courses.information', ['school' => $school,
                                                        'course' => $course,
                                                        'categories' => $categories
                                                    ]);
     }

     /**
      * [pages description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function pages(School $school, Course $course)
     {
         return view('admin_views.courses.pages', ['school' => $school, 'course' => $course]);
     }

     /**
      * [curriculum description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function curriculum(School $school, Course $course)
     {
         return view('admin_views.courses.curriculum', ['school' => $school, 'course' => $course]);
     }

     /**
      * [pricing description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function pricing(School $school, Course $course)
     {
         return view('admin_views.courses.pricing', ['school' => $school, 'course' => $course]);
     }

     /**
      * [certificates description]
      * @param  School $school [description]
      * @param  Course $course [description]
      * @return [type]         [description]
      */
     public function certificates(School $school, Course $course)
     {
         return view('admin_views.courses.certificates', ['school' => $school, 'course' => $course]);
     }








}
