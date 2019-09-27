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
                          <div class="tch-btn-hamburger-2">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="20" height="40"viewBox="0 0 172 172"style=" fill:#000000;"><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#3498db"><path d="M129.07556,30.25717l12.67131,12.67175l-98.8199,98.81645l-12.67131,-12.67175z"></path><path d="M141.73757,129.08237l-12.67077,12.66723l-98.80691,-98.8345l12.67077,-12.66723z"></path></g><path d="" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path><path d="M0,172v-172h172v172z" fill="none"></path><path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path></g></g></svg>
                          </div>
                        </div>
                        <div class="tch-school-onboarding-header-icons"></div>
                        <div class="tch-school-onboarding-header-text">
                            <h3><span>Bienvenue à {{$school->name}}!</span></h3><a href="{{url('schools', $school)}}" target="_blank" class="tch-btn-header-primary">Voir l'école</a><span class="space"></span>
                            <div dropdown="" class="btn-group dropdown" onclick="show()" ><a dropdown-toggle="" type="button" class="tch-btn-header-dropdown dropdown-toggle" aria-haspopup="true" aria-expanded="false">Comment puis-je<span class="space"></span><i
                                      class="fa fa-angle-down no-margin"></i></a>
                                <div class="dropdown-menu-arrow"></div>
                                <ul role="menu" class="dropdown-menu dropdown-menu-left" id="drop1">
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/222806647-Complimenting-Your-Site-With-Teachable?src=admin?src=admin" ng-bind="'SUPPORT.integrate_website.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/222806647-Complimenting-Your-Site-With-Teachable?src=admin?src=admin">Comment intégrer Oschool à mon site web?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/220340327-Creating-a-Course-?src=admin?src=admin" ng-bind="'SUPPORT.create_course.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/220340327-Creating-a-Course-?src=admin?src=admin">Comment créer un cours?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/222846328-Setting-Up-a-Custom-Domain?src=admin?src=admin" ng-bind="'SUPPORT.customize_domain.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/222846328-Setting-Up-a-Custom-Domain?src=admin?src=admin">Comment ajouter un domaine personnalisé?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/219442088-Overview-of-Course-Pricing-Options?src=admin?src=admin" ng-bind="'SUPPORT.pricing.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/219442088-Overview-of-Course-Pricing-Options?src=admin?src=admin">Comment configurer plusieurs niveaux de tarification pour un cours?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/219826847-Creating-Coupon-Codes?src=admin?src=admin" ng-bind="'SUPPORT.coupons.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/219826847-Creating-Coupon-Codes?src=admin?src=admin">Comment créer des coupons à usage unique ou à usages multiples pour mon cours?</a></li>
                                    <li><a ng-href="https://teachable.zendesk.com/hc/en-us/articles/219824267-Adding-Multimedia-Content?src=admin?src=admin" ng-bind="'SUPPORT.lecture_content.title' | translate" target="_blank"
                                          href="https://teachable.zendesk.com/hc/en-us/articles/219824267-Adding-Multimedia-Content?src=admin?src=admin">Quel type de contenu puis-je ajouter à une conférence?</a></li>
                                    <li><a href="https://teachable.zendesk.com/hc/en-us/articles/219827307-Issuing-Refunds-to-Students?src=admin?src=admin" ng-bind="'SUPPORT.refunds.title' | translate" target="_blank">Comment puis-je effectuer un remboursement total ou partiel pour un étudiant?</a></li>
                                    <li><a href="https://teachable.zendesk.com/hc/en-us/articles/222808927-Adding-Webhooks?src=admin?src=admin" ng-bind="'SUPPORT.webhooks.title' | translate" target="_blank">Comment ajouter des webhooks?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="/js/admin_views/menu.js"></script>


                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-xs-12">
                            <div class="tch-pills-wrapper">
                                <!---->
                                <div ng-if="percentComplete() > 0">
                                    <div ng-class="{ 'progress-completed': percentComplete() == 100 }" class="progress">
                                        <div ng-style="{ 'width': percentComplete() + '%' }" ng-class="{ 'progress-bar-completed': percentComplete() == 100 }" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                          class="progress-bar" style="width: 25%;"><span ng-bind="percentComplete() | number:0">25</span>% achevé</div>
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
                                    <!----><span ng-bind="step.text | translate">Inscrivez-vous à notre webinaire gratuit en direct</span>
                                    <!----><span ng-if="!step.completed() &amp;&amp; !step.disabled()" class="right-arrow">›</span>
                                    <!---->
                                    <!---->
                                    <div ng-if="!step.completed() &amp;&amp; !step.disabled()">
                                        <!---->
                                        <!---->
                                        <!---->
                                        <div ng-if="step.liveWorkshop" ng-click="step.click()" class="tch-pill-sidelink fastclickable">
                                            <!----><span ng-if="workshopState() == 'signup'">Revendiquer ma place</span>
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
                                    <!----><span ng-bind="step.text | translate">Créer un cours</span>
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
                                    <!----><span ng-bind="step.text | translate">Personnaliser l'apparence</span>
                                    <!----><span ng-if="!step.completed() &amp;&amp; !step.disabled()" class="right-arrow">›</span>
                                    <!---->
                                    <!---->
                                    <div ng-if="!step.completed() &amp;&amp; !step.disabled()">
                                        <!---->
                                        <div ng-if="step.supportLink" ng-click="openTab(step.supportLink); $event.stopPropagation();" class="tch-pill-sidelink fastclickable"><span>Lire le tutoriel</span></div>
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
                                    <!----><span ng-bind="step.text | translate">Configurez votre nom de domaine</span>
                                    <!----><span ng-if="!step.completed() &amp;&amp; !step.disabled()" class="right-arrow">›</span>
                                    <!---->
                                    <!---->
                                    <div ng-if="!step.completed() &amp;&amp; !step.disabled()">
                                        <!---->
                                        <div ng-if="step.supportLink" ng-click="openTab(step.supportLink); $event.stopPropagation();" class="tch-pill-sidelink fastclickable"><span>Lire le tutoriel</span></div>
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
                                    <!----><span ng-bind="step.text | translate">Lance ton école</span>
                                    <!---->
                                    <!---->
                                    <!----></a>
                                <!---->
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
                            <h2 class="tch-subheading text-left">Besoin d'aide pour commencer?</h2>
                            <div class="tch-feed-item event-placeholder event-authenticate">
                                <div class="tch-arrow pull-left"></div>Découvrez nos<span class="space"></span><a href="http://teachable.zendesk.com/" target="_blank" class="feed-link feed-bold">Connaissances de base</a><span class="space"></span>pour les conseils,
                                comment faire et autres informations utiles.
                            </div>
                            <div class="tch-feed-item event-placeholder event-authenticate">
                                <div class="tch-arrow pull-left"></div><span class="space"></span><a ui-sref="admin.settings.plan({from_redirect_state: currentStateName })" class="feed-link feed-bold"
                                  href="/admin/settings/plan?from_redirect_state=admin.onboarding">Améliorez votre plan d'école</a> pour activer les domaines personnalisés, les extensions, les sociétés affiliées et le marquage blanc.
                            </div>
                            <div class="tch-feed-item event-placeholder event-authenticate">
                                <div class="tch-arrow pull-left"></div><span class="space"></span><a ui-sref="admin.settings.payments" class="feed-link feed-bold" href="/admin/settings/payments">Configurer les moyens de paiement</a> utilisez la passerelle de paiement mensuel ou recevez des paiements plus rapidement en configurant des passerelles personnalisées.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
