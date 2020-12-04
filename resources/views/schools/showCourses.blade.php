@extends('layouts.menu-school')
@section('title', 'Tous les cours')
@section('content')

<div class="container mt-3">
  <div class="mt-5 pt-5" id="btnActive">
    <ul class="border-0 list-group list-group-horizontal-md nav-tabs justify-content-between align-items-center">
      @if(count($school->courses->where('type', 'mooc')->where('state', 'active')) > 0)
      <li class="border-0 list-group-item nav-item ">
        <a class="pb-3 px-0 border-0 nav-link h3 font-weight-bold active1 active" href="#noscours">
          @if($school->section2)
          {{$school->section2}}
          @else
          Nos cours
          @endif
        </a>
      </li>
      @endif
      <li class="border-0 list-group-item nav-item">
        <a class="pb-3 px-0 border-0 nav-link h3 font-weight-bold" href="#nosparcours">Nos parcours</a>
      </li>
      <li class="border-0 list-group-item">
        <input class="form-control" id="courseSearch" type="text" placeholder="Search..">
      </li>
    </ul>
  </div>
  <!-- Tab panes -->
  <div class="tab-content" id="content-cards">
    <!-- Courses -->
    @if(count($school->courses->where('type', 'mooc')->where('state', 'active')) > 0)
    <div id="noscours" class="container tab-pane active"><br>
      <div class="row p-5">
        @foreach($school->courses->where('type', 'mooc')->where('state', 'active') as $course)
        @if($course->state == 'active')
      <div class="col-md-3 py-3 filter">
        <div class="p-0 shadow course-border">
          <a href="{{ route('course.slug', $course->slug) }}" class="text-decoration-none">
            <div class=" p-2">
              <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('/images/courses/logos/{{$course->logo}}')">
                <!--img src="/images/courses/logos/{{$course->logo}}" alt=""
                  class="img-fluid w-100"-->
                <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->
                @auth
                @if(Auth::user()->courses->contains($course->id))
                <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">0%</span>
                @endif
                @endauth

              </div>
            </div>
            <div class="">
              <h5 class="p-4 font-weight-bold h6">{{$course->name}}</h5>
            </div>
          </a>
        </div>
      </div>
      @endif
      @endforeach

      </div>
    </div>
    @endif
    <!-- Paths -->
    @if(count($school->courses->where('type', 'path')->where('state', 'active')) > 0)
    <div id="nosparcours" class="container tab-pane fade"><br>
      <div class="row p-5">
        @foreach($school->courses->where('type', 'path')->where('state', 'active') as $course)
        @if($course->state == 'active')
      <div class="col-md-3 py-3 filter">
        <div class="p-0 shadow course-border">
          <a href="/path/{{$course->slug}}" class="text-decoration-none">
            <div class=" p-2">
              <div class="p-2 bg-img-course bg-course-img course-border-img" style="background-image: url('/images/courses/logos/{{$course->logo}}')">
                  <!--img src="/images/courses/logos/{{$course->logo}}" alt=""
                  class="img-fluid w-100"-->
                <!-- <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">25000 Fcfa</span> -->
                @auth
                @if(Auth::user()->courses->contains($course->id))
                <span class="p-2 rounded-lg bg-dark border border-white text-white position-relative price-position">0%</span>
                @endif
                @endauth

              </div>
            </div>
            <div class="">
              <h5 class="p-4 font-weight-bold h6">{{$course->name}}</h5>
            </div>
          </a>
        </div>
      </div>
      @endif
      @endforeach


      </div>
    </div>
    @endif
  </div>
</div>
<script>
    $(document).ready(function(){
      $('#btnActive ul li a').click(function(){
        $('.nav-item a').removeClass("active1");
        $(this).addClass("active1");
    });
    });

</script>

<script>
  $(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    });
  });
</script>
<script>

    $(document).ready(function(){
      $("#courseSearch").keyup(function() {

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(),
          count = 0;

        // Loop through the comment list
        $('#content-cards .filter').each(function() {


          // If the list item does not contain the text phrase fade it out
          if ($(this).text().search(new RegExp(filter, "i")) < 0) {
            $(this).hide();

            // Show the list item if the phrase matches and increase the count by 1
          } else {
            $(this).show();
            count++;
          }

        });

      });

    });
</script>

@endsection
