<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\School;
use App\Course;
use App\Section;
use App\Quiz;
use App\Question;
use App\Option;
use Image;
use Auth;
use App\Media;
use Illuminate\Http\Request;
use App\Services\SlugLesson;

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
            $lesson = Lesson::create(['position' => Lesson::where('course_id', $course->id)->where('section_id', $section->id)->max('position') + 1,
                                       'free_lesson' => 'no',
                                       'title' => 'Nouvelle leçon',
                                       'course_id' => $course->id,
                                       'section_id' => $section->id
                                   ]);
           $slug = new SlugLesson();
           $lesson->slug = $slug->createSlug('Nouvelle leçon');
           $lesson->save();
            //return view('admin_views.lessons.edit', ['school' => $school, 'course' => $course, 'section' => $section, 'lesson' => $lesson]);
            return redirect('/schoolAdmin/'.$school->id.'/courses/'.$course->id.'/curriculum/'.$section->id.'/lessons/'.$lesson->id.'/edit');
        }
        else {
            return redirect('home');
        }
    }

    //cette fonction ne sert plus a grande chose car tout se gère dans le create()
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

        }else
        {
            $image = $request->file('image');
            $filename = 'image.jpg';
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
     * Display the specified resource, this time with slug.
     *
     * @param  \App\Course  $formation
     * @return \Illuminate\Http\Response
     */
    public function showSlug($slugCourse, $slug)
    {
        $lesson = Lesson::where('slug', $slug)->firstOrFail();

        $next_lesson = Lesson::where('course_id', $lesson->course_id)
        ->where('section_id', $lesson->section_id)
        ->where('position', '>', $lesson->position)
        ->orderBy('position', 'asc')
        ->first();

        //si on atteint le max de lecons dans la section
        if ($next_lesson === null) {
            //on recupere la prochaine section
            $next_section = Section::where('course_id', $lesson->course_id)
            ->where('position', '>', $lesson->section->position)
            ->orderBy('position', 'asc')
            ->first();

            //dans le cas ou c'est la dernière lesson
            if ($next_section === null) {
                $next_lesson = $lesson;
            }

            else {
                $next_lesson = Lesson::where('course_id', $lesson->course_id)
                ->where('section_id', $next_section->id)
                ->orderBy('position', 'asc')
                ->first();
            }


        }

        $previous_lesson = Lesson::where('course_id', $lesson->course_id)
        ->where('section_id', $lesson->section_id)
        ->where('position', '<', $lesson->position)
        ->orderBy('position', 'desc')
        ->first();

        //si on atteint le max de lecons dans la section
        if ($previous_lesson === null) {
            //on recupere la section précédente
            $previous_section = Section::where('course_id', $lesson->course_id)
            ->where('position', '<', $lesson->section->position)
            ->orderBy('position', 'desc')
            ->first();

            //dans le cas ou c'est la premiere lesson
            if ($previous_section === null) {
                $previous_lesson = $lesson;
            }

            else {
                $previous_lesson = Lesson::where('course_id', $lesson->course_id)
                ->where('section_id', $previous_section->id)
                ->orderBy('position', 'desc')
                ->first();
            }


        }

        return view('lessons.show', ['lesson' => $lesson,
                                     'next_lesson' => $next_lesson,
                                     'previous_lesson' => $previous_lesson
                                 ]);
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
        $data->update($request->all());

          $slug = new SlugLesson();
          $data->slug = $slug->createSlug($request->title);
          $data->save();

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





    public function saveNewQuestionPositions(Request $request)
    {
            foreach ($request->positions as $position) {
                $index = $position[0];
                $newPosition = $position[1];

                $data = Question::find($index);
                if ($data !== null) {
                    $data->position = $newPosition;
                    $data->save();
                }

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
        $lesson->delete();
        return redirect('/schoolAdmin/'.$lesson->course->school_id.'/courses/'.$lesson->course_id.'/curriculum')->with('status', 'Leçon supprimée');
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addQuiz(Request $request)
    {
        $quiz = Quiz::where('lesson_id', $request->lesson_id)->where('course_id', $request->course_id)->first();
        if ($quiz === null) {
        $quiz = Quiz::create([
                              'course_id' => $request->course_id,
                              'lesson_id' => $request->lesson_id,
          ]);
        }


      $question = Question::create([
                            'quiz_id' => $quiz->id,
                            'text' => $request->question,
                            'position' => Question::where('quiz_id', $quiz->id)->max('position') + 1,
        ]);


        $options = json_decode($request->option);
        foreach ($options as $option_input) {
            $option = Option::create([
                                  'question_id' => $question->id,
                                  'text' => $option_input->option,
                                  'correct' => $option_input->correct,
              ]);
        }

        return response()->json($question);
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editQuiz(Request $request)
    {
        $quiz = Quiz::where('id', $request->quiz_id)->where('lesson_id', $request->lesson_id)->where('course_id', $request->course_id)->first();
        if ($quiz === null) {
        $quiz = Quiz::create([
                              'course_id' => $request->course_id,
                              'lesson_id' => $request->lesson_id,
          ]);
      }

        $question = Question::find($request->question_id);
        $question->text = $request->question;
        $question->save();



        $options = json_decode($request->option);
        foreach ($options as $option_input) {
            if ($option_input->id == "") {
                $option = Option::create([
                                      'question_id' => $question->id,
                                      'text' => $option_input->option,
                                      'correct' => $option_input->correct,
                  ]);

            }
            else {

                $option = Option::find($option_input->id);
                $option->text = $option_input->option;
                $option->correct = $option_input->correct;
                $option->save();

            }

        }

        return response()->json($question);
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }


    public function completeLesson(Request $request)
    {
        $lesson = Lesson::find($request['id']);
        Auth::user()->lessons()->attach($lesson);

        $next_lesson = Lesson::where('course_id', $lesson->course_id)
        ->where('section_id', $lesson->section_id)
        ->where('position', '>', $lesson->position)
        ->orderBy('position', 'asc')
        ->first();

        //si on atteint le max de lecons dans la section
        if ($next_lesson === null) {
            //on recupere la prochaine section
            $next_section = Section::where('course_id', $lesson->course_id)
            ->where('position', '>', $lesson->section->position)
            ->orderBy('position', 'asc')
            ->first();

            //dans le cas ou c'est la dernière lesson
            if ($next_section === null) {
                $next_lesson = $lesson;
            }

            else {
                $next_lesson = Lesson::where('course_id', $lesson->course_id)
                ->where('section_id', $next_section->id)
                ->orderBy('position', 'asc')
                ->first();
            }
        }


        return redirect('/course/'.$lesson->course->slug.'/lessons/'.$next_lesson->slug);
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteOption(Request $request)
    {

        $option = Option::find($request->id);
        $option->delete();


        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }



}
