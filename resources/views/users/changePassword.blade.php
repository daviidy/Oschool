@extends('layouts.menu-dashboard-user')
@section('title', 'Paramètres du compte')

@section('content')

<style media="screen">

/*! CSS Used from: https://fedora.teachablecdn.com/assets/application-aa8dc0145a8a7d04833d5281d89b670f7c2edba76463da65bd2551df18cc31ec.css ; media=all */
@media all{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
hr{box-sizing:content-box;height:0;}
input{color:inherit;font:inherit;margin:0;}
input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
hr{height:0;box-sizing:content-box;}
input{margin:0;font:inherit;color:inherit;}
input[type=submit]{-webkit-appearance:button;cursor:pointer;}
input::-moz-focus-inner{padding:0;border:0;}
input{line-height:normal;}
@media print{
*{color:#000!important;text-shadow:none!important;background:transparent!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*{box-sizing:border-box;}
:before,:after{box-sizing:border-box;}
input{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#428bca;text-decoration:none;}
a:hover,a:focus{color:#2a6496;text-decoration:underline;}
a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
img{vertical-align:middle;}
.img-circle{border-radius:50%; width: 75px; height: 75px;}
hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee;}
p{margin:0 0 10px;}
.text-center{text-align:center;}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700;}
.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.form-control:focus{border-color:#66afe9;outline:0;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(102,175,233,0.6);}
.form-control::-moz-placeholder{color:#777;opacity:1;}
.form-control:-ms-input-placeholder{color:#777;}
.form-control::-webkit-input-placeholder{color:#777;}
.form-group{margin-bottom:15px;}
.has-error .form-control{border-color:#a94442;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);}
.has-error .form-control:focus{border-color:#843534;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 6px #ce8483;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
.btn:focus,.btn:active:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);}
.btn-primary{color:#fff;background-color:#428bca;border-color:#357ebd;}
.btn-primary:hover,.btn-primary:focus,.btn-primary:active{color:#fff;background-color:#3071a9;border-color:#285e8e;}
.btn-primary:active{background-image:none;}
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px;}
.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6;}
.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1;}
.hidden{display:none!important;visibility:hidden!important;}
.btn-primary,.btn-primary:active,.btn-primary:focus{background:#1ea69a!important;border:1px solid #1ea69a!important;font-weight:600!important;outline:none!important;color:#fff;border-radius:20px;padding:3px 18px!important;}
.btn-primary:hover,.btn-primary:active:hover,.btn-primary:focus:hover{outline:none!important;text-decoration:none;background:#1a9086!important;border:1px solid #1a9086!important;color:#fff;}
@media screen and (max-width: 767px){
.btn-primary,.btn-primary:active,.btn-primary:focus{font-size:15px;}
}
.btn-md,.btn-md:active,.btn-md:focus{display:inline-block;border-radius:50px!important;font-size:13px!important;letter-spacing:0.49px;padding-top:16px!important;padding-bottom:16px!important;padding-left:30px!important;padding-right:30px!important;}
.btn-orange,.btn-orange:hover,.btn-orange:active,.btn-orange:focus{border-color:#4d90cc!important;background-color:#4d90cc!important;}
.btn-orange:hover,.btn-orange:active,.btn-orange:focus,.btn-orange:hover:hover,.btn-orange:hover:active,.btn-orange:hover:focus,.btn-orange:active:hover,.btn-orange:active:active,.btn-orange:active:focus,.btn-orange:focus:hover,.btn-orange:focus:active,.btn-orange:focus:focus{border-color:#66afe9!important;background-color:#66afe9!important;}
input.form-control{padding:5px 10px;height:40px;font-weight:200;margin-bottom:14px;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;box-shadow:none;}
input.form-control:focus{border-color:#4bdfd2;outline:0;box-shadow:none;}
input.form-control::-webkit-input-placeholder{opacity:0.7;}
.alert{font-weight:600;}
.alert-danger{color:#a56b6a;}
a{color:#1ea69a;}
a:hover,a:active{color:#0e504a;}
a,a:active,a:hover,a:focus{text-decoration:none;}
p{font-size:18px;font-weight:200;line-height:28px;}
.content-box{background:#fff;border-radius:6px;box-shadow:0 10px 21px #e7eeef;padding-left:0px;padding:30px 45px;position:relative;text-align:left;width:100%;margin-bottom:70px;}
.content-box .button-group{margin-top:45px;display:block;}
.content-box .control-input{font-size:13px;line-height:21px;}
.content-box .form-group{margin-bottom:20px;}
.content-box p{display:block;line-height:21px;font-size:12px;color:#909090;letter-spacing:0.45px;padding-bottom:12px;}
.content-box .form-control{background-color:#f4f9fb;border:0;box-shadow:0px 1px 1px 0px #e6e9ec;}
.content-box .form-control:focus{background-color:rgba(102,175,233,0.6);color:#333;box-shadow:0px 1px 1px 0px #4d90cc;border:0;}
.content-box .alert{font-size:13px;font-weight:600;border-radius:4px;letter-spacing:0.1px;margin-bottom:30px;border:0px;padding-bottom:13px;}
.content-box .alert.alert-danger{color:#c74a47;background-color:#fbe2e2;}
.content-box label{color:#47505e;font-size:13px;font-weight:500;line-height:29px;letter-spacing:0.61px;}
.my-teachable-layout .content-box{padding-top:40px;padding-bottom:40px;}
@media screen and (max-width: 767px){
.content-box{border:0;border-radius:0;box-shadow:none;width:calc(100% + 40px);margin:0 0 0 -20px;}
}
.my-teachable-layout .my-teachable-dashboard{padding:20px;min-height:100%;position:relative;width:100%;}
.my-teachable-layout .my-teachable-dashboard .sticky-center-container{margin-left:137px;}
@media screen and (max-width: 767px){
.my-teachable-layout .my-teachable-dashboard .sticky-center-container{margin-left:0px;}
}
@media screen and (min-width: 768px) and (max-width: 930px){
.my-teachable-layout .my-teachable-dashboard .sticky-center-container{margin-top:0px;width:calc(100% - 275px);}
}
@media screen and (min-width: 768px){
.my-teachable-layout .my-teachable-dashboard{position:absolute;padding-right:50px;padding-top:28px;padding-left:325px;}
}
.my-teachable-layout .sticky-center-container{position:absolute;top:50%;width:550px;left:50%;}
.my-teachable-layout .sticky-center-container .settings-form-wrapper a{text-decoration:underline;cursor:pointer;}
.my-teachable-layout .sticky-center-container .content-box{border:0!important;width:100%;margin-bottom:0;}
.my-teachable-layout .sticky-center-container .content-box p.center-explanation{font-size:14px;max-width:400px;font-weight:500;line-height:22px;margin-bottom:10px;color:#a0a0a0;}
.my-teachable-layout .sticky-center-container .content-box .button-group{margin-top:45px;display:block;}
@media screen and (max-width: 767px){
.my-teachable-layout .sticky-center-container{width:100%;border-radius:0px;-webkit-transform:none;transform:none;top:0px;left:0px;margin-top:-20px;border-top:1px solid #f1f1f1;margin-bottom:0px;}
.my-teachable-layout .sticky-center-container.pinned{-webkit-transform:none;transform:none;margin-top:-1px;position:absolute;top:5%;left:0%;}
.my-teachable-layout .sticky-center-container .content-box{box-shadow:none;border-radius:0px;min-height:100%;margin-left:0px;}
}
@media screen and (min-width: 768px) and (max-width: 930px){
.my-teachable-layout .sticky-center-container.pinned{-webkit-transform:translate(-50%, 0%);transform:translate(-50%, 0%);top:5%;}
}
@media screen and (min-width: 768px){
.my-teachable-layout .sticky-center-container{width:550px;-webkit-transform:translate(-50%, -50%);transform:translate(-50%, -50%);}
.my-teachable-layout .sticky-center-container.pinned{-webkit-transform:translate(-50%, 0%);transform:translate(-50%, 0%);top:5%;}
}
.form-control::-moz-placeholder{color:#b2bcc5;opacity:1;}
}

</style>

<div class="main my-teachable-dashboard">
    <div class="sticky-center-container pinned">
        <div class="content-box form-wrapper settings-form-wrapper">
            <form enctype="multipart/form-data" id="profile-form" action="{{url('user/settings/editPassword')}}" accept-charset="UTF-8" method="post">
                @csrf
                {{-- {{method_field('patch')}} --}}
                @if(session('status'))
                <div id="form-success" class="alert alert-success" role="alert">Votre mot de passe a été mis à jour.</div>
                @endif
                @if(session('error_current'))
                <div id="form-danger" class="alert alert-danger" role="alert">Votre mot de passe actuel est incorrect.</div>
                @endif
                @if(session('error'))
                <div id="form-danger" class="alert alert-danger" role="alert">Votre mot de passe de confirmation est incorrect.</div>
                @endif
                <div id="form-success" class="alert alert-success hidden" role="alert">You have successfully confirmed your email address.</div>
                <div id="form-confirmation" class="alert alert-success hidden" role="alert">
                    A confirmation email has been sent to: <span id="unconfirmed_email"></span>. Please confirm your email address.
                </div>

                <div id="form-errors" class="alert alert-danger hidden" role="alert">
                    Please fix the errors below.
                    <div id="input-errors"></div>
                </div>


                <div class="form-group">
                    <label class="control-label" for="current-edit-user-password">
                        Votre ancien mot de passe
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="current-edit-user-password" maxlength="100" name="current_password" placeholder="********" required="required" type="password" >
                        <span class="input-icon"></span>
                    </div>
                    <label class="control-label" for="edit-user-password">
                        Votre nouveau mot de passe
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="edit-user-password" maxlength="100" name="password" placeholder="********" required="required" type="password" >
                        <span class="input-icon"></span>
                    </div>
                    <label class="control-label" for="confirm-edit-user-password">
                        Confirmer votre nouveau mot de passe
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="confirm-edit-user-password" maxlength="100" name="password_confirmation" placeholder="********" required="required" type="password" >
                        <span class="input-icon"></span>
                    </div>

                    {{-- <label class="control-label" for="edit-user-password">
                        Votre nouveau mot de passe
                    </label>
                    <div class="control-input">
                        <input disabled class="form-control" id="edit-user-password" maxlength="100" name="password" placeholder="********" required="required" type="password">
                        <span class="input-icon"></span>
                    </div>

                    <label class="control-label" for="c-edit-user-password">
                        Confirmer votre nouveau mot de passe
                    </label>
                    <div class="control-input">
                        <input disabled class="form-control" id="c-edit-user-password" maxlength="100" name="confim_password" placeholder="********" required="required" type="password">
                        <span class="input-icon"></span>
                    </div>
                </div> --}}
                <!--
                <a id="change-pw-btn">Change Password</a>
                <div class="form-group hidden" id="change-pw-form-group">
                    <label class="control-label" for="edit-user-password">
                        New password
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="edit-user-password" name="password" type="password" autocomplete="off">
                        <span class="input-icon"></span>
                    </div>
                    <label class="control-label" for="edit-user-password">
                        Confirm Password
                    </label>
                    <div class="control-input">
                        <input class="form-control" id="edit-user-confirm-password" name="password_confirmation" type="password" autocomplete="off">
                        <span class="input-icon"></span>
                    </div>
                </div>
            -->
                {{-- <br> --}}
                {{-- <a href="{{url('user/settings/changePassword')}}">Changer de mot de passe</a> --}}
                <hr>


                <div class="button-group text-center">
                    <input type="submit" name="commit" value="Enregistrer les modifications" class="btn btn-primary btn-md signup-button btn-orange">
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
