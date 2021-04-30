<?php
/*
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'gestor-email');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Nao foi possivel conectar');
*/

$conexao = mysqli_connect("localhost", "root", "");
$bd = mysqli_select_db($conexao, "gestor-email") or die ("Erro BD");

mysqli_query($conexao, "SET NAMES utf8");
date_default_timezone_set('America/Sao_Paulo');
?>