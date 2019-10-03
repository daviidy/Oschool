<html class=" video no-videoautoplay">

<head>
  <link rel="stylesheet" href="/css/course_lecture.css">
  <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
  <style type="text/css">
    @charset "UTF-8";

    [ng\:cloak],
    [ng-cloak],
    [data-ng-cloak],
    [x-ng-cloak],
    .ng-cloak,
    .x-ng-cloak,
    .ng-hide:not(.ng-hide-animate) {
      display: none !important;
    }

    ng\:form {
      display: block;
    }

    .ng-animate-shim {
      visibility: hidden;
    }

    .ng-anchor {
      position: absolute;
    }
  </style>


  <link rel="stylesheet" media="screen" href="https://fedora.teachablecdn.com/assets/bootstrap-fb144454ae2d6daf41829e849802fb78e65ccf7a89947805dd103de5cb97d355.css" data-turbolinks-track="true">
  <link
    href="https://themes.teachablecdn.com/themecss/production.css?_=56db37594f88&amp;brand_course_heading=%23ffffff&amp;brand_heading=%23000000&amp;brand_homepage_heading=%23ffffff&amp;brand_navbar_fixed_text=%23e3e3e3&amp;brand_navbar_text=%23ffffff&amp;brand_primary=%234d4d4d&amp;brand_secondary=%230071bc&amp;brand_text=%234d4d4d&amp;font=Arial&amp;logged_out_homepage_background_image_overlay=0.0&amp;logged_out_homepage_background_image_url=https%3A%2F%2Fwww.filepicker.io%2Fapi%2Ffile%2FU4pfmJMDQ9mzsRTQHFQ2"
    rel="stylesheet" data-turbolinks-track="true">
  <title>{{$lesson->title}} | {{$lesson->course->name}} | Oschool</title>
  <meta name="description" content="{{$lesson->title}}">

  <meta name="asset_host" content="https://fedora.teachablecdn.com">
  <script src="https://fedora.teachablecdn.com/assets/application-1373410a4fe18258bccdd558991a1b1ed4c62390e2116938378a10bc0ff046cf.js" data-turbolinks-track="true"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="https://fedora.teachablecdn.com/packs/student-d0390011b83863c240d7.js"></script>




  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <style type="text/css">
    .fp__btn {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      display: inline-block;
      height: 34px;
      padding: 4px 30px 5px 40px;
      position: relative;
      margin-bottom: 0;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      font-family: "Open Sans", sans-serif;
      font-size: 12px;
      font-weight: 600;
      line-height: 1.42857143;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      background: #ef4925;
      background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAVCAYAAABLy77vAAAABGdBTUEAALGPC/xhBQAAAJRJREFUOBHNUcEWgCAIy14fbl9egK5MRarHQS7ocANmOCgWh1gdNERig1CgwPlLxkZuE80ndHlU+4Lda1zz0m01dSKtcz0h7qpQb7WR+HyrqRPxahzwwMqqkEVs6qnv+86NQAbcJlK/X+vMeMe7XcBOYaRzcbItUR7/8QgcykmElQrQPErnmxNxl2yyiwcgEvQUocIJaE6yERwqXDIAAAAASUVORK5CYII=");
      background-repeat: no-repeat;
      background-position: 15px 6px;
      border: 1px solid transparent;
      border-radius: 17px
    }

    .fp__btn:hover {
      background-color: #d64533
    }

    .fp__btn::after {
      position: absolute;
      content: "";
      top: 15px;
      right: 14px;
      width: 7px;
      height: 4px;
      background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAICAYAAAA1BOUGAAAABGdBTUEAALGPC/xhBQAAAGlJREFUCB1j/P//vw4DA4MiEKOD+0xAkatA/AJNBsS/ysTIyPgfyDgHxO+hCkD0Oag4RAhoPDsQm4NoqCIGBiBnAhBjAxNAkkxAvBZNFsQHuQesmxPIOQZVAKI54UZDFYgABbcBsQhMAgDIVGYSqZsn6wAAAABJRU5ErkJggg==");
    }

    .fp__btn:hover::after {
      background-position: 0 -4px;
    }

    .fp__btn:active,
    .fp__btn:focus {
      outline: none
    }

    @media only screen and (min--moz-device-pixel-ratio: 2),
    only screen and (-o-min-device-pixel-ratio: 2 / 1),
    only screen and (-webkit-min-device-pixel-ratio: 2),
    only screen and (min-device-pixel-ratio: 2) {
      .fp__btn {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAqCAYAAADbCvnoAAAABGdBTUEAALGPC/xhBQAAAQFJREFUWAntWEESwjAIbBwfHl+upNoRNjKUJhk5kIvZQGG7bHOwPGltgdYtEJedShKyJnLHhEILz1Zi9HCOzFI7FUqFLAWseDgPdfeQ9QZ4b1j53nstnEJJyBqx20NeT1gEMB5uZG6Fzn5lV5UMp1ASQhMjdnvoqjewsYbDjcytEH5lsxULp1AS0sx8nJfVnjganf3NkVlKhVPIfQ9Zb6jF0atK3mNriXwpicPHvIeyr3sTDA53VgpgH8BvMu1ZCCz7ew/7MPwlE4CQJPNnQj2ZX4SYlEPbVpsvKFZ5TOwhcRoUTQiwwhVjArPEqVvRhMCneMXzDk9lwYphIwrZZOihF32oehMAa1qSAAAAAElFTkSuQmCC");
        background-size: 18px 21px
      }

      .fp__btn::after {
        background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAQCAYAAAAmlE46AAAABGdBTUEAALGPC/xhBQAAANpJREFUKBWVkU8KglAYxJ/u3HuBwmUX8BqepKN4ka4RguDOVYu2QVCrhIJ6/caekqLiGxi+PzPD58PAWrszxmygD84h7hpePFLy1mEQBJamgvcVYXkqZXTR0LwpJWw0z0Ba6bymDcrI4kkp4EvzCNoVztNKfVATwoOiyx/NDup1SVqPQVBbDDeK3txBb9JuHfhNW3HWjZhDX+SGRAgPHkl5f0+kieBxRVieaPD5LGJ4WghLiwehbkBI4HUirF3S+SYrhhQ2f2H16aR5vMSYwbdjNtYXZ0J7cc70BXnFMHIGznzEAAAAAElFTkSuQmCC");
        background-size: 7px 8px;
      }
    }
  </style>

