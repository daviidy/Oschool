<?php

namespace App\Http\Controllers;

use App\Section;
use App\Course;
use App\School;
use Auth;
use Illuminate\Http\Request;

class SectionController extends Controller
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
    public function create(School $school, Course $course)
    {
        if (Auth::check()) {
            return view('admin_views.sections.create', ['school' => $school, 'course' => $course]);
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
        $section = Section::create($request->all()
    + ['position' => Section::where('course_id', $request->course_id)->max('position') + 1]);
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum')->with('status', 'Nouvelle section programmée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
     public function edit(School $school, Course $course, Section $section)
     {
         if (Auth::check()) {
             return view('admin_views.sections.edit', ['school' => $school, 'course' => $course, 'section' => $section]);
         }
         else {
             return redirect('home');
         }
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $section->update($request->all());

        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum')->with('status', 'Le titre de la section a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect('/schoolAdmin/'.$section->course->school_id.'/courses/'.$section->course_id.'/curriculum')->with('status', 'Section supprimée');
    }
}
