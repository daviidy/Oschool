@extends('layouts.menu-dashboard-admin')
@section('title', 'Ajouter une offre')
@section('page_h2', 'Ajouter une offre')
@section('content')




            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->


@if(!empty($status))

    <div class="card-body">

        <div class="alert alert-success" role="alert">
            {{$status}}
        </div>

    </div>

@endif



<div class="row">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">
            <div class="card-body">

                <form method="post" enctype="multipart/form-data" action="{{route('offers.store')}}">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-select">Ajouter une offre</label>
                        <input placeholder="Nom de l'offre" name="name" class="form-control" id="input-select">
                    </div>
                    <div class="form-group">
                        <label for="input-select">Ajouter un prix à l'offre</label>
                        <input placeholder="Prix de l'offre" name="price" class="form-control" type="number" id="input-select">
                    </div>
                    <button class="btn btn-rounded btn-info" type="submit" name="button">
                        Ajouter
                    </button>
                </form>

            </div>
        </div>



    </div>

</div>

@endsection
