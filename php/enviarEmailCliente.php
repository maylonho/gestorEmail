<?php
include('Conexao.php');
include("Clientes.php");

$cliente = new Clientes();
$email = $_GET['email'];

$cliente->enviarEmailCliente($email, '../painel.php');
$_SESSION['email_enviado'] = "";

$idCliente = $_GET['id'];
$lembrado = $_GET['lem'];
$addLem = $lembrado + 1;

$sql = "UPDATE usuario SET lembrado='$addLem' WHERE id_usuario='$idCliente'";
$result = mysqli_query($conexao, $sql);