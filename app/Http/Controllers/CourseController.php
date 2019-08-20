<?php

namespace App\Http\Controllers;

use App\Course;
use App\School;
use App\Category;
use Illuminate\Http\Request;

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
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
         return view('admin_views.courses.information', ['school' => $school, 'course' => $course]);
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
