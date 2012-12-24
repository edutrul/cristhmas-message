<?php 
  session_start();
?>
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

<?php

if ($_SESSION['sendmail']) {
  $actual_link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $to = $_GET['txt_to_mail'];
  $subject = $_GET['txt_from_name'] . ': Te Regalo una Tarjeta Virtual';
  $message = $_GET['txt_to_message'] . ' Abre tu Tarjeta Virtual! ' . $actual_link;
  $from = $_GET['txt_from_mail'];
  $headers = 'From:' . $from;
  print mail($to, $subject, $message, $headers) ? '<span id="mail-successful">Mensaje Enviado a! ' . $_GET['txt_to_mail'] . '</span>' : '';
  
}
?>

<?php $img_fb = explode('/', $_GET['txt_to_linkfbaccount']); ?>
    <div id="page-wrap-card">
      <h1>Feliz Navidad <?php print $_GET['txt_to_name']; ?></h1>
      <img src="https://graph.facebook.com/<?php print $img_fb[3];?>/picture?width=550"><br>
      Te lo deseo con mucho cariño y estimo. Yo <?php print $_GET['txt_from_name']; ?>
      <?php print $_GET['txt_to_message']; ?>
      <br><br>
      <a href="http://cristhmas.testingmenow.com">Envia postales gratuitos Click Aqui!</a>
    </div>

<script type="text/javascript">
	(function(){ var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = '//s3.buysellads.com/ac/bsa.js'; (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa); })();
</script>

<script type="text/javascript">
	var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-68528-29']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga); })();
</script>
</body>

</html>
