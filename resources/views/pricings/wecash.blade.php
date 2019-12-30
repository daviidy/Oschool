@extends('layouts.menu-pricing')
@section('title', 'wecash')


@section('content')




<div class="spc" data-checkout="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic#" data-initialized="true">

    <form action="https://www.wecashup.cloud/cdn/tests/websites/PHP/callback_lucas.php" method="POST" id="wecashup">
            <script async src="https://www.wecashup.com/library/MobileMoney.js" class="wecashup_button"
              data-demo
              data-sender-lang="en"
              data-sender-phonenumber="+237671234567"
              data-receiver-uid="EvIvZFlBKNaMddjXJOOpEWNeWj52"
              data-receiver-public-key="kCAc2vOwcANrbdKCuFnXLhS76yMx3f8iUytCbN8Drx6T"
              data-transaction-parent-uid=""
              data-transaction-receiver-total-amount="594426"
              data-transaction-receiver-reference="XVT2VBF"
              data-transaction-sender-reference="XVT2VBF"
              data-sender-firstname="Test"
              data-sender-lastname="Test"
              data-transaction-method="pull"
              data-image="https://storage.googleapis.com/wecashup/frontend/img/airfrance.png"
              data-name="Air France"
              data-crypto="true"
              data-cash="true"
              data-telecom="true"
              data-m-wallet="true"
              data-split="true"
              configuration-id="3"
              data-marketplace-mode="false"
              data-product-1-name="Billet ABJ PRS"
              data-product-1-quantity="1"
              data-product-1-unit-price="100"
              data-product-1-reference="XVT2VBF"
              data-product-1-category="Billeterie"
              data-product-1-description="France is in the Air"

            >
            </script>
        </form>

</div>







@endsection
