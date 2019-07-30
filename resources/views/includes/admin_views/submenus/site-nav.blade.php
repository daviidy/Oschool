<ul id="site-nav" what="site nav" state="admin.site" class="nav nav-stacked secondary-nav ng-animate-disabled">
    <h3 class="nav-section-title">Site</h3>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_theme')" text="Theme" sref="admin.site.theme" onboarding-tooltip-if="::school.is_customized == false" onboarding-tooltip-text="Save a customization to complete this step.">
        <!----><a what="link" ui-sref="admin.site.theme" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/theme">
            <!---->
            <!---->
            <!---->
            <!---->
            <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Save a customization to complete this step." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
              class="tch-onboarding-sidebar-tooltip"></div>
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Theme</span>
        </a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_domains')" text="Domains" sref="admin.site.domains" onboarding-tooltip-if="school.is_domain_confirmed == false" onboarding-tooltip-text="Confirm your domain to complete this step.">
        <!----><a what="link" ui-sref="admin.site.domains" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/domains">
            <!---->
            <!---->
            <!---->
            <!---->
            <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Confirm your domain to complete this step." tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
              class="tch-onboarding-sidebar-tooltip"></div>
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Domains</span>
        </a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_navigation')" text="Navigation" sref="admin.site.navigation">
        <!----><a what="link" ui-sref="admin.site.navigation" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/navigation">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Navigation</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_authors')" text="Bios" sref="admin.site.authors">
        <!----><a what="link" ui-sref="admin.site.authors" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/authors">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Bios</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_pages')" text="Pages" sref="admin.site.pages">
        <!----><a what="link" ui-sref="admin.site.pages" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/pages">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Pages</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_comments')" text="Comments" sref="admin.site.comments">
        <!----><a what="link" ui-sref="admin.site.comments" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/comments?page=1">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Comments</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_custom_text')" text="Custom Text" sref="admin.site.custom-text">
        <!----><a what="link" ui-sref="admin.site.custom-text" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/custom-text">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Custom Text</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_code_snippets')" text="Code Snippets" sref="admin.site.code-snippets">
        <!----><a what="link" ui-sref="admin.site.code-snippets" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/code-snippets">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Code Snippets</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_power_editor')" text="Power Editor" sref="admin.site.power-editor">
        <!----><a what="link" ui-sref="admin.site.power-editor" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/site/power-editor">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Power Editor</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
</ul>
