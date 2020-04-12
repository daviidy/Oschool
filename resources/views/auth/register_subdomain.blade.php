@extends('layouts.auth_subdomain')

@section('content')

        <div style="margin: 0 auto;" class="_65e52571">
            <div class="_9fffb9c6" id="login-container">
                <div class="_e30ab864"><img class="_21dae779" src="/images/divers/login_subdomain.png"></div>
                <div class="_1644449">Inscrivez-vous à {{$school->name}}</div>
                <!--div class="_d6611e81">
                    <div class="_eaf002ed">
                        <a class="_71544996" href="{{ url('login/facebook') }}">
                            <span class="_82a246cb"><svg width="100%" height="100%" viewBox="0 0 20 20">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path
                                                  d="M18.896 0H1.104C.494 0 0 .494 0 1.104v17.793C0 19.506.494 20 1.104 20h9.58v-7.745H8.076V9.237h2.606V7.01c0-2.583 1.578-3.99 3.883-3.99 1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.597-1.496 1.47v1.928h2.989l-.39 3.018h-2.6V20h5.098c.608 0 1.102-.494 1.102-1.104V1.104C20 .494 19.506 0 18.896 0z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                                <span class="_95a1a91b">CONTINUER AVEC FACEBOOK</span>
                        </a>
                    </div>
                    <div class="_7cf3baca">
                        <a class="_71544996" href="{{ url('login/gmail') }}">
                            <span class="_82a246cb">
                                <svg width="100%" height="100%" viewBox="0 0 14 14">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path d="M7 6v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C10.6.7 9 0 7.1 0c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="_95a1a91b">CONTINUER AVEC GOOGLE</span>
                        </a>
                    </div>
                    <div class="_964b105c">
                        <a class="_71544996" href="{{ url('login/github') }}">
                            <span class="_82a246cb">
                                <?xml version="1.0"?><svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"/></svg>
                            </span>
                            <span class="_95a1a91b">CONTINUER AVEC GITHUB</span>
                        </a>
                </div>
                <div class="__964b105c">
                        <a class="_71544996" href="{{ url('login/linkedin') }}">
                            <span class="_82a246cb">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px"><path fill="#fff" d="M8.421 14h.052 0C11.263 14 13 12 13 9.5 12.948 6.945 11.263 5 8.526 5 5.789 5 4 6.945 4 9.5 4 12 5.736 14 8.421 14zM4 17H13V43H4zM44 26.5c0-5.247-4.253-9.5-9.5-9.5-3.053 0-5.762 1.446-7.5 3.684V17h-9v26h9V28h0c0-2.209 1.791-4 4-4s4 1.791 4 4v15h9C44 43 44 27.955 44 26.5z"/></svg>
                            </span>
                            <span class="_95a1a91b">CONTINUER AVEC LINKEDIN</span>
                        </a>
                </div>
                </div-->
                <div class="_86bb084a">
                    <div class="_4dfd0c8c"></div>
                    <div class="_409742f4">ou inscrivez-vous par e-mail</div>
                    <div class="_4dfd0c8c"></div>
                </div>
                <form style="width: 100%;" method="POST" action="{{ route('register') }}" class="new_teachable_account" id="new_teachable_account" accept-charset="UTF-8">
                    @csrf
                <div class="_d70702c3">
                    <div class="_9830536">
                        <div class="_3f41241d">
                            <div class="_ae9eeff3"><svg width="100%" height="100%">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape" transform="translate(-550.000000, -612.000000)">
                                                <path
                                                  d="M558.4888,619.96 L550.0008,615.009 L550.0008,614 C550.0008,612.896 550.8958,612 552.0008,612 L568.0008,612 C569.1048,612 570.0008,612.896 570.0008,614 L570.0008,615.009 L561.5118,619.961 C560.5808,620.504 559.4208,620.505 558.4888,619.96 Z M562.52,621.6885 L570,617.3255 L570,626.0005 C570,627.1045 569.105,628.0005 568,628.0005 L552,628.0005 C550.896,628.0005 550,627.1045 550,626.0005 L550,617.3245 L557.481,621.6875 C558.258,622.1415 559.129,622.3685 560,622.3685 C560.872,622.3685 561.743,622.1415 562.52,621.6885 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <input name="name" class="_9a11307b" placeholder="Nom et prénoms" type="text" required>
                    </div>
                    <div class="_9830536">
                        <div class="_3f41241d">
                            <div class="_ae9eeff3"><svg width="100%" height="100%">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape" transform="translate(-550.000000, -612.000000)">
                                                <path
                                                  d="M558.4888,619.96 L550.0008,615.009 L550.0008,614 C550.0008,612.896 550.8958,612 552.0008,612 L568.0008,612 C569.1048,612 570.0008,612.896 570.0008,614 L570.0008,615.009 L561.5118,619.961 C560.5808,620.504 559.4208,620.505 558.4888,619.96 Z M562.52,621.6885 L570,617.3255 L570,626.0005 C570,627.1045 569.105,628.0005 568,628.0005 L552,628.0005 C550.896,628.0005 550,627.1045 550,626.0005 L550,617.3245 L557.481,621.6875 C558.258,622.1415 559.129,622.3685 560,622.3685 C560.872,622.3685 561.743,622.1415 562.52,621.6885 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <input name="email" class="_9a11307b" placeholder="Email" type="email" required>
                        <input hidden value="{{$school->id}}" name="school" class="_9a11307b" type="text" required>
                    </div>
                    <div class="_9830536">
                        <div class="_3f41241d">
                            <div class="_2e4ff3bc"><svg width="100%" height="100%" viewBox="0 0 18 21">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path
                                                  d="M14,7 L13,7 L13,5 C13,2.24 10.76,0 8,0 C5.24,0 3,2.24 3,5 L3,7 L2,7 C0.9,7 0,7.9 0,9 L0,19 C0,20.1 0.9,21 2,21 L14,21 C15.1,21 16,20.1 16,19 L16,9 C16,7.9 15.1,7 14,7 Z M9,15.287 L9,17 C9,17.552 8.552,18 8,18 C7.448,18 7,17.552 7,17 L7,15.287 C6.12,14.899 5.5,14.019 5.5,13 C5.5,11.625 6.625,10.5 8,10.5 C9.375,10.5 10.5,11.625 10.5,13 C10.5,14.019 9.88,14.899 9,15.287 Z M11.1,7 L4.9,7 L4.9,5 C4.9,3.29 6.29,1.9 8,1.9 C9.71,1.9 11.1,3.29 11.1,5 L11.1,7 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <input name="password" class="_9a11307b" placeholder="Mot de passe" type="password" required>
                    </div>
                     <div class="_9830536">
                        <div class="_3f41241d">
                            <div class="_2e4ff3bc"><svg width="100%" height="100%" viewBox="0 0 18 21">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path
                                                  d="M14,7 L13,7 L13,5 C13,2.24 10.76,0 8,0 C5.24,0 3,2.24 3,5 L3,7 L2,7 C0.9,7 0,7.9 0,9 L0,19 C0,20.1 0.9,21 2,21 L14,21 C15.1,21 16,20.1 16,19 L16,9 C16,7.9 15.1,7 14,7 Z M9,15.287 L9,17 C9,17.552 8.552,18 8,18 C7.448,18 7,17.552 7,17 L7,15.287 C6.12,14.899 5.5,14.019 5.5,13 C5.5,11.625 6.625,10.5 8,10.5 C9.375,10.5 10.5,11.625 10.5,13 C10.5,14.019 9.88,14.899 9,15.287 Z M11.1,7 L4.9,7 L4.9,5 C4.9,3.29 6.29,1.9 8,1.9 C9.71,1.9 11.1,3.29 11.1,5 L11.1,7 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                        </div>
                        <input name="password_confirmation" class="_9a11307b" placeholder="Confirmez le mot de passe" type="password" required>
                    </div>
                </div>

                <!--div class="_18c8ec60">Forgot Password?</div-->
                @error('full_name')
                <div class="_b4d26ce">
                    <span class="_904926a1">
                        {{$message}}
                    </span>
                </div>
                @enderror
                @error('email')
                <div class="_b4d26ce">
                    <span class="_904926a1">
                        {{$message}}
                    </span>
                </div>
                @enderror
                @error('password')
                <div class="_b4d26ce">
                    <span class="_904926a1">
                        {{$message}}
                    </span>
                </div>
                @enderror
                <div class="_bf9bb0cc" id="login-button">
                    <button style="background: transparent;border: none;" type="submit" class="_6142989a"><span>INSCRIVEZ-VOUS</span></button>
                </div>
                </form>
                <div class="_a2fa3940">Avez-vous un compte <a href="{{route('login')}}"><span class="_9020a18">Connectez-vous</span></a> </div>
            </div>
        </div>

    @endsection
