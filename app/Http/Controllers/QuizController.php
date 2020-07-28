<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Lesson;
use App\School;
use App\Course;
use App\Section;
use App\Question;
use App\Option;
use App\Answer;
use App\Result;
use App\User;
use Image;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $options = [];
        $quiz = Quiz::where('id', $request->quiz)->first();

        //on crée un résultat si le user n'en a pas déjà un par rapport à ce quiz
        if (count(Auth::user()->results->where('quiz_id', $quiz->id)) > 0) {
            $result = Auth::user()->results->where('quiz_id', $quiz->id)->first();
        }
        else {

            $result = Result::create([
                                  'quiz_id' => $request->quiz,
                                  'user_id' => Auth::user()->id,
              ]);
        }


      //pour chaque option, on crée une réponse du
      //user
      $options_tab = json_decode($request->options);
        foreach ($options_tab as $selected_option) {
                $option = Option::where('text', $selected_option)->first();
                $answer = Answer::create([
                                      'option_id' => $option->id,
                                      'result_id' => $result->id,
                                      'question_id' => $option->question_id,
                                      'correct' => $option->correct,
                                      'user_id' => Auth::user()->id,
                  ]);
        }

        foreach ($quiz->questions as $question) {
            foreach ($question->options as $option) {
                array_push($options, $option);
            }
        }
        //resultat est nombre de vrai trouvés sur total de vrais, le tout * 100
        $percentage = Answer::where('result_id', $result->id)->where('user_id', Auth::user()->id)->where('correct', 1)->count() / Option::where('quiz_id', $quiz->id)->where('correct', 1)->count();
        $result->quiz_result = $percentage * 100;

        $result->save();

        return response()->json(['options' => $options, 'result' => $result]);
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }//fin check


    //reprendre les quiz
    public function restartQuiz(Quiz $quiz, Result $result, User $user)
    {
        //on supprime toutes les reponses de l'utilisateur
        if (Auth::check()) {
            //si user a moins de 3 tentatives
            if ($user->results->where('quiz_id', $quiz->id)->first()->restart < 3) {
                foreach ($result->answers->where('user_id', $user->id) as $answer) {
                    $answer->delete();
                }
                $result->restart += 1;
                return redirect()->back()->with('status', 'Vous pouvez reprendre le quiz. Ii vous reste 2 tentatives');
            }
            //si user est un des propriétaires de l'école
            elseif (Auth::user()->isOwner() && Auth::user()->createSchools->contains($quiz->course->school->id)) {
                foreach ($result->answers->where('user_id', $user->id) as $answer) {
                    $answer->delete();
                }
                $result->restart += 1;
                return redirect()->back()->with('status', 'L\'étudiant pourra reprendre son quiz');
            }

        }
        else {
            return redirect('home');
        }

    }



}
