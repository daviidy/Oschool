<ul id="emails-nav" what="emails nav" state="admin.emails" class="nav nav-stacked secondary-nav ng-animate-disabled">
    <h3 class="nav-section-title">Emails</h3>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Compose"
      ng-if="::(permissions.can('email_students') || permissions.can('view_emails')) || permissions.can('view_gated_email')" sref="admin.emails.compose">
        <!----><a what="link" ui-sref="admin.emails.compose" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/emails/compose">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Compose</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="permissions.can('view_email_reports') || permissions.can('view_email_history')" text="History" sref="admin.emails.history">
        <!----><a what="link" ui-sref="admin.emails.history" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }"
          href="/admin/emails/history?mailer=StudentMailer%23custom_email&amp;aggregate_custom_emails=true">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">History</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="permissions.can('view_email_reports') || permissions.can('customize_email_templates') || permissions.can('view_gated_email')" text="Template Editor" sref="admin.emails.template-editor">
        <!----><a what="link" ui-sref="admin.emails.template-editor" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/emails/template-editor">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Template Editor</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
</ul>
