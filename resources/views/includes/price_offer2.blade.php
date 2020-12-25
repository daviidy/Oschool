<section id="price_offer">
  <div class="container-fluid">
    <div class="p-md-5 h3 p-3">
      <h2 class="text-center">NOS OFFRES DE PRIX</h2>
    </div>
    <div class="row">
      @foreach($offers as $offer)
      <div class="col-md-3 p-3 bg-oschool-footer box-price-1 {{strpos($offer->name, 'Premium') !== false || strpos($offer->name, 'PREMIUM') !== false || strpos($offer->name, 'premium') !== false ? 'recomandate' : ''}}">
        <div class="rounded p-3 box-price-2 {{strpos($offer->name, 'Premium') !== false || strpos($offer->name, 'PREMIUM') !== false || strpos($offer->name, 'premium') !== false ? 'recomandate2' : ''}}">
          <div class="mb-2">
            <h1 class="price-title">{{$offer->name}}</h1>
          </div>
          <div class="py-md-4 mb-3">
            <h1><span class="font-weight-bold h1">{{number_format($offer->price, 0, ",",".")}}</span> F CFA/AN</h1>
          </div>
          @auth
          @if(count($offer->purchases->where('status', 'Validé')->where('user_id', Auth::user()->id)) > 0)
          <a class="btn btn-price bg-oschool text-white rounded-pill  p-3">
            Votre offre actuelle
          </a>
          @else
          <a target="_blank" class="btn btn-price bg-oschool text-white rounded-pill  p-3" href="/checkoutPartners/{{$offer->id}}">
            Adhérer maintenant!
          </a>
          @endif
          @endauth
          @guest
          <a class="btn btn-price bg-oschool text-white rounded-pill  p-3"  href="#" data-toggle="modal" data-target="#modalLogin{{$offer->id}}">
            Adhérer maintenant!
          </a>
          @endguest
          <div class="my-md-4 my-3">
            <p class="font-weight-bold">Les fonctionnalités inclus :</p>
            <ul class="list-group">
                @foreach($offer->characteristics as $characteristic)
              <li class="list-group-item border-0 price-list"> {{$characteristic->description}}</li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@include('includes.popupauth_business');
