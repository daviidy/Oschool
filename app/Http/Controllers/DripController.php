<?php

namespace App\Http\Controllers;

use App\Drip;
use App\School;
use App\Course;
use App\Section;
use Illuminate\Http\Request;

class DripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school, Course $course)
    {
        return view('admin_views.drips.index', ['course' => $course, 'school' => $school]);
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
        $drip = Drip::create($request->all());
        $drip->state = 1;
        $drip->save();
        $section = Section::find($request->section_id);

        $drip->section()->associate($section)->save();
        return back()->with('status', 'Nouvelle planification ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Drip  $drip
     * @return \Illuminate\Http\Response
     */
    public function show(Drip $drip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drip  $drip
     * @return \Illuminate\Http\Response
     */
    public function edit(Drip $drip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drip  $drip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drip $drip)
    {
        $drip->update($request->all());

        return back()->with('status', 'La planification a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drip  $drip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drip $drip)
    {
        $drip->delete();
        return back()->with('status', 'Planification supprimée avec succès');
    }
}
