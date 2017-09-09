<?php

if (basename($_SERVER["REQUEST_URI"]) === basename(__FILE__))
{
	exit('<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.');
}

if(!isset($_SESSION[login])) { exit('<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.'); } else {

?>

<br /><br />
<div class="container marketing">



<div class="page-header">
<h2>Área Administrativa <a href="?page=adm_global"><button class="btn btn-default" style="margin-left:1%;"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Configurações Global</button></a>
<a href="?<?=$_SERVER['QUERY_STRING'];?>&mostrar=1"><button class="btn btn-primary" style="margin-left:1%;"><i class="fa fa-barcode" aria-hidden="true"></i> Mostrar Pedidos</button></a>
</h2>
</div>
<p class="lead">&Aacute;rea destinada a membros da administra&ccedil;&atilde;o, se estiver no lugar errado clique <a href="?page=cardapio">aqui.</a></p>
<ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="?page=adm"><i class="fa fa-home" aria-hidden="true"></i> In&iacute;cio</a></li>
        <li role="presentation"><a href="?page=adm_categorias"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Categorias</a></li>
        <li role="presentation" class="active"><a href="?page=adm_produtos"><i class="fa fa-bars" aria-hidden="true"></i> Produtos</a></li>
		<li role="presentation"><a href="?page=adm_entregas"><i class="fa fa-motorcycle" aria-hidden="true"></i> Entregas</a></li>
		<li role="presentation"><a href="?page=sair"><i class="fa fa-reply" aria-hidden="true"></i> Sair</a></li>
      </ul><br />

<h1 class="page-header">Produtos</h1>
<div style="width:80%;">

<?php
$mostrar = $mysqli->query("select * from dl_produtos order by id desc");
$mostrar2 = $mostrar->num_rows;
if($mostrar2 === 0) {
echo '<div class="alert alert-info" role="alert"><b>Ops!</b> nenhum produto no momento.</div>';
} else {
echo '<form action="" method="post">
<table width="auto" border="0">
  <tr>
  <td width="300">
<select name="downs" class="form-control" style="width:80%;" required>
<option value="">--- Selecione ---</option>';
while($exibir = $mostrar->fetch_assoc())  {
echo '<option value="'.$exibir[id].'">'.sql($exibir[categoria]).' :: '.$exibir[nome].'</option>';
}
echo '</select></td>
<td  width="300"><input class="btn btn-danger btn-block" type="submit" value="Deletar" style="width:50%;" name="deletar"><br>
<input class="btn btn-warning" type="submit" value="Editar" style="width:50%;" name="editar">
</form></td></tr>
</table>';
}
if($_POST[deletar]) {
$mysqli->query("delete from dl_produtos where id='".$_POST[downs]."'");
echo '<br><div class="alert alert-success" role="alert"><b>Sucesso!</b> produto deletado.</div>';
}
if($_POST[editar]) {
echo '<script>location.href="?page=adm_produtos_editar&id='.$_POST[downs].'";</script>';
}
?>
</div>
<br /><br />
<h1 class="page-header">Adicionar Produtos</h1>
<div style="width:50%;">
<form action="" method="post" enctype="multipart/form-data">
<input name="nome" class="form-control" type="text" placeholder="Nome..." required><br />
<input name="descricao" class="form-control" type="text" placeholder="Descri&ccedil;&atilde;o..." required><br />
<input name="preco" class="form-control" type="text" placeholder="0.00 *** caso não estiver disponível, valor 0. ***" maxlength="5" required><br />
<?php
echo '<select name="categoria" class="form-control" style="width:80%;" required>
<option value="">--- Selecionar Categoria ---</option>';
$mostrar = $mysqli->query("select * from dl_categorias order by id desc");
while($exibir = $mostrar->fetch_assoc())  {
echo '<option value="'.sql($exibir[nome]).'">'.sql($exibir[nome]).'</option>';
}
echo '</select>';
?><br />
<select name="promocao" class="form-control" style="width:80%;" required>
<option value="">--- Selecione Promo&ccedil;&atilde;o ---</option>
<option value="0">Sem Promo&ccedil;&atilde;o</option>
<option value="1">Com Promo&ccedil;&atilde;o</option>
</select><br />
<input type="file" name="fileUpload" width="10"><br />
</div>
<div style="width:100%;">
<h4>Opções</h4>
<table>
<tr>
<td><input name="opcao1" type="checkbox" value="1" /> <?=$op1_n;?>  <i>(R$<?=number_format($op1_p,2,",",".");?>)</i></td>
<td><input name="opcao2" type="checkbox" value="1" /> <?=$op2_n;?>   <i>(R$<?=number_format($op2_p,2,",",".");?>)</i></td>
<td><input name="opcao3" type="checkbox" value="1" /> <?=$op3_n;?>   <i>(R$<?=number_format($op3_p,2,",",".");?>)</i></td>
<td><input name="opcao4" type="checkbox" value="1" /> <?=$op4_n;?>   <i>(R$<?=number_format($op4_p,2,",",".");?>)</i></td>
<td><input name="opcao5" type="checkbox" value="1" /> <?=$op5_n;?>   <i>(R$<?=number_format($op5_p,2,",",".");?>)</i></td>

<td><input name="opcao6" type="checkbox" value="1" /> <?=$op6_n;?>   <i>(R$<?=number_format($op6_p,2,",",".");?>)</i></td>
<td><input name="opcao7" type="checkbox" value="1" /> <?=$op7_n;?>   <i>(R$<?=number_format($op7_p,2,",",".");?>)</i></td>
<td><input name="opcao8" type="checkbox" value="1" /> <?=$op8_n;?>   <i>(R$<?=number_format($op8_p,2,",",".");?>)</i></td>
<td><input name="opcao9" type="checkbox" value="1" /> <?=$op9_n;?>   <i>(R$<?=number_format($op9_p,2,",",".");?>)</i></td>
<td><input name="opcao10" type="checkbox" value="1" /> <?=$op10_n;?> <i>(R$<?=number_format($op10_p,2,",",".");?>)</i> </td>
</tr>
</table>
<br /><bR />
<input class="btn btn-success btn-block" type="submit" value="Enviar" style="width:30%;" name="enviar">
<br />

<?php 

if($_POST[enviar]) {
$ext = strtolower(substr($_FILES['fileUpload']['name'],-4));
      $new_name = md5(date('dmYHis')) . $ext; 
      $dir = 'css/produtos/'; 
	  move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name);
	  
$mysqli -> query ("insert into dl_produtos (nome,descricao,preco,categoria,foto,promocao,opcao1,opcao2,opcao3,opcao4,opcao5,opcao6,opcao7,opcao8,opcao9,opcao10) values ('".$_POST[nome]."','".$_POST[descricao]."','".str_replace(",", ".", $_POST[preco])."','".$_POST[categoria]."','".$new_name."','".$_POST[promocao]."','".$_POST[opcao1]."','".$_POST[opcao2]."','".$_POST[opcao3]."','".$_POST[opcao4]."','".$_POST[opcao5]."','".$_POST[opcao6]."','".$_POST[opcao7]."','".$_POST[opcao8]."','".$_POST[opcao9]."','".$_POST[opcao10]."')");
echo '<div class="alert alert-success" role="alert"><b>Sucesso!</b> novo produto adicionado.</div>';
}
} ?>