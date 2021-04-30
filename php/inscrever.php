<?php
include("Clientes.php");

//Envio de Email
$cliente = new Clientes();
$cliente->enviarEmailEu();
$cliente->enviarEmailCliente($_POST['email']);




//Gravar no Banco de Dados
$cliente->cadastrarCliente();


header("Location: ../obrigado.html");
?>