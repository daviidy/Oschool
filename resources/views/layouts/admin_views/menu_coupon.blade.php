<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin/menu-school.css">
    <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="/nProgress/nprogress.css">
      <link rel="stylesheet" type="text/css" href="/notifs/amaran/amaran.min.css" />

      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <!--highlight js-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>

        <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
      <!--fin highlight js-->



    <style type="text/css">
        .Button-module_button__3Rp1B {
            color: green;
        }

        .Button-module_blue__2DKsN {
            color: blue;
        }

        .Button-module_light-gray__2YQYw {
            color: lightgrey;
        }
    </style>
    <style type="text/css">
        .FocusFixer-module_usingMouse__1zr_y :focus {
            outline: none;
        }
        .ql-container {
    height: 50%;
}
    </style>
    <style type="text/css">
        /* Single source of truth for variables to be used by JS if needed */
    </style>
    <!-- add initial data for bootstrapping admin app inline to minimize http requests -->




</head>



<body ng-class="bodyCssClasses" flow-prevent-drop="" class="state-admin state-admin-onboarding" style="" cz-shortcut-listen="true">

    @if (session('status'))
    <div style="z-index: 10000;" class="w3-panel w3-red w3-display-container">
        {{ session('status') }}
    </div>
    @endif





    <!--[if lte IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <div growl="">
        <div class="growl">
            <!---->
        </div>
    </div>

    <!---->
    <!---->
    <div ui-view="" class="" style="">
        <script>
            _.contains = _.includes
        </script>
        <!---->
        <!---->
        <div ui-view="onboarding" ng-if="::!currentUser.show_custom_role_upgrade"></div>
        <!---->
        <!---->
        <search ng-if="::config.search &amp;&amp; !currentUser.show_custom_role_upgrade">
            <!---->
        </search>
        <!---->
        <!---->
        <section ng-if="::!currentUser.show_custom_role_upgrade">
            <!---->
            <div class="admin-sidebar ">
                <div class="school-link"><a ng-href="/" ng-bind="::school.name" target="_blank" class="school-link-name" href="/"></a>
                    <!----><a ng-if="::(config.search &amp;&amp; permissions.can('use_search'))" ng-click="showSearch()" class="search-icon fastclickable"><i class="fa fa-search"></i></a>
                    <!---->
                </div>
                <div class="navs">
                    <ul id="admin-nav" what="admin nav" class="nav primary-nav nav-stacked ng-animate-disabled">
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_dashboard')" text="Dashboard" icon="icon icon-speed-fast" sref="admin.dashboard" onboarding-tooltip-if="school.is_launched == false" onboarding-tooltip-text="Complete the onboarding steps to launch your school.">
                            <!----><a what="link" ui-sref="admin.dashboard" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Dashboard" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-speed-fast"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Complete the onboarding steps to launch your school." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="tch-onboarding-sidebar-tooltip"></div>
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Tableau de bord</span>
                            </a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_students')" text="Users" icon="icon icon-users" sref="admin.users.students" include-active-state="admin.users" class="" style="">
                            <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/students">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Users" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-users"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Users</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" ng-if="::permissions.can('view_site')"
                          text="Site" icon="icon icon-site-map" sref="admin.site" onboarding-tooltip-if="school.is_domain_confirmed == false &amp;&amp; school.is_customized == false"
                          onboarding-tooltip-text="Save a customization and confirm your domain to complete this step.">
                            <!----><a what="link" ui-sref="admin.site" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Site" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-site-map"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Save a customization and confirm your domain to complete this step." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="tch-onboarding-sidebar-tooltip"></div>
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Site</span>
                            </a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_financial')" text="Sales" icon="icon icon-cash-dollar" sref="admin.transactions">
                            <!----><a what="link" ui-sref="admin.transactions" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/sales">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Sales" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-cash-dollar"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Sales</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('email_students') || permissions.can('view_gated_email')" text="Emails" icon="icon icon-envelope" sref="admin.emails">
                            <!----><a what="link" ui-sref="admin.emails" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/emails">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Emails" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-envelope"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Emails</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-2': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_support')" text="Help" icon="icon icon-question-circle" sref="admin.help" pin-to-bottom="2" top-border="!(school.school_plan.name == 'free' &amp;&amp; permissions.can('view_plan'))"
                          class="pin-bottom-level-2 pin-bottom">
                            <!----><a what="link" ui-sref="admin.help" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/help">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Help" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-question-circle"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Help</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-1': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_gated_teachable_u') || permissions.can('access_teachable_u')" text="TeachableU" icon="fa fa-building-o" sref="admin.teachable-u" pin-to-bottom="1" class="pin-bottom-level-1 pin-bottom">
                            <!----><a what="link" ui-sref="admin.teachable-u" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/teachable-u">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="TeachableU" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="fa fa-building-o"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">TeachableU</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-3': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::(school.school_plan.name == 'free' &amp;&amp; permissions.can('view_plan'))" text="Plan" icon="icon icon-rocket" sref="admin.settings.plan" pin-to-bottom="3" never-highlight="true" label="UPGRADE" top-border="true"
                          class="pin-bottom-level-3 pin-bottom top-border">
                            <!----><a what="link" ui-sref="admin.settings.plan" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings/plan" class="never-highlight">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Plan" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-rocket"></i>
                                <!---->
                                <!---->
                                <!----><label ng-if="::label" ng-bind="::label" class="label label-sidebar">UPGRADE</label>
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Plan</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_settings') &amp;&amp; !permissions.can('view_settings_notifications')" text="Settings" icon="icon icon-cog2" sref="admin.settings" class="active">
                            <!----><a what="link" ui-sref="admin.settings" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Settings" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-cog2"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Settings</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <hr ng-if="::permissions.can('view_courses')">
                        <!---->
                        <!---->
                        <!---->
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_settings') &amp;&amp; !permissions.can('view_settings_notifications')" text="Settings" icon="icon icon-cog2" sref="admin.settings" class="active">
                            <!----><a what="link" ui-sref="admin.settings" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Settings" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-book2"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Settings</span></a>
                            <!---->
                            <!---->
                            <!---->
                        </li>
                        <!---->
                        <!---->
                        <!---->

                        <!---->
                        <!---->
                        <!---->
                    </ul>
                    @include('includes.admin_views.submenus.site-nav')
                    @include('includes.admin_views.submenus.users-nav')
                    @if(\Route::current()->getName() == 'schoolSettings')
                    @include('includes.admin_views.submenus.settings-nav')
                    @endif
                    @include('includes.admin_views.submenus.emails-nav')
                    @if(\Route::current()->getName() == 'course')
                      @include('includes.admin_views.submenus.course-nav')
                    @endif


                </div>
                <div tooltip="David Yao" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="visible-xs" class="misc-buttons">
                    <div dropdown="" class="btn-group tch-dropdown-group dropup dropdown">
                        <!---->
                        <!----><a href="/my_teachable_profile" ng-if="::currentUser.is_teachable_account" target="_blank" class="tch-dropdown-group-selector"><img gravatar-src-once="user.email" align="left" gravatar-size="30" class="user-avatar"
                              src="https://secure.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?size=30&amp;default=mm">
                            <div class="myteachable-icon-overlay">&nbsp;</div>
                            <div ng-bind="::user.name" class="user-name">David Yao</div>
                        </a>
                        <!----><a what="dropdown-toggle" onclick="show2()" dropdown-toggle="" type="button" href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-up"></i></a>
                        <ul role="menu" class="dropdown-menu dropdown-menu-left" id="drop1">
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://teachable.com/experts?src=in-app-menu" target="_blank" what="experts-marketplace">Oschool Experts</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://www.facebook.com/groups/496090827168552/" target="_blank" what="instructor-community">Communauté d'instructeurs</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://teachable.zendesk.com/" target="_blank" what="knowledge-base">Connaissances de base</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')" role="presentation" class="divider"></li>
                            <!---->
                            <!---->
                            <li ng-if="::currentUser.is_teachable_account"><a href="/my_teachable_profile" target="_blank" translate="FOOTER.MYTEACHABLE_PROFILE">Mon profil Oschool</a></li>
                            <!---->
                            <!---->
                            <!---->
                            <li><a href="/sign_out" translate="FOOTER.LOG_OUT" what="logout">Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="/js/admin_views/menu.js"></script>
            @yield('content')


        </section>
        <!---->
        <!---->
        <div data-ng-show="filepickerModalOpen" data-ng-click="modalClose()" class="modal-backdrop in fastclickable ng-hide">
            <div id="filepicker-modal-container" data-ng-show="filepickerModalOpen" class="ng-hide"><a data-ng-click="filepickerModalClose()" class="fa fa-close fastclickable"></a><iframe id="filepicker-modal" name="filepicker-modal" frameborder="0"
                  marginwidth="0" marginheight="0" data-ng-show="filepickerModalOpen" class="ng-hide" __idm_frm__="10597"></iframe></div>
        </div>
        <modal></modal>
    </div>

    <script type="text/javascript" src="https://api.filepicker.io/v2/filepicker.js"></script>
    <div class="cfp-hotkeys-container fade" ng-class="{in: helpVisible}" style="display: none;">
        <div class="cfp-hotkeys">
            <!---->
            <h4 class="cfp-hotkeys-title" ng-if="!header">Keyboard Shortcuts:</h4>
            <!---->
            <!---->
            <table>
                <tbody>
                    <!---->
                    <tr ng-repeat="hotkey in hotkeys | filter:{ description: '!$$undefined$$' }">
                        <td class="cfp-hotkeys-keys">
                            <!----><span ng-repeat="key in hotkey.format() track by $index" class="cfp-hotkeys-key">?</span>
                            <!---->
                        </td>
                        <td class="cfp-hotkeys-text">Show / hide this help menu</td>
                    </tr>
                    <!---->
                    <tr ng-repeat="hotkey in hotkeys | filter:{ description: '!$$undefined$$' }" class="" style="">
                        <td class="cfp-hotkeys-keys">
                            <!----><span ng-repeat="key in hotkey.format() track by $index" class="cfp-hotkeys-key">f</span>
                            <!---->
                        </td>
                        <td class="cfp-hotkeys-text">Search your school</td>
                    </tr>
                    <!---->
                </tbody>
            </table>
            <!---->
            <div class="cfp-hotkeys-close fastclickable" ng-click="toggleCheatSheet()">×</div>
        </div>
    </div>



    <script type="text/javascript" src="/notifs/amaran/jquery.amaran.js"></script>

    <!--youtube loading-->
    <script type="text/javascript" src="/nProgress/nprogress.js"></script>
    <script type="text/javascript">
    NProgress.configure({ showSpinner: false });
    NProgress.start();
    NProgress.done();
    </script>
    <!--fin youtube loading-->

    <script type="text/javascript" src="/js/admin_views/menu-icon.js"></script>


    <!--quill js-->

    <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="/js/quill/image-resize.min.js"></script>
  <script src="/js/quill/video-resize.min.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- Initialize Quill editor -->
  <script>
  //sauvegarde des données du quill editor

  //initialisation de l'editeur
  var options = {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['size', 'bold', 'italic', 'underline'],
      ['image', 'code-block', 'video', 'blockquote', 'code', 'align', 'link'],
      ['color'],
  ],
  imageResize: {
       modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
   },
   videoResize: {
          modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
      },
   syntax: true,
  },
  placeholder: 'Ecrivez ici...',
  theme: 'snow'  // or 'bubble'
  };
  var quill = new Quill('#site-description', options);
  var quill2 = new Quill('#course-description', options);

  //mise a jour description ecole

  //recuperation de la description ecole
  var form = document.getElementById("description");
  if (form) {

      form.onsubmit = function() {
      // Populate hidden form on submit
      var description = document.querySelector('input[name=description]');
      description.value = JSON.stringify(quill.getContents());


      $.ajax({
          type: 'post',
          url: '/updateSchool',
          data: {
              '_token': $('input[name=_token]').val(),
              'id': $("#schoolDescription").val(),
              'description': quill.root.innerHTML,

          },
          success: function(data) {
              $.amaran({'message':"Modifications enregistrées!"});

          },
          error: function(){
              alert('erreur');
          }
      });

      return false;
      };

  }


  //fin mise a jour description ecole




  //description longue course


  //recuperation de la description ecole
  var form_course = document.getElementById("formId");
  if (form_course) {

      form_course.onsubmit = function() {
      // Populate hidden form on submit



      $.ajax({
          type: 'post',
          url: '/updateCourseDescription',
          data: {
              '_token': '{{csrf_token()}}',
              'id': $("#courseDescription").val(),
              'description': quill2.root.innerHTML,

          },
          success: function(data) {
              $.amaran({'message':"Modifications enregistrées!"});

          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

      return false;
      };

  }





$('#submitNewAuthor').click(function(){

    var bio = document.querySelector('input[name=bio]');
    bio.value = JSON.stringify(quill.getContents());

    var dataImage = new FormData();
    dataImage.append('image', $('#imageAuthor')[0].files[0]);
    dataImage.append('_token', '{{csrf_token()}}');
    dataImage.append('school_id', $("#schoolDescription").val());
    dataImage.append('full_name', $("#nameAuthor").val());
    dataImage.append('headline', $("#headlineAuthor").val());
    dataImage.append('bio', quill.root.innerHTML);

//après on réinitialise tout
    $("#schoolDescription").val('');
    $("#nameAuthor").val('');
    $("#headlineAuthor").val('');
    $("#imageAuthor").val('');
    quill.setContents([]);

    $('#addAuthorZone').removeClass("add");

    $.ajax({
        type: 'post',
        url: '/addAuthor',
        contentType: false,
        processData: false,
        data: dataImage,

        success: function(data) {
            $("#author_select option:selected").removeAttr("selected");
            $('#author_select').append('<option label="" value="'+data.id+'" selected="selected">'+data.full_name+'</option>');
            $.amaran({'message':"Auteur ajouté avec succès"});

        },
        error: function(){
            alert('erreur');
        }
    });

    return false;

});



$('#createLecture').on('click', function() {
    var dataImage = new FormData();
    var files = $("#downloadable_files")[0].files;
    if ($("#image_lesson").val() !== '') {
        dataImage.append('image', $("#image_lesson")[0].files[0]);
    }
    dataImage.append('_token', '{{csrf_token()}}');
    dataImage.append('school_id', $("input[name=school_id]").val());
    dataImage.append('course_id', $("input[name=course_id]").val());
    dataImage.append('section_id', $("input[name=section_id]").val());
    dataImage.append('title', $("input[name=title]").val());
    dataImage.append('video', $("input[name=video]").val());
    if(files.length !== 0){
        for (var i = 0; i < files.length; i++)
            {
                dataImage.append('downloadable_files[]', files[i]);
            }
    }
    dataImage.append('full_text', quill.root.innerHTML);

    $.ajax({
        type: 'post',
        url: '/addLecture',
        contentType: false,
        processData: false,
        data: dataImage,
        success: function(data) {
            $.amaran({'message':"La leçon a bien été créée !"});
            window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+data.course_id+'/curriculum';



        },
        error: function(){
            alert('erreur');
        }
    });
});


$('#updateLecture').on('click', function() {
    var dataImage = new FormData();
    if ($("#image_lesson").val() !== '') {
        dataImage.append('image', $("#image_lesson")[0].files[0]);
    }
    var files = $("#downloadable_files")[0].files;



    dataImage.append('_token', '{{csrf_token()}}');
    dataImage.append('school_id', $("input[name=school_id]").val());
    dataImage.append('course_id', $("input[name=course_id]").val());
    dataImage.append('section_id', $("input[name=section_id]").val());
    dataImage.append('lesson_id', $("input[name=lesson_id]").val());
    dataImage.append('title', $("input[name=title]").val());
    dataImage.append('video', $("input[name=video]").val());
    dataImage.append('status', $("#status").children("option:selected").val());
    dataImage.append('free_lesson', $("#free_lesson").children("option:selected").val());
    if(files.length !== 0){
        for (var i = 0; i < files.length; i++)
            {
                dataImage.append('downloadable_files[]', files[i]);
            }
    }

    dataImage.append('full_text', quill.root.innerHTML);

    $.ajax({
        type: 'post',
        url: '/updateLecture',
        contentType: false,
        processData: false,
        data: dataImage,
        success: function(data) {
            $.amaran({'message':"La leçon a bien été mise à jour !"});
            window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+data.course_id+'/curriculum';



        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
});


$('#delete-lecture').on('click', function() {


    $.ajax({
        type: 'post',
        url: '/deleteLecture',
        dataType: "json",
        data: {
            '_token': '{{csrf_token()}}',
            'id': $(this).parents().eq(2).attr('data-index'),
        },
        success: function(data) {
            $.amaran({'message':"La leçon a bien été supprimée"});
        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
});


$("#delete").on('click', function(){

    $('#popup-background').css('display', 'block');
    $('#popup').css('display', 'block');

});

$("#cancel").on('click', function(){

    $('#popup-background').css('display', 'none');
    $('#popup').css('display', 'none');

});


  </script>

  <script type="text/javascript">

  $(document).ready(function(){
      $('.lecture-list').sortable({
          update: function(event, ui){
              $(this).children().each(function(index){
                  if ($(this).attr('data-position') != (index+1)) {
                      $(this).attr('data-position', (index+1)).addClass('updated_lesson');
                  }
              });

              saveNewPositions();
          }
      });
  });

  function saveNewPositions(){
      var positions = [];
      $('.updated_lesson').each(function(){
          positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
          $(this).removeClass('updated_lesson');
      });
console.log(JSON.stringify(positions));
      $.ajax({
          type: 'post',
          url: '/saveNewPositions',
          dataType: "json",
          data: {
              '_token': '{{csrf_token()}}',
              'update': 1,
              'positions': positions,
          },
          success: function() {
              $.amaran({'message':"Programme enregistré"});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  }

  </script>



  <script type="text/javascript">

  $(document).ready(function(){
      $('.questions_list').sortable({
          update: function(event, ui){
              $(this).children().each(function(index){
                  if ($(this).attr('data-position') != (index+1)) {
                      $(this).attr('data-position', (index+1)).addClass('updated_question');
                  }
              });

              saveNewQuestionPositions();
          }
      });
  });

  function saveNewQuestionPositions(){
      var lessonPositions = [];
      $('.updated_question').each(function(){
          lessonPositions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
          $(this).removeClass('updated_question');
      });
      console.log(JSON.stringify(lessonPositions));
      $.ajax({
          type: 'post',
          url: '/saveNewQuestionPositions',
          dataType: "json",
          data: {
              '_token': '{{csrf_token()}}',
              'update': 1,
              'positions': lessonPositions,
          },
          success: function() {
              $.amaran({'message':"Ordre sauvegardé"});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  }

  </script>



  <script type="text/javascript">

  $(document).ready(function(){
      $('.section-list').sortable({
          update: function(event, ui){
              $(this).children().each(function(index){
                  if ($(this).attr('data-position') != (index+1)) {
                      $(this).attr('data-position', (index+1)).addClass('updatedSections');
                  }
              });

              saveNewSectionPositions();
          }
      });
  });

  function saveNewSectionPositions(){
      var positions = [];
      $('.updatedSections').each(function(){
          positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
          $(this).removeClass('updatedSections');
      });
console.log(JSON.stringify(positions));
      $.ajax({
          type: 'post',
          url: '/saveNewSectionPositions',
          dataType: "json",
          data: {
              '_token': '{{csrf_token()}}',
              'update': 1,
              'positions': positions,
          },
          success: function() {
              $.amaran({'message':"Programme enregistré"});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  }


  </script>



<script type="text/javascript">

//ajouter une question au quiz
  $('#add-question').on('click', function(event) {
      event.preventDefault();

      var dataImage = new FormData();
      var tab = [];

      var question = $('#question-text').val();
      var options = $('.text_question_quiz');
      console.log(options);
      $.each(options, function(){
          if ($(this).val() !== "") {

              var correct = $(this).prev().find('input[name=correct]:checked').length > 0;
              console.log(correct);
              console.log($(this).val());
              var obj = {
                  'option': $(this).val(),
                  'correct': correct,
              };
              tab.push(obj);

          }
      });
      console.log(tab);
      console.log(question);
      console.log(JSON.stringify(tab));


      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $('input[name=school_id]').val());
      dataImage.append('course_id', $('input[name=course_id]').val());
      dataImage.append('lesson_id', $('input[name=lesson_id]').val());
      dataImage.append('question', question);
      dataImage.append('option', JSON.stringify(tab));

      $.ajax({
          type: 'post',
          url: '/addQuiz',
          contentType:false,
          cache: false,
          processData:false,
          data: dataImage,
          success: function(data) {
              $.amaran({'message':'La question du quiz a bien été ajoutée'});
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+$("input[name=course_id]").val()+'/curriculum/'+$("input[name=section_id]").val()+'/lessons/'+$("input[name=lesson_id]").val()+'/edit/#quiz';


          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

  });




  $('.edit-question').on('click', function(event) {
      event.preventDefault();

      var dataImage = new FormData();
      var tab = [];

      var question = $(this).parents(2).siblings('.quiz-question').find('#question-text-edit').val();
      var question_id = $(this).parents(2).siblings('.quiz-question').find('#question-id').val();
      var options = $(this).parents(2).siblings('.quiz-question').find('.text_question_quiz_edit');
      console.log(options);
      $.each(options, function(){
          if ($(this).val() !== "") {

              var correct = $(this).prev().find('input[name=correct]:checked').length > 0;
              console.log(correct);
              console.log($(this).val());
              var obj = {
                  'id': $(this).siblings('input[name=option_id]').val(),
                  'option': $(this).val(),
                  'correct': correct,
              };
              tab.push(obj);

          }
      });
      console.log(tab);
      console.log(question);
      console.log(JSON.stringify(tab));




      dataImage.append('_token', '{{csrf_token()}}');
      dataImage.append('school_id', $('input[name=school_id]').val());
      dataImage.append('course_id', $('input[name=course_id]').val());
      dataImage.append('lesson_id', $('input[name=lesson_id]').val());
      dataImage.append('quiz_id', $('input[name=quiz_id]').val());
      dataImage.append('question', question);
      dataImage.append('question_id', question_id);
      dataImage.append('option', JSON.stringify(tab));

      $.ajax({
          type: 'post',
          url: '/editQuiz',
          contentType:false,
          cache: false,
          processData:false,
          data: dataImage,
          success: function(data) {
              $.amaran({'message':'La question du quiz a bien été modifiée'});
              window.location = '/schoolAdmin/'+$("input[name=school_id]").val()+'/courses/'+$("input[name=course_id]").val()+'/curriculum/'+$("input[name=section_id]").val()+'/lessons/'+$("input[name=lesson_id]").val()+'/edit/';


          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });

  });




  //si on clique sur la croix
  //pour supprimer une option
  //pour le mode d'edition)

  $('.answer-remove-edit').on('click', function(){
      var option_id = $(this).parents().eq(1).find("input[name=option_id]").val();
      $(this).parents().eq(2).remove();

      $.ajax({
          type: 'post',
          url: '/deleteOption',

          data: {
              '_token': '{{csrf_token()}}',
              'id': option_id,
          },
          success: function() {
              $.amaran({'message':'L\'option a bien été supprimée'});
          },
          error: function (xhr, msg) {
            console.log(msg + '\n' + xhr.responseText);
        }
      });
  });


  //suppression d'options qu'on vient
  //de rajouter

  $('.multiple-choice').on('click', '.answer-remove', function(e) {
    e.preventDefault();
      $(this).parents('.reponses').remove();
  });




</script>

  <!--fin quill js-->


</body>

</html>
