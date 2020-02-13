<ul id="users-nav" what="site nav" state="admin.users" class="nav nav-stacked secondary-nav ng-animate-disabled" style="transform: translate3d(50px, 0px, 0px) !important; height: 597px;">
    <h3 class="nav-section-title">Utilisateurs</h3>
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Students"
      sref="admin.users.students" class="active">
        <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/users">
            <!---->
            <!---->
            <!---->
            @if(str_contains(Request::fullUrl(), 'users'))
            <span style="color: #fff;" ng-bind="::text" ng-class="textClass" class="menu-item-label">Tous les utilisateurs</span></a>
            @else
    <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Tous les utilisateurs</span></a>
<!---->     @endif
        <!---->
        <!---->
        <!---->
    </li>
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Students"
      sref="admin.users.students" class="active">
        <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/students">
            <!---->
            <!---->
                    @if(str_contains(Request::fullUrl(), 'students'))
                    <span style="color: #fff;" ng-bind="::text" ng-class="textClass" class="menu-item-label">Etudiants</span></a>
                    @else
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Etudiants</span></a>
        <!---->     @endif
        <!---->
        <!---->
    </li>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Owners"
      sref="admin.users.owners" ng-if="permissions.can('create_and_manage_users')">
        <!----><a what="link" ui-sref="admin.users.owners" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/owners">
            <!---->
            <!---->
            <!---->
            @if(str_contains(Request::fullUrl(), 'owners'))
            <span style="color: #fff;" ng-bind="::text" ng-class="textClass" class="menu-item-label">Propriétaires</span></a>
            @else
    <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Propriétaires</span></a>
<!---->     @endif
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Authors"
      sref="admin.users.authors" ng-if="permissions.can('create_and_manage_users')">
        <!----><a what="link" ui-sref="admin.users.authors" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/authors">
            <!---->
            <!---->
            <!---->
            @if(str_contains(Request::fullUrl(), 'authors'))
            <span style="color: #fff;" ng-bind="::text" ng-class="textClass" class="menu-item-label">Auteurs</span></a>
            @else
    <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Auteurs</span></a>
<!---->     @endif
        <!---->
        <!---->
        <!---->
    </li>

</ul>
