<?php

namespace App\Http\Controllers;

use App\Information;
use App\Course;
use App\School;
use Auth;
use Mail;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school)
    {
      return view('admin_views.informations.index', ['school' => $school]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school)
    {
      return view('admin_views.informations.create', ['school' => $school]);

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
        $information = Information::create($request->all());
        $author = Auth::user();
        if(is_array($request->courses_id))
        {
            foreach($request->courses_id as $course_id)
            if ($course_id !== 'all')
            {
                $course_found = Course::find($course_id);
                $information->courses()->attach($course_found);
            }
            //si on veut envoyer à toute l'école
            else {
                $school = School::find($request->school_id);
                foreach($school->courses as $course){
                    if (count($course->users) > 0) {
                        $information->courses()->attach($course);
                    }
                }
            }//fin else

            //envoi mail aux étudiants ciblés
            foreach ($information->courses as $course) {
                foreach ($course->users as $user) {
                    Mail::send('mails.users.informations.invite', ['information' => $information, 'user' => $user, 'author' => $author], function($message) use($user){
                      $message->to($user->email, 'Nouveau message de vos formateurs')->subject('Nouveau message de vos formateurs');
                      $message->from('eventsoschool@gmail.com', 'Oschool');
                    });
                }
            }

        }//fin grand if



        return back()->with('status', 'Nouvelle information ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school, Information $information)
    {
        //
        return view('admin_views.informations.edit', ['school' => $school, 'information'=>$information]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
      //
      $information->update($request->all());
      if(is_array($request->courses_id))
      {
        foreach($request->courses_id as $course_id)
        {
            $course_found = Course::find($course_id);
            // $coupon->courses()->attach($course_found);
            //si le cours est deja lié a l'info on ne fait rien
            if ($information->courses->contains($course_found->id)) {
                continue;
            }
            //sinoàn on les lie
            else {
                $information->courses()->attach($course_found);
            }

        }
      }

      return back()->with('status', 'Nouvelle information ajoutée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
        $information->delete();
        return back()->with('status', 'Notification supprimée avec succès');
    }
}
