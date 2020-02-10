@extends('layouts.menu-dashboard-admin')
@section('title', 'Comptabilité')
@section('page_h2', 'Comptabilité')
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

                <form method="post" enctype="multipart/form-data" action="/monthlyPayments">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input-select">Choisir un mois</label>
                        <select name="month" class="form-control" id="input-select">
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Août</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="input-select">Choisir une année</label>
                        <select name="year" class="form-control" id="input-select">
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <button class="btn btn-rounded btn-info" type="submit" name="button">
                        Envoyer
                    </button>
                </form>

            </div>
        </div>



    </div>

</div>

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Liste des achats</h5>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">#</th>
                                <th class="border-0">Image</th>
                                <th class="border-0">Cours associé</th>
                                <th class="border-0">Id Transaction</th>
                                <th class="border-0">Type de la formule</th>
                                <th class="border-0">Date</th>
                                <th class="border-0">Client</th>
                                <th class="border-0">Statut</th>
                                <th class="border-0">Prix (FCFA)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($current_month_purchases as $purchase)
                            @if($purchase->pricing->type !== "Free")
                            <tr>
                                <td>{{$purchase->id}}</td>
                                <td>
                                    <div class="m-r-10"><img src="/images/courses/logos/{{$purchase->course->logo}}" alt="{{$purchase->course->name}}" class="rounded" width="45"></div>
                                </td>
                                <td>{{ucfirst($purchase->course->name)}}</td>
                                <td>{{$purchase->trans_id}} </td>
                                <td>{{$purchase->pricing->type}}</td>
                                <td>{{$purchase->date}}</td>
                                <td>{{$purchase->user->name}}</td>
                                <td><span class="badge-dot {{$purchase->status == null ? 'badge-danger' : 'badge-success'}} mr-1"></span>{{$purchase->status == null ? 'Non validé' : 'Validé'}} </td>
                                <td class="price">{{$purchase->pricing->price}}</td>
                            </tr>
                            @endif
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total</th>
                                <th id="revenue"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


<script>


$(document).ready(function(){

var revenue = 0;

var prices = $('.price');


//on met les noms dans le tableau
for (i = 0; i < prices.length; i++) {
    revenue += parseInt(prices[i].textContent);
}

$('#revenue').text(revenue);


});



</script>



@endsection
