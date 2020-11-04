<?php

namespace App\Http\Controllers;

use App\Project;
use App\Course;
use App\School;
use App\Task;
use App\Resource;
use Auth;
use Image;
use App\Services\SlugProject;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
     public function create(School $school, Course $course)
     {
         if (Auth::check()) {
             return view('admin_views.projects.create', ['school' => $school, 'course' => $course]);
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
        $project = Project::create($request->all());
        $slug = new SlugProject();
        $project->slug = $slug->createSlug($request->title);
        $project->save();

        $resource = Resource::create([
                            'position' => Resource::where('path_id', $request->path_id)->max('position') + 1,
                            'project_id' => $project->id,
                            'path_id' => $request->path_id,
                            'type' => $request->type
                        ]);

        return redirect('/schoolAdmin/'.$request->school_id.'/paths/'.$request->path_id.'/curriculum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

    }

    public function showProject($slugCourse, $slug)
    {
        $course = Course::where('slug', $slugCourse)->firstOrFail();
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('admin_views.projects.show', ['course' => $course, 'project' => $project]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
     public function edit(School $school, Course $course, Project $project)
     {
         if (Auth::check()) {
             return view('admin_views.projects.edit', ['school' => $school, 'course' => $course, 'project' => $project]);
         }
         else {
             return redirect('home');
         }
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $data = Project::find($request->project_id);
        $data->update($request->all());

        /*
          $slug = new SlugProject();
          $data->slug = $slug->createSlug($request->title);
          */
          $data->save();


        if ($request->hasFile('image') ) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('/images/projects/images/' . $filename));
          $data->image = $filename;
          $data->save();

        }

        return response()->json($data);
    }

    //update project title
    public function updateTitle(Request $request, Project $project)
    {
        $data = Project::find($request->project_id);
         $slug = new SlugProject();
         $data->title = $request->title;
         $data->slug = $slug->createSlug($request->title);
         $data->save();


        return response()->json($data);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('status', 'Projet bien supprimé');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addTask(Request $request)
    {



        $tasks = json_decode($request->task);
        foreach ($tasks as $option_input) {
            $task = Task::create([
                                  'heading' => $option_input->task,
                                  'project_id' => $request->project_id,
                                  'position' => Task::where('project_id', $request->project_id)->max('position') + 1,
              ]);
        }

        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editTask(Request $request)
    {


        //on retrouve la tache
        $task = Task::find($request->task_id);
        $task->heading = $request->task;
        $task->save();

        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }



    public function saveNewTaskPositions(Request $request)
    {
            foreach ($request->positions as $position) {
                $index = $position[0];
                $newPosition = $position[1];

                $data = Task::find($index);
                if ($data !== null) {
                    $data->position = $newPosition;
                    $data->save();
                }

            }


        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }



    public function saveNewResourcePositions(Request $request)
    {
            foreach ($request->positions as $position) {
                $index = $position[0];
                $newPosition = $position[1];

                $data = Resource::find($index);
                if ($data !== null) {
                    $data->position = $newPosition;
                    $data->save();
                }

            }


        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }



    public function saveNewProjectPositions(Request $request)
    {
            foreach ($request->positions as $position) {
                $index = $position[0];
                $newPosition = $position[1];

                $data = Project::find($index);
                if ($data !== null) {
                    $data->position = $newPosition;
                    $data->save();
                }

            }


        return response()->json();
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
    }










}
