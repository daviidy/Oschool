<ul id="course-nav" what="course nav" ui-view="subnav" state="admin.courses.course" class="nav secondary-nav nav-stacked ng-animate-disabled" style="transform: translate3d(50px, 0px, 0px) !important; height: 517px;">
    <div id="course-card-test-id" class="tch-course-card" course="course" show-preview-modal="showPreviewModal">
        <!---->
        <!---->
        {{-- style="background-image: url(/images/courses/logos/{{$course->logo}})" --}}
        <div  class="course-name-placeholder" style="">
            <div class="row">
                <div ng-bind="course.name" class="placeholder-course-name">{{$course->name}}</div>
            </div>
            @if($course->type == 'course')
            <div class="row"><a href="{{ route('course.slug', $course->slug) }}" target="_blank" id="test-id-course-preview-btn" class="tch-btn-content-transparent tch-btn-sm fastclickable">Aperçu</a></div>
            @endif
            @if($course->type == 'path')
            <div class="row"><a href="{{ route('path.slug', $course->slug) }}" target="_blank" id="test-id-course-preview-btn" class="tch-btn-content-transparent tch-btn-sm fastclickable">Aperçu</a></div>
            @endif
        </div>
        <!---->
    </div>
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Information"
      sref="admin.courses.course.information" onboarding-tooltip-if="course.name == false || course.friendly_url == false || course.author_bio_id == false" onboarding-tooltip-text="Set a course name, author, and friendly URL to complete this step"
      class="active">
        <!----><a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/information" class=""
          style="">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Information</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="permissions.can('manage_course_pages')" text="Pages" sref="admin.courses.course.pages" class="" style="">
        <!----><a what="link" ui-sref="admin.courses.course.pages" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/courses/627895/pages">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Pages</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    @if($course->type == 'course')
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Curriculum"
      sref="admin.courses.course.curriculum" onboarding-tooltip-if="course.has_published_lecture == false &amp;&amp; course.bundled_courses_count == 0" onboarding-tooltip-text="Create and publish at least one lecture to complete this step" class="">
        <!----><a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/curriculum" class=""
          style="">
            <!---->
            <!---->
            <!---->
            <!---->
            <!--
            <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Create and publish at least one lecture to complete this step" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
              class="tch-onboarding-sidebar-tooltip"></div>-->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Programme</span>
        </a>
        <!---->
        <!---->
        <!---->
    </li>
    @endif

    @if($course->type == 'path')
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Curriculum"
      sref="admin.courses.course.curriculum" onboarding-tooltip-if="course.has_published_lecture == false &amp;&amp; course.bundled_courses_count == 0" onboarding-tooltip-text="Create and publish at least one lecture to complete this step" class="">
        <!----><a href="/schoolAdmin/{{$school->id}}/paths/{{$course->id}}/curriculum" class=""
          style="">
            <!---->
            <!---->
            <!---->
            <!---->
            <!--
            <div href="javascript:void(0)" ng-if="::onboardingTooltipIf" tooltip="Create and publish at least one lecture to complete this step" tooltip-placement="right" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
              class="tch-onboarding-sidebar-tooltip"></div>-->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Programme</span>
        </a>
        <!---->
        <!---->
        <!---->
    </li>
    @endif
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('set_course_prices')" text="Pricing" sref="admin.courses.course.pricing" onboarding-tooltip-if="course.has_published_product == false" onboarding-tooltip-text="Create one or more pricing plans to complete this step"
      class="">
        <!----><a href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/pricing">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Offres de prix</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Drip"
      sref="admin.courses.course.drip">
        <!----><a  href="/schoolAdmin/{{$school->id}}/courses/{{$course->id}}/deliverable" class="" style="">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Traveaux</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }" text="Drip"
      sref="admin.courses.course.drip">
        <!----><a what="link" ui-sref="admin.courses.course.drip" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/courses/627895/drip" class="" style="">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Drip</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_comments')" text="Comments" sref="admin.courses.course.comments" class="">
        <!----><a what="link" ui-sref="admin.courses.course.comments" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/courses/627895/comments?page=1">
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
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_course_coupons')" text="Coupons" sref="admin.courses.course.coupons" class="">
        <!----><a what="link" ui-sref="admin.courses.course.coupons" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/coupons">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Coupons</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_students')" text="Students" ng-click="goToStudents()" external-link="true" class="fastclickable" style="">
        <!---->
        <!----><a what="link" ng-if="!sref &amp;&amp; !migrated">
            <!----><span class="menu-item-label"><span ng-bind="::text" ng-class="textClass">Students</span>
                <!----><i ng-if="::externalLink" class="fa fa-external-link"></i>
                <!----></span></a>
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('bundle_courses')" text="Bundle Contents" sref="admin.courses.course.bundle" class="">
        <!----><a what="link" ui-sref="admin.courses.course.bundle" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/courses/627895/bundle">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Bundle Contents</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="::permissions.can('view_course_reports') || permissions.can('view_gated_course_reports')" text="Reports" sref="admin.courses.course.reports" class="">
        <!----><a what="link" ui-sref="admin.courses.course.reports" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/courses/627895/reports">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Reports</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
    <!---->
    <li what="nav item" ui-sref-active="active"
      ng-class="{ 'hide-on-expand': hideOnExpand, 'show-on-expand': showOnExpand, 'pin-bottom-level-': pinToBottom, 'pin-bottom': pinToBottom, 'top-border': topBorder, 'force-active': (buttonActive == true) }"
      ng-if="permissions.can('manage_certificates') || permissions.can('view_gated_native_certificates')" text="Certificates" sref="admin.courses.course.certificates.index" label="" minimal="true" class="">
        <!----><a what="link" ui-sref="admin.courses.course.certificates.index" ng-if="sref &amp;&amp; !migrated" ng-class="{ 'text-only': minimal, 'small-link': small, 'never-highlight': neverHighlight }" href="/admin/courses/627895/certificates"
          class="text-only">
            <!---->
            <!---->
            <!---->
            <!----><span ng-bind="::text" ng-class="textClass" class="menu-item-label">Certificates</span></a>
        <!---->
        <!---->
        <!---->
    </li>
    <!---->
</ul>
