<!DOCTYPE html>
<html>
	<head>	 
		<meta charset="utf-8">
		<title>WPTCAR - Inicio</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/wpt.css">
		
	</head>
	<body>
		<header>
		
		<?php
		// header
		include_once('includes/header.php'); ?>
	
		</header>

		<section>
			<div id="banner">
				<h1>Seu site de informações sobre carros<small>Veículos, Catalogo de Vendas, Vídeos e muito mais</small></h1>
			</div>	

			<div id="noticias" class="container">
				<div class="row text-center">
				    </br>
				    </br>
				    </br>
				    </br>
					<h2>Notícias</h2>
					<hr>
				</div>

				<div class="row thumbnails">
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia2.png" alt="Noticia">
							<h3>6 tecnologias para carros do futuro que você deve conhecer</h3>
							<time>05 de Dezembro de 2019</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia3.png" alt="Noticia">
							<h3>Carro vendido ainda pode render multas ao antigo dono; saiba como evitar...</h3>
							<time>05 de Dezembro de 2019</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia4.jpg" alt="Noticia">
							<h3>O que podemos esperar do Salão de Los Angeles que começa hoje...</h3>
							<time>05 de Dezembro de 2019</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia5.jpg" alt="Noticia">
							<h3>Volkswagen Nivus: tudo o que já sabemos sobre o SUV cupê da marca alemã</h3>
							<time>05 de Dezembro de 2019</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia6.jpg" alt="Noticia">
							<h3>Musk pagou 10 mil vezes mais caro em carro de 007 que inspirou Cybertruck</h3>
							<time>05 de Dezembro de 2019</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia7.jpg" alt="Noticia">
							<h3>Como contar os pontos de sua CNH e não exceder</h3>
							<time>05 de Dezembro de 2019</time>
						</div>
					</div>
					<div class="item">
						<div class="item-inner">
							<img src="img/noticia8.jpg" alt="Noticia">
							<h3>13 carros que tiveram "gambiarras oficiais" como soluções de design...</h3>
							<time>05 de Dezembro de 2019</time>
						</div>

					</div>
				</div>	
			</div>	
		<div id="faixa">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Pensando em adquirir um veiculo?<small>Confira nossos Catalogo de Vendas!</small></p>
					</div>

					
				</div>
			</div>

		</div>
		<div id="anuncios-vendas">
			<div class="container">
				<div class="row text-center">
					<h2>Sobre anuncios e vendas</h2>
					<hr>
				</div>
				<div class="row">
					<p>A WPTCAR Ltda não atua como intermediador na negociação entre os usuários, seja com relação à compra, troca ou qualquer outro tipo de operação. O usuário reconhece como sendo de sua exclusiva responsabilidade os riscos assumidos nas negociações que vier a efetuar com outros usuários do site. A responsabilidade pela veracidade/autenticidade das informações veiculadas nos anúncios deste site, bem como pelas vendas e/ou entregas de produtos, é exclusiva do anunciante, não podendo o usuário responsabilizar o site. por danos diretos ou indiretos causados a si ou a terceiros. Estoque e preços estão sujeitos a conferência e confirmação pelo anunciante.</p>
				</div>

				
					</div>
				</div>
			</div>
		</div>
		</section>

		<footer>
			
		<?php include_once('includes/footer.php'); ?>

		</footer>
		
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#logotipo").on("mouseover",function(){
					$("#banner h1").addClass("efeito");
				}).on("mouseout",function(){
					$("#banner h1").removeClass("efeito");
				});	
				$("#input-search").on("focus",function(){
					$("li.search").addClass("ativo");
				}).on("blur",function(){
					$("li.search").removeClass("ativo");
				}); 
				$(".thumbnails").owlCarousel({
					item : 4
				});		
			});
		</script>
	</body>
</html>	