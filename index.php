
<!DOCTYPE html>
<html pt="BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/estilo_1.css" rel="stylesheet">
<title>ATIVIDADE MAPA BACK END I</title>

</head>
<body>
<div class="topo">
  <img src="images/logo_Final.png" alt="Girl in a jacket" width="800" height="179">
</div>
  <div class="mesTRA">
  <div id="apDiv2">
  <a href="index.php">Início</a>
  <a href="index.php?p=home">home</a>
  <a href="index.php?p=quemsomos">quem somos</a>
  <a href="index.php?p=contato">contato</a>
  <a href="index.php?p=localizacao">localização</a>
 <div class="tesT">
  <?php
      $valor = @$_GET['p'];
	   if ($valor == 'início') {require_once 'index.php';}
       if ($valor == 'home') {require_once 'pages/home.php';}
	   if ($valor == 'quemsomos') {require_once 'pages/quemsomos.php';}
	   if ($valor == 'contato') {require_once 'pages/contato.php';}
	   if ($valor == 'localizacao') {require_once 'pages/localizacao.php';}  
   ?>
   
 </div>
   </div>
</div>
<div class="rodApe">
  <p class="p_rodApe">HAMILTON&nbspSTEFANI&nbsp;-&nbspRA:&nbsp;20003803-5<br/>CURSO:
SUPERIOR&nbsp;DE&nbsp;TECNOLOGIA&nbsp;EM&nbsp;SISTEMAS&nbsp;PARA&nbsp;INTERNET<br/>UNICESUMAR</p>
</div>
</body>
</html>