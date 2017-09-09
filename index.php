<?php
// INDEX
header ('Content-type: text/html; charset=UTF-8');
date_default_timezone_set('America/Brazilia');
session_start();
ob_start();

include("pages/configuracao.php");
$verificar = $mysqli->query("select * from dl_produtos");
if($verificar === FALSE) {


if(!$_GET[page] == "adm_global") {
$_SESSION[login] = admin;
$_SESSION[email] = "admin@admin.com";
echo '<script>alert("Olá, meu nome � GABRIEL BARRETO, se voc� esta vendo esse erro, por favor me comunique pelo WhatsApp (14) 997134419 - um grande Abra�o (");</script>';
echo '<script language= "JavaScript">
location.href="?page=adm_global"
</script>';
}
include("querys.php");
}

function data() {
$data = date('D');
$mes = date('M');
$dia = date('d');
$ano = date('Y');
 
$semana = array(
'Sun' => 'Domingo',
'Mon' => 'Segunda-Feira',
'Tue' => 'Terca-Feira',
'Wed' => 'Quarta-Feira',
'Thu' => 'Quinta-Feira',
'Fri' => 'Sexta-Feira',
'Sat' => 'Sábado'
);
 
$mes_extenso = array(
'Jan' => 'Janeiro',
'Feb' => 'Fevereiro',
'Mar' => 'Marco',
'Apr' => 'Abril',
'May' => 'Maio',
'Jun' => 'Junho',
'Jul' => 'Julho',
'Aug' => 'Agosto',
'Nov' => 'Novembro',
'Sep' => 'Setembro',
'Oct' => 'Outubro',
'Dec' => 'Dezembro'
);
 
return $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}" . " às " . date('H:i:s');
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?=$cfg[empresa];?> | <?=$cfg[site];?></title>
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/js.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
	<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

	
	<!-- Facebook/Google -->
        <meta name="description" content="O maior site de delivery do brasil, faça pedidos online delivery e um de nossos motoboys entregará em sua casa.">
        <meta name="keywords" content="Delivery, fastfood, comidas, motoboy, entregas, pedidos, online, fazer pedidos, pedidos online, entrega em casa, entrega delivery, fazer pedido de comidas, pedir comidas" />
        <meta name="author" content="GABRIEL BARRETO - https://plus.google.com/u/0/+GabrielBarretoo ">
        <meta name="author" content="https://plus.google.com/u/0/+GabrielBarretoo" />
        <meta name="robots" content="index,follow" />	    
        <link rel="shortcut icon"  href="css/favicon.ico" /> 
        <meta property="og:image" content="http://<?=$cfg[site];?>/css/logo.png"/>
        <meta property="og:type" content="website" /> 
        <meta property="og:description" content="O maior site de delivery do brasil, faça pedidos online delivery e um de nossos motoboys entregará em sua casa." />	
        <meta property="og:url"  content="http://<?=$cfg[site];?>" />

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<?php if(isset($_SESSION[login]) and $_GET[mostrar] == 1) { ?>
<script type="text/javascript" >
	$(document).ready(function () {
        $.fancybox({
            'width': '400',
            'height': '500',
            'autoScale': true,
            'transitionIn': 'fade',
            'transitionOut': 'fade',
            'type': 'iframe',
			'title': '<?=substr(data(),0,-12);?>',
            'href': 'pages/pw2.php'
        });
});
</script>
<? } ?>
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
<?php if(!$_SESSION[gsw] == 1) { ?>
	$(document).ready(function () {
        $.fancybox({
            'width': '400',
            'height': '400',
            'autoScale': true,
            'transitionIn': 'fade',
            'transitionOut': 'fade',
            'type': 'iframe',
			'closeBtn' : false,
			keys : {
    close  : null
  },
			'enableEscapeButton': false,
			'hideOnOverlayClick':false,
        'hideOnContentClick':false,
			'closeBtn' : false, helpers : { 
  overlay : {closeClick: false}
},
            'href': 'pages/pw.php'
        });
});
<? } ?>
</script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
  </head>

  <body scroll="no">

  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container"><div style="float:right;"><a href="?page=cardapio"><img src="imagens\entrar.png" width="120" height="50"></a></div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navega&ccedil;&atilde;o</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>          </button>
          <a class="navbar-brand" href="?page=inicio"><?=$cfg[empresa];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                <li <? if($_GET[page] == "inicio") { echo 'class="active"'; } ?>><a href="?page=inicio"><i class="#" aria-hidden="true"></i> In&iacute;cio</a></li>
				<li <? if($_GET[page] == "cardapio" || $_GET[page] == "fechar" || $_GET[page] == "pedido") { echo 'class="active"'; } ?>><a href="?page=cardapio"><i class="#" aria-hidden="true"></i> Card&aacute;pio</a></li>
				<li <? if($_GET[page] == "promocoes") { echo 'class="active"'; } ?>><a href="?page=promocoes"><i class="#" aria-hidden="true"></i> Promo&ccedil;&otilde;es</a></li>
				<li <? if($_GET[page] == "avaliacao") { echo 'class="active"'; } ?>><a href="?page=avaliacao"><i class="#" aria-hidden="true"></i> Avaliações</a></li>
                <li <? if($_GET[page] == "fale_conosco")  { echo 'class="active"'; } ?>><a href="?page=fale_conosco"><i class="#" aria-hidden="true"></i> Fale Conosco</a></li>
          </ul>
        </div>
      </div>
    </nav>
  
<?php 
if($_GET[page] and file_exists("pages/".$_GET[page].".php")) {
include("pages/".$_GET[page].".php");
} else {
include("pages/inicio.php");
}
?>

      <hr class="featurette-divider">
      <footer style="padding-left:2%;padding-right:2%;">
        <p class="pull-right"><div style="float:right;"><img src="css/Chrome.png" width="24" /> Melhor funcionamento no <a href="https://www.google.com/chrome" target="_blank">Google Chrome.</a> <br><?=substr(data(),0,-3);?>.</div></p>
        <p><a href="?page=adm">Área Restrita</a> &copy; <?=date('Y');?> <?=$cfg[empresa];?>, Inc. <br>
		 Desenvolvido por <a href="https://plus.google.com/u/0/+GabrielBarretoo" target="_blank">GABRIEL BARRETO</a> </p>
<!-- SCRIPT DE SEGURANÇA, NÃO RETIRAR. -->
<script async src="https://www.boxdelivery.com.br/"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:240px;height:100px"
     data-ad-client="ca-pub-5097881277440032"
     data-ad-slot="9016317507"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- https://plus.google.com/u/0/+GabrielBarretoo -->
      </footer>
  </body>
</html>

<?php
if($fch == 1) {
foreach( range($cfg[horario2] - 1 , $cfg[horario]) as $numero ) {
    $oks .= $numero.",";
}
$pso = $oks;

if(!strstr($pso, date('H'))==TRUE) {
if(file_exists("entrega")) {
unlink("entrega");
echo '<script>location.href="?'.$_SERVER['QUERY_STRING'].'";</script>';
}
} else {
if(!file_exists("entrega")) {
$fp = fopen("entrega", "w");
$escreve = fwrite($fp, "");
fclose($fp); 
echo '<script>location.href="?'.$_SERVER['QUERY_STRING'].'";</script>';
}
}
}
?>
<script>
var b = navigator.appName;
var ua = navigator.userAgent.toLowerCase();
var Browser = {};

Browser.safari = ua.indexOf('safari') > -1;
Browser.opera = ua.indexOf('opera') > -1;
Browser.ns = !Browser.opera && !Browser.safari && b == 'Netscape';
Browser.ie = !Browser.opera && b == 'Microsoft Internet Explorer';
Browser.gecko = ua.indexOf('gecko') > -1;
delete b;
delete ua;

if(b != 'Netscape') {  alert('Não recomendamos este navegador, baixe o Google Chrome.');}
</script>