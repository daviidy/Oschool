@component('mail::layout')

{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    Oschool E-learning
@endcomponent
@endslot


# Salut

Cliquez sur le lien pour modifier votre mot de passe

@component('mail::button', ['url' => $url])
Changez de mot de passe
@endcomponent


  {{-- Footer --}}
  @slot('footer')
  @component('mail::footer')
        @lang(
            "Si vous ne pouvez pas cliquer sur le bouton \"Changez de mot de passe\" , Copiez et collez ce lien\n".
            'dans votre navigateur: [:url](:url)',
            [
                'url' => $url
            ]
        )
  @endcomponent
  @endslot
@endcomponent
