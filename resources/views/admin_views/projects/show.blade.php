@extends('layouts.menu-project')
@section('image', '/images/projects/images/'.$project->image)
@section('title', $project->title)
@section('description', $project->title)
@section('content')

@include('includes.branding')

<style media="screen">
    .status {
        margin-top: 4rem;
    }
</style>

<style media="screen">
.delete-blue-box{
    display: none;
}

.rm-mg {
    margin: 0 !important;
}

.form-group .btn:first-child {
    background: none !important;
    border: none !important;
}
</style>

  <main class="container">
    <div class="row">

      <!--main content-->
      <div class="col-md-12 main-content">
         @if(session('status'))
         <div class="row">
           <div class="col-md-12">
             <div class="alert alert-success" role="alert">
               {{session('status')}}
             </div>
           </div>
         </div>
         @endif
         @if(count(Auth::user()->deliverables->where('project_id', $project->id)) > 0)
         <div class="row border rounded p-3">
            <div class="col-12 text-center">
                <p class="font-weight-bold mb-2">Vos travaux sont en cours d'évaluation</p>
            </div>
           <div class="col-md-12 mb-3">
             <div class="alert alert-success" role="alert">
               <a href="{{Auth::user()->deliverables->where('project_id', $project->id)->first()->link}}">
                  Lien du projet
               </a>
             </div>
           </div>
           <div class="col-12">
               <div class="row">
                   @if(count(Auth::user()->deliverables->where('project_id', $project->id)->first()->medias) > 0)
                   @foreach(Auth::user()->deliverables->where('project_id', $project->id)->first()->medias as $media)
                    <div class="col-md-3 col-12">
                        <img class="img-fluid rounded border" src="/deliverablesFiles/{{$media->name}}" alt="{{$media->name}}">
                    </div>
                    @endforeach
                   @endif
               </div>
           </div>
         </div>
         @endif

        <div class="lecture-actions row mt-5">
          <div class="col-6">
            <a href="{{$course->type == 'mooc' ? '/course/enrolled/'.$course->slug : '/path/enrolled/'.$course->slug}}" class="border p-2 font-weight-bold rounded">
              <i class="fas fa-arrow-left mr-4"></i>
              Retour
            </a>
            <div class="previous">
              <span>Curriculum</span>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <h1>{{$project->title}}</h1>
          </div>
        </div>
        <div class="row mt-3">
            @if(count($course->school->communities) > 0)
            <div class="col-12 mt-4">
              <a href="{{$course->school->communities->first()->link}}" target="_blank" class="p-2 bg-oschool text-white rounded">
                Communauté
              </a>
            </div>
            @endif
        </div>
        <!--Ressource téléchargeable-->
        @if(count(Auth::user()->deliverables->where('project_id', $project->id)) > 0)
        @if(count(Auth::user()->deliverables->where('project_id', $project->id)->first()->medias) > 0)
        <div class="row mt-3 p-3">
          <div class=" col-md-12">
            <!--Contenu Ressource téléchargeable-->
            @foreach(Auth::user()->deliverables->where('project_id', $project->id)->first()->medias as $media)
            <div class="row bg-dark rounded mt-3">
              <div class="col-md-2 d-md-block d-none">
                <div class="p-1 p-md-3">
                  <img src="/assets/images/resource_icon.png" alt="" class="mx-auto w-75 img-fluid">
                </div>
              </div>
              <div class="col-md-7 flex-grow p-md-3">
                <div class="p-1 p-md-3">
                  <p class="text-white font-bold m-3">{{$media->name}}</p>
                </div>
              </div>
              <div class="col-md-3 ">
                <div class="p-1 p-md-3">
                  <a download href="/deliverables/{{$media->name}}" class="btn bg-oschool rounded-pill m-3 text-white">Télécharger</a>
                </div>
              </div>
            </div>
            @endforeach
            <!--End Contenu Ressource téléchargeable-->
          </div>
        </div>
        @endif
        @endif
        @if(count($project->tasks) > 0)
        <div class="row mt-3">
          <div class="col-12 col-md-10 summary">
            <h6 class="pointer bg-light border title-summary mb-0" data-toggle="collapse" data-target="#summaryCollapse">En résumé pour ce projet <i class="fas fa-angle-down ml-3"></i></h6>
            <ul class="bg-light title-summary" id="summaryCollapse">
            @foreach($project->tasks as $task)
              <li class="list-summary">
                <a href="#">{{$task->heading}}</a>
              </li>
             @endforeach
            </ul>
          </div>
        </div>
        @endif

        <div class="lecture-content row mt-5">
          <div class="col-12">
            @if($project->video)
            <p>
              Regardez cette vidéo minutieusement
            </p>
            {!!$project->video!!}
            @endif

            {!!$project->description!!}

          </div>
        </div>

        @if(count(Auth::user()->deliverables->where('project_id', $project->id)) > 0)
        @if(Auth::user()->deliverables->where('project_id', $project->id)->first()->comment)
        <div class="row">
            <div class="col-12 col-md-6 rounded border p-5">
                <h3>Les commentaires sur vos travaux</h3>
                <p class="mt-3">{!!Auth::user()->deliverables->where('project_id', $project->id)->first()->comment!!}</p>
            </div>
        </div>
        @endif
        @endif

        @if(count($project->tasks) > 0)
        <!--section des taches-->
        <div class="row p-4">
          <div class="col-12">
            <p class="h6 text-center p-3 text-uppercase font-weight-bold">{{Auth::user()->tasks->where('project_id', $project->id)->count()}}/{{$project->tasks->count()}} tâches terminées</p>
          </div>
        </div>
        <div class="row p-4">
        @foreach($project->tasks as $task)
          <div class="col-md-4 ">
            <div class="shadow-sm p-0">
              <div class="">
                <img src="https://oschoolelearning.com/images/divers/user.jpg" alt="" class="img-fluid">
              </div>
              <div class="d-flex">
                <span class="p-3">
                  @if(Auth::user()->tasks->contains($task->id))
                  <i class="fas fa-check-circle green"></i>
                  @else
                  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                  @endif
                </span>
                <div class="p-3">
                  <p class="h6">{{$task->heading}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        @endif
        <!--Boutton evoyer des travaux-->
        <div class="row">
          <div class="col-md-12">
             @if(count(Auth::user()->deliverables->where('user_id', Auth::user()->id)->where('project_id', $project->id)) > 0)
             @if(Auth::user()->deliverables->where('project_id', $project->id)->first()->status == null)
            <div class="p-4 text-center">
              <a class="bg-light p-3 rounded-pill text-decoration-none text-white">Votre projet a déjà été envoyé et est en cours de correction</a>
            </div>
            @elseif(Auth::user()->deliverables->where('project_id', $project->id)->first()->status == '0')
            <div class="p-4 text-center">
              <a href="#" class="bg-oschool p-3 rounded-pill text-decoration-none text-white" data-toggle="modal" data-target="#projectResubmit">Renvoyer mes travaux</a>
            </div>
            @endif
            @else
            <div class="p-4 text-center">
              <a href="#" class="bg-oschool p-3 rounded-pill text-decoration-none text-white" data-toggle="modal" data-target="#projectForm">Envoyer mes travaux</a>
            </div>
            @endif
          </div>
        </div>


      <!--end main content-->
      <div id="overlay"></div>
    </div>
  </main>
  <!--POPUP ENVOIE DES PROJETS-->
  <div class="modal fade" id="projectForm" tabindex="-1"  aria-labelledby="projectForm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class=" border-bottom-0 modal-header" style="background-image: url('/assets/images/resource_icon.png')">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

          <div class="modal-body">
            <div class="container">
              <div class="">
                <p class="h5 p-3 text-center">Soumission de projet</p>
              </div>
            </div>
            <form method="POST" action="{{route('deliverables.store')}}" enctype="multipart/form-data">
                @csrf
            <div class="input-group mb-3 p-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https//</span>
              </div>
              <input name="link" type="url" class="form-control" id="url" aria-describedby="basic-addon3" placeholder="Mettez le lien de vos travaux" data-theme="fas">
              <input type="hidden" name="project_id" value="{{$project->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="course_id" value="{{$course->id}}">
            </div>
            <!--PLUGIN evoyer des travaux-->
            <div class="col-md-12 text-left mb-4">
                <h4 class="mb-3">Joindre des fichiers</h4>
                <div class="form-group">
                      <span style="width: 100%;" class="btn btn-default btn-file">
                        <input id="input-1" name="input1[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                      </span>
                </div>
            </div>
            <!--END PLUGIN evoyer des travaux-->
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn bg-oschool text-white">Soumettre mon projet</button>
            </div>
        </form>
          </div>
      </div>
    </div>
  </div>

  <!-- RENVOI DES PROJETS -->
  <div class="modal fade" id="projectResubmit" tabindex="-1"  aria-labelledby="projectForm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class=" border-bottom-0 modal-header" style="background-image: url('/assets/images/resource_icon.png')">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="/resubmitDeliverable" enctype="multipart/form-data">
            @csrf
          <div class="modal-body">
            <div class="container">
              <div class="">

              </div>
              <div class="">
                <p class="h5 p-3 text-center">Renvoyez vos travaux</p>
              </div>
            </div>
            <div class="input-group mb-3 p-2">
              <input value="{{count(Auth::user()->deliverables->where('project_id', $project->id)) > 0 ? Auth::user()->deliverables->where('project_id', $project->id)->first()->link : ''}}" name="link" type="url" class="form-control" id="url" aria-describedby="basic-addon3" placeholder="Mettez le lien de vos travaux" data-theme="fas">
              <input type="hidden" name="project_id" value="{{$project->id}}">
            </div>
            <!--PLUGIN evoyer des travaux-->
            <div class="col-md-12 text-left mb-4">
                <h4 class="mb-3">Joindre des fichiers</h4>
                <div class="form-group">
                      <span style="width: 100%;" class="btn btn-default btn-file">
                        <input id="input-2" name="input2[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                      </span>
                </div>
            </div>
            <!--END PLUGIN evoyer des travaux-->
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn bg-oschool text-white">Re-soumettre mon projet</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection
