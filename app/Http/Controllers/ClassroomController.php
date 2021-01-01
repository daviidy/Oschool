<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\School;
use App\User;
use App\Course;
use Mail;
use Auth;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(School $school)
     {
         return view('admin_views.classrooms.index', ['school' => $school]);

     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */

     public function create(School $school)
     {
         return view('admin_views.classrooms.create', ['school' => $school]);
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
         $classroom = Classroom::create($request->all());

                 //on vérifie s'il s'agit d'un cours
                 $course = Course::where('name', $request->courses)->first();
                 //si c'est pas un cours, c'est un user
                 //on retrouve le user et on
                 //l'associe a la classroom
                 if ($course === null) {
                     return redirect()->back()->with('status', 'Aucun cours trouvé pour cette session');
                 }
                 //si c'est un cours, on recupere tous les users
                 //de ce cours et on les associe a la classroom
                 else {
                     $classroom->courses()->attach($course);
                     foreach ($course->users as $user) {
                         Mail::send('mails.users.sessions.invite', ['classroom' => $classroom, 'user' => $user], function($message) use($user){
                           $message->to($user->email, 'Planification d\'une session de formation')->subject('Planification d\'une session de formation');
                           $message->from('eventsoschool@gmail.com', 'Oschool');
                         });
                     }
                 }


         return back()->with('status', 'Nouvelle session programmée');
     }


     public function subscribeToClassroom(Classroom $classroom)
     {
         if (Auth::check()) {
             $user = Auth::user();
             $classroom->users()->attach($user);
             Mail::send('mails.users.sessions.planning', ['classroom' => $classroom, 'user' => $user], function($message) use($user){
               $message->to($user->email, 'Confirmation de votre participation à une session de formation')->subject('Confirmation de votre participation à une session de formation');
               $message->from('eventsoschool@gmail.com', 'Oschool');
             });
             return back()->with('status', 'Votre participation a bien été enregistrée');
         }
         else {
             return redirect('home');
         }

     }


    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school, Classroom $classroom)
    {
        //
         return view('admin_views.classrooms.edit', ['school' => $school, 'classroom'=>$classroom]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
        $classroom->update($request->all());

        $classroom->save();
        return redirect('/schoolAdmin/'.$classroom->school->id.'/classrooms')->with('status', 'Session modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
        $classroom->delete();
        return back()->with('status', 'Session supprimée avec succès');
    }
}
