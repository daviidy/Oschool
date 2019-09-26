<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Lesson;
use App\School;
use App\Course;
use App\Section;
use App\Question;
use App\Option;
use Image;
use Auth;
use Illuminate\Http\Request;

class QuizController extends Controller
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
        //
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
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
     public function edit(School $school, Course $course, Section $section, Lesson $lesson, Quiz $quiz)
     {
         if (Auth::check()) {
             return view('admin_views.quizzes.edit', ['school' => $school, 'course' => $course, 'section' => $section, 'lesson' => $lesson, 'quiz' => $quiz]);
         }
         else {
             return redirect('home');
         }
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect('/schoolAdmin/'.$quiz->course->school_id.'/courses/'.$quiz->course->id.'/curriculum/'.$quiz->lesson->section_id.'/lessons/'.$quiz->lesson->id.'/edit')->with('status', 'Quiz bien supprimé');
    }
}
