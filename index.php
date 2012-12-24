
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link href="styles.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="prettyForms/prettyForms.js"></script>
<link rel="stylesheet" href="prettyForms/prettyForms.css" type="text/css" media="screen" />
  
  <title>Envia un Mensaje navideño a tu ser querido(a)</title>
  
</head>
<body onload="prettyForms()">
    <div id="page-wrap">
      <h1>Envia un Mensaje a Tu Ser Querido(a)</h1>
      <form id="myForm" action="card.php">
        <table>
          <tr>
            <td><label>Tu Nombre:</label></td>
            <td><input type="text" name="txt_from_name"/> </td>
          </tr>
          <tr>
            <td><label>Tu Correo:</label></td>
            <td><input type="text" name="txt_from_mail"/> </td>
          </tr>
          
          <tr>
            <td><label>Nombre(Destinatario):</label></td>
            <td><input type="text" name="txt_to_name"/></td>
          </tr>
          <tr>
            <td><label>Correo(Destinatario):</label></td>
            <td><input type="text" name="txt_to_mail"/></td>
          </tr>
          <tr>
            <td><label>Mensaje(Destinatario):</label></td>
            <td><textarea name="txt_to_message"> Te deseo una Feliz Navidad. Que la pases con tus seres queridos. Bendiciones</textarea></td>
          </tr>
          <tr>
            <td><label>URL Perfil Facebook(Destinatario):</label></td>
            <td><input type="text" name="txt_to_linkfbaccount"/></td>
          </tr>
          <tr>
            <td><input type="submit" value="Enviar"></td>
          </tr>
        </table>
      </form>
    </div>

<script type="text/javascript">
	(function(){ var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = '//s3.buysellads.com/ac/bsa.js'; (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa); })();
</script>

<script type="text/javascript">
	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-68528-29']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); })();
</script>
</body>
<?php 
  session_start();
  $_SESSION['sendmail'] = TRUE;
?>
</html>
