@component('mail::layout')

{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    Oschool E-learning
@endcomponent
@endslot

Veillez confirmer votre compte en cliquent sur le bouton en bas

<em>Ce lien expirera dans 60 minutes</em>

@component('mail::button', ['url' => $url])
Verifiez l'email
@endcomponent


Merci d'etre un membre,<br>
{{ __("d'Oschool E-learning") }}



  {{-- Footer --}}
  @slot('footer')
  @component('mail::footer')
        @lang(
            "Si vous ne pouvez pas cliquer sur le bouton \"Verifiez l'email\" , Copiez et collez ce lien\n".
            'dans votre navigateur: [:url](:url)',
            [
                'url' => $url
            ]
        )
  @endcomponent
  @endslot
@endcomponent