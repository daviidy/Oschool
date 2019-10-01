<html class=" video videoautoplay">

<head>
  <link rel="stylesheet" href="/css/course_curriculum.css">
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
  <title>{{$course->name}} | Oschool</title>

  <meta name="asset_host" content="https://fedora.teachablecdn.com">
  <script src="https://fedora.teachablecdn.com/assets/application-1373410a4fe18258bccdd558991a1b1ed4c62390e2116938378a10bc0ff046cf.js" data-turbolinks-track="true"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="https://fedora.teachablecdn.com/packs/student-d0390011b83863c240d7.js"></script>





  <link href="/blog/rss" rel="alternate" title="RSS Feed" type="application/rss+xml">
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
  <link rel="stylesheet" type="text/css" href="chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css">
</head>

<body class="body-content-view" cz-shortcut-listen="true">

  <!-- Lecture Header -->
  <header class="full-width half-height is-signed-in">
    <div class="navbar navbar-fedora">
      <div class="navbar-header">
        <div class="lecture-left">
          <a class="nav-icon-back" aria-label="Back to courses" href="/courses/">
            <i class="fa fa-angle-left" title="Back to courses"></i>
          </a>
        </div>
        <button class="navbar-toggle" data-target=".navbar-header-collapse" data-toggle="collapse" type="button">
          <span class="sr-only">
            Toggle navigation
          </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Header Menu -->
        <div class="collapse navbar-collapse navbar-header-collapse">
          <ul class="nav navbar-nav navbar-right">


            <div class="navbar-enrolled">
              <!-- Sidebar Nav -->

              <li class="selected">
                <a href="/courses/532534" class="sidebar-nav-link">
                  <span class="lecture-sidebar-icon">
                    <i class="fa fa-list-alt"></i>
                  </span>
                  Course Curriculum
                </a>
              </li>


              <li class="">
                <a href="/courses/532534/author_bio" class="sidebar-nav-link">
                  <span class="lecture-sidebar-icon">
                    <i class="fa fa-user"></i>
                  </span>
                  Your Instructor
                </a>
              </li>
            </div>
            <li class="dropdown">
              <a aria-expanded="false" aria-haspopup="true" class="fedora-navbar-link navbar-link dropdown-toggle open-my-profile-dropdown" data-toggle="dropdown">
                <img class="gravatar" src="https://s.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?d=mm" alt="yaodavidarmel@gmail.com">
                <span class="navbar-current-user">David Yao</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-profile">
                  <a href="/current_user/profile">
                    Modifier votre profile
                  </a>
                </li>
                <li>
                  <a href="/current_user/subscriptions">
                    Gerer vos abonnements
                  </a>
                </li>
                <li>
                  <a href="/current_user/credit_card">
                    Ajouter / Echanger votre carte de credit
                  </a>
                </li>
                <li>
                  <a href="/current_user/contact">
                    Contactez nous
                  </a>
                </li>
                <li class="user-signout">
                  <a href="/sign_out">
                    Deconnection
                  </a>
                </li>
              </ul>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  @yield('content')


  <iframe name="filepicker_comm_iframe" id="filepicker_comm_iframe" src="https://dialog.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe><iframe name="fpapi_comm_iframe" id="fpapi_comm_iframe"
  src="https://www.filestackapi.com/dialog/comm_iframe/" style="display: none;"></iframe>
</body>

</html>
