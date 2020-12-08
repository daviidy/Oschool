<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\School;
use App\Course;
use App\Section;
use App\Quiz;
use App\Question;
use App\Purchase;
use App\Option;
use Carbon\Carbon;
use Image;
use Auth;
use Exception;
use Illuminate\Support\Facades\Session;
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
        if (Auth::check()) {

            $course = Course::where('slug', $slugCourse)->firstOrFail();
            $school = School::find($course->school_id);
            $lesson = Lesson::where('slug', $slug)->where('course_id', $course->id)->firstOrFail();
            $today = Carbon::now();
            $purchase = $lesson->section->course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first();
            $days = Carbon::now();
            $available = '';
            $status = '';

            if ($course->school->token !== null) {
                Session::put('token', $course->school->token);
            }



            //si le lecon n'est pas gratutie
            if ($lesson->free_lesson == 'no') {
                //si la section de la lecon en question
                //a été planifiée pour un nombre de jours après l'inscription
                //de l'étudiant

                if ($lesson->section->drip && $lesson->section->drip->days !== null) {

                    //on va déterminer la date de disponibilité prévue
                    $day_availability = Carbon::parse($purchase->date)->addDays((int)$lesson->section->drip->days);

                    //ensuite on va vérifier si la date prévue est aujourd'hui
                    //ou parmi les jours précédents
                    if ($day_availability == $today || $day_availability < $today) {
                        //si oui on définit une variable available = 1
                        //et on définit une variable days à 0
                        $available = '1';
                        $status = '1';
                    }
                    else {
                        //sinon, on définit une variable available = 0
                        //on calcule les jours restants et on met le
                        //résultat dans la variable days
                        $available = '0';
                        $days = $day_availability->diffInDays($today);
                        $status = '0';
                    }
                }


                //si la section de la lecon en question
                //a été planifiée pour une date spécifique
                if ($lesson->section->drip && $lesson->section->drip->date !== null) {

                    //on va déterminer la date de disponibilité prévue
                    $day_availability = Carbon::parse($lesson->section->drip->date);

                    //ensuite on va vérifier si la date prévue est aujourd'hui
                    //ou parmi les jours précédents
                    if ($day_availability == $today || $day_availability < $today) {
                        //si oui on définit une variable available = 1
                        //et on définit une variable days à 0
                        $available = '1';
                        $days = '0';
                        $status = '1';
                    }
                    else {
                        //sinon, on définit une variable available = 0
                        //on calcule les jours restants et on met le
                        //résultat dans la variable days
                        $available = '0';
                        $days = $lesson->section->drip->date;
                        $status = '0';
                    }
                }

            }

            //on cherche la prochaine lesson dans la meme section
            $next_lesson = Lesson::where('course_id', $lesson->course_id)
            ->where('section_id', $lesson->section_id)
            ->where('status', 'active')
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
                //c'est a dire qu'il n'ya pas plus de section suivantes
                if ($next_section === null) {
                    $next_lesson = $lesson;
                }

                else {
                    $next_lesson = Lesson::where('course_id', $lesson->course_id)
                    ->where('section_id', $next_section->id)
                    ->where('status', 'active')
                    ->orderBy('position', 'asc')
                    ->first();
                }


            }

            $previous_lesson = Lesson::where('course_id', $lesson->course_id)
            ->where('section_id', $lesson->section_id)
            ->where('status', 'active')
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
                    ->where('status', 'active')
                    ->orderBy('position', 'desc')
                    ->first();
                }


            }

            //si, malgré tout ça next ou previous sont null

            if ($next_lesson === null) {
                $next_lesson = $lesson;
            }

            if ($previous_lesson === null) {
                $previous_lesson = $lesson;
            }

            /*
            if ($lesson->webinar_meeting !== null) {
                function postData($params, $url){
                     try {
                     $curl = curl_init();
                     $postfield = '';
                     foreach ($params as $index => $value) {
                     $postfield .= $index . '=' . $value . "&";
                     }
                     $postfield = substr($postfield, 0, -1);
                     curl_setopt_array($curl, array(
                     CURLOPT_URL => $url,
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_ENCODING => "",
                     CURLOPT_MAXREDIRS => 10,
                     CURLOPT_TIMEOUT => 45,
                     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                     CURLOPT_CUSTOMREQUEST => "GET",
                     CURLOPT_POSTFIELDS => $postfield,
                     CURLOPT_SSL_VERIFYPEER => true,
                     CURLOPT_HTTPHEADER => array(
                     "Authorization: Bearer ". Session::get('token'),
                     ),
                     ));
                     $response = curl_exec($curl);
                     $err = curl_error($curl);
                     curl_close($curl);
                     if ($err) {
                     throw new Exception("cURL Error #:" . $err);
                     return $err;
                     } else {
                     return $response;
                     }
                     } catch (Exception $e) {
                     throw new Exception($e);
                     }
                    }
                  $params = array('occurrence_id' => '',
                                  );
                  $url = "https://api.zoom.us/v2/meetings/".$lesson->webinar_meeting;
                  //Appel de fonction postData()
                  $resultat = postData($params, $url) ;
                  $json = json_decode($resultat, true);

                  //si le token est expiré
                  //on fait un refresh token

                  if (array_key_exists("message", $json)) {

                      function refreshToken($params, $url){
                           try {
                           $curl = curl_init();
                           $postfield = '';
                           foreach ($params as $index => $value) {
                           $postfield .= $index . '=' . $value . "&";
                           }
                           $postfield = substr($postfield, 0, -1);
                           curl_setopt_array($curl, array(
                           CURLOPT_URL => $url,
                           CURLOPT_RETURNTRANSFER => true,
                           CURLOPT_ENCODING => "",
                           CURLOPT_MAXREDIRS => 10,
                           CURLOPT_TIMEOUT => 45,
                           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                           CURLOPT_CUSTOMREQUEST => "POST",
                           CURLOPT_POSTFIELDS => $postfield,
                           CURLOPT_SSL_VERIFYPEER => true,
                           CURLOPT_HTTPHEADER => array(
                           "Authorization: Basic ". base64_encode("IMCA3UZyQISOyBdKQR3oeA:qyANCnjRxNsoaUmpCtzfWXYn9Y8jS6Ju"),
                           ),
                           ));
                           $response = curl_exec($curl);
                           $err = curl_error($curl);
                           curl_close($curl);
                           if ($err) {
                           throw new Exception("cURL Error #:" . $err);
                           return $err;
                           } else {
                           return $response;
                           }
                           } catch (Exception $e) {
                           throw new Exception($e);
                           }
                          }
                        $params = array('grant_type' => 'refresh_token',
                                        'refresh_token' => Session::get('token'),
                                        );
                        $url = "https://zoom.us/oauth/token";
                        //Appel de fonction postData()
                        $resultat = refreshToken($params, $url) ;
                        $new_json = json_decode($resultat, true);

                        $course->school->token = $new_json['access_token'];
                        $course->school->save();

                        Session::put('token', $course->school->token);

                        //on récupère le nouveau token et on fait
                        //l'api call zoom pour obtenir les
                        //infos du meeting associé


                        function postData($params, $url){
                             try {
                             $curl = curl_init();
                             $postfield = '';
                             foreach ($params as $index => $value) {
                             $postfield .= $index . '=' . $value . "&";
                             }
                             $postfield = substr($postfield, 0, -1);
                             curl_setopt_array($curl, array(
                             CURLOPT_URL => $url,
                             CURLOPT_RETURNTRANSFER => true,
                             CURLOPT_ENCODING => "",
                             CURLOPT_MAXREDIRS => 10,
                             CURLOPT_TIMEOUT => 45,
                             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                             CURLOPT_CUSTOMREQUEST => "GET",
                             CURLOPT_POSTFIELDS => $postfield,
                             CURLOPT_SSL_VERIFYPEER => true,
                             CURLOPT_HTTPHEADER => array(
                             "Authorization: Bearer ". Session::get('token'),
                             ),
                             ));
                             $response = curl_exec($curl);
                             $err = curl_error($curl);
                             curl_close($curl);
                             if ($err) {
                             throw new Exception("cURL Error #:" . $err);
                             return $err;
                             } else {
                             return $response;
                             }
                             } catch (Exception $e) {
                             throw new Exception($e);
                             }
                            }
                          $params = array('occurrence_id' => '',
                                          );
                          $url = "https://api.zoom.us/v2/meetings/".$lesson->webinar_meeting;
                          //Appel de fonction postData()
                          $resultat = postData($params, $url) ;
                          $json = json_decode($resultat, true);


                          return view('lessons.show', ['lesson' => $lesson,
                                                       'next_lesson' => $next_lesson,
                                                       'previous_lesson' => $previous_lesson,
                                                       'days' => $days,
                                                       'available' => $available,
                                                       'status' => $status,
                                                       'json' => $json,
                                                   ]);

                  }

                  return view('lessons.show', ['lesson' => $lesson,
                                               'next_lesson' => $next_lesson,
                                               'previous_lesson' => $previous_lesson,
                                               'days' => $days,
                                               'available' => $available,
                                               'status' => $status,
                                               'json' => $json,
                                           ]);
            }
            */


            return view('lessons.show', ['lesson' => $lesson,
                                         'next_lesson' => $next_lesson,
                                         'previous_lesson' => $previous_lesson,
                                         'days' => $days,
                                         'available' => $available,
                                         'status' => $status,
                                         'school' => $school
                                     ]);

        }

        else {
            return redirect()->back()->with('status', 'Connectez-vous pour accéder à cette leçon');
        }


    }


    public function addConference(Request $request){
        $lesson = Lesson::find($request->lesson_id);
        $lesson->webinar_meeting = $request->webinar_meeting;
        $lesson->save();
        $lesson->course->school->token = null;
        $lesson->course->school->save();
        Session::put('token', 'null');
        return redirect()->back()->with('status', 'La conférence a bien été créée');
    }

    public function deleteConference(Lesson $lesson){
        if ($lesson->webinar_meeting !== null) {
            $lesson->webinar_meeting = null;
            $lesson->save();
            $lesson->course->school->token = null;
            $lesson->course->school->save();
            Session::put('token', 'null');
            return redirect()->back()->with('status', 'La conférence a bien été supprimée');
        }
        else {
            return redirect()->back()->with('status', 'Aucune conférence n\'a encore été créée pour cette école');
        }


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
            if ($school->token !== null) {
                Session::put('token', $school->token);
            }

            if ($lesson->webinar_meeting !== null && $lesson->course->school->token !== null) {
                function postData($params, $url){
                     try {
                     $curl = curl_init();
                     $postfield = '';
                     foreach ($params as $index => $value) {
                     $postfield .= $index . '=' . $value . "&";
                     }
                     $postfield = substr($postfield, 0, -1);
                     curl_setopt_array($curl, array(
                     CURLOPT_URL => $url,
                     CURLOPT_RETURNTRANSFER => true,
                     CURLOPT_ENCODING => "",
                     CURLOPT_MAXREDIRS => 10,
                     CURLOPT_TIMEOUT => 45,
                     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                     CURLOPT_CUSTOMREQUEST => "GET",
                     CURLOPT_POSTFIELDS => $postfield,
                     CURLOPT_SSL_VERIFYPEER => true,
                     CURLOPT_HTTPHEADER => array(
                     "Authorization: Bearer ". Session::get('token'),
                     ),
                     ));
                     $response = curl_exec($curl);
                     $err = curl_error($curl);
                     curl_close($curl);
                     if ($err) {
                     throw new Exception("cURL Error #:" . $err);
                     return $err;
                     } else {
                     return $response;
                     }
                     } catch (Exception $e) {
                     throw new Exception($e);
                     }
                    }
                  $params = array('occurrence_id' => '',
                                  );
                  $url = "https://api.zoom.us/v2/meetings/".$lesson->webinar_meeting;
                  //Appel de fonction postData()
                  $resultat = postData($params, $url) ;
                  $json = json_decode($resultat, true);

                  //si le token est expiré
                  //on fait un refresh token

                  if (array_key_exists("message", $json)) {

                      function refreshToken($params, $url){
                           try {
                           $curl = curl_init();
                           $postfield = '';
                           foreach ($params as $index => $value) {
                           $postfield .= $index . '=' . $value . "&";
                           }
                           $postfield = substr($postfield, 0, -1);
                           curl_setopt_array($curl, array(
                           CURLOPT_URL => $url,
                           CURLOPT_RETURNTRANSFER => true,
                           CURLOPT_ENCODING => "",
                           CURLOPT_MAXREDIRS => 10,
                           CURLOPT_TIMEOUT => 45,
                           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                           CURLOPT_CUSTOMREQUEST => "POST",
                           CURLOPT_POSTFIELDS => $postfield,
                           CURLOPT_SSL_VERIFYPEER => true,
                           CURLOPT_HTTPHEADER => array(
                           "Authorization: Basic ". base64_encode("IMCA3UZyQISOyBdKQR3oeA:qyANCnjRxNsoaUmpCtzfWXYn9Y8jS6Ju"),
                           ),
                           ));
                           $response = curl_exec($curl);
                           $err = curl_error($curl);
                           curl_close($curl);
                           if ($err) {
                           throw new Exception("cURL Error #:" . $err);
                           return $err;
                           } else {
                           return $response;
                           }
                           } catch (Exception $e) {
                           throw new Exception($e);
                           }
                          }
                        $params = array('grant_type' => 'refresh_token',
                                        'refresh_token' => Session::get('token'),
                                        );
                        $url = "https://zoom.us/oauth/token";
                        //Appel de fonction postData()
                        $resultat = refreshToken($params, $url) ;
                        $new_json = json_decode($resultat, true);

                        //au cas où le token est invalide
                        if (array_key_exists("message", $new_json) || array_key_exists("error", $new_json)) {
                            return redirect('/schoolAdmin/'.$school->id.'/integrations')->with('status', 'Relancez une fois de plus l\'autorisation ZOOM');
                        }
                        else {
                            $school->token = $new_json['access_token'];
                            $school->save();

                            Session::put('token', $school->token);
                        }

                        //on récupère le nouveau token et on fait
                        //l'api call zoom pour obtenir les
                        //infos du meeting associé


                        function postData($params, $url){
                             try {
                             $curl = curl_init();
                             $postfield = '';
                             foreach ($params as $index => $value) {
                             $postfield .= $index . '=' . $value . "&";
                             }
                             $postfield = substr($postfield, 0, -1);
                             curl_setopt_array($curl, array(
                             CURLOPT_URL => $url,
                             CURLOPT_RETURNTRANSFER => true,
                             CURLOPT_ENCODING => "",
                             CURLOPT_MAXREDIRS => 10,
                             CURLOPT_TIMEOUT => 45,
                             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                             CURLOPT_CUSTOMREQUEST => "GET",
                             CURLOPT_POSTFIELDS => $postfield,
                             CURLOPT_SSL_VERIFYPEER => true,
                             CURLOPT_HTTPHEADER => array(
                             "Authorization: Bearer ". Session::get('token'),
                             ),
                             ));
                             $response = curl_exec($curl);
                             $err = curl_error($curl);
                             curl_close($curl);
                             if ($err) {
                             throw new Exception("cURL Error #:" . $err);
                             return $err;
                             } else {
                             return $response;
                             }
                             } catch (Exception $e) {
                             throw new Exception($e);
                             }
                            }
                          $params = array('occurrence_id' => '',
                                          );
                          $url = "https://api.zoom.us/v2/meetings/".$lesson->webinar_meeting;
                          //Appel de fonction postData()
                          $resultat = postData($params, $url) ;
                          $json = json_decode($resultat, true);


                          return view('admin_views.lessons.edit', ['school' => $school,
                                                                 'course' => $course,
                                                                 'section' => $section,
                                                                 'lesson' => $lesson,
                                                                 'json' => $json,
                                                             ]);
                  }
                  return view('admin_views.lessons.edit', ['school' => $school,
                                                           'course' => $course,
                                                           'section' => $section,
                                                           'lesson' => $lesson,
                                                           'json' => $json,
                                                       ]);
            }
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
        /*
          $slug = new SlugLesson();
          $data->slug = $slug->createSlug($request->title);
          */
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


    //update lesson title
    public function updateTitle(Request $request, Lesson $lesson)
    {
        $data = Lesson::find($request->lesson_id);
         $slug = new SlugLesson();
         $data->title = $request->title;
         $data->slug = $slug->createSlug($request->title);
         $data->save();


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

        $quiz->attempts = $request->attempts;
        $quiz->save();


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
                                  'quiz_id' => $quiz->id,
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

      $quiz->attempts = $request->attempts;
      $quiz->save();

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
        if (!Auth::user()->lessons->contains($lesson->id)) {
            Auth::user()->lessons()->attach($lesson);
        }


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
