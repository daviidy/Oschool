@extends('layouts.menu-dashboard-user')
@section('title', 'Historique des paiements')

@section('content')

<style media="screen">

/*! CSS Used from: https://home.mindvalley.com/assets/darkui-4558cb3c34b34b80e42befe8a8a15be26e7ddb11a5a44679cd0f1f90179af548.css ; media=all */
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
table{border-collapse:collapse;border-spacing:0;}
td,th{padding:0;}
@media print{
*,*:before,*:after{background:transparent!important;color:#000!important;box-shadow:none!important;text-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
tr,img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
a{color:#4D90CC;text-decoration:none;}
a:hover,a:focus{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.col-sm-9{position:relative;min-height:1px;padding-left:15px;padding-right:15px;}
@media (min-width: 768px){
.col-sm-9{float:left;}
.col-sm-9{
    width:100%;
    padding-left: 30rem;
padding-top: 4rem;
}
}
table{background-color:transparent;}
th{text-align:left;}
}
/*! CSS Used from: https://home.mindvalley.com/packs/app-c7d9f990427b05dbc9d6ddcf5ac45b3c.css ; media=screen */
@media screen{
a[data-v-669dc8b3]{margin-top: 15px;cursor:pointer;display:inline-block;min-height:42px;padding:10px 30px;font-size:15px;color:#fff;text-decoration:none;text-align:center;font-family:Gilroy-Semibold,sans-serif;background-color:#4D90CC;border-radius:35px;vertical-align:middle;}
a[data-v-669dc8b3]:hover{background-color:#66afe9;}
a[data-v-669dc8b3]{cursor:pointer;display:inline-block;min-height:42px;padding:10px 30px;font-size:15px;color:#fff;text-decoration:none;text-align:center;font-family:Gilroy-Semibold,sans-serif;background-color:#4D90CC;border-radius:35px;vertical-align:middle;}
a[data-v-669dc8b3]:hover{background-color:#4e9ff8;}
@media (max-width:768px){
a[data-v-669dc8b3]{padding-left:30px;padding-right:30px;}
}
@media (max-width:480px){
a[data-v-669dc8b3]{padding-left:20px;padding-right:20px;}
}
img[data-v-285a3986]{height:27px;width:auto;}
td[data-v-3e7bb260]{font-family:Gilroy-Regular,sans-serif;font-size:14px;color:#2c313b;}
td.status[data-v-3e7bb260]{font-family:Gilroy-Semibold,sans-serif;text-transform:capitalize;max-width:110px;}
td.status .green[data-v-3e7bb260]{color:#18bb9c;}
@media (max-width:700px){
td.status[data-v-3e7bb260]{max-width:none;padding-bottom:20px!important;}
}
td.order[data-v-3e7bb260]{color:#4D90CC;min-width:110px;}
@media (max-width:700px){
td.order[data-v-3e7bb260]{padding-top:20px!important;}
}
td.order a[data-v-3e7bb260]:hover{color:#4D90CC;text-decoration:none;}
td.order img[data-v-3e7bb260]{display:inline-block;margin-left:10px;width:11px;height:auto;}
.table-wrapper{padding:20px 0 0;}
.table-wrapper table{width:100%;}
.table-wrapper table tr{border-bottom:1px solid #dfdfdf;}
.table-wrapper table tr:last-child{border-bottom:none;}
.table-wrapper table tr.header{border-bottom:4px solid #dfdfdf;}
.table-wrapper table tr th{font-family:'TeachableSans-Regular';font-size:14px;color:#62686e;padding:10px 5px;}
@media (max-width:700px){
.table-wrapper table tr th{display:none;}
}
.table-wrapper table tr td{padding:10px 5px;}
@media (max-width:700px){
.table-wrapper table tr td{display:block;}
}
.empty p[data-v-bd11ec86]{font-family:'TeachableSans-Regular';font-size:14px;font-weight:500;line-height:18px;color:#2c313b;}
.empty img[data-v-bd11ec86]{margin:8px 0 22px;}
@media (max-width:500px){
.empty img[data-v-bd11ec86]{width:100%;}
}
h4[data-v-bd11ec86]{margin-top:0;font-family:'TeachableSans-Regular';font-size:20px;letter-spacing:.2px;color:#333;}
.inner-content[data-v-bd11ec86]{padding:40px;padding-bottom:20px;background-color:#fff;border-radius:4px;margin-bottom:30px;}
@media (max-width:767px){
.inner-content[data-v-bd11ec86]{padding:20px;}
}
}

</style>




<div data-v-27efbf01="" class="col-sm-9">
    <!---->
    <!---->
    <div data-v-bd11ec86="" data-v-27efbf01="">
        <div data-v-bd11ec86="" class="inner-content empty">
            <h4 data-v-bd11ec86="">Vos achats en cours</h4> <img data-v-bd11ec86="" src="https://s35.mindvalley.us/mindvalleyacademy/media/images/empty_icon.png">
            @if(!Auth::user()->purchases->where('status', 'Validé'))
            <p data-v-bd11ec86="">Vous n'avez pas de souscriptions actives pour le moment</p>
            @else

            <div data-v-bd11ec86="" class="payment-history">
                    <div class="table-wrapper">
                        <table>
                            <tr class="header">
                                <th>Cours associé</th>
                                <th>Type de la formule</th>
                                <th>Prochaine date de paiement</th>
                                <th>Montant à payer</th>
                                <th>Méthode de paiement</th>
                                <th>Action</th>
                            </tr>
                            @foreach(Auth::user()->courses as $course)
                            @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                            @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type == 'Abonnement')

                            <tr data-v-3e7bb260="">
                                <td data-v-3e7bb260="" class="order"><a target="_blank" href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}">
                                        {{ucfirst($course->name)}}
                                </td>
                                <td data-v-3e7bb260="">{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type}}</td>

                                <td data-v-3e7bb260="">{{Carbon\Carbon::parse($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->last()->date)->addDays(30)}}</td>
                                <td data-v-3e7bb260="">{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->price}} FCFA</td>
                                <td data-v-3e7bb260="">Mobile money</td>
                                <td data-v-3e7bb260="">
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

                            <tr data-v-3e7bb260="">
                                <td data-v-3e7bb260="" class="order"><a target="_blank" href="/{{$course->type == 'course' ? 'course' : 'path'}}/{{$course->slug}}">
                                        {{ucfirst($course->name)}}
                                </td>
                                <td data-v-3e7bb260="">{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->type}}</td>
                                <td data-v-3e7bb260="">{{Carbon\Carbon::parse($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->last()->date)->addDays(30)}}</td>
                                <td data-v-3e7bb260="">
                                    @if($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->times - count($course->purchases->where('user_id', Auth::user()->id)->where('status','Validé')) == 0)
                                    Il ne reste plus rien à payer
                                    @else
                                    {{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->price}} FCFA
                                    @endif
                                </td>
                                <td data-v-3e7bb260="">Mobile money</td>
                                <td data-v-3e7bb260="">
                                    <a data-v-669dc8b3="" data-v-bd11ec86="" href="/course/{{$course->slug}}/checkout/{{$course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')->first()->pricing->id}}" class="centered-button">
                                        Se réabonner
                                    </a>
                                </td>

                            </tr>
                            @endif
                            @endif
                            @endforeach
                        </table>
                    </div>
                </div>

                @endif




        </div>
        <!---->
        <div data-v-bd11ec86="" class="inner-content">
            <h4 data-v-bd11ec86="">Historique de paiements</h4>
            <div data-v-bd11ec86="" class="payment-history">
                <div class="table-wrapper">
                    <table>
                        <tr class="header">
                            <th>Id de transaction</th>
                            <th>Cours associé</th>
                            <th>Date</th>
                            <th>Type de la formule</th>
                            <th>Montant payé</th>
                            <th>Methode de paiement</th>
                            <th>Statut</th>
                        </tr>
                        @foreach(Auth::user()->courses as $course)
                        @if(count($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé')) > 0)
                        @foreach($course->purchases->where('user_id', Auth::user()->id)->where('status', 'Validé') as $purchase)
                        <tr data-v-3e7bb260="">
                            <td data-v-3e7bb260="" class="order"><a data-v-3e7bb260="">
                                    {{$purchase->trans_id}}
                                    <img data-v-3e7bb260="" src="https://s92.mindvalley.us/mindvalley/media/images/ico-pdf.svg" alt="Invoice"></a></td>
                            <td>{{$course->name}}</td>
                            <td data-v-3e7bb260="">{{$purchase->date}}</td>
                            <td data-v-3e7bb260="">{{$purchase->pricing->type}}</td>
                            <td data-v-3e7bb260="">{{$purchase->pricing->price}} FCFA</td>
                            <td data-v-3e7bb260="">
                                Mobile money
                            </td>
                            <td data-v-3e7bb260="" class="status">
                                <div data-v-3e7bb260="" class="{isPaymentSuccessful ? green : red}">
                                    {{$purchase->status}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <!---->
    <!---->
</div>

@endsection
