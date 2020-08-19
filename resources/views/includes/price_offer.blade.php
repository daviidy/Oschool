<style >
  body {
  /*background: #f8f8f8;*/
}

a {
  text-decoration: none;
}

h1 {
  text-align: center;
  font-family: "Lato", sans-serif;
  font-size: 25px;
  line-height: 32px;
  padding-top: 70px;
}
h1 a {
  color: #66cccc;
}

.price-table-wrapper {
  font-family:"TeachableSans-Regular";
  text-align: center;
  margin-top: 30px;
}
.price-table-wrapper .featured-table {
  box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
}
.price-table-wrapper .pricing-table {
  display: inline-table;
  border: 1px solid #c8c8c8;
  border-radius: 10px;
  background: #fff;
  margin: 10px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__header {
  padding: 20px;
  font-size: 20px;
  color: #fff;
  background: #4d90cc;

}
.price-table-wrapper .pricing-table__price {
  color: #4d90cc;
  padding: 10px;
  margin: auto;
  font-size: 25px;
  font-weight: 500;
}
.price-table-wrapper .pricing-table__button {
  display: block;
  background: #4d90cc;
  text-decoration: none;
  padding: 20px;
  color: white;
  position: relative;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:before {
  position: absolute;
  left: -20%;
  top: -10%;
  content: "";
  width: 60%;
  height: 220%;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
  background: white;
  opacity: 0.3;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:after {
  position: absolute;
  content: ">";
  top: 0;
  right: 0;
  font-size: 25px;
  padding: 15px;
  padding-right: 40px;
  color: white;
  opacity: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:hover {
  background: #4d90cc;
}
.price-table-wrapper .pricing-table__list {
  padding: 15px;
  color: #a0a0a0;
}
.price-table-wrapper .pricing-table__list li {
  padding: 15px 10px;
  border-bottom: 1px solid #c8c8c8;
}


.price-table-wrapper .pricing-table__list li:last-child {
  border: none;
}
.price-table-wrapper .pricing-table:hover {
  box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
}
.price-table-wrapper .pricing-table:hover .pricing-table__button {
  padding-left: 0;
  padding-right: 35px;
}
.price-table-wrapper .pricing-table:hover .pricing-table__button:before {
  top: -80%;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  width: 100%;
}
.price-table-wrapper .pricing-table:hover .pricing-table__button:after {
  opacity: 1;
  padding-right: 15px;
}

.recomandate{
  background-color: #d08859!important;
  padding: 20px 20px 0px!important;
}

</style>
<h1 id="price_offer">NOS OFFRES DE PRIX</h1>

<div class="price-table-wrapper">
    @foreach($offers as $offer)
  <div class="pricing-table {{strpos($offer->name, 'Premium') !== false ? 'featured-table' : ''}}">
    <h2 class="pricing-table__header {{strpos($offer->name, 'Premium') !== false || strpos($offer->name, 'PREMIUM') !== false || strpos($offer->name, 'premium') !== false ? 'recomandate' : ''}}">- {{$offer->name}}  -</h2>
    <h3 class="pricing-table__price">{{number_format($offer->price, 0, ",",".")}} FCFA/AN <br></h3>
    @auth
    @if(count($offer->purchases->where('status', 'Validé')->where('user_id', Auth::user()->id)) > 0)
    <a class="pricing-table__button">
      Votre offre actuelle
    </a>
    @else
    <a target="_blank" class="pricing-table__button" href="/checkoutPartners/{{$offer->id}}">
      Adhérer maintenant!
    </a>
    @endif
    @endauth
    @guest
    <a class="pricing-table__button" href="#" data-toggle="modal" data-target="#modalLogin{{$offer->id}}">
      Adhérer maintenant!
    </a>
    @endguest
    <ul class="pricing-table__list">
        @foreach($offer->characteristics as $characteristic)
      <li> {{$characteristic->description}}</li>
        @endforeach


    </ul>
  </div>
  @endforeach

</div>
@include('includes.popupauth_business');
