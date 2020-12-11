<?php

namespace App\Http\Controllers;

use App\Deliverable;
use App\Project;
use App\School;
use App\Course;
use App\User;
use App\Task;
use Auth;
use DB;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Media;
use Validator;

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
        $deliverables = Deliverable::where('course_id', $course->id)->orderBy('created_at', 'desc')->paginate(15);
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
        //on cree le livrable
        $deliverable = Deliverable::create($request->all());

        //on valide les fichiers eventuels soumis
        $validation = Validator::make($request->all(), [
              'file.*' => 'file|mimes:jpeg,png,jpg,pdf,mp3,mp4|max:10000'
          ],[
                'file.*.mimes' => 'Only jpeg,png,jpg,pdf,mp3,mp4 files are allowed',
                'file.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
          ]);

          //on associe ces fichiers au livrable crée
          if ($validation->passes()) {
              if ($request->hasFile('input1') ) {
                foreach ($request->file('input1') as $file) {
                  $filename = $file->getClientOriginalName();
                  $media = Media::create([
                      'name' => $filename,
                      'deliverable_id' => $deliverable->id,
                  ]);
                  $file->move(public_path('/deliverablesFiles/'), $filename);
                }
            }
          }
         //on envoie un mail au proprietaire de l'éécole
         Mail::send('mails.users.projects.notification', ['deliverable' => $deliverable], function($message) use($deliverable){
           $message->to($deliverable->course->school->user->email, 'Cher(ère) Partenaire')->subject('Un étudiant a soumis ses travaux pour le projet '.$deliverable->project->title);
           $message->from('eventsoschool@gmail.com', 'Oschool');
         });
        return back()->with('status', 'Votre projet a été envoyé');
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
        //on met à jour le livrable
        $deliverable->update($request->all());

        //on met a jour les taches effectuees par le student
        $user = User::find($request->user_id);
        if ($request->task_id) {
            foreach ($request->task_id as $task_id)
            {

                $task = Task::find($task_id);
                if($user->tasks->contains($task->id)){
                    continue;
                }
                else
                {
                    $user->tasks()->attach($task);
                }
            }
        }
        //send mail to the student
         Mail::send('mails.users.projects.evaluation', ['deliverable' => $deliverable], function($message) use($deliverable){
           $message->to($deliverable->user->email, 'Cher(ère) Etudiant(e)')->subject('Votre travail pour le projet '.$deliverable->project->title.' a été évalué');
           $message->from('eventsoschool@gmail.com', 'Oschool');
         });
        return back()->with('status', 'La modification des travaux a été bien pris en compte');
    }


    public function resubmitDeliverable(Request $request)
    {
        $deliverable = Deliverable::where('project_id', $request->project_id)->where('user_id', Auth::user()->id)->first();
        $deliverable->status = null;
        $deliverable->save();

        $validation = Validator::make($request->all(), [
              'file.*' => 'file|mimes:jpeg,png,jpg,pdf,mp3,mp4|max:10000'
          ],[
                'file.*.mimes' => 'Only jpeg,png,jpg,pdf,mp3,mp4 files are allowed',
                'file.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
          ]);

          if ($validation->passes()) {
              if ($request->hasFile('input2') ) {
                if (count($deliverable->medias) > 0) {
                    foreach ($deliverable->medias as $media) {
                        $media->delete();
                    }
                }
                foreach ($request->file('input2') as $file) {
                  $filename = $file->getClientOriginalName();
                  $media = Media::create([
                      'name' => $filename,
                      'deliverable_id' => $deliverable->id,
                  ]);
                  $file->move(public_path('/deliverablesFiles/'), $filename);
                }
            }
          }

         Mail::send('mails.users.projects.notification', ['deliverable' => $deliverable], function($message) use($deliverable){
           $message->to($deliverable->course->school->user->email, 'Cher(ère) Partenaire')->subject('Un étudiant a soumis ses travaux pour le projet '.$deliverable->project->title);
           $message->from('eventsoschool@gmail.com', 'Oschool');
         });

        return back()->with('success', 'Vos travaux ont bien été renvoyés');
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
        return back()->with('status', 'Livrable supprimé');
    }
}
