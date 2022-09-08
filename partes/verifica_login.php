<?php
@session_start();
if(!$_SESSION['login']) {
	header('Location: entrar.php');
	exit();
}