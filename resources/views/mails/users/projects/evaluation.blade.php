<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    </head>
    <body>

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="margin:auto;background:#ffffff;text-align:center" width="100%">
        	<tbody>
        		<tr>
        			<td align="center" style="padding:0 6%">
        			<table style="max-width:600px;text-align:center">
        				<tbody>
        					<tr>
        						<td style="padding:25px 0"><a href="https://oschoolelearning.com" target="_blank"><img alt="Oschool Logo" border="0" src="https://oschoolelearning.com/images/schools/logos/oschool_2.png" style="width:204px" class="CToWUd"></a></td>
        					</tr>
        					<tr>
        						<td style="padding:0 0 20px 0">
        						<h2 style="font-size:34px;color:#333;letter-spacing:0.25px;line-height:inherit">Hello {{$deliverable->user->name}}.</h2>
        						</td>
        					</tr>
        					<tr>
        						<td align="left">
        						<p style="font-size:16px;color:#333;letter-spacing:0.25px;line-height:1.4">Votre travail pour le projet {{$deliverable->project->title}} a été évalué. Votre travail est <strong style="font-weight:bold">{{$deliverable->status == '0' ? 'A retravailler' : 'Validé'}}</strong>.<br>
                                    Rendez-vous sur <a href="/path/{{$deliverable->course->slug}}/projects/{{$deliverable->project->slug}}" style="font-weight:bold;text-decoration:none" target="_blank" >la page du projet</a>, pour lire les commentaires sur votre travail<br>
        						</td>
        					</tr>

                            @include('includes.mails.footer')
