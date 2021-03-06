@extends('layouts.menu-dashboard-admin')
@section('title', 'Liste des cours')
@section('page_h2', 'Liste des cours')
@section('content')




            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            @if(session('status'))

                <div class="card-body">

                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>

                </div>

            @endif


            <div class="row">

                <section style="width: 100%;" _ngcontent-c18="">
                      <div _ngcontent-c18="">
                          <div _ngcontent-c18="" class="col-sm-12 adjust-search">
                            <input id="search" _ngcontent-c18="" placeholder="Chercher des cours" type="text" class="ng-pristine ng-valid ng-touched">
                          </div>
                      </div>
                      <h3 align="center">Total des résultats : <span id="total_records"></span></h3>
                  </section>

            </div>



<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Basic Table</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Auteur</th>
                                <th>Statut</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>
                                    <a target="_blank" href="/schoolAdmin/{{$course->school->id}}/courses/{{$course->id}}/information">
                                        {{$course->name}}
                                    </a>
                                </td>
                                <td>
                                    @if($course->author)
                                    {{$course->author->full_name}}
                                    @else
                                    Aucun auteur
                                    @endif
                                </td>
                                <td>{{$course->state}}</td>
                                <td>{{$course->type}}</td>
                                <td>
                                    <form action="{{ route('courses.destroy', $course) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button style="background:#dc4f2f;"
                                            class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"/ajax_course_search_admin",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
    },
    error: function (xhr, msg) {
      console.log(msg + '\n' + xhr.responseText);
  }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>




@endsection
