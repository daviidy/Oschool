@extends('layouts.menu-dashboard-admin')
@section('title', 'Ajouter un achat B2B')
@section('page_h2', 'Ajouter un achat B2B')
@section('content')




            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->


@if(session('status'))

    <div class="card-body">

        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>

    </div>

@endif



<div class="row">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">
            <div class="card-body">

                <form method="post" enctype="multipart/form-data" action="/addBusinessPurchase">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-select">Utilisateurs</label>
                        <select class="js-example-basic-multiple form-control" name="users_id[]" multiple="multiple" style="width:100%;">

                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="form-group">
                        <label for="input-select">Offre choisie</label>
                        <select class="" name="offer_id">
                            @foreach($offers as $offer)
                            <option value="{{$offer->id}}">{{$offer->name}}</option>
                            @endforeach
                        </select>
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
