<?php

namespace App\Http\Controllers;

use App\Community;
use App\School;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school)
    {
        return view('admin_views.communities.index', ['school' => $school]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school)
    {
        return view('admin_views.communities.create', ['school' => $school]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Community::create($request->all());
        return redirect('/schoolAdmin/'.$request->school_id.'/communities')->with('status', 'Votre communauté a été créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function show(Community $community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school, Community $community)
    {
        return view('admin_views.communities.edit', ['school' => $school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Community $community)
    {
        $community->update($request->all());
        return redirect('/schoolAdmin/'.$community->school_id.'/communities')->with('status', 'Votre communauté a été modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(Community $community)
    {
        $community->delete();
        return redirect('/schoolAdmin/'.$community->school_id.'/communities')->with('status', 'Votre communauté a été supprimée avec succès');
    }
}
