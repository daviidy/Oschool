<?php

namespace App\Http\Controllers;

use App\Resource;
use App\Project;
use App\Course;
use App\School;
use Auth;
use Illuminate\Http\Request;

class ResourceController extends Controller
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
    public function create(School $school, Course $course, Project $project)
    {
        if (Auth::check()) {
            return view('admin_views.resources.create', ['school' => $school, 'course' => $course, 'project' => $project]);
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
        $resource = Resource::create($request->all()
    + ['position' => Resource::where('project_id', $request->project_id)->max('position') + 1]);

        return redirect('/schoolAdmin/'.$request->school_id.'/paths/'.$request->course_id.'/curriculum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
     public function edit(School $school, Course $course, Project $project, Resource $resource)
     {
         if (Auth::check()) {
             return view('admin_views.resources.edit', ['school' => $school, 'course' => $course, 'project' => $project, 'resource' => $resource]);
         }
         else {
             return redirect('home');
         }
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        $resource->update($request->all());

        return redirect('/schoolAdmin/'.$request->school_id.'/paths/'.$request->course_id.'/curriculum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->back()->with('status', 'Ressource bien supprimée');
    }
}
