@extends('layouts.menu-dashboard-admin')
@section('title', 'Modifier une offre')
@section('page_h2', 'Modifier une offre')
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

                <form method="post" enctype="multipart/form-data" action="{{url('offers', $offer)}}">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}
                    <div class="form-group">
                        <label for="input-select">Modifier le nom de l'offre</label>
                        <input value="{{$offer->name}}" name="name" class="form-control" id="input-select">
                    </div>
                    <div class="form-group">
                        <label for="input-select">Modifier le prix de l'offre</label>
                        <input value="{{$offer->price}}" name="price" class="form-control" id="input-select">
                    </div>
                    <button class="btn btn-rounded btn-info" type="submit" name="button">
                        Modifier
                    </button>
                </form>

            </div>
        </div>



    </div>

</div>

@endsection
