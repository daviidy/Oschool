<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Project;
use App\School;
use App\Course;
use App\User;
use DB;
use Illuminate\Http\Request;

class DeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course, Project $project, School $school )
    {
        $deliverables = DB::table('deliverables')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin_views.deliverables.index', ['deliverables' => $deliverables, 'school' => $school, 'project' => $project, 'course' => $course]);
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
    public function edit(Course $course,Project $project, Deliverable $deliverable, School $school)
    {
        return view('admin_views.deliverables.comment', ['course' => $course,'deliverable' => $deliverable,  'school' => $school, 'project' => $project]);
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
        $deliverable->update($request->all());
        $deliverable->save();
        return back()->with('status', 'Commentaire ajouté');
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
