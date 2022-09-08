<?php
session_start();
include('partes/conexao_login.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: entrar.php');
	exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email from usuario where email = '{$login}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $login;
	header('Location: home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: entrar.php');
	exit();
}