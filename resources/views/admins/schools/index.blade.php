@extends('layouts.menu-dashboard-admin')
@section('title', 'Liste des écoles')
@section('page_h2', 'Liste des écoles')
@section('content')




            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">

                <section style="width: 100%;" _ngcontent-c18="">
                      <div _ngcontent-c18="">
                          <div _ngcontent-c18="" class="col-sm-12 adjust-search">
                            <input id="search" _ngcontent-c18="" placeholder="Chercher des écoles" type="text" class="ng-pristine ng-valid ng-touched">
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
                                <th>Propriétaire</th>
                                <th>Statut</th>
                                <th>Nombre de cours</th>
                                <th>Nombre de parcours</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schools as $school)
                            <tr>
                                <td>
                                    <a target="_blank" href="/schoolAdmin/{{$school->id}}/settings/general">
                                        {{$school->name}}
                                    </a>
                                </td>
                                <td>{{$school->user->name}}</td>
                                <td>{{$school->state}}</td>
                                <td>{{count($school->courses->where('type', 'course'))}}</td>
                                <td>{{count($school->courses->where('type', 'path'))}}</td>
                                <td>
                                    <form action="{{ route('schools.destroy', $school) }}" method="post">
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
   url:"/ajax_school_search_admin",
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
