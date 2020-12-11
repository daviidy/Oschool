@extends('layouts.menu-path-curriculum')
@section('image', '/images/courses/logos/'.$course->logo)
@section('title', $course->name)
@section('description', $course->subtitle)

@section('content')

@include('includes.branding')
<style media="screen">
.delete-blue-box{
    display: none;
}

.rm-mg {
    margin-top: 4rem !important;
}
</style>
  <main class="container text-white">
      @include('includes.status')
    <div class="row">
      <!--main content-->
      <div class="col-md-12 main-content">
        <div class="row mt-3">
          <div class="col-12 text-center mt-3">
            <h1>{{$course->name}}</h1>
          </div>
        </div>

        <div class="row mt-3 text-center">
          <div class="col-12">
            <p>{{$course->subtitle}}</h1>
          </div>

        </div>
        @if(!Auth::user()->isAdmin() && !Auth::user()->isOwner())
        <div class="row mt-3 mb-5 text-center">
            <div class="col-12">
              <span class="">
                {{floor(($number_resources_validated / count($course->resources)) * 100)}}% achevés
              </span>
              <div class="progress blue-oschool mt-3" style="height:10px">
                <div class="progress-bar bg-oschool" style="width:{{floor(($number_resources_validated / count($course->resources)) * 100)}}%;height:10px"></div>
              </div>
            </div>
        </div>

        <div class="row mt-3 mb-5 text-center">
          <div class="col-12 text-center">
            <a href="#" class="p-2 bg-oschool text-white rounded ">
              Certificat
            </a>
          </div>
        </div>
        @endif

        <div class="path-map">
          @if(count($course->resources) > 0)
          @foreach($course->resources->sortBy('position') as $resource)
          <div class="row mt-5 rounded-top mr-auto ml-auto">
            <div class="col-12 resource-image text-center" style="background-image: url({{$resource->type == 'course' ? '/images/courses/logos/'.$resource->link->logo : '/images/projects/images/'.$resource->project->image}});">
              <a target="_blank" href="{{$resource->type == 'course' ? '/course/enrolled/'.$resource->link->slug : '/path/'.$course->slug.'/projects/'.$resource->project->slug}}">
                  <h2 class="text-dark bg-white pr-3 pl-3 path-title w-50 ml-auto mr-auto" style="font-size:2vw;">
                    {{$resource->type == 'course' ? $resource->link->name : $resource->project->title}}
                    @if(!Auth::user()->isAdmin() && !Auth::user()->isOwner())
                        @if($resource->type == 'course')
                            @if(count(Auth::user()->lessons->where('course_id', $resource->link->id)) > 0 && (count(Auth::user()->lessons->where('course_id', $resource->link->id)) / count($resource->link->lessons->where('status', 'active'))) == 1)
                            <i class="fas fa-check-circle green ml-3"></i>
                            @endif
                        @elseif($resource->type == 'project')
                            @if(count(Auth::user()->deliverables->where('project_id', $resource->project->id)->where('status', '1')) > 0)
                            <i class="fas fa-check-circle green ml-3"></i>
                            @endif
                        @endif
                    @endif
                  </h2>
              </a>
            </div>
            <div class="col-12 bg-white text-center p-3 rounded-bottom">
             @if($resource->type == 'course')
              <a target="_blank" href="/course/enrolled/{{$resource->link->slug}}" class="p-2 bg-oschool text-white rounded">
                Accéder au cours
              </a>
             @endif
             @if($resource->type == 'project')
              <a target="_blank" href="/path/{{$course->slug}}/projects/{{$resource->project->slug}}" class="p-2 bg-oschool text-white rounded">
                Accéder au projet
              </a>
             @endif
            </div>
          </div>
          @endforeach
          @endif
        </div>

      </div>
      <!--end main content-->
      <div id="overlay"></div>
    </div>
  </main>

@endsection
