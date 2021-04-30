<?php
include('Conexao.php');
include("Clientes.php");

$cliente = new Clientes();
$email = $_GET['email'];

echo $email;
$cliente->enviarEmailCliente($email, '../painel.html');

