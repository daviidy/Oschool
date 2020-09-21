<div class="container__3TWtjj2MEnV9meZq0ZjTTC">
    <h1 class="handle__sEzDhz5n_Lipz8sfgqzma"><img src="/images/users/default/{{Auth::user()->image}}" class="avatar__2tJZ_OU8usiTvOekfHdMza" alt="{{ucfirst(Auth::user()->name)}}">{{ucfirst(Auth::user()->name)}}</h1>
    <!--
    <p class="label__2YO_cDf1Lu9PDDsn62kz6L">/
        betaNinja94590</p>
    <p class="label__2YO_cDf1Lu9PDDsn62kz6L"><span>Last coded
            14 days ago</span><br>Joined
        Oct 24, 2017</p>
    -->
        <a class="basicBtn__3xa1QN1wgQsDZ1jCBiNCJ_ btn__2v-TLC9Odx5KkacwG29i-V btn-brand-dark-blue__2FtBOFhB1Sm_V0B5IdP_g_ block__2Zi7TViIIVUdz7kEnuWrCI outline__ew2jvSIM6pGG9P_gw6Bm5 editButton__2nNpny-WbdD9O6JrG1F92A"
      data-btn="true" href="/users/settings_business">
          Modifier
      </a>
    <div class="section__2v9mQhyESDhguULKoR_J7P">
        <h2 class="sectionTitle__3Cht9NEhb0XxciVgKArgPR">Menu</h2>
        <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/schools/{{$school->id}}/courses">
            <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                <p>Tous nos cours</p>
                <!-- <p>83</p> -->
            </div>
        </a>
        <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/billings_business">
            <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                <p>Facturation</p>
                <!-- <p>83</p> -->
            </div>
        </a>
        <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/contact_business">
            <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                <p>Contact</p>
                <!-- <p>83</p> -->
            </div>
        </a>

        <a class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="/users/notifications_business">
            <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                <p>Mes messages</p>
                <!-- <p>83</p> -->
            </div>
        </a>
        {{--
        @if($school->user_id == Auth::user()->id)
        <a style="color: #4d90cc;" class="achievementsLink__jD_YGGUP5QvyO0nWE_LOb" href="{{ route('website.subdomain', ['school' => $school->id, 'subdomain' => $school->slug]) }}">
            <div class="statContainer__3vkcPCpgY9KLbdlgaArthp">
                <p style="font-weight: bold;">Tableau d'adminstration de l'école</p>
                <!-- <p>83</p> -->
            </div>
        </a>
        @endif
        --}}

    </div>
</div>
