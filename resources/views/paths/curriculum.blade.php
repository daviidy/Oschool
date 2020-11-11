@extends('layouts.menu-path-curriculum')
@section('content')
<style media="screen">
.delete-blue-box{
    display: none;
}

.rm-mg {
    margin-top: 4rem !important;
}
</style>
  <main class="container text-white">
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

        <div class="progression row mt-5 mb-5">
          <div class="col-6">
            <span class="">
              75% completed, meet the criteria and claim your course certificate!
            </span>
            <div class="progress blue-oschool mt-3" style="height:10px">
              <div class="progress-bar bg-oschool" style="width:40%;height:10px"></div>
            </div>
          </div>
          <div class="col-6 text-center text-md-right">
            <a href="#" class="p-2 bg-oschool text-white rounded ">
              Certificat
            </a>
          </div>
        </div>

        <div class="path-map">
          @if(count($course->resources) > 0)
          @foreach($course->resources->sortBy('position') as $resource)
          <div class="row mt-5 rounded-top">
            <div class="col-12 resource-image text-center" style="background-image: url({{$resource->type == 'course' ? '/images/courses/logos/'.$resource->link->logo : '/images/projects/images/'.$resource->project->image}});">
              <a target="_blank" href="{{$resource->type == 'course' ? '/course/enrolled/'.$resource->link->slug : '/'.$course->slug.'/projects/'.$resource->project->slug}}">
                  <h2 class="text-dark bg-white pr-3 pl-3 path-title w-50 ml-auto mr-auto">
                    {{$resource->type == 'course' ? $resource->link->name : $resource->project->title}}
                    <i class="fas fa-check-circle green ml-3"></i>
                  </h2>
              </a>
            </div>
            <div class="col-12 bg-white text-center p-3 rounded-bottom">
             @if($resource->type == 'course')
              <a href="#" class="p-2 bg-oschool text-white rounded">
                Accéder au cours
              </a>
             @endif
             @if($resource->type == 'project')
              <a href="#" class="p-2 bg-oschool text-white rounded">
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
