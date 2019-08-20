@extends('layouts.admin_views.menu-school')
@section('content')


<div ui-view="content" ng-class="sidebarCollapsed" class="admin-content" style="">
    <div what="page header" class="tch-section-nav tch-page-header" icon="" text="New Course">
        <div ng-class="{ 'has-sections': sections }" class="tch-section-nav-wrapper affixed">
            <div ng-class="{ 'extra-height': sections.length > 1, 'has-beta-banner': hasBetaBanner }" class="tch-section-nav-placeholder"></div>
            <div ng-class="{ 'fixed': fixed }" class="tch-section-nav-box dynamic-width">
                <div what="text" class="tch-section-nav-title">
                    <!---->
                    <div ng-if="!hideHamburger" class="tch-btn-hamburger"><button type="button" ng-click="toggleSidebar()" class="tch-btn-header-icon fastclickable"><i class="fa fa-bars"></i></button></div>
                    <!---->
                    <!---->Nouveau cours
                </div>
                <!---->
                <div ng-transclude="" ng-class="{ 'no-title': noTitle }" class="tch-section-nav-buttons"></div>
            </div>
            <!---->
        </div>
    </div>
    <!---->
    <form method="post" enctype="multipart/form-data" action="{{route('courses.store')}}" name="courseNewForm">
        <div id="section-information" class="row tch-section-wrapper">
            <div ng-class="{ 'col-lg-12': fullWidth }" class="tch-section-heading col-md-12 col-lg-3">
                <!---->
                <!---->
                <h2 ng-if="section.name" class="tch-subheading">
                    <!----><span ng-bind="::section.name | humanize" what="section-name" ng-if="!section.altName">Information</span>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <!----><br ng-if="!removeDescriptionLineBreak">
                    <!---->
                    <p ng-bind-html="section.description" what="section-description" class="small">Ajoutez des informations de base sur le cours et le nom de l'auteur.<br><br>Pour ajouter un titre d'auteur, une image et une biographie, visitez le site bios</p>
                    <!---->
                    <!---->
                </h2>
                <!---->
            </div>
            @csrf
            <div ng-class="{ 'col-lg-12': fullWidth, 'no-border': noBorder, 'no-padding': noPadding, 'no-transition': noTransition }" class="tch-section-content col-md-12 col-lg-9">
                <div ng-transclude="" id="authorBlock">
                    <div form="courseNewForm" label="Course Title" for="name">
                        <!---->
                        <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="name" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Titre du cours</span>
                                    <!----></label>
                                <!---->
                                <!---->
                                <!---->
                            </label-block>
                            <div ng-transclude=""><input id="course-name" what="name" ng-model="course.name" type="text" name="name" maxlength="100" placeholder="e.g. 'Techniques avancées en Photoshop'" autofocus="true"
                                  required="" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength"></div>
                            <help-block>
                                <ng-messages for="form[for].$error" role="alert" class="ng-active">
                                    <!---->
                                    <!---->
                                    <ng-message when="required" class="help-block">Required field</ng-message>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </ng-messages>
                                <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="name" class="help-block ng-hide"></div>
                            </help-block>
                        </div>
                        <!---->
                        <!---->
                    </div>
                    <div form="courseNewForm" label="Course Subtitle" for="heading">
                        <!---->
                        <div ng-if="form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" show-errors="" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="heading" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Description courte</span>
                                    <!----></label>
                                <!---->
                                <!---->
                                <!---->
                            </label-block>
                            <div ng-transclude=""><input id="course-heading" type="text" name="description" maxlength="160" value="" placeholder="e.g. 'Tout ce que vous avez besoin de savir sur le montage vidéo'"
                                  class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength"><label ng-show="state.errors.heading" ng-bind="state.errors.heading" for="#course-heading" class="control-label ng-hide"></label>
                            </div>
                            <help-block>
                                <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </ng-messages>
                                <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="heading" class="help-block ng-hide"></div>
                            </help-block>
                        </div>
                        <!---->
                        <!---->
                    </div>
                    <div style="display: none;" ng-transclude="">
                        <input name="school_id" id="schoolId" type="text" maxlength="160" value="{{$school->id}}" placeholder="e.g. 'Tout ce que vous avez besoin de savir sur le montage vidéo'"
                          class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength">
                    </div>
                    <div label="Select Category" tooltip-text="Displays on student curriculum side as &quot;Instructor&quot;" for="author">
                        <!---->
                        <!---->
                        <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="author" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Choisir la catégorie</span>
                                    <!----></label>
                                <!---->
                                <!----><a href="javascript:void(0)" ng-if="tooltipText" tooltip="Displays on student curriculum side as &quot;Instructor&quot;" tooltip-placement="bottom" tooltip-trigger="mouseenter" tooltip-append-to-body="true"
                                  class="btn tch-btn-tooltip"><i class="fa fa-question-circle"></i></a>
                                <!---->
                                <!---->
                            </label-block>
                            <div ng-transclude="">
                                <select name="category_id" what="author" ng-model="course.author_bio_id" ng-options="author.id as author.name for author in authors | orderBy:'name'" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                    @foreach($categories as $category)
                                    <option label="" value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <help-block>
                                <ng-messages for="form[for].$error" role="alert" class="ng-inactive">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </ng-messages>
                                <div ng-show="state.errors[for]" ng-bind="state.errors[for]" for="author" class="help-block ng-hide"></div>
                            </help-block>
                        </div>
                        <!---->
                    </div>
                    <div id="selectAuthor" label="Select Author" tooltip-text="Displays on student curriculum side as &quot;Instructor&quot;" for="author">
                        <!---->
                        <!---->
                        <div ng-if="!form" ng-class="{ 'has-error': state.errors[for], 'no-margin': noMargin }" class="form-group">
                            <label-block required-label="requiredLabel">
                                <!---->
                                <!----><label for="author" ng-if="label" class="control-label">
                                    <!----><span ng-bind="label">Choisir l'auteur</span>
                                    <!----></label>
                                <!---->

                            </label-block>
                            <div ng-transclude="">
                                <a style="cursor: pointer;" id="addAuthor">Ajouter nouvel auteur</a>
                                @if($school->authors)
                                <select id="listAuthor" name="author_id" class="form-control ng-pristine ng-untouched ng-valid ng-not-empty">
                                    @foreach($school->authors as $author)
                                    <option label="davidy" value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>

                        </div>
                        <!---->
                    </div>

                    <div style="display: none;" id='inputCreateAuthor'>
                        <div class='form-group'>
                            <label-block required-label='requiredLabel'><label for='author' ng-if='label' class='control-label'><span ng-bind='label'>Ajouter nouvel auteur</span><a style='cursor: pointer;' id='cancelAddAuthor'>Annuler</a></label></label-block>
                            <div ng-transclude=''>
                                <input id='author-name' type='text' placeholder='Nom complet du prof'
                                  class='form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength'></div>
                        </div>
                    </div>

                    <a style='display: none; cursor: pointer;' id='createAuthor'>Ajouter</a>


                    <!---->
                </div>
                <div ng-show="showButtonsBar" class="tab-bottom">
                    <!---->
                    <!---->
                    <button id="test-id-save-btn" ng-if="save" type="submit" ng-disabled="form.$invalid || form.$pending || disableSave" ng-bind="saveLabel || 'Save'" class="tch-btn-header-primary">Créer le cours</button>                    <!---->
                </div>
            </div>
        </div>
    </form>
    <div class="tch-learn-more" text="about creating a course in the Teachable Knowledge Base" label="admin.courses.new">
        <div class="alert alert-info">
            <!---->
            <div ng-transclude="" ng-class="{ 'border-left': title }" class="alert-text-wrapper"><a ng-href="https://support.teachable.com/hc/en-us/articles/220340327-Create-and-Set-Up-Your-Course-?src=admin"
                  href="https://support.teachable.com/hc/en-us/articles/220340327-Create-and-Set-Up-Your-Course-?src=admin" target="_blank">Learn more</a><span class="space"></span><span ng-bind="text">about creating a course in the Teachable
                    Knowledge Base</span></div>
        </div>
    </div><br><br>
</div>

@endsection
