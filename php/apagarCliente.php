<?php
include('Conexao.php');
$idCliente = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id_usuario='$idCliente'";
$result = mysqli_query($conexao, $sql);
$_SESSION['email_apagado'] = "";

header("Location: ../painel.php");