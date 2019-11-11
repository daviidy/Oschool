<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Project;
use App\School;
use App\Course;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeliverableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param School $school
     * @param Project $project
     * @param Course $course
     * @return Response
     */
    public function index(School $school, Project $project, Course $course )
    {
        $deliverables = DB::table('deliverables')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin_views.deliverables.index', ['school' => $school,'deliverables' => $deliverables,  'project' => $project, 'course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
         //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $deliverable = Deliverable::create($request->all());
        $deliverable->save();
        return back()->with('success', 'Votre projet a été envoyer');
    }

    /**
     * Display the specified resource.
     *
     * @param Deliverable $deliverable
     * @return void
     */
    public function show(Deliverable $deliverable)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param School $school
     * @param Course $course
     * @param Project $project
     * @param Deliverable $deliverable
     * @return Response
     */
    public function edit( School $school ,Course $course,Project $project, Deliverable $deliverable )
    {
        return view('admin_views.deliverables.comment', ['school' => $school, 'course' => $course,'deliverable' => $deliverable,  'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Deliverable $deliverable
     * @return Response
     */
    public function update(Request $request, Deliverable $deliverable)
    {
        $deliverable->update($request->all());
        $deliverable->save();
        return back()->with('status', 'Commentaire ajouté');
    }


    public function resubmitDeliverable(Request $request)
    {
        $deliverable = Deliverable::where('project_id', $request->project_id)->where('user_id', Auth::user()->id)->first();
        $deliverable->status = null;
        $deliverable->save();
        return back()->with('success', 'Vos travaux ont bien ete resoumis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Deliverable $deliverable
     * @return Response
     * @throws \Exception
     */
    public function destroy(Deliverable $deliverable)
    {
        $deliverable->delete();
        return back()->with('status', 'Delivrable supprimé');
    }
}
