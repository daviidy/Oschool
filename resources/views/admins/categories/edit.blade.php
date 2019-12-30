@extends('layouts.menu-dashboard-admin')
@section('title', 'Modifier une catégorie')
@section('page_h2', 'Modifier une catégorie')
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

                <form method="post" enctype="multipart/form-data" action="{{url('categories', $category)}}">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}
                    <div class="form-group">
                        <label for="input-select">Modifier la catégorie {{$category->name}}</label>
                        <input value="{{$category->name}}" name="name" class="form-control" id="input-select">
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
