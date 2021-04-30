<?php
include('Conexao.php');
include("Clientes.php");

$email = $_GET['email'];
$cliente = new Clientes();

$cliente->enviarEmailCliente($email);


