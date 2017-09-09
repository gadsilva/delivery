<?php

if (basename($_SERVER["REQUEST_URI"]) === basename(__FILE__))
{
	exit('<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.');
}
$pegar_xss = $mysqli->query("select * from dl_pedidos");
$pegar_xssw = $pegar_xss->num_rows;
?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagens\1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>O jeito mais f&aacute;cil de pedir delivery</h1>
              <p>Fa&ccedil;a seu pedido pela internet e receba em casa agora mesmo de um jeito f&aacute;cil.</p><br><br><br><br><br>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens\2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>&Eacute; s&oacute; ligar pra gente!</h1>
              <p><?=$cfg[empresa];?> tem as op&ccedil;&otilde;es mais gostosas para a sua refei&ccedil;&atilde;o, confira os nossos n&uacute;meros.</p><br><br><br><br><br>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="imagens\3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?=$cfg[empresa];?> na sua m&atilde;o</h1>
              <p>Fa&ccedil;a seu pedido e acompanhe no seu celular ou tablet a todo momento.</p><br><br><br><br><br>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Voltar</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Pr&oacute;ximo</span>
      </a>
    </div>
	<h1 style="margin:0 5%;"></i> Seja bem-vindo ao <?=$cfg[empresa];?></h1>
	<div style="margin:0 5%;;">Aqui você tem a certeza de comer um lanche saboroso preparado com os melhores ingredientes, No <?=$cfg[empresa];?> você tem a opção super saudável de comer seu lanche com sucos feitos com as mais seletas frutas.</div><br><br>
	<div class="container marketing">

  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="30">

         <link rel="stylesheet" href="teste.css">
    </head>


	  <div id="clientes">
		  <ul>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		    <li><a href="?page=cardapio" title="Donatello"><img src="imagens\donatello.png"></a></li>
		  </ul>
</div>
<br>
<br>
<br>

<div style="float:right;margin-right:10%;text-align:center;"><h4>FA&Ccedil;A PARTE DAS<br>
<font style="font-weight:bold;font-size:70px;color:#003399;font-family:"Times New Roman", Times, serif;">
<?php
echo $pegar_xssw;
?></font>
<br>PESSOAS APAIXONADAS<br> PELO SABOR</h4>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1630999600456662&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="<?=$cfg[facebook];?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
</div>





<br><br><br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="likebox" class="fb-like-box" data-href="<?=$cfg[facebook];?>" data-width="480" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>

</div>