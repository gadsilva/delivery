<?php
if($_POST) {
require('pages/configuracao.php');

if(empty($_POST[proc])) { $_POST[proc] = $_POST[categoria]; }
$c = $_POST[categoria];
if(empty($_POST[categoria])) {
$cw = "select * from dl_produtos where categoria like '%".$_POST[proc]."%' or nome like '%".$_POST[proc]."%' or descricao like '%".$_POST[proc]."%'  order by id desc";
$c = Todos;
} else {
$cw = "select * from dl_produtos where categoria like '%".$c."%' order by id desc";

}
	  $pegar_categorias = $mysqli->query($cw);
	  $pegar_zero = $pegar_categorias->num_rows;
	  
	  if($pegar_zero == 0) { echo '<br><div class="alert alert-info fade in"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" style="margin-right:0.5%;height:5%;"></span> Nenhum produto encontrado em sua busca. </div>';
	  }
	  
	  include("pages/configuracao.php");
	  	  
echo '<div class="page-header" style="margin:0;padding:0;border:none;">
<h2 style="margin:0;padding:0;"><br><i class="fa fa-align-center" aria-hidden="true"></i> Lista de '.$c.'</h2><br>
</div><br>
';

	  echo "<table class='table table-hover' style='border:none;'>";  
	  while($afez = $pegar_categorias->fetch_assoc()) {

	  echo " <tr height='100%' style='border:none;'><td>
	  <img src='css/produtos/$afez[foto]' style='position:absolute;  z-index: 1;' width='130' height='70'>";
	  if($afez[promocao] == 1) { echo "<img src='css/promocao.png' style='position:absolute;  z-index: 2;'  width='80' height='70'>"; }
	  
	  echo "
 <td style='padding-left:20%;  z-index: 3;'><b> ".sql($afez[nome])."</b><br>".sql($afez[descricao])."<td>";
 

	  echo "
<td style='text-align:right;padding-top:3%;'> <h4><b>R$ ".number_format($afez[preco],2,",",".")."</b></h4><td>
 <td style='text-align:right;width:10%;'>
<form action='' method='post'>
<input type='hidden' name='id' value='".$afez[id]."'>
<input type='hidden' name='price' value='".$afez[preco]."'>
<input type='hidden' name='name' value='".$afez[nome]."'>
<input type='hidden' name='category' value='".$afez[categoria]."'>";
if($afez[preco] == 0) { echo "<br><font color=red>produto indisponível</font>"; } else { echo "
<br><input type='image' name='qws' value='`' src='css/+.png'>
";
} 
echo "
</form>
</tr>";
	  }
	  
	  
	  echo "</table>"; 
}

?>