<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Project;
use App\User;
use Illuminate\Http\Request;

class DeliverableController extends Controller
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
        // return view('admin_views.projects.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deliverable = Deliverable::create($request->all());
        $deliverable->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function show(Deliverable $deliverable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function edit(Deliverable $deliverable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deliverable $deliverable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deliverable  $deliverable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deliverable $deliverable)
    {
        //
    }
}
