<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arcad Games</title>
	<link rel="stylesheet" type="text/css" href="css/homecss.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/icons/aba.png" />
	<script type="text/javascript">
        function OK(){
          setTimeout("window.location='entrar.php'", 3000);
        }
        function ERROR(){
          setTimeout("window.location='cadastrar.php'", 3000);
        }
    </script>
</head>
<body>
	<?php
	include("partes/conexao.php");
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['login'];
	$senha = $_POST['senha'];
	$ddd = $_POST['ddd'];
	$telefone = $_POST['telefone'];

	$x = mysql_query("INSERT INTO usuario VALUES('', '$nome', '$sobrenome', '$email', '$senha', '$ddd', '$telefone')");
	if($x){
		echo '<center>
                <img src="img/logo.png" width="250" style="margin-top: 2%;">
                <div class="loading" style="background: whitesmoke; width: 500px;height: 350px;border-radius: 5px;">
                      <div style="background: green;color: white;border-radius: 5px;padding: 5px;"><strong>Você foi cadastrado com sucesso!</strong></div>
                      <div style="font-size: 15px; height: 200px; margin-top: 10%;">
                            <img src="img/icons/loading.gif" width=""><br>
                            <strong>Aguarde enquanto sua conta é processada...</strong>
                      </div>
                </div>
        </center>';
    echo '<script>OK()</script>';
	}else{
		echo '<center>
                <img src="img/logo.png" width="250" style="margin-top: 2%;">
                <div class="loading" style="background: whitesmoke;">
                      <div id="sucesso" style="background: #f72c2c;"><strong>Ocorreu um erro ao cadastrar</strong></div>
                      <div style="font-size: 15px; height: 200px; margin-top: 10%;">
                            <img src="img/icons/loading.gif" width=""><br>
                            <strong>Aguarde enquanto sua conta é processada...</strong>
                      </div>
                </div>
        </center>';
  echo '<script>ERROR()</script>';
	}
?>
</body>
</html>
