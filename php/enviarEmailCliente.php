<?php
include('Conexao.php');
include("Clientes.php");

$cliente = new Clientes();
$email = $_GET['email'];

$cliente->enviarEmailCliente($email, '../painel.php');