</head>

<body data-no-turbolink="true" cz-shortcut-listen="true">

  <!-- Lecture Header -->
  <header class="full-width half-height is-signed-in">
    <div class="lecture-left">
      <a class="nav-icon-back" aria-label="Back to course curriculum" data-no-turbolink="true" role="button" href="/courses/532534">
        <i class="fa fa-angle-left" title="Back to course curriculum"></i>
      </a>
      <div class="dropdown settings-dropdown" role="menubar">
        <a href="#" class="nav-icon-settings dropdown-toggle" aria-label="Settings Menu" aria-haspopup="true" role="menuitem" id="settings_menu" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-cog" title="Settings Menu"></i>
        </a>
        <ul class="dropdown-menu left-caret" role="menu" aria-labelledby="settings_menu">
          <!-- AUTOPLAY -->
          <li aria-label="menuitem">
            <div class="switch" id="switch-autoplay-lectures">
              <input id="custom-toggle-autoplay" class="custom-toggle custom-toggle-round" name="toggle-autoplay" type="checkbox" aria-label="Autoplay" data-control-initialized="true">
              <label for="custom-toggle-autoplay"></label>
            </div>
            <span aria-labelledby="switch-autoplay-lectures">Autoplay</span>
          </li>
          <!-- AUTOCOMPLETE -->
          <li aria-label="menuitem">
            <div class="switch" id="switch-autocomplete-lectures">
              <input id="custom-toggle-autocomplete" class="custom-toggle custom-toggle-round" name="toggle-autocomplete" type="checkbox" aria-label="Autocomplete" data-control-initialized="true">
              <label for="custom-toggle-autocomplete"></label>
            </div>
            <span aria-labelledby="switch-autocomplete-lectures">Autocomplete</span>
          </li>
          <!-- PLAYER TYPE -->
          <li aria-label="menuitem">
            <div class="pull-right">
              <div class="switch-toggle well" id="switch-lecture-player">
                <input id="toggle_html5" name="custom-toggle-player" type="radio" data-control-initialized="true">
                <label for="toggle_html5" onclick="">HTML5</label>
                <input id="toggle_flash" name="custom-toggle-player" type="radio" data-control-initialized="true">
                <label for="toggle_flash" onclick="">Flash</label>
                <a class="btn btn-primary"></a>
              </div>
            </div>
            <span aria-labelledby="switch-lecture-player">Player</span>
          </li>
          <!-- PLAYBACK SPEED -->
          <li aria-label="menuitem">
            <div class="pull-right">
              <button class="playback-speed" role="button" data-control-initialized="true">
                <span class="glyphicon glyphicon-forward">1x</span></button>
            </div>
            Speed
          </li>
          <!-- QUALITY: not working yet -->
          <!--  <li>
    <div class="pull-right">
      <div class="switch-toggle switch-3 well">
        <input id="auto" name="quality" type="radio" checked>
        <label for="auto" onclick="">Auto</label>
        <input id="hd" name="quality" type="radio">
        <label for="hd" onclick="">HD</label>
        <input id="sd" name="quality" type="radio">
        <label for="sd" onclick="">SD</label>
        <a class="btn btn-primary"></a>
      </div>
    </div>
    Quality
  </li> -->
        </ul>

      </div>
      <a class="nav-icon-list show-xs hidden-sm hidden-md hidden-lg collapsed" aria-label="Course Sidebar" role="button" data-toggle="collapse" href="#courseSidebar" aria-expanded="false" aria-controls="courseSidebar">
        <i class="fa fa-list" title="Course Sidebar"></i>
      </a>
    </div>

    <div class="lecture-nav">
      <a class="nav-btn" href="" role="button" id="lecture_previous_button" style="display: none;">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        &nbsp;
        <span class="nav-text">Previous Lecture</span>
      </a>
      @if(Auth::user()->lessons->contains($lesson->id))
      <a class="nav-btn complete" data-cpl-tooltip="You must complete all lecture material before progressing" href="/course/{{$lesson->course->slug}}/lessons/{{$next_lesson->slug}}" role="button" id="lecture_complete_button">
        <span class="nav-text">Chapitre suivant</span>
        &nbsp;
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </a>
      @else

      <a type="submit" class="nav-btn complete" data-cpl-tooltip="You must complete all lecture material before progressing" href="" role="button" id="lecture_complete_button">
          <form class="" action="/completeLesson" method="post" style="margin-bottom: 0px;">
              @csrf
              <input type="hidden" name="id" value="{{$lesson->id}}">
              <span class="nav-text">Valider et continuer</span>
              &nbsp;
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              
            </form>
          </a>
      @endif

    </div>

  </header>

  @yield('content')

  <iframe name="filepicker_comm_iframe" id="filepicker_comm_iframe" src="https://dialog.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe><iframe name="fpapi_comm_iframe" id="fpapi_comm_iframe"
  src="https://www.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe>
  </body>

  </html>
