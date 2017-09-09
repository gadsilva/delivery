<?php

// PHPLIVRE - ARQUIVO DE CONFIGURAÇÃO
// WWW.PHPLIVRE.COM
$map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.9294613660513!2d-43.466941000000034!3d-22.879063999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdfec61c43b9b%3A0x1290c707e98df4bd!2sBangu+Shopping!5e0!3m2!1spt-BR!2sbr!4v1430413674997"; // LINK DO IFRAME DO MAPA DE SUA LOJA, PEGAR NO GOOGLE MAPS.
	 
// MÉTODOS DE PAGAMENTOS ONLINE
$pg_online = "sim";                                             // HABILITA OPÇÃO DE PAGAMENTOS ONLINE

$fch = "0";                                                         /* DESEJA QUE A LOJA FECHE SOZINHA NOS HORÁRIOS? 1: SIM 0: NÃO */
$cfg = array(
     "servidor" => "delivery-pedido.mysql.uhserver.com",              // IP HOST
	 "login" => "gadsilva",                      // LOGIN HOST
	 "senha" => "P@ssw0rd",                       // SENHA HOST
	 "database" => "delivery_pedido",                     // DATABASE HOST
	 "empresa" => "GABRETO DELIVERY",               // NOME DA EMPRESA
	 "email"    => "gabrielbarreto@gabreto.online",              // EMAIL DE CONTATO
     "site"    => "https://www.facebook.com/gabrielbarretoo",              // SITE DA EMPRESA
	"facebook" => "https://www.facebook.com/gabrielbarretoo",             // FACEBOOK DA EMPRESA
	"entrega" => "3,00",                            // TAXA DE ENTREGA
	"minimo" => "10,00",                            // VALOR DO PEDIDO MINIMO
	"horario" => "18",                           // HORARIO DE ABERTURA SEM MINUTOS
	"horario2" => "00",                        // HORARIO DE FECHAMENTO SEM MINUTOS
	"diasf" => "Quarta à Domingo",                         // DIAS DE FUNCIONAMENTO
	"entrega_min" => "50 min",                 // TEMPO DE ENTREGA ESTIMADO
	"bairros" => "Mary dota, Vila Dutra , ouro verde , centro",            // BAIRROS PARA ENTREGA
	"user" => "gadsilva",                          // LOGIN DO ADMIN
	"pw" => "gabriel123.",                         // SENHA DO ADMIN
	"tel1" => "(14) 9971-34419",                // TELEFONE 1
	"tel2" => "(14) 9880-21766",              // TELEFONE 2
	"endereco" => "Bauru-SP",          // ESTADO E CIDADE
	"endereco2" => "Rua primo Pegoraro, 11-99.",        // RUA E NUMERO
	"cartoes" => "MasterCard, Visa e Dinners",           // Cartões aceitos
	 );
?>



