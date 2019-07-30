<ul id="users-nav" what="site nav" state="admin.users" class="nav nav-stacked secondary-nav ng-animate-disabled">
    <h3 class="nav-section-title">Users</h3>
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Students"
      sref="admin.users.students" class="active">
        <!----><a what="link" ui-sref="admin.users.students" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/students?name_or_email_cont=___">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Students</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Owners"
      sref="admin.users.owners" ng-if="permissions.can('create_and_manage_users')">
        <!----><a what="link" ui-sref="admin.users.owners" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/owners">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Owners</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Authors"
      sref="admin.users.authors" ng-if="permissions.can('create_and_manage_users')">
        <!----><a what="link" ui-sref="admin.users.authors" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/authors">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Authors</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Affiliates"
      sref="admin.users.affiliates" ng-if="permissions.can('create_and_manage_users')">
        <!----><a what="link" ui-sref="admin.users.affiliates" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/affiliates">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Affiliates</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Custom"
      sref="admin.users.custom" label="" ng-if="permissions.can('manage_custom_roles') || permissions.can('view_gated_custom_roles')">
        <!----><a what="link" ui-sref="admin.users.custom" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/users/custom">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Custom</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
</ul>
