<?php
include("configuracao.php");
?>
<!doctype html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<head>
	<script src="../js/jquery-2.1.1.min.js"></script>
</head>

    <style type="text/css">
    body {
        background-color:#F9F9F9;
        margin: 0;
        padding: 0;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        
    }
    div {
        width: 600px;
        margin: 5em auto;
        padding: 50px;
        background-color:#F9F9F9;
        border-radius: 1em;
    }
    a:link, a:visited {
        color: #38488f;
        text-decoration: none;
    }
    @media (max-width: 700px) {
        body {
            background-color: #fff;
        }
        div {
            width: auto;
            margin: 0 auto;
            border-radius: 0;
            padding: 1em;
        }
    }
    </style>  
	  
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<div>
<h1><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Opções</h1>
Selecione as opções adicionais que desejar.<br><br>

<form action="" method="post">
	<?php
	include("configuracao.php");
	$afez2 = $mysqli->query("select * from dl_produtos where id='".$_GET[idq]."'");
	$afez = $afez2->fetch_assoc();

 if(!empty($afez[opcao1])) {
	 echo '<select name="opcao1" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op1_n.' R$ '.number_format($op1_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op1) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	  if(!empty($afez[opcao2])) {
	 echo '<select name="opcao2" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op2_n.' R$ '.number_format($op2_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op2) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	  if(!empty($afez[opcao3])) {
	 echo '<select name="opcao3" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op3_n.' R$ '.number_format($op3_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op3) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	  if(!empty($afez[opcao4])) {
	 echo '<select name="opcao4" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op4_n.' R$ '.number_format($op4_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op4) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	  if(!empty($afez[opcao5])) {
	 echo '<select name="opcao5" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op5_n.' R$ '.number_format($op5_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op5) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	  if(!empty($afez[opcao6])) {
	 echo '<select name="opcao6" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op6_n.' R$ '.number_format($op6_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op6) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	 
	  if(!empty($afez[opcao7])) {
	 echo '<select name="opcao7" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op7_n.' R$ '.number_format($op7_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op7) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	 
	  if(!empty($afez[opcao8])) {
	 echo '<select name="opcao8" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op8_n.' R$ '.number_format($op8_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op8) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	 
	  if(!empty($afez[opcao9])) {
	 echo '<select name="opcao9" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op9_n.' R$ '.number_format($op9_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op9) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }
	 
	 
	  if(!empty($afez[opcao10])) {
	 echo '<select name="opcao10" class="form-control" required>';
	 echo '<option selected="selected" disabled="disabled">--- '.$op10_n.' R$ '.number_format($op10_p,2,",",".").' ---</option>';
	 while (list ($key2, $val2) = each ($op10) ) echo '<option value="['.$val2.']">'.$val2.'</option>';
	 echo '</select><br>'; 
	 }


echo "

<input type='hidden' name='price' value='".$afez[preco]."'>
<input type='hidden' name='name' value='".$afez[nome]."'>
<input type='hidden' name='category' value='".$afez[categoria]."'>
</tr>";

	?>
	
<input type="submit" value="ESCOLHER" name="finalizarq" style="width:100%;padding:2%;margin-bottom:1%;" class="btn btn-warning" /><br />
</form>
<?php
if($_POST[finalizarq]) {

// opcoes
if(empty($_POST[opcao1])) {
$sbs1 = 0;
} else {
$sbs1 = str_replace(",",".",$op1_p);
}
if(empty($_POST[opcao2])) {
$sbs2 = 0;
} else {
$sbs2 = str_replace(",",".",$op2_p);
}
if(empty($_POST[opcao3])) {
$sbs3 = 0;
} else {
$sbs3 = str_replace(",",".",$op3_p);
}
if(empty($_POST[opcao4])) {
$sbs4 = 0;
} else {
$sbs4 = str_replace(",",".",$op4_p);
}
if(empty($_POST[opcao5])) {
$sbs5 = 0;
} else {
$sbs5 = str_replace(",",".",$op5_p);
}
if(empty($_POST[opcao6])) {
$sbs6 = 0;
} else {
$sbs6 = str_replace(",",".",$op6_p);
}
if(empty($_POST[opcao7])) {
$sbs7 = 0;
} else {
$sbs7 = str_replace(",",".",$op7_p);
}
if(empty($_POST[opcao8])) {
$sbs8 = 0;
} else {
$sbs8 = str_replace(",",".",$op8_p);
}
if(empty($_POST[opcao9])) {
$sbs9 = 0;
} else {
$sbs9 = str_replace(",",".",$op9_p);
}
if(empty($_POST[opcao10])) {
$sbs10 = 0;
} else {
$sbs10 = str_replace(",",".",$op10_p);
}

$pr0 = $_POST[price] + $sbs1 + $sbs2 + $sbs3 + $sbs4 + $sbs5 + $sbs6 + $sbs7 + $sbs8 + $sbs9 + $sbs10;
$mysqli->query("insert into dl_carrinho(produto,preco,categoria,ip) values('".$_POST[name]." ".$_POST[opcao1]."".$_POST[opcao2]."".$_POST[opcao3]."".$_POST[opcao4]."".$_POST[opcao5]."".$_POST[opcao6]."".$_POST[opcao7]."".$_POST[opcao8]."".$_POST[opcao9]."".$_POST[opcao10]."','".$pr0."','".$_POST[category]."','".$_SERVER['REMOTE_ADDR']."')");
?>

<script type="text/javascript">
      window.parent.location.href="../index.php?page=cardapio";
   </script>
<?
}
?>
	</p>
</div>
</body>
</html>
