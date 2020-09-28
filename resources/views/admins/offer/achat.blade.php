@extends('layouts.menu-dashboard-admin')
@section('title', 'Ajouter un achat')
@section('page_h2', 'Ajouter un achat')
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
                        <label for="input-select">Utilisateurs</label> 
                        <select class="js-example-basic-multiple form-control" name="offer_id[]" multiple="multiple" style="width:100%;">

                            <option value="">Utilisateurs</option>

                        </select>

                    </div>
                    <div class="form-group">
                        <label for="input-select">Offres</label>
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
