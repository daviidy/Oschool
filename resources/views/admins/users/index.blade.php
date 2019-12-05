@extends('layouts.menu-dashboard-admin')
@section('title', 'Liste des utilisateurs')
@section('page_h2', 'Liste des utilisateurs')
@section('content')





            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->



<div class="row">

    <section style="width: 100%;" _ngcontent-c18="">
          <div _ngcontent-c18="">
              <div _ngcontent-c18="" class="col-sm-12 adjust-search">
                <input id="search" _ngcontent-c18="" placeholder="Chercher des utilisateurs" type="text" class="ng-pristine ng-valid ng-touched">
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td> <a href="{{url('users', $user)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>

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


<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"/ajax_user_search_admin",
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
