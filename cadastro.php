<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
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
	<div class="fundo-cadastro">
		<center>
		<div class="container_cadastro">
			<br><div style="font-size: 25px;color: white;"><strong>Cadastro</strong></div>
			<div style="color: gray;">Participe desses desafios e divirta-se com os melhores jogos!</div><br>
			<form action="rec_cadastro.php" method="post">
			<table class="caixa">
				<tr>
					<td>Nome</td>
					<td>Sobrenome</td>
				</tr>
				<tr>
					<td><input type="text" class="campos" name="nome" placeholder="Insira seu nome..." style="width: 280px;" required></td>
					<td><input type="text" class="campos" name="sobrenome" placeholder="Insira seu sobrenome..." style="width: 280px;"required></td>
				</tr>
			</table>
			<table class="caixa">
				<tr>
					<td>E-mail</td>
				</tr>
				<tr>
					<td><input type="email" class="campos" name="login" placeholder="Insira seu email..." style="width: 608px;"required></td>
				</tr>
			</table>
			<table class="caixa">
				<tr>
					<td>Senha</td>
				</tr>
				<tr>
					<td><input type="password" class="campos" name="senha" placeholder="Insira sua senha..." style="width: 608px;"required></td>
				</tr>
			</table>
			<table class="caixa">
				<tr>
					<td>DDD</td>
					<td>Telefone</td>
				</tr>
				<tr>
					<td><input type="number" class="campos" name="ddd" placeholder="DDD..." style="width: 80px;"required></td>
					<td><input type="number" class="campos" name="telefone" placeholder="Telefone..." style="width: 500px;"required></td>
				</tr>
			</table>
			<br>
			<input type="submit" class="btn_cadastrar" value="Cadastrar">
	</center></form>
	</div>
</body>
</html>