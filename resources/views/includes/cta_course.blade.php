<div class="col-12">
    @auth
    @if(Auth::user()->courses->contains($course->id))
    <div class="pointer p-2 bg-oschool text-white rounded text-center w-100">
      <a class="text-decoration-none login" href="/course/enrolled/{{$course->slug}}">
              Continuez la formation
      </a>
    </div>
    @else
    <div class="pointer p-2 bg-oschool text-white rounded text-center w-100" data-toggle="modal" data-target="#courseOffer">
      <a class="text-decoration-none login">
          Accédez à la formation
      </a>
    </div>
    @endif
    @endauth
    @guest
    <div class="pointer p-2 bg-oschool text-white rounded text-center w-100" data-toggle="modal" data-target="#courseOffer">
      <a class="text-decoration-none login">
          Accédez à la formation
      </a>
    </div>
    @endguest
</div>
