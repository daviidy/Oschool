@extends('layouts.menu-dashboard-admin')
@section('title', 'Ajouter une catégorie')
@section('page_h2', 'Ajouter une catégorie')
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

                <form method="post" enctype="multipart/form-data" action="{{route('categories.store')}}">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-select">Ajouter une catégorie</label>
                        <input placeholder="Nom de la catégorie" name="name" class="form-control" id="input-select">
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
