<html>
	<head>
		<meta charset="utf-8">
		<title>CS:GO</title>
		<?php include("partes/links.php");?>
		<link rel="icon" href="img/icons/aba.png" />
	</head>
<body>
<div class="todo-csgo">
		<?php include("partes/menu.php");?>
		<center>
			<div>
				<img src="img/logo_games/csgo_logo.png" style="width: 500px;margin-top: -50px;margin-bottom: 100px;">
			</div>
		</center>
		<div class="titulo-pags">
			<strong>Counter-Strike: Global Offensive</strong>
		</div>
	<div class="conteudo-pags">
		<div class="slide-pags">
			<?php include("partes/slide-csgo.php");?>
			<div class="botao-trailer">
				<!--Trailer-->
                <div class="w3-container">
                    <div id="id01" class="w3-modal">
                        <div class="w3-center"><br>
                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Fechar">x</span>
                        </div>
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:607px">
                            <video width="100%" controls class="video">
                                <source src="trailer/csgo-trailer.webm" type="video/webm">
                            </video>
                        </div>
                    </div>
                </div>
                    <div class="user" onclick="document.getElementById('id01').style.display='block'">
                        <img src="img/icons/play.png">Ver Trailer</div>
			</div>
		</div>
		<div class="img-pags">
			<img src="img/csgo_danger_zone_capa.jpg">
		</div>
		<div class="sinopse">
			Counter-Strike:Global Offensive (CS:GO) expande a jogabilidade de ação baseada em equipes que foi pioneira. O CS:GO apresenta novos mapas, personagens, armas e modos de jogo.
			<div class="data-pags">
				DATA DE LANÇAMENTO: <a style="color: #8F98A0">29/06/2018</a>
			</div>
			<div class="desenvolvedor-pags">
				DESENVOLVEDOR: <a style="color: #2D97E8">Valve</a>
			</div>
			<div class="genero-pags">
				Gênero:<br><br>
				<a>FPS</a>
				<a>Tiro</a>
				<a>Multijogador</a>
				<a>Competitivo</a>
				<a>Ação</a>
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