<?php
include("Clientes.php");

//Envio de Email
$cliente = new Clientes();
$cliente->enviarEmailEu();

$email = $_POST['email'];
$cliente->enviarEmailCliente($email, '../obrigado.html');




//Gravar no Banco de Dados
$cliente->cadastrarCliente();


header("Location: ../obrigado.html");
?>