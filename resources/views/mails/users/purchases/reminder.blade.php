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
        						<h2 style="font-size:34px;color:#333;letter-spacing:0.25px;line-height:inherit">Hello {{$purchase->user->name}}, petit rappel concernant votre abonnement au cours {{$purchase->course->name}}</h2>
        						</td>
        					</tr>
        					<tr>
        						<td align="left">
        						<p style="font-size:16px;color:#333;letter-spacing:0.25px;line-height:1.4">Votre abonnement au cours <span class="il">{{$purchase->course->name}}</span> prend fin le <strong style="font-weight:bold">{{Carbon\Carbon::parse($purchase->date)->addDays(30)->format('d-m-Y')}}</strong>.<br>
                                    Il faudra donc vous acquitter de la somme de <strong style="font-weight:bold">{{$purchase->pricing->price}} FCFA</strong>, pour continuer à apprendre avec Oschool.<br>
                                    Vous pouvez en savoir plus dans la <a href="https://oschoolelearning.com/users/billings" style="font-weight:bold;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://home.mindvalley.com/profile/accounts_and_billing&amp;source=gmail&amp;ust=1570496899750000&amp;usg=AFQjCNEr-4D3nPuLbhjtu7piGt3ol_PlwQ">section facturation</a> pour voir un récapitulatif de vos achats.<br>
        						</td>
        					</tr>
                            @include('includes.mails.footer')
