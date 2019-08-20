<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/admin/menu-school.css">

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
                <div class="school-link"><a ng-href="/" ng-bind="::school.name" target="_blank" class="school-link-name" href="/">{{$school->name}}</a>
                    <!----><a ng-if="::(config.search &amp;&amp; permissions.can('use_search'))" ng-click="showSearch()" class="search-icon fastclickable"><i class="fa fa-search"></i></a>
                    <!---->
                </div>
                <div class="navs">
                    <ul id="admin-nav" what="admin nav" class="nav primary-nav nav-stacked ng-animate-disabled">
                        <!---->
                        <li what="nav item" ui-sref-active="active"
                          ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
                          ng-if="::permissions.can('view_dashboard')" text="Dashboard" icon="icon icon-speed-fast" sref="admin.dashboard" onboarding-tooltip-if="school.is_launched == false" onboarding-tooltip-text="Complete the onboarding steps to launch your school.">
                            <!----><a what="link" ui-sref="admin.dashboard" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}">
                                <!----><i ng-if="::icon" ng-class="::icon" tooltip="Dashboard" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="primary-nav-tooltip" class="icon icon-speed-fast"></i>
                                <!---->
                                <!---->
                                <!---->
                                <!---->
                                <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Complete the onboarding steps to launch your school." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="tch-onboarding-sidebar-tooltip"></div>
                                <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Dashboard</span>
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
                            <!----><a what="link" ui-sref="admin.settings" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/settings">
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
                    @include('includes.admin_views.submenus.settings-nav')
                    @include('includes.admin_views.submenus.emails-nav')

                </div>
                <div tooltip="David Yao" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true" tooltip-class="visible-xs" class="misc-buttons">
                    <div dropdown="" class="btn-group tch-dropdown-group dropup dropdown">
                        <!---->
                        <!----><a href="/my_teachable_profile" ng-if="::currentUser.is_teachable_account" target="_blank" class="tch-dropdown-group-selector"><img gravatar-src-once="user.email" align="left" gravatar-size="30" class="user-avatar"
                              src="https://secure.gravatar.com/avatar/9c275cba24f7c939201cda28f832f8e0?size=30&amp;default=mm">
                            <div class="myteachable-icon-overlay">&nbsp;</div>
                            <div ng-bind="::user.name" class="user-name">David Yao</div>
                        </a>
                        <!----><a what="dropdown-toggle" dropdown-toggle="" type="button" href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-up"></i></a>
                        <ul role="menu" class="dropdown-menu dropdown-menu-left">
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://teachable.com/experts?src=in-app-menu" target="_blank" what="experts-marketplace">Teachable Experts</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://www.facebook.com/groups/496090827168552/" target="_blank" what="instructor-community">Instructor Community</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')"><a href="https://teachable.zendesk.com/" target="_blank" what="knowledge-base">Knowledge Base</a></li>
                            <!---->
                            <!---->
                            <li ng-if="::permissions.can('view_fedora_references')" role="presentation" class="divider"></li>
                            <!---->
                            <!---->
                            <li ng-if="::currentUser.is_teachable_account"><a href="/my_teachable_profile" target="_blank" translate="FOOTER.MYTEACHABLE_PROFILE">myTeachable Profile</a></li>
                            <!---->
                            <!---->
                            <!---->
                            <li><a href="/sign_out" translate="FOOTER.LOG_OUT" what="logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

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



  <!-- Initialize Quill editor -->
  <script>
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
    placeholder: 'Description de l\'école...',
    theme: 'snow'  // or 'bubble'
};
    var quill = new Quill('#site-description', options);

  var form = document.getElementById("description");
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





  </script>

  <!--fin quill js-->


</body>

</html>
