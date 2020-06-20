@extends('layouts.menu-dashboard-admin')
@section('title', 'Modifier une caracteristique')
@section('page_h2', 'Modifier une caracteristique')
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

                <form method="post" enctype="multipart/form-data" action="{{url('characteristics', $characteristic)}}">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}
                  <div class="form-group">
                    <label for="input-select">Ajouter une Description</label>
                    <input value="{{$characteristic->description}}"  name="description" class="form-control" id="input-select">
                </div>

                  <div class="col-sm-12 add-top-margin-25">

                    <label for="status">Selectionnez les caracteristiques </label>
                    <br>

                    <select class="js-example-basic-multiple" name="offer_id[]" multiple="multiple" style="width:500px;">
                        @foreach($offers as $offer_db)
                            <option {{$characteristic->offers->contains($offer_db->id) ? 'selected' : ''}} value="{{$offer_db->id}}">{{$offer_db->name}}</option>
                        @endforeach
                    </select>

                </div>
                <br>
                    <button class="btn btn-rounded btn-info" type="submit" name="button">
                        Modifier
                    </button>
                </form>

            </div>
        </div>



    </div>

</div>

@endsection
