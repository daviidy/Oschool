@extends('layouts.admin_views.menu-school')
@section('content')

            <div id="react-app" ng-class="sidebarCollapsed" ng-init="initReactApp()"></div>
            <!---->
            <div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
                <div ng-hide="firstTimeUpsell" class="tch-school-onboarding-wrapper">
                    <div class="tch-school-onboarding-header">
                        <div class="tch-btn-hamburger">
                          <button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable">
                            <i class="fa fa-bars"></i>
                          </button>
                        </div>
                        <div class="tch-school-onboarding-header-icons"></div>
                        <div class="tch-school-onboarding-header-text">
                            <h3><span>Bienvenue à {{$school->name}}!</span></h3><a href="{{url('schools', $school)}}" target="_blank" class="tch-btn-header-primary">Voir l'école</a><span class="space"></span>
                            <div dropdown="" class="btn-group dropdown"><a dropdown-toggle="" type="button" class="tch-btn-header-dropdown dropdown-toggle" aria-haspopup="true" aria-expanded="false">Comment puis-je<span class="space"></span><i
                                      class="fa fa-angle-down no-margin"></i></a>
                                <div class="dropdown-menu-arrow"></div>
                                <ul role="menu" class="dropdown-menu dropdown-menu-left">
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/222806647-Complimenting-Your-Site-With-Teachable?src=admin?src=admin" ng-bind="'SUPPORT.integrate_website.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/222806647-Complimenting-Your-Site-With-Teachable?src=admin?src=admin">How do I integrate Teachable with my website?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/220340327-Creating-a-Course-?src=admin?src=admin" ng-bind="'SUPPORT.create_course.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/220340327-Creating-a-Course-?src=admin?src=admin">How do I create a course?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/222846328-Setting-Up-a-Custom-Domain?src=admin?src=admin" ng-bind="'SUPPORT.customize_domain.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/222846328-Setting-Up-a-Custom-Domain?src=admin?src=admin">How do I add a custom domain?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/219442088-Overview-of-Course-Pricing-Options?src=admin?src=admin" ng-bind="'SUPPORT.pricing.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/219442088-Overview-of-Course-Pricing-Options?src=admin?src=admin">How do I set up multiple pricing tiers for a course?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/219826847-Creating-Coupon-Codes?src=admin?src=admin" ng-bind="'SUPPORT.coupons.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/219826847-Creating-Coupon-Codes?src=admin?src=admin">How do I create single-use or multi-use coupons for my course?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/219824267-Adding-Multimedia-Content?src=admin?src=admin" ng-bind="'SUPPORT.lecture_content.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/219824267-Adding-Multimedia-Content?src=admin?src=admin">What type of content can I add to a lecture?</a></li>
                                    <li><a href="https://teachable.zendesk.com/hc/en-us/articles/219827307-Issuing-Refunds-to-Students?src=admin?src=admin" ng-bind="'SUPPORT.refunds.title' | translate" target="_blank">How do I issue a full or partial
                                            refund for a student?</a></li>
                                    <li><a href="https://teachable.zendesk.com/hc/en-us/articles/222808927-Adding-Webhooks?src=admin?src=admin" ng-bind="'SUPPORT.webhooks.title' | translate" target="_blank">How do I add webhooks?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <script>
                    (function() {

                        	var hamburger = {
                        		navToggle: document.querySelector('.tch-btn-hamburger'),
                        		nav: document.querySelector('.navs'),

                        		doToggle: function(e) {
                        			e.preventDefault();
                        			this.navToggle.classList.toggle('active');
                        			this.nav.classList.toggle('active');
                        		}
                        	};

                        	hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });

                        }());

                    </script>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-xs-12">
                            <div class="tch-pills-wrapper">
                                <!---->
                                <div ng-if="percentComplete() > 0">
                                    <div ng-class="{ 'progress-completed': percentComplete() == 100 }" class="progress">
                                        <div ng-style="{ 'width': percentComplete() + '%' }" ng-class="{ 'progress-bar-completed': percentComplete() == 100 }" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                          class="progress-bar" style="width: 25%;"><span ng-bind="percentComplete() | number:0">25</span>% complete</div>
                                    </div><br>
                                </div>
                                <!---->
                                <!----><a ng-click="step.click()" ng-repeat="step in steps" ng-class="{ 'pill-completed': step.completed(), 'pill-active': step.active(), 'pill-disabled': step.disabled(), 'pill-highlighted': step.highlighted() }"
                                  class="tch-pill full-width fastclickable">
                                    <!----><span ng-if="step.liveWorkshop">
                                        <!----><img ng-if="workshopState() == 'signup' || workshopState() == 'live' || workshopState() == 'pre'" ng-src="/images/schools/icon-webinar.svg" class="icon"
                                          src="/images/schools/icon-webinar.svg">
                                        <!---->
                                        <!----></span>
                                    <!---->
                                    <!---->
                                    <!----><span ng-bind="step.text | translate">Sign up for our free live webinar</span>
                                    <!----><span ng-if="!step.completed() &amp;&amp; !step.disabled()" class="right-arrow">›</span>
                                    <!---->
                                    <!---->
                                    <div ng-if="!step.completed() &amp;&amp; !step.disabled()">
                                        <!---->
                                        <!---->
                                        <!---->
                                        <div ng-if="step.liveWorkshop" ng-click="step.click()" class="tch-pill-sidelink fastclickable">
                                            <!----><span ng-if="workshopState() == 'signup'">Claim My Spot</span>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                </a>
                                <!----><a ng-click="step.click()" ng-repeat="step in steps" ng-class="{ 'pill-completed': step.completed(), 'pill-active': step.active(), 'pill-disabled': step.disabled(), 'pill-highlighted': step.highlighted() }"
                                  class="tch-pill full-width fastclickable pill-completed">
                                    <!---->
                                    <!----><span ng-if="!step.liveWorkshop">
                                        <!---->
                                        <!----><img ng-src="/images/schools/icon-check.svg" ng-if="step.completed()" class="icon" src="/images/schools/icon-check.svg">
                                        <!----></span>
                                    <!---->
                                    <!----><span ng-bind="step.text | translate">Create a course</span>
                                    <!---->
                                    <!---->
                                    <!----></a>
                                <!----><a ng-click="step.click()" ng-repeat="step in steps" ng-class="{ 'pill-completed': step.completed(), 'pill-active': step.active(), 'pill-disabled': step.disabled(), 'pill-highlighted': step.highlighted() }"
                                  class="tch-pill full-width fastclickable">
                                    <!---->
                                    <!----><span ng-if="!step.liveWorkshop">
                                        <!----><img ng-if="!step.completed() &amp;&amp; !step.disabled()" ng-src="/images/schools/icon-customize.svg" class="icon" src="/images/schools/icon-customize.svg">
                                        <!---->
                                        <!----></span>
                                    <!---->
                                    <!----><span ng-bind="step.text | translate">Customize look and feel</span>
                                    <!----><span ng-if="!step.completed() &amp;&amp; !step.disabled()" class="right-arrow">›</span>
                                    <!---->
                                    <!---->
                                    <div ng-if="!step.completed() &amp;&amp; !step.disabled()">
                                        <!---->
                                        <div ng-if="step.supportLink" ng-click="openTab(step.supportLink); $event.stopPropagation();" class="tch-pill-sidelink fastclickable"><span>Read Tutorial</span></div>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                </a>
                                <!----><a ng-click="step.click()" ng-repeat="step in steps" ng-class="{ 'pill-completed': step.completed(), 'pill-active': step.active(), 'pill-disabled': step.disabled(), 'pill-highlighted': step.highlighted() }"
                                  class="tch-pill full-width fastclickable">
                                    <!---->
                                    <!----><span ng-if="!step.liveWorkshop">
                                        <!----><img ng-if="!step.completed() &amp;&amp; !step.disabled()" ng-src="/images/schools/icon-domain.svg" class="icon" src="/images/schools/icon-domain.svg">
                                        <!---->
                                        <!----></span>
                                    <!---->
                                    <!----><span ng-bind="step.text | translate">Set up your domain name</span>
                                    <!----><span ng-if="!step.completed() &amp;&amp; !step.disabled()" class="right-arrow">›</span>
                                    <!---->
                                    <!---->
                                    <div ng-if="!step.completed() &amp;&amp; !step.disabled()">
                                        <!---->
                                        <div ng-if="step.supportLink" ng-click="openTab(step.supportLink); $event.stopPropagation();" class="tch-pill-sidelink fastclickable"><span>Read Tutorial</span></div>
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                </a>
                                <!----><a ng-click="step.click()" ng-repeat="step in steps" ng-class="{ 'pill-completed': step.completed(), 'pill-active': step.active(), 'pill-disabled': step.disabled(), 'pill-highlighted': step.highlighted() }"
                                  class="tch-pill full-width fastclickable pill-disabled">
                                    <!---->
                                    <!----><span ng-if="!step.liveWorkshop">
                                        <!---->
                                        <!----></span>
                                    <!---->
                                    <!----><img ng-if="step.disabled()" ng-src="https://fedora.teachablecdn.com/images/schools/icon-lock.svg" class="icon more-faded"
                                      src="/images/schools/icon-lock.svg">
                                    <!----><span ng-bind="step.text | translate">Launch your school</span>
                                    <!---->
                                    <!---->
                                    <!----></a>
                                <!---->
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
                            <h2 class="tch-subheading text-left">Need help getting started?</h2>
                            <div class="tch-feed-item event-placeholder event-authenticate">
                                <div class="tch-arrow pull-left"></div>Check out our<span class="space"></span><a href="http://teachable.zendesk.com/" target="_blank" class="feed-link feed-bold">Knowledge Base</a><span class="space"></span>for tips,
                                how-tos, and other helpful information.
                            </div>
                            <div class="tch-feed-item event-placeholder event-authenticate">
                                <div class="tch-arrow pull-left"></div><span class="space"></span><a ui-sref="admin.settings.plan({from_redirect_state: currentStateName })" class="feed-link feed-bold"
                                  href="/admin/settings/plan?from_redirect_state=admin.onboarding">Upgrade your school plan</a> to enable custom domains, extensions, affiliates, and white-labeling.
                            </div>
                            <div class="tch-feed-item event-placeholder event-authenticate">
                                <div class="tch-arrow pull-left"></div><span class="space"></span><a ui-sref="admin.settings.payments" class="feed-link feed-bold" href="/admin/settings/payments">Setup payment methods</a> use Monthly Payment Gateway
                                or receive payouts faster by setting up custom gateways.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
