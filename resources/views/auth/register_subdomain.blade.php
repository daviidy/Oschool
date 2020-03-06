@extends('layouts.auth_subdomain')

@section('content')

        <div style="margin: 0 auto;" class="_65e52571">
            <div class="_9fffb9c6" id="login-container">
                <div class="_e30ab864"><img class="_21dae779" src="/images/divers/login_subdomain.png"></div>
                <div class="_1644449">Inscrivez-vous à {{$school->name}}</div>
                <div class="_d6611e81">
                    <div class="_eaf002ed"><a class="_71544996"><span class="_82a246cb"><svg width="100%" height="100%" viewBox="0 0 20 20">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path
                                                  d="M18.896 0H1.104C.494 0 0 .494 0 1.104v17.793C0 19.506.494 20 1.104 20h9.58v-7.745H8.076V9.237h2.606V7.01c0-2.583 1.578-3.99 3.883-3.99 1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.597-1.496 1.47v1.928h2.989l-.39 3.018h-2.6V20h5.098c.608 0 1.102-.494 1.102-1.104V1.104C20 .494 19.506 0 18.896 0z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span><span class="_95a1a91b">CONTINUE WITH FACEBOOK</span></a></div>
                    <div class="_7cf3baca"><a class="_71544996"><span class="_82a246cb"><svg width="100%" height="100%" viewBox="0 0 14 14">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path d="M7 6v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C10.6.7 9 0 7.1 0c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span><span class="_95a1a91b">CONTINUE WITH GOOGLE</span></a></div>
                    <div class="_964b105c"><a class="_71544996"><span class="_82a246cb"><svg width="100%" height="100%" viewBox="0 0 17 20">
                                    <g id="Symbols" stroke="none" stroke-width="1">
                                        <g id="done_circle" fill-rule="nonzero">
                                            <g id="Shape">
                                                <path
                                                  d="M16.464 15.558c-.302.698-.66 1.34-1.074 1.93-.564.805-1.026 1.362-1.382 1.67-.552.509-1.144.769-1.777.783-.455 0-1.003-.129-1.642-.391-.64-.262-1.229-.391-1.767-.391-.564 0-1.17.13-1.817.39-.648.263-1.17.4-1.57.413-.608.026-1.213-.241-1.817-.803-.386-.337-.869-.913-1.447-1.73-.62-.873-1.13-1.884-1.529-3.038C.214 13.145 0 11.94 0 10.771c0-1.338.29-2.492.868-3.46a5.093 5.093 0 0 1 1.818-1.838 4.891 4.891 0 0 1 2.459-.694c.482 0 1.115.15 1.901.443.784.294 1.287.443 1.508.443.165 0 .724-.174 1.672-.522.897-.323 1.654-.457 2.273-.404 1.68.136 2.942.798 3.781 1.99-1.502.91-2.245 2.186-2.23 3.821.013 1.274.475 2.334 1.383 3.176.412.39.872.692 1.383.907-.11.321-.228.63-.352.925zM12.61.4c0 .999-.364 1.931-1.091 2.794-.878 1.026-1.939 1.618-3.09 1.525a3.108 3.108 0 0 1-.023-.378c0-.959.417-1.985 1.158-2.823a4.46 4.46 0 0 1 1.411-1.06c.57-.277 1.108-.43 1.615-.457.014.133.02.267.02.4z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span><span class="_95a1a91b">CONTINUE WITH APPLE</span></a></div>
                </div>
                <div class="_86bb084a">
                    <div class="_4dfd0c8c"></div>
                    <div class="_409742f4">or log in with email</div>
                    <div class="_4dfd0c8c"></div>
                </div>
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
                        </div><input class="_9a11307b" placeholder="Your Email" type="email">
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
                        </div><input class="_9a11307b" placeholder="Your Password" type="password">
                    </div>
                </div>
                <div class="_18c8ec60">Forgot Password?</div>
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
                <div class="_bf9bb0cc" id="login-button"><a class="_6142989a"><span>LOGIN</span></a></div>
                <div class="_a2fa3940">Don't have an account? <span class="_9020a18">Sign up</span></div>
            </div>
        </div>

    @endsection
