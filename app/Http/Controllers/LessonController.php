<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\School;
use App\Course;
use App\Section;
use Image;
use Auth;
use Illuminate\Http\Request;

class LessonController extends Controller
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
    public function create(School $school, Course $course, Section $section)
    {
        if (Auth::check()) {
            return view('admin_views.lessons.create', ['school' => $school, 'course' => $course, 'section' => $section]);
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
        $data = Lesson::create($request->all()
            + ['position' => Lesson::where('course_id', $request->course_id)->where('section_id', $request->section_id)->max('position') + 1,
               'slug' => $request->title,
               'free_lesson' => 'no'
          ]);
          $images = [];
        if ($request->hasFile('downloadable_files')) {
          foreach ($request->file('downloadable_files') as $file) {
            $filename = $file->getClientOriginalName();
            $file->move(public_path().'/images/lessons/resources/', $filename);
            array_push($images, $filename);
          }



        }
        $data->downloadable_files = json_encode($images);
        $data->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/images/lessons/images/' . $filename));
          $data->image = $filename;
          $data->save();

        }

        return response()->json($data);
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
