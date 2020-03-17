<!DOCTYPE html>
<html>
	<head>	 
		<meta charset="utf-8">
		<title>WPTCAR - Vídeos</title>
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
			<div id="call-to-action">
				<div class="container">
					<div class="row text-center">
						<h2>Vídeos</h2>
						<hr>
						</br>						
					</div>

					<div class="row">
						<h3>Elon Musk apresenta "Cybertruck"</h3>
						<small>Postado em 09 de Dezembro de 2019</small>
					    </br>
					    </br>
					    </br>
						<video src="mp4/elon.mp4" controls></video>

					</div>
				    </br>
				    </br>
				    </br>
				    </br>

					<div class="row">
						<h3>Qual o melhor sedã? Corolla, Civic, Cruze e Jetta</h3>
						<small>Postado em 09 de Dezembro de 2019</small>
					    </br>
					    </br>
					    </br>
						<video src="mp4/melhor.mp4" controls></video>
					</div>
					</br>
				    </br>
				    </br>
				    </br>
				    
					<div class="row">
						<h3>Range Rover Evoque: O SUV tecnológico que chega por R$300 mil</h3>
						<small>Postado em 09 de Dezembro de 2019</small>
					    </br>
					    </br>
					    </br>
						<video src="mp4/rover.mp4" controls></video>
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