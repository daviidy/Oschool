<section class="pricing py-5" id="price">
  <div class="container">
    <h1 class="title-price">Nos offres de prix</h1>
    <div class="row centre">
      <!-- Free Tier -->
      @foreach($course->pricings as $pricing)
          @if($pricing->status == "1")
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">{{$pricing->name}}</h5>
          <h6 class="card-price text-center">{{$pricing->type == 'Free' ? '0' : number_format($pricing->price, 0, '.', ' ')}} FCFA <span class="period"> {{$pricing->per == 'month' ? '/ Mois' : ''}} {{$pricing->per == 'year' ? '/ Année' : ''}}</span></h6>
            <hr>
            @if($pricing->type == 'Plan de paiement')
            Vous paierez cette somme {{$pricing->times}} fois
            <hr>
            @endif
            {!!$pricing->description!!}
            <br>
            <br>
            <!--
            <ul class="fa-ul">
              <li><span class="fa-li"><img src="https://img.icons8.com/color/48/000000/checked-2.png" width="20"></span>Un seul utilisateur</li>
              <li><span class="fa-li"><img src="https://img.icons8.com/color/48/000000/checked-2.png" width="20"></span>Mentoring</li>
              <li><span class="fa-li"><img src="https://img.icons8.com/color/48/000000/checked-2.png" width="20"></span>Test</li>
              {{-- <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li> --}}
              {{-- <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li> --}}
            </ul>
        -->
            <a href="#" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#modalLogin">S'inscrire</a>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
</section>
@include('includes.popupauth')