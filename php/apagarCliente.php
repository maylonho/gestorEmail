<?php
include('Conexao.php');
$idCliente = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id_usuario='$idCliente'";
$result = mysqli_query($conexao, $sql);

header("Location: ../painel.php");