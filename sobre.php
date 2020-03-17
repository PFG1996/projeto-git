<!DOCTYPE html>
<html>
	<head>	 
		<meta charset="utf-8">
		<title>WPTCAR - Sobre</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/wpt.css">
	</head>
	<body>

		<header>

		<?php include_once('includes/header.php'); ?>
	
		</header>

		<section>
			<div id="banner">
				<h1>Seu site de informações sobre carros<small>veículos, Catalogo de Vendas, Vídeos e muito mais</small></h1>
			</div>	

			
		<div id="call-to-action">
			<div class="container">
				<div class="row text-center">
					<img src="img/img.png">
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