@extends('layouts.menu-dashboard-admin')

@section('title', 'Ajouter une carateristique')
@section('page_h2', 'Ajouter une caracteristique')
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

                <form method="post" enctype="multipart/form-data" action="{{route('characteristics.store')}}">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-select">Ajouter une Description</label>
                        <input placeholder="Description" name="description" class="form-control" id="input-select">
                    </div>


                    <div class="col-sm-12 add-top-margin-25">

                        <label for="status">Selectionnez les offres </label>
                        <br>


                        <select class="js-example-basic-multiple" name="offer_id[]" multiple="multiple" style="width:500px;">
                            @foreach ($offers as $offer)
                                        <option value="{{$offer->id}}">{{$offer->name}}</option>
                            @endforeach
                            </select>

                    </div>
                    <br>
                    <button class="btn btn-rounded btn-info" type="submit" name="button">
                        Ajouter
                    </button>
                </form>

            </div>
        </div>



    </div>

</div>


@endsection
