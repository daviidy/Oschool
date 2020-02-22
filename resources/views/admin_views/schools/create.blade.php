@extends('layouts.menu-dashboard-user')
@section('title', 'Créer une école')

@section('content')

<div class="main my-teachable-dashboard">
    <!--
    <div class="sticky-center-container pinned">
        <div class="content-box form-wrapper">
            <form enctype="multipart/form-data" class="new_school" id="new_school" action="{{route('schools.store')}}" accept-charset="UTF-8" method="post">
                @csrf
                <div class="form-group ">
                    <label class="control-label" for="school_name">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Nommez votre école
                            </font>
                        </font>
                    </label>
                    <div class="control-input">
                        <input class="form-control" maxlength="100" placeholder="" required="required" autofocus="autofocus" size="100" type="text" name="name" id="school_name">
                        <span class="input-icon"></span>
                    </div>
                    <div style="display: none;" class="control-input">
                        <input value="{{Auth::user()->id}}" class="form-control" maxlength="100" placeholder="" required="required" autofocus="autofocus" size="100" type="text" name="user_id">
                        <span class="input-icon"></span>
                    </div>
                    <!--
                    <label class="description">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Votre école sera hébergée sur un </font>
                            <font style="vertical-align: inherit;">sous-domaine </font>
                        </font><span class="highlight-text">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">oschool</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> . </font>
                            <font style="vertical-align: inherit;">Vous pouvez toujours changer le nom de votre école ou configurer un domaine personnalisé ultérieurement.</font>
                        </font>
                    </label>
                -->
                <!--
                </div>

                <div class="button-group text-center">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><input type="submit" name="commit" value="Créer une nouvelle école" id="foo-submit" class="btn btn-primary btn-md btn-orange btn-teachable-block"></font>
                    </font>
                </div>
            </form>
        </div>

    </div>
-->

    <div class="sticky-center-container pinned">
        <div class="content-box form-wrapper">
            <form enctype="multipart/form-data" class="new_school" id="new_school" action="{{route('schools.storeBusiness')}}" accept-charset="UTF-8" method="post">
                @csrf
                <div class="form-group ">
                    <label class="control-label" for="school_name">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Nommez votre école
                            </font>
                        </font>
                    </label>
                    <div class="control-input">
                        <input class="form-control" maxlength="100" placeholder="" required="required" autofocus="autofocus" size="100" type="text" name="name" id="school_name">
                        <span class="input-icon"></span>
                    </div>
                    <label class="control-label" for="school_name">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Domaine personnalisé
                            </font>
                        </font>
                    </label>
                    <div class="control-input">
                        <input class="form-control" maxlength="100" placeholder="" autofocus="autofocus" size="100" type="text" name="domain" id="school_domain">
                        <span class="input-icon"></span>
                    </div>
                    <div style="display: none;" class="control-input">
                        <input value="{{Auth::user()->id}}" class="form-control" maxlength="100" placeholder="" required="required" autofocus="autofocus" size="100" type="text" name="user_id">
                        <span class="input-icon"></span>
                    </div>
                    <!--
                    <label class="description">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Votre école sera hébergée sur un </font>
                            <font style="vertical-align: inherit;">sous-domaine </font>
                        </font><span class="highlight-text">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">oschool</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> . </font>
                            <font style="vertical-align: inherit;">Vous pouvez toujours changer le nom de votre école ou configurer un domaine personnalisé ultérieurement.</font>
                        </font>
                    </label>
                -->
                </div>

                <div class="button-group text-center">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><input type="submit" name="commit" value="Créer une nouvelle école" id="foo-submit" class="btn btn-primary btn-md btn-orange btn-teachable-block"></font>
                    </font>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
