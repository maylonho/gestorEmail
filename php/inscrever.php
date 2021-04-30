<?php
include("Clientes.php");

//Envio de Email
$cliente = new Clientes();
$cliente->enviarEmailEu();
$cliente->enviarEmailCliente();



//Gravar no Banco de Dados
//$cliente->cadastrarCliente();


header("Location: ../obrigado.html");
?>