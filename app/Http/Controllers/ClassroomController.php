<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\School;
use App\User;
use App\Course;
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
         if(is_array($request->users))
         {
             foreach($request->users as $user_id)
             {
                 //on vérifie s'il s'agit d'un cours
                 $course = Course::where('name', $user_id)->first();
                 //si c'est pas un cours, c'est un user
                 //on retrouve le user et on
                 //l'associe a la classroom
                 if ($course === null) {
                     $user = User::where('name', $user_id)->first();
                     $classroom->users()->attach($user);
                 }
                 //si c'est un cours, on recupere tous les users
                 //de ce cours et on les associe a la classroom
                 else {
                     foreach ($course->users as $user) {
                         $classroom->users()->attach($user);
                     }
                 }

             }
         }

         return back()->with('status', 'Nouvelle session programmée');
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
        return redirect('/schoolAdmin/'.$classroom->school->id.'/classrooms')->with('status', 'Session modifié avec seccès');
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
