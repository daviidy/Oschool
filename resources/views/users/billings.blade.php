@extends('layouts.menuDashboard-users')
@section('title', 'Historique des paiements')

@section('content')

        <div class="col-md-9 bg-page main-content">
          <div class="bg-white my-5 shadow" id="btnActive">
            <ul class="border-0 list-group list-group-horizontal-md nav-tabs align-items-center" id="myTab" role="tablist">
              <li class="border-0 list-group-item nav-item py-1">
                <a class="pb-3 px-0 border-0 h3 font-weight-bold active1 nav-link active">
                   FACTURATION
                </a>
              </li>
            </ul>
          </div>
          <div class="px-md-4">
            <div class="px-md-5 py-md-3 bg-white rounded-lg">
              <div class="p-4">
                <h4 class="t-25 font-weight-bold">Vos achats en cours</h4>
                @if(!Auth::user()->purchases->where('status', 'Validé'))
                <p data-v-bd11ec86="">Vous n'avez pas de souscriptions actives pour le moment</p>
                @else
                <img class="img-fluid" src="https://s35.mindvalley.us/mindvalleyacademy/media/images/empty_icon.png" alt="">
                <div class="d-md-block d-none">
                  <div class="">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="border-top-0">Cours associé</th>
                          <th scope="col" class="border-top-0">Type de la formule</th>
                          <th scope="col" class="border-top-0">Prochaine date de paiement</th>
                          <th scope="col" class="border-top-0">Montant à paye</th>
                          <th scope="col" class="border-top-0">Méthode de paiement</th>
                          <th scope="col" class="border-top-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach(Auth::user()->courses as $course)
                        @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                        @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type == 'Abonnement')

                        <tr>
                          <th scope="row">
                            <a target="_blank" href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}">
                                {{ucfirst($course->name)}}
                          </th>
                          <td>{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type}}</td>
                          <td>{{Carbon\Carbon::parse($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->last()->date)->addDays(30)}}</td>
                          <td>{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->price}} FCFA</td>
                          <td>Mobile money</td>
                          <td>
                            <a data-v-669dc8b3="" data-v-bd11ec86="" href="/course/{{$course->slug}}/checkout/{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->id}}" class="centered-button">
                                Se réabonner
                            </a>
                          </td>
                        </tr>
                        @endif
                        @endif
                        @endforeach


                        <!--si on a affaire a un plan de paiement-->
                        @foreach(Auth::user()->courses as $course)
                        @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                        @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type == 'Plan de paiement')

                        <tr>
                          <th scope="row">
                            <a target="_blank" href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}">
                                    {{ucfirst($course->name)}}
                          </th>
                          <td>{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type}}</td>
                          <td>{{Carbon\Carbon::parse($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->last()->date)->addDays(30)}}</td>
                          <td>
                            @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->times - count($course->purchases->where('user_id', Auth::user()->id)->where('status','Validé')) == 0)
                            Il ne reste plus rien à payer
                            @else
                            {{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->price}} FCFA
                            @endif
                          </td>
                          <td>Mobile money</td>
                          <td>
                            <a data-v-669dc8b3="" data-v-bd11ec86="" href="/course/{{$course->slug}}/checkout/{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->id}}" class="centered-button">
                                Se réabonner
                            </a>
                          </td>
                        </tr>
                        @endif
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                @endif
              </div>
            </div>

            <div class="p-md-5 p-4 bg-white rounded-lg my-4 my-md-5">
              <div class="">
                <h4 class="t-25 font-weight-bold pb-md-3">Historique de paiements</h4>
                <div class="">
                  <div class="">
                    <table class="table">
                      <thead class="d-thead">
                        <tr>
                          <th scope="col" class="border-top-0">Id de transaction</th>
                          <th scope="col" class="border-top-0">Cours associé</th>
                          <th scope="col" class="border-top-0">Date</th>
                          <th scope="col" class="border-top-0">Type de la formule</th>
                          <th scope="col" class="border-top-0">Montant payé</th>
                          <th scope="col" class="border-top-0">Methode de paiement</th>
                          <th scope="col" class="border-top-0">Statut</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach(Auth::user()->courses as $course)
                        @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                        @foreach($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé') as $purchase)
                        @if($purchase->pricing)
                        <tr class="flex-tr">
                          <th scope="row">
                            <a data-v-3e7bb260="">
                              {{$purchase->trans_id}}
                              <img data-v-3e7bb260="" src="https://s92.mindvalley.us/mindvalley/media/images/ico-pdf.svg" alt="Invoice">
                            </a>
                          </th>
                          <td>{{$course->name}}</td>
                          <td>{{$purchase->date}}</td>
                          <td>{{$purchase->pricing->type}}</td>
                          <td>{{$purchase->pricing->price}} FCFA</td>
                          <td>Mobile money</td>
                          <td>
                            <div data-v-3e7bb260="" class="{isPaymentSuccessful ? green : red}">
                                {{$purchase->status}}
                            </div>
                          </td>
                        </tr>
                        @endif
                        @endforeach
                        @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
