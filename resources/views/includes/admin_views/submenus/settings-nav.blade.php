<ul id="settings-nav" what="settings nav" state="admin.settings" class="nav nav-stacked secondary-nav ng-animate-disabled" style="transform: translate3d(50px, 0px, 0px) !important; height: 597px;">
    <h3 class="nav-section-title">Paramètres</h3>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_general_settings')" text="General" sref="admin.settings.general">
        <!----><a what="link" ui-sref="admin.settings.general" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/settings/general">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">General</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_payments')" text="Payments" sref="admin.settings.payments">
        <!----><a what="link" ui-sref="admin.settings.payments" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/faqs">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Faq</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_payments')" text="Payments" sref="admin.settings.payments">
        <!----><a what="link" ui-sref="admin.settings.payments" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/schoolAdmin/{{$school->id}}/moyens_paiments">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Moyen Paiements</span></a>
        <!---->
        <!---->
        <!---->
    </li>

</ul>
