<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\School;
use App\Course;
use App\Section;
use Image;
use Auth;
use App\Media;
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
          if ($request->hasFile('downloadable_files') ) {
            foreach ($request->file('downloadable_files') as $file) {
              $filename = $file->getClientOriginalName();
              $media = Media::create([
                  'name' => $filename,
                  'lesson_id' => $data->id,
              ]);
              $file->move(public_path().'/images/lessons/resources/', $filename);
            }
        }


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
    public function edit(School $school, Course $course, Section $section, Lesson $lesson)
    {
        if (Auth::check()) {
            return view('admin_views.lessons.edit', ['school' => $school, 'course' => $course, 'section' => $section, 'lesson' => $lesson]);
        }
        else {
            return redirect('home');
        }
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
        $data = Lesson::find($request->lesson_id);
        $data->update($request->all()
            + [
               'slug' => $request->title,
               'free_lesson' => 'no'
          ]);
          if ($request->hasFile('downloadable_files') ) {
            foreach ($request->file('downloadable_files') as $file) {
              $filename = $file->getClientOriginalName();
              $media = Media::create([
                  'name' => $filename,
                  'lesson_id' => $data->id,
              ]);
              $file->move(public_path().'/images/lessons/resources/', $filename);
            }
        }




        if ($request->hasFile('image') ) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/images/lessons/images/' . $filename));
          $data->image = $filename;
          $data->save();

        }

        return response()->json($data);
    }

    public function saveNewPositions(Request $request)
    {
            foreach ($request->positions as $position) {
                $index = $position[0];
                $newPosition = $position[1];

                $data = Lesson::find($index);
                $data->position = $newPosition;
                $data->save();
            }


        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }


    public function saveNewSectionPositions(Request $request)
    {
            foreach ($request->positions as $position) {
                $index = $position[0];
                $newPosition = $position[1];

                $data = Section::find($index);
                $data->position = $newPosition;
                $data->save();
            }


        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
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
