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
    public function index(School $school, Project $project, Course $course )
    {
        $deliverables = DB::table('deliverables')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin_views.deliverables.index', ['school' => $school,'deliverables' => $deliverables,  'project' => $project, 'course' => $course]);
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
    public function edit( School $school ,Course $course,Project $project, Deliverable $deliverable )
    {
        return view('admin_views.deliverables.comment', ['school' => $school, 'course' => $course,'deliverable' => $deliverable,  'project' => $project]);
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
        $deliverable->delete();
        return back()->with('status', 'Delivrable supprimé');
    }
}
