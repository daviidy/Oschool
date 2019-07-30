<?php

namespace App\Http\Controllers;

use App\School;
use Auth;
use App\User;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isOwner()) {

          return view('admin_views.schools.create');
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
        $school=School::create([

                          'name' => $request['name'],
                          'user_id' => $request['user_id']

                        ]);

       return redirect()->back()->with('status', 'L\'école a bien été créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     * the view is returned to default user
     */
    public function show(School $school)
    {
        //
    }


    /**
     * [showForAdmin description]
     * @param  School $school [description]
     * @return \Illuminate\Http\Response
     * [function to show school dashboard to admin]
     */
    public function showForAdmin(School $school)
    {
        return view('admin_views.schools.show', ['school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return view('admin_views.schools.edit', ['school' => $school]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolPayments(School $school)
    {
        return view('admin_views.schools.payments', ['school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolStudents(School $school)
    {
        return view('admin_views.schools.students', ['school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolOwners(School $school)
    {
        return view('admin_views.schools.owners', ['school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolTeachers(School $school)
    {
        return view('admin_views.schools.teachers', ['school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolTransactions(School $school)
    {
        return view('admin_views.schools.transactions', ['school' => $school]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function schoolStatements(School $school)
    {
        return view('admin_views.schools.statements', ['school' => $school]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        $school->update($request->all());
        return redirect()->back()->with('status', 'Les modifications ont bien été enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
