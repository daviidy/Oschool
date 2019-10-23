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
          <h3 align="center">Total des résultats : <span id="total_records">629</span></h3>
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
                                <th>Email</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
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




@endsection
