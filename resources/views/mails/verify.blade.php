
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    </head>
    <body>
@component('mail::layout')
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="margin:auto;background:#ffffff;text-align:center" width="100%">
        	<tbody>
        		<tr>
        			<td align="center" style="padding:0 6%">
        			<table style="max-width:600px;text-align:center">
        				<tbody>
        					<tr>
                                {{-- Header --}}
                                  @slot('header')
                                    @component('mail::header', ['url' => config('app.url')])

                                        <td style="padding:25px 0"><img alt="Mindvalley Logo" border="0" src="https://ci5.googleusercontent.com/proxy/A8vH6ZHHZbdDlHqs7n59XiWxJ1UFDNx5vzQFABGkZYb6aBc4CYJgcrcC1fKJ8OtIy2WIjJnILyDi7kKmwGxjf92ctVtyLG7WXpOlyhYWAw=s0-d-e1-ft#http://s78.mindvalley.us/mindvalley/media/images/mv_logo.png" style="width:204px" class="CToWUd"></td>
                                    
                                        @endcomponent
                                    @endslot
        					</tr>
        					<tr>
        						<td style="padding:0 0 20px 0">
        						<h2 style="font-size:34px;color:#333;letter-spacing:0.25px;line-height:inherit">Bravo, Confirmer votre adresse email pour continuer</h2>
        						</td>
        					</tr>
        					<tr>
        						<td align="left">
                                <p style="font-size:16px;color:#333;letter-spacing:0.25px;line-height:1.4">
                                    

                                    Veillez confirmer votre compte en cliquent sur le bouton en bas <br>

                                    <em>Ce lien expirera dans 60 minutes</em>
                                    
                                    @component('mail::button', ['url' => $url])
                                    Verifiez l'email
                                    @endcomponent
                                    
                                    {{-- <a href="https://home.mindvalley.com/" style="font-weight:bold;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://home.mindvalley.com/&amp;source=gmail&amp;ust=1570496899750000&amp;usg=AFQjCNEV2Fn2wGgMAIfhRc46qZB4VC6wpg">Login</a><br> --}}
        						<br>
        						{{-- N'oublie pas! Consultez nos canaux <a href="https://www.facebook.com/groups/mindvalley.community" style="font-weight:bold;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/groups/mindvalley.community&amp;source=gmail&amp;ust=1570496899750000&amp;usg=AFQjCNE9xqkpqwq5xRQBxPlym__toBZzQA">Facebook</a> et  <a href="https://www.instagram.com/mindvalley" style="font-weight:bold;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/mindvalley&amp;source=gmail&amp;ust=1570496899750000&amp;usg=AFQjCNHGbddvBplFHjbGUkA-GN4HHtWdRQ">Instagram</a> connectez-vous avec d'autres membres de  <span class="il">Oschool</span> partageant les mêmes idées. Notre communauté nous inspire à découvrir constamment des enseignants extraordinaires qui vous pousseront à grandir et à inspirer les autres. Qu'est-ce que tu attends?</p> --}}
        						</td>
        					</tr>
        					<tr>
        						<td align="left">
                                <p style="color:#62686e;font-size:14px;line-height:1.4;letter-spacing:0.25px">
                                
                                {{-- Footer --}}
                                    @slot('footer')
                                    @component('mail::footer')
                                            @lang(
                                                "Si vous ne pouvez pas cliquer sur le bouton \"Verifiez l'email\" , Copiez et collez ce lien\n".
                                                'dans votre navigateur: [:url](:url)',
                                                [
                                                    'url' => $url
                                                ]
                                            )
                                    @endcomponent
                                    @endslot
                                
                                </p>
        						</td>
        					</tr>
        				</tbody>
        			</table>
        			</td>
        		</tr>
        		<tr>
        			<td height="70" style="padding:0 6%">&nbsp;</td>
        		</tr>
        		<tr>
        			<td>
        			<table align="center" style="max-width:600px;text-align:center">
        				<tbody>
        					<tr>
        						<td style="padding-bottom:5px">
        						<p style="font-size:12px;color:#333333;text-decoration:none;letter-spacing:0.25px;margin:8px 0">Suivez <span class="il">Oschool</span> sur les reseaux sociaux:</p>
        						</td>
        					</tr>
        					<tr>
        						<td>
        						<table align="center" style="text-align:center">
        							<tbody>
        								<tr>
        									<td>&nbsp;</td>
        									<td style="padding-left:15px"><a href="https://www.facebook.com/mindvalley/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.facebook.com/mindvalley/&amp;source=gmail&amp;ust=1570496899750000&amp;usg=AFQjCNEtcd3i622h-khOjYdoB-SpZC7FiA"><img alt="Facebook" border="0" src="https://ci3.googleusercontent.com/proxy/bcvbNa2jyd27xMufpL0sYsoFPuNpsgivNnV8gOjzmz5VEyqEJUWjQN59rFJHlzLHbxwGUriQQ32HisEk-iG2S34jaUQz48-xvY9uJON6=s0-d-e1-ft#http://s59.mindvalley.us/mindvalley/media/images/ico-fb.png" style="width:25px" class="CToWUd"></a></td>
        									<td style="padding-left:15px"><a href="https://www.instagram.com/mindvalley/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/mindvalley/&amp;source=gmail&amp;ust=1570496899750000&amp;usg=AFQjCNG0rqBP9wKZ4USjFwhwBoi84agOHQ"><img alt="Instagram" border="0" src="https://ci3.googleusercontent.com/proxy/ZKI1Zl9G76woe5u7Vt4UGIOtGg-UAqu8I-KCseL8mS7XikJaTfp6Jw_oMvn6pVFvny3vNE3ayuFgw0P1vx9v3-drhSMoIipQaGLx9FyA5bKN=s0-d-e1-ft#http://s78.mindvalley.us/mindvalley/media/images/ico-insta.png" style="width:25px" class="CToWUd"></a></td>
        									<td style="padding-left:15px"><a href="https://www.twitter.com/mindvalley/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.twitter.com/mindvalley/&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNHr1y3zsS58X2rqCBOtE9yhm3RUsA"><img alt="Twitter" border="0" src="https://ci4.googleusercontent.com/proxy/A6iiFqF77EHr3aIebs0t2jo_TuWgZRqN1oXRNi6Qo33gFkSWr8tZukaO61kerYy97N3_PI7_1R5SMIJhJ6Tg_F_dGswRNl5vH-oUaWgx6d0IOOA=s0-d-e1-ft#http://s46.mindvalley.us/mindvalley/media/images/ico-twitter.png" style="width:25px" class="CToWUd"></a></td>
        									{{-- <td style="padding-left:15px"><a href="https://www.youtube.com/mindvalley/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.youtube.com/mindvalley/&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNE_pflbdmYQszLvNhQ_8EkW_kVx5Q"><img alt="Mindvalley Official on Youtube" border="0" src="https://ci3.googleusercontent.com/proxy/Gd2QEq7FD0YMkiX_GzkK9W-6GdiB04HrK41Jsbfa2psXXyy9XrMmOJTwBWNYdCeqhTI6C_VSLabrgo91fVRMFdgPED4bS4RSL9VpK0iKjZjhZ7sNbO0=s0-d-e1-ft#http://s3.mindvalley.us/mindvalley/media/images/ico-yt-official.png" style="width:80px" class="CToWUd"></a></td>
        									<td style="padding-left:15px"><a href="https://www.youtube.com/user/awesomenessfest" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.youtube.com/user/awesomenessfest&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNHshvsLLEDDYkDim3vcAfA8Aa82jA"><img alt="Mindvalley Talks on Youtube" border="0" src="https://ci6.googleusercontent.com/proxy/kWihKuywVnql6vkqCDqyedZLGILuEY6MOjwEAZSItaRzo1cUVlBUOknsDR8nTsbyhysQ3OlpS7e9oKJ42vRVzcCRSyzNl2VKG9qc8-IIfVAogGs=s0-d-e1-ft#http://s3.mindvalley.us/mindvalley/media/images/ico-yt-talks.png" style="width:80px" class="CToWUd"></a></td> --}}
        									<td>&nbsp;</td>
        								</tr>
        							</tbody>
        						</table>
        						</td>
        					</tr>
        					<tr>
        						<td height="5">&nbsp;</td>
        					</tr>
        					{{-- <tr>
        						<td style="padding-bottom:5px">
        						<p style="font-size:12px;color:#333333;text-decoration:none;letter-spacing:0.25px;margin:8px 0">Download <span class="il">Mindvalley</span> app:</p>
        						</td>
        					</tr> --}}
        					{{-- <tr>
        						<td><a href="https://itunes.apple.com/us/app/mindvalley-education-evolved/id1108786610?mt=8" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://itunes.apple.com/us/app/mindvalley-education-evolved/id1108786610?mt%8&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNG1cfEWnaiC7ofBcKKod-VDSOUyDA"><img alt="Download on the App Store" border="0" src="https://ci4.googleusercontent.com/proxy/WTMOpB_5rMP-Csf58e7wm4TIimwtp6H1sy6BktZx0xji51_VsrffM-RRok7Im5gPaMrLSq0TIML2Hu2Ck2b3Ttad_gco7RA75y7lb_gcp_cnNFMr5g=s0-d-e1-ft#http://s81.mindvalley.us/mindvalley/media/images/btn-app-store.png" style="display:inline-block;max-width:150px;width:110px" class="CToWUd"></a> &nbsp;&nbsp; <a href="https://play.google.com/store/apps/details?id=com.mindvalley.mva&amp;hl=en" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://play.google.com/store/apps/details?id%com.mindvalley.mva%26hl%en&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNH1TbaTHfpgAF-Sg94cyII1A0ptyw"><img alt="Get it on Google Play" border="0" src="https://ci6.googleusercontent.com/proxy/kZcV4M3MSaG5rkeRs-Gdw-3yfOjtHRrQL5wfUknAlkU82W5945WeWFluG70rQu111o__8yB1MZTAMzwHulG-lwKPAINn845mVY_HAsmLOtmH5TJuzYTQ=s0-d-e1-ft#http://s85.mindvalley.us/mindvalley/media/images/btn-google-play.png" style="display:inline-block;max-width:150px;width:110px" class="CToWUd"></a></td>
        					</tr> --}}
        					<tr>
        						<td height="5">&nbsp;</td>
        					</tr>
        					<tr>
        						<td>
        						<table align="center" style="max-width:600px;text-align:center">
        							<tbody>
        								<tr>
        									<td>
        									<p style="font-size:12px;letter-spacing:0.25px;color:#62686e;margin:15px 0 20px 0">Besoin d'aide? Visitez <a href="http://support.mindvalley.com" style="font-weight:bold;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://support.mindvalley.com&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNEv5YZWtQtQSFym0VFPUl2n9PgveA">support.<span class="il">oschoolelearning</span>.com</a></p>

        									<p style="font-size:12px;letter-spacing:0.25px;color:#62686e">Envoyer <span class="emoji-outer emoji-sizer"><span class="emoji-inner" style="background: url(chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/emoji-data/sheet_apple_32.png);background-position:95.94594594594594% 48.00235017626322%;background-size:5418.75% 5418.75%" data-codepoints="2665-fe0f"></span></span> depuis <span class="il">Oschool</span></p>

        									{{-- <p style="font-size:12px;text-decoration:none;letter-spacing:0.25px;margin:8px 0">14525 SW Millikan Way #31545 Beaverton, OR 97005-2343</p> --}}
        									{{-- <a href="http://www.mindvalley.com/privacy-policy" style="font-size:11px;color:#62686e!important;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.mindvalley.com/privacy-policy&amp;source=gmail&amp;ust=1570496899751000&amp;usg=AFQjCNFyHkdvNZrJ5kd_RUNHhKpakgoLXw">Privacy Policy</a></td> --}}
        								</tr>
        								<tr>
        									<td height="20">&nbsp;</td>
        								</tr>
        							</tbody>
        						</table>
        						</td>
        					</tr>
        				</tbody>
        			</table>
        			</td>
        		</tr>
        	</tbody>
        </table>

        @endcomponent
    </body>
</html>











{{-- @component('mail::layout') --}}

{{-- Header --}}
{{-- @slot('header')
@component('mail::header', ['url' => config('app.url')])
    Oschool E-learning
@endcomponent
@endslot --}}

{{-- Veillez confirmer votre compte en cliquent sur le bouton en bas

<em>Ce lien expirera dans 60 minutes</em> --}}

{{-- @component('mail::button', ['url' => $url])
Verifiez l'email
@endcomponent --}}

{{-- 
Merci d'etre un membre,<br>
{{ __("d'Oschool E-learning") }} --}}



  {{-- Footer --}}
  {{-- @slot('footer')
  @component('mail::footer')
        @lang(
            "Si vous ne pouvez pas cliquer sur le bouton \"Verifiez l'email\" , Copiez et collez ce lien\n".
            'dans votre navigateur: [:url](:url)',
            [
                'url' => $url
            ]
        )
  @endcomponent
  @endslot
@endcomponent --}}