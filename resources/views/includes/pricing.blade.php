<!-- Modal -->
<div class="modal fade" id="courseOffer" tabindex="-1" aria-labelledby="courseOfferLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
  <div class="modal-content">
    <div class="modal-header">
      <div class="mx-auto col-md-10">
        <h5 class="modal-title text-center text-uppercase" id="courseOfferLabel">Nos offres de prix</h5>
      </div>
      <button type="button" class="close col-md-1" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body p-4">
      <div class="container">
        <div class="row">
        @foreach($course->pricings as $pricing)
            @if($pricing->status == "1")
          <div class="col-12 col-md-4 mb-4">
            <div class="card-body border-none rounded h-100 shadow">
              <div class="pb-3 summary">
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
              </div>
              @auth
              <a href="/course/{{$course->slug}}/checkout/{{$pricing->id}}" class="w-100 btn btn-primary bg-oschool rounded text-center text-white">S'inscrire</a>
              @endauth
              @guest
              <a href="#" class="w-100 btn btn-primary bg-oschool rounded text-center text-white" data-toggle="modal" data-target="#modalLogin{{$pricing->id}}">S'inscrire</a>
              @endguest
            </div>
          </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!--div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div-->
</div>
</div>
</div>
@include('includes.popupauth')
