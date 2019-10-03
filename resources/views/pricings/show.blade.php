@extends('layouts.menu-pricing')

@section('content')





<div class="spc" data-checkout="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic#" data-initialized="true">

  <main id="sr-main-content" tab-index="-1" class="container spc__inner">
    <h1 class="sr-only">Checkout</h1>
    <div class="col-sm-6">
      <section class="spc__section spc__section--review" data-checkout-main-order-summary="">
        <h2 class="section-hed">Order Summary</h2>

<section class="spc__box content-box">
  <div class="row">
    <div class="spc__box-inner col-xs-12">

      <div class="spc__row">
        <div class="spc__summary">
          <div class="spc__summary-item spc__course-image">
            <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://d2vvqscadf4c1f.cloudfront.net/0M5IR4vQQwFZONzqXdAS_The%20Foundations%20of%20Card%20Magic%20Course%20Thumbnail.png" style="max-width: 100%;">
          </div>

          <div class="spc__summary-item spc--text-light">
            Basic Enrollement — The Foundations of Card Magic
          </div>

          <div class="spc__summary-item text-right mono">
            $52
          </div>
        </div>
      </div>

      <div data-checkout-price-modifiers="">
        <div class="spc__row hidden" data-checkout-price-modifier-tax="">
          <div class="spc__summary" data-checkout-price-modifier-tax="">
            <div class="spc__summary-item spc--text-light" data-checkout-tax-label="">VAT - 0% (Côte d'Ivoire)</div>

            <div class="spc__summary-item text-right mono" data-checkout-price="tax">+ $0.00</div>
          </div>

          <div class="hidden" data-checkout-vat-id-form="">
            <div class="binary-toggle" data-binary-toggle="">
              <button class="binary-toggle__label" data-binary-toggle-label="" id="add_vat_id">
                Add VAT ID
              </button>

              <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                <form class="form-inline spc__inline-form" data-checkout-inline-form="tax" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                  <div class="spc__inline-form-inner">
                    <input type="text" name="vat_tax_id" id="vat_tax_id" autocomplete="off" class="spc__inline-form-input" placeholder="VAT ID" data-checkout-inline-input="">

                    <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                    <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                      <button class="is-hidden btn btn-primary" id="save_vat_id" name="save_vat_id">
                        <div class="loader">
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                        </div>

                        <div class="spc__inline-form-button-text">
                          Add VAT ID
                        </div>
                      </button>
                    </div>
                  </div>

                  <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                    Invalid VAT ID
                  </div>
</form>              </div>
            </div>
          </div>
        </div>

          <div class="spc__row">
            <div class="spc__summary hidden" data-checkout-price-modifier-coupon="">
              <div class="spc__summary-item spc--text-light">
                Coupon Discount
              </div>

              <div class="spc__summary-item text-right mono" data-checkout-price="coupon">- $0.00</div>
            </div>

            <div data-checkout-inline-form-coupon="">
              <div class="binary-toggle" data-binary-toggle="">
                <button class="binary-toggle__label" data-binary-toggle-label="" id="add_coupon">
                  Add Coupon
                </button>

                <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                  <form class="form-inline spc__inline-form" data-checkout-inline-form="coupon" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                    <div class="spc__inline-form-inner">
                      <input type="text" name="coupon_code" id="coupon_code" autocomplete="off" class="spc__inline-form-input" placeholder="Coupon code" data-checkout-inline-input="">

                      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                        <button id="verify-coupon-code" class="is-hidden btn btn-primary">
                          <div class="loader">
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                          </div>

                          <div class="spc__inline-form-button-text">
                            Apply
                          </div>
                        </button>
                      </div>
                    </div>

                    <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                      Invalid Coupon
                    </div>
</form>                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="spc__row spc__row--total">
        <div class="spc__summary">
          <div class="spc__summary-item">
            Total
          </div>

          <div class="spc__summary-item text-right">
            <span class="meta" data-checkout-currency="">
              USD
            </span>

            <span data-checkout-price="final">$52</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      </section>

      <section class="spc__section spc__section--account">
        <h2 class="section-hed">Account Information</h2>

<div class="content-box spc__box">
  <div data-checkout-device-message="" class="spc__new-device hidden">
    <div class="spc__new-device-header">
      <div class="spc__x">
        <svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="emails" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="SPC-unrecognizeddevice" transform="translate(-290.000000, -711.000000)" fill="#D4604B" fill-rule="nonzero">
              <g id="Acct-info" transform="translate(248.000000, 627.000000)">
                <g id="Group-6" transform="translate(42.000000, 84.000000)">
                  <g id="exclamation-circle">
                    <path d="M18,9 C18,13.9716653 13.9702137,18 9,18 C4.02978629,18 0,13.9716653 0,9 C0,4.0312379 4.02978629,0 9,0 C13.9702137,0 18,4.0312379 18,9 Z M9,10.8145161 C8.07804435,10.8145161 7.33064516,11.5619153 7.33064516,12.483871 C7.33064516,13.4058266 8.07804435,14.1532258 9,14.1532258 C9.92195565,14.1532258 10.6693548,13.4058266 10.6693548,12.483871 C10.6693548,11.5619153 9.92195565,10.8145161 9,10.8145161 Z M7.41509274,4.81405645 L7.68429435,9.74954032 C7.6968871,9.98049194 7.88784677,10.1612903 8.119125,10.1612903 L9.880875,10.1612903 C10.1121532,10.1612903 10.3031129,9.98049194 10.3157056,9.74954032 L10.5849073,4.81405645 C10.5985161,4.56459677 10.3998992,4.35483871 10.1500766,4.35483871 L7.8498871,4.35483871 C7.60006452,4.35483871 7.40148387,4.56459677 7.41509274,4.81405645 Z" id="Shape"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>

      <h3 class="section-hed">We don't recognize this device.</h3>
    </div>

    <p class="spc__new-device-body">
      Check your email for instructions to authorize this device and complete your purchase.

      <a data-no-turbolink="" href="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic/sign-out">
        <strong>Reset</strong>
</a>    </p>
  </div>

  <div data-checkout-authentication-message="" class="spc__authenticated hidden">
    <p>
    </p><div class="spc__check"></div>

    You are logged in as <strong><span data-checkout-authentication-email=""></span></strong>.

    <a class="spc__log-out" data-no-turbolink="" href="https://sso.teachable.com/secure/6419/checkout/7141/the-foundations-of-card-magic/sign-out">
      <strong>Log Out</strong>
</a>    <p></p>
  </div>

    <div class="spc__unauthenticated">
      <form class="form-inline spc__inline-form" data-checkout-inline-form="email" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/identify" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <label class="control-label" for="email">Email Address</label>

  <div class="spc__inline-form-inner">
    <input type="email" name="email" id="email" autofocus="autofocus" class="spc__inline-form-input" data-checkout-email="" data-checkout-inline-input="" placeholder="name@example.com" required="required">

    <div class="spc__inline-form-success" data-checkout-inline-success=""></div>
  </div>

  <p class="spc__authentication-error meta" data-checkout-inline-error="" data-checkout-authentication-error="" data-authentication-error-default="The email you entered is invalid." data-authentication-error-misspelled-gmail="Did you mean &quot;gmail&quot;?" data-authentication-error-misspelled-com="Did you mean &quot;.com&quot;?" ,="" data-authentication-error-no-tld="Did you forget something? Most email addresses have a &quot;.&quot;, like in &quot;.com&quot;." data-authentication-error-dismiss="Dismiss"></p>

</form>
      <form class="form-inline spc__inline-form" data-checkout-metadata-form="username" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <label class="control-label" for="username">Name</label>

  <div class="spc__inline-form-inner">
    <input type="text" name="username" id="username" autofocus="autofocus" class="spc__inline-form-input" placeholder="John Doe" required="required">
  </div>
</form>
      <form class="form-inline spc__inline-form spc__inline-form-last" data-checkout-metadata-form="allow_instructor_emails" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <div class="boolean-checkbox spc__checkbox">
    <label class="spc__promotional-email-label">
      <input type="hidden" name="allow_instructor_emails" id="allow_instructor_emails" value="false">
      <input name="allow_instructor_emails" type="checkbox" value="true">
      <span>I agree to receive instructional and promotional emails</span>
    </label>
  </div>
</form>

      <div id="user-password-form">
        <div class="spc__password alert alert-warning hidden" data-checkout-alert="school">

  <p class="spc__password-subtitle">
      It looks like you already have a 52Kards account.
  </p>

  <form class="form-inline spc__inline-form" data-checkout-inline-form="login-school" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">

    <div class="spc__inline-form-inner">
      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

      <input type="password" name="password" id="password_school" value="" autocomplete="off" class="spc__inline-form-input" data-checkout-inline-input="" required="required" placeholder="Enter password">

      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
        <button class="btn btn-primary">
          <div class="loader">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
          </div>

          <div class="spc__inline-form-button-text">
            Log In
          </div>
        </button>
      </div>
    </div>

    <div class="spc__inline-form-error hidden" data-checkout-inline-error="" data-checkout-inline-error-locked="Your account has been locked due to an excessive number of unsuccessful sign in attempts.">
      Invalid email or password
    </div>

</form>
  <p class="text-muted">If this is not you, please use a different email address.</p>
  <p class="text-muted">If you forgot your password, <a href="https://sso.teachable.com/secure/6419/users/password/new">click here to reset it</a>.</p>

</div>

      </div>

      <div id="teachable-account-password-form">
        <div class="spc__password alert alert-warning hidden" data-checkout-alert="myteachable">

  <p class="spc__password-subtitle">
      It looks like you already have a myTeachable account.
  </p>

  <form class="form-inline spc__inline-form" data-checkout-inline-form="login-teachable" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">

    <div class="spc__inline-form-inner">
      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

      <input type="password" name="password" id="password_myteachable" value="" autocomplete="off" class="spc__inline-form-input" data-checkout-inline-input="" required="required" placeholder="Enter password">

      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
        <button class="btn btn-primary">
          <div class="loader">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
          </div>

          <div class="spc__inline-form-button-text">
            Log In
          </div>
        </button>
      </div>
    </div>

    <div class="spc__inline-form-error hidden" data-checkout-inline-error="" data-checkout-inline-error-locked="Your account has been locked due to an excessive number of unsuccessful sign in attempts.">
      Invalid email or password
    </div>

</form>
  <p class="text-muted">If this is not you, please use a different email address.</p>
  <p class="text-muted">If you forgot your password, <a href="https://sso.teachable.com/secure/teachable_accounts/password/new">click here to reset it</a>.</p>

</div>

      </div>
    </div>
</div>

      </section>

      <section class="spc__section spc__section--pay">
        <form data-checkout-form-payment="" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/confirm" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
            <div data-checkout-payment-methods="">
  <h2 class="section-hed">Payment Information</h2>

  <div class="spc__secure">
    <span class="spc__secure-icon">
      <img src="https://assets.teachablecdn.com/icons/checkout-lock.svg">
    </span>

    <span class="spc__secure-text">
      This is a secure 128-bit SSL encrypted payment
    </span>
  </div>

  <div class="payment-error-box hidden" data-checkout-credit-card-error="">
    <i class="fa fa-exclamation-circle"></i>
    <span data-checkout-credit-card-error-text=""></span>
  </div>

    <div class="spc__dropdown">
      <div>Payment Methods</div>
      <div data-checkout-dropdown="" class="spc__custom_dropdown dropdown arrow-down">
        <button type="button" class="dropbtn minimal"><a class="option" data-payment-method="credit_card">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Visa-d50cb55cfdca9495407f178cc8fe0a97.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Mastercard-4668949e37c23ba9b77aea7465e43dfd.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/American_Express-35105972356b780cbc2a9474a3b68f15.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Discover-1924c8c014c068e27abd643d54b4c8a5.png
          ">
          <span class="option-text">Credit Card</span>
          </a></button>
        <div id="option-container" class="dropdown-content">
        <a class="option" data-payment-method="credit_card">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Visa-d50cb55cfdca9495407f178cc8fe0a97.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Mastercard-4668949e37c23ba9b77aea7465e43dfd.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/American_Express-35105972356b780cbc2a9474a3b68f15.png
          ">
          <img alt="Logo" class="icon" src="
            /packs/client/assets/Discover-1924c8c014c068e27abd643d54b4c8a5.png
          ">
          <span class="option-text">Credit Card</span>
          </a>

         <a class="option" data-payment-method="paypal">
            <img alt="Logo" class="icon" src="
              /packs/client/assets/Paypal-48a7344b1860c94e51f4f14575b8eeae.png
            ">
            <span class="option-text">Paypal</span>
          </a>


      </div>
      </div>
    </div>

    <meta id="sca-prompt-public-key" data-stripe-connect-public-key="pk_live_V1vXVI8egfxQBL3KJ7cIMERw">

    <div class="spc__stripe spc__dropdown-view is-active" data-checkout-stripe="">
      <div class="content-box cc spc__box" data-checkout-stripeelement="">

        <div data-checkout-credit-card-existing="" data-checkout-string-useanother="Use another card"></div>

        <div data-checkout-credit-card-new="">
          <div class="form-group">
            <label class="cc__label" for="credit_card_number">Card Number</label>

            <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-number="" id="credit_card_number"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame10" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=cardNumber&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>

            <div class="cc__back-to-existing">
              <button type="button" class="hidden" data-checkout-use-existing="">Use existing Credit Card</button>
            </div>

            <div class="cc__logos" data-checkout-credit-card-logos="">
              <img class="cc__logos--visa" src="https://fedora.teachablecdn.com/assets/credit-card-logos/visa-8f9efe7553852c98209ef41061ef9f73467e2e213fe940e07ae9ab43f636d283.svg">
              <img class="cc__logos--amex" src="https://fedora.teachablecdn.com/assets/credit-card-logos/american_express-c3395370155f68783beadd8f5a4104504a5a0a93e935d113b10003b1a47bc3eb.svg">
              <img class="cc__logos--mastercard" src="https://fedora.teachablecdn.com/assets/credit-card-logos/mastercard-2369162d32348b52e509e9711f30e7c7ace4ae32a446ca26c283facf08c36021.svg">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="cc__label" for="expiration">
                  Expiration Date
                </label>

                <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-expiry="" id="expiration"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame11" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=cardExpiry&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <div data-checkout-cvc-explainer="" class="cc__cvc">
                  <label class="cc__cvc-icon" for="cc__cvc-checkbox"></label>
                  <input class="cc__cvc-checkbox hidden" type="checkbox" id="cc__cvc-checkbox">
                  <div class="cc__cvc-dialog">
                    <div class="cc__cvc-card cc__cvc-card--visa cc__cvc-card--mastercard">
                      <img src="https://fedora.teachablecdn.com/assets/checkout/visa-mastercard-8b39b85f1137faa9c17db95c387f709a5c82f68630995d9e3e58bc67c8c423ab.png" alt="Visa mastercard">
                    </div>

                    <div class="cc__cvc-card cc__cvc-card--amex">
                      <img src="https://fedora.teachablecdn.com/assets/checkout/amex-08cb4b99f7d88a70ae70899a5703949aa4ff82b2af47e44b1db2617ce827ca91.png" alt="Amex">
                    </div>
                  </div>
                </div>

                <label for="cvc">
                  CVC Code
                </label>

                <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-cvc="" id="cvc"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame12" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=cardCvc&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="country_code_credit_card">Country</label>
                <select name="country_code" id="country_code_credit_card-cc" class="cc__input" data-checkout-country="" data-checkout-country-endpoint="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" data-checkout-country-authenticity="7JNAjuViICBKbskFZsVK/Hk8OvFtEVYWgg9t5dfujRHO1a8/VUFWkWy6BtwyOy4CkLyU3nJ2WaGoBRju7C3AXQ=="><option value="">Select your billing country</option><option selected="selected" value="CI">Côte d'Ivoire</option>
<option disabled="disabled" value="">———————————————</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestine, State of</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option></select>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label for="postal">Postal Code</label>
                <div class="cc__input StripeElement StripeElement--empty" data-checkout-stripeelement-postal="" id="postal"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame13" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-167aa9dcc462f8a8ef71cdd4f51ac184.html#style[base][color]=%23555&amp;style[base][fontSize]=13px&amp;style[base][fontWeight]=500&amp;style[base][letterSpacing]=0.8px&amp;style[base][lineHeight]=40px&amp;style[invalid][color]=%23db5694&amp;style[invalid][:focus][color]=%23555&amp;componentName=postalCode&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;origin=https%3A%2F%2Fsso.teachable.com&amp;referrer=https%3A%2F%2Fsso.teachable.com%2Fsecure%2F6419%2Fcheckout%2F7141%2Fthe-foundations-of-card-magic&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 40px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
              </div>
            </div>
          </div>

            <div class="row" data-checkout-save-payment-details-container="">
              <div class="col-sm-12 form-group spc__checkbox">
                <input type="checkbox" id="save-payment-details" data-checkout-save-payment-details="" checked="">
                <label for="save-payment-details">Save my card for future purchases</label>
                <a class="cc__learn_more_cc_save" href="https://support.teachable.com/hc/en-us/articles/360004256491-Editing-Your-Profile-and-Billing-Information#myTeachableAccounts" target="_blank">Learn More</a>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="spc__paypal spc__dropdown-view" data-checkout-paypal="">
      <div class="content-box cc spc__box">
        <div class="form-group">
          <label for="country_code_paypal">Country</label>
          <select name="country_code" id="country_code_credit_card-paypal" class="cc__input" data-checkout-country="" data-checkout-country-endpoint="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" data-checkout-country-authenticity="vls2Cyun6Eciri0RyPYtdm3avMSVew7yr0Xy6fnkwLmcHdm6m4Se9gR64sicCEmIhFoS64ocAUWFT4fiwieN9Q=="><option value="">Select your billing country</option><option selected="selected" value="CI">Côte d'Ivoire</option>
<option disabled="disabled" value="">———————————————</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestine, State of</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option></select>
        </div>
      </div>
    </div>

    <div class="spc__mobile_pay spc__dropdown-view" data-checkout-mobile-pay="">
      <div class="content-box spc__box">
        <div data-checkout-mobile-form="">
          <button type="button" class="mobile-pay-btn google-pay-style" data-checkout-mobile-button="" aria-label="Buy with Google Pay"></button>
          <p class="text-center" data-checkout-mobile-message="">Securely connect to Google Pay to finish adding your payment method. You’ll be redirected back here when done. Additional taxes may apply.</p>
        </div>
        <div class="mobile-pay-authorized hidden" data-checkout-mobile-pay-authorized="">
          <h3>Payment Methods</h3>
          <div class="mobile-pay-authorized-method">
            <span data-mobile-pay-method-logo=""><img alt="Google Pay authorized" src="/packs/client/assets/Google_Pay_Mark-e23dc91f4c82c81d51650d5e44140d08.png"></span>
            <span data-mobile-pay-method-name="">Google Pay</span>
          </div>
          <p>Almost done! Complete your order by clicking the button below.</p>
        </div>
      </div>
    </div>

  <span data-checkout-card-logo-amex="https://fedora.teachablecdn.com/assets/credit-card-logos/american_express-c3395370155f68783beadd8f5a4104504a5a0a93e935d113b10003b1a47bc3eb.svg"></span>
  <span data-checkout-card-logo-diners-club="https://fedora.teachablecdn.com/assets/credit-card-logos/diners_club-be2bfa8220f9cea7d21bcc3c92eee23d4161807eab3957b99b51ad3285eb5717.svg"></span>
  <span data-checkout-card-logo-discover="https://fedora.teachablecdn.com/assets/credit-card-logos/discover-e5876af25e54f712a03550ed24ed12e51489e9859e5bed8dd68811c3ff38bb6a.svg"></span>
  <span data-checkout-card-logo-jcb="https://fedora.teachablecdn.com/assets/credit-card-logos/jcb-1b967cb007de51783d8c965af8d1f3fd6ee6c592e4a9b0168bfe82038123b550.svg"></span>
  <span data-checkout-card-logo-mastercard="https://fedora.teachablecdn.com/assets/credit-card-logos/mastercard-2369162d32348b52e509e9711f30e7c7ace4ae32a446ca26c283facf08c36021.svg"></span>
  <span data-checkout-card-logo-visa="https://fedora.teachablecdn.com/assets/credit-card-logos/visa-8f9efe7553852c98209ef41061ef9f73467e2e213fe940e07ae9ab43f636d283.svg"></span>
</div>


          <section class="spc__confirm hidden" data-checkout-confirm-location="">
            <h2 class="section-hed">Confirm Your Billing Location</h2>

            <div class="content-box spc__box" data-checkout-confirm-location-inner="">
              <div></div>
            </div>
          </section>

          <input type="submit" class="hidden" id="spc-primary-submit">
</form>      </section>

        <section class="spc__section spc__section--review hidden" data-checkout-mobile-order-summary="">
          <h2 class="section-hed">Order Summary</h2>

<section class="spc__box content-box">
  <div class="row">
    <div class="spc__box-inner col-xs-12">

      <div class="spc__row">
        <div class="spc__summary">
          <div class="spc__summary-item spc__course-image">
            <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://d2vvqscadf4c1f.cloudfront.net/0M5IR4vQQwFZONzqXdAS_The%20Foundations%20of%20Card%20Magic%20Course%20Thumbnail.png" style="max-width: 100%;">
          </div>

          <div class="spc__summary-item spc--text-light">
            Basic Enrollement — The Foundations of Card Magic
          </div>

          <div class="spc__summary-item text-right mono">
            $52
          </div>
        </div>
      </div>

      <div data-checkout-price-modifiers="">
        <div class="spc__row hidden" data-checkout-price-modifier-tax="">
          <div class="spc__summary" data-checkout-price-modifier-tax="">
            <div class="spc__summary-item spc--text-light" data-checkout-tax-label="">VAT - 0% (Côte d'Ivoire)</div>

            <div class="spc__summary-item text-right mono" data-checkout-price="tax">+ $0.00</div>
          </div>

          <div class="hidden" data-checkout-vat-id-form="">
            <div class="binary-toggle" data-binary-toggle="">
              <button class="binary-toggle__label" data-binary-toggle-label="" id="add_vat_id">
                Add VAT ID
              </button>

              <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                <form class="form-inline spc__inline-form" data-checkout-inline-form="tax" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                  <div class="spc__inline-form-inner">
                    <input type="text" name="vat_tax_id" id="vat_tax_id" autocomplete="off" class="spc__inline-form-input" placeholder="VAT ID" data-checkout-inline-input="">

                    <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                    <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                      <button class="is-hidden btn btn-primary" id="save_vat_id" name="save_vat_id">
                        <div class="loader">
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                          <div class="loader-line"></div>
                        </div>

                        <div class="spc__inline-form-button-text">
                          Add VAT ID
                        </div>
                      </button>
                    </div>
                  </div>

                  <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                    Invalid VAT ID
                  </div>
</form>              </div>
            </div>
          </div>
        </div>

          <div class="spc__row">
            <div class="spc__summary hidden" data-checkout-price-modifier-coupon="">
              <div class="spc__summary-item spc--text-light">
                Coupon Discount
              </div>

              <div class="spc__summary-item text-right mono" data-checkout-price="coupon">- $0.00</div>
            </div>

            <div data-checkout-inline-form-coupon="">
              <div class="binary-toggle" data-binary-toggle="">
                <button class="binary-toggle__label" data-binary-toggle-label="" id="add_coupon">
                  Add Coupon
                </button>

                <div class="binary-toggle__label hidden" data-binary-toggle-content="">
                  <form class="form-inline spc__inline-form" data-checkout-inline-form="coupon" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
                    <div class="spc__inline-form-inner">
                      <input type="text" name="coupon_code" id="coupon_code" autocomplete="off" class="spc__inline-form-input" placeholder="Coupon code" data-checkout-inline-input="">

                      <div class="spc__inline-form-success" data-checkout-inline-success=""></div>

                      <div data-checkout-inline-button="" class="spc__inline-form-button is-hidden">
                        <button id="verify-coupon-code" class="is-hidden btn btn-primary">
                          <div class="loader">
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                            <div class="loader-line"></div>
                          </div>

                          <div class="spc__inline-form-button-text">
                            Apply
                          </div>
                        </button>
                      </div>
                    </div>

                    <div class="spc__inline-form-error hidden" data-checkout-inline-error="">
                      Invalid Coupon
                    </div>
</form>                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="spc__row spc__row--total">
        <div class="spc__summary">
          <div class="spc__summary-item">
            Total
          </div>

          <div class="spc__summary-item text-right">
            <span class="meta" data-checkout-currency="">
              USD
            </span>

            <span data-checkout-price="final">$52</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        </section>

      <div class="spc__update alert-warning hidden" data-checkout-tax-update="">
        <span class="spc__update-subtitle">
          The transaction total has been updated to reflect added tax based on your billing country. Please review the new total and confirm your payment.
        </span>
      </div>

      <div class="payment-error-box only-on-mobile hidden" data-checkout-credit-card-error="">
        <i class="fa fa-exclamation-circle"></i>
        <span data-checkout-credit-card-error-text=""></span>
      </div>

      <section class="spc__section spc__section--terms" data-checkout-agree-terms="">
        <form class="form-inline spc__inline-form" data-checkout-metadata-form="agreed_to_terms" action="https://sso.teachable.com/secure/6419/checkout/order_g1lkx710/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="/wqXpd3pYxNO/ROyCZb6dJdswTKuW9jYqOxo33+1KirdTHgUbcoVomgp3GtdaJ6KfuxvHbE812+C5h3URHZnZg==">
  <div class="boolean-checkbox spc__checkbox spc__terms-text">
    <label>
      <input type="hidden" name="agreed_to_terms" id="agreed_to_terms" value="false">
      <input id="agreed_to_terms_checkbox" name="agreed_to_terms" type="checkbox" value="true">
      <span>
  I agree to the <a href="https://courses.52kards.com/p/terms" target="_blank">Terms of Use</a> &amp; <a href="https://courses.52kards.com/p/privacy" target="_blank">Privacy Policy</a>

</span>
    </label>
  </div>
</form>
      </section>

      <div class="spc__primary-submit" data-checkout-enroll="">
        <button id="confirm-purchase" type="button" class="btn btn-primary spc__button is-disabled">
          <div class="loader">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
          </div>
          <span class="spc__button-text">Enroll in Course</span>
          <span class="spc__price--button" data-checkout-price="button">$52.00</span>
          <label for="spc-primary-submit"></label>
        </button>
      </div>

      <div class="spc__description hidden" data-checkout-price="description" data-checkout-price-string="for the first month then">$52</div>

    </div>

  </main>
</div>

@endsection
