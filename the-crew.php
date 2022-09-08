<html>
	<head>
		<meta charset="utf-8">
		<title>The Crew 2</title>
		<?php include("partes/links.php");?>
		<link rel="icon" href="img/icons/aba.png" />
	</head>
<body>
<div class="todo-the-crew">
		<?php include("partes/menu.php");?>
		<center>
			<div>
				<img src="img/logo_games/The_Crew_2_Logo.png" style="width: 500px;margin-top: -110px;">
			</div>
		</center>
		<div class="titulo-pags">
			<strong>The Crew™ 2</strong>
		</div>
	<div class="conteudo-pags">
		<div class="slide-pags">
			<?php include("partes/slide-crew.php");?>
			<div class="botao-trailer">
				<!--Trailer-->
                <div class="w3-container">
                    <div id="id01" class="w3-modal">
                        <div class="w3-center"><br>
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Fechar">x</span>
                        </div>
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:607px">
                            <video width="100%" controls class="video">
                                <source src="trailer/the-crew-trailer.webm" type="video/webm">
                            </video>
                        </div>
                    </div>
                </div>
                    <div class="user" onclick="document.getElementById('id01').style.display='block'">
                        <img src="img/icons/play.png">Ver Trailer</div>   
			</div>
		</div>
		<div class="img-pags">
			<img src="img/the_crew_2_capa.jpg">
		</div>
		<div class="sinopse">
			Seja bem-vindo a Motornation! Enfrente desafios por terra, céu e mar e sinta a liberdade sem limites do nosso grande e belo mundo aberto recriado! Conquiste a fama!
			<div class="data-pags">
				DATA DE LANÇAMENTO: <a style="color: #8F98A0">29/06/2018</a>
			</div>
			<div class="desenvolvedor-pags">
				DESENVOLVEDOR: <a style="color: #2D97E8">Ivory Tower</a>
			</div>
			<div class="genero-pags">
				Gênero:<br><br>
				<a>Corrida</a>
				<a>Mundo Aberto</a>
				<a>Direção</a>
				<a>Multijogador</a>
				<a>+</a>
			</div><br><br>
			<div class="baixar">
				<a href="#"><img src="img/icons/baixar.png"> Download</a>
			</div>
		</div>
		
	</div>
		
<!-- Rodapé -->
<div style="margin-top: 3%;">
	<?php include("partes/rodape.php");?>
</div>
</body>
</html>