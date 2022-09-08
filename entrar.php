<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Entrar</title>
	<link rel="stylesheet" type="text/css" href="css/entrar.css">
	<link rel="icon" href="img/icons/aba.png" />
</head>
<body>
		<a href="javascript:history.go(-1)">
			<div class="voltar">
				Voltar
			</div>
		</a>
		<div class="logo">
			<img src="img/logo.png">
		</div>
	<div class="fundo-entrar">
		<center>
		<div class="container_entrar">
			<form action="rec_login.php" method="post">
			<table class="caixa">
				<tr>
					<td>E-mail</td>
				</tr>
				<tr>
					<td><input type="email" class="campos" name="login" placeholder="Insira seu Email" style="width: 300px;"></td>
				</tr>
			</table>
			<table class="caixa">
				<tr>
					<td>Senha</td>
				</tr>
				<tr>
					<td><input type="password" class="campos" name="senha" placeholder="•••••••••••••••••••••" style="width: 300px;"></td>
				</tr>
			</table>
			<br>
			<input type="submit" class="btn_entrar" value="Entrar">
			<div style="color: gray;margin-top: 40px;margin-right: 20px;">Não está Cadastrado?</div><br>
			<a href="cadastro.php" style="color: #2D97E8;margin-right: 20px;">Cadastrar-se</a>
			</form>
	</center>
	</div>
</body>
</html>