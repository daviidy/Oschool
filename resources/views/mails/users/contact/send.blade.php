<!DOCTYPE html>
<html xmlns= "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <style type= "text/css">
    a,
    u,
    b {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <table style="width:100%;max-width:960px;position: relative;left:0;right:0;margin: 0 auto;border-collapse: collapse;border-spacing: 0;font-size: 14px;line-height: 24px;color: #333;font-family: Microsoft YaHei;">
    <tr>
      <td style="padding: 20px 7.5% 0;display: block;"><img width="100" src="https://code.oschool.ci/avilon/img/logo-oschool.png" /></td>
    </tr>
    <tr>
      <td style="padding: 20px 7.5% 0;">Chère, cher {{$user->name}} ,</td>
    </tr>

    <tr>
      <td style="padding: 20px 7.5% 0;">Un.e étudiant.e vous a envoyé un message. Le voici: <br>  </td>
    </tr>
.
    <tr>
      <td style="padding: 20px 7.5% 0;"> Voici les infos de la transaction  <br>
				
        {!!$content!!}
      </td>
    </tr>

    <tr>
      <td style="padding: 20px 7.5% 0;"> Voici les infos de l'étudiant <br>
        
        <p>Vous pouvez répondre à l'étudiant.e en lui écrivant à son mail: {{$student_mail}}</p>
      </td>
    </tr>



    <tr>
      <td style="padding: 20px 7.5% 117px;">Cordialement,<br>l'équipe Oschool</td>
    </tr>

  </table>
  <table style="width:100%;max-width:960px;position: relative;left:0;right:0;margin: 0 auto;text-align: center;border-collapse: collapse;border-spacing: 0;font-size: 12px;line-height: 24px;font-family: Microsoft YaHei;">
    <tr>
      <td style="display: block; height: 16px;border-top:#efefef solid 1px;background: -webkit-radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));background: -o-radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));background: -moz-radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));background: radial-gradient(top, ellipse farthest-side, rgba(251,251,251,1), rgba(255,255,255,0));">
      </td>
    </tr>

  </table>

</body>

</html>
