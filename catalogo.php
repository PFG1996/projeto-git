<?php

require_once('model/crud.class.php');

if (isset($_POST['cadastrar'])) {
	$veiculos = new Crud("veiculos");
	$array_dados = array(
		"marca" => $_POST['marca'],
		"modelo" => $_POST['modelo'],
		"email" => $_POST['email'],
		"telefone" => $_POST['telefone'],
		"valor" => $_POST['valor'],
		"autor" => $_POST['autor']
	);
	$resposta = $veiculos->insereCrud($array_dados);
	if ($resposta)
		header("Location: catalogo.php?cadastrar=sucesso");
	else
		header("Location: catalogo.php?cadastrar=erro");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de Veículos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/cat.css">
</head>
<body>

<header>
<div class="container">
				<img id="logotipo" src="img/logo.png" alt="Logotipo">	
			</div>

			<div class="header-marcas"> 
				<div class="container">
					<ul class="pull-right">
			<li class="marca-01"><a href="https://carros.peugeot.com.br/" target="_blank"></a></li>
			<li class="marca-02"><a href="https://www.fiat.com.br/" target="_blank"></a></li>
			<li class="marca-03"><a href="https://www.mitsubishimotors.com.br/" target="_blank"></a></li>
			<li class="marca-04"><a href="https://www.tesla.com/" target="_blank"></a></li>
			<li class="marca-05"><a href="https://www.citroen.com.br/" target="_blank"></a></li>
			<li class="marca-06"><a href="https://www.vw.com.br" target="_blank"></a></li>
			<li class="marca-07"><a href="https://www.toyota.com.br/" target="_blank"></a></li>
			<li class="marca-08"><a href="https://www.renault.com.br/" target="_blank"></a></li>
			<li class="marca-09"><a href="https://www.hyundai.com.br/" target="_blank"></a></li>	
					</ul>
				</div>	
			</div>

			<div class="container">
				<div class="row">
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="videos.php">Videos</a></li>
							<li><a href="catalogo.php">Catalogo de Veículos</a></li>
							<li><a href="sobre.php">Quem Somos</a></li> <!--target="_blank"  /  para abrir em nova janela-->
							<!--<li class="search">
								<div class="input-group">
								<input type="search" placeholder="search">
								<span class="input-group-btn">
								<button type="button"><i class="fa fa-search"></i></button>
								</span> 
								</div>
							</li>-->

						</ul>
					</nav>	
				</div>	
			</div>
</header>
	<div class="container">		
		<div class="row">
		   <div class="col-sm-12 col-md-6 col-lg-6">
				<h2>Lista de veículos</h2>			
		   </div>
		   <div class="col-sm-12 col-md-6 col-lg-6 text-right">
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Catalogo de Veículo</button>
				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Catalogo de Veículo</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>


					  <!-- Modal body -->
					  <div class="modal-body">
							<form action="catalogo.php" method="POST" class="was-validated">
								<div class="form-group text-left">
								  <label for="marca">Marca do veículo:</label>
								  <input type="text" class="form-control" id="marca" placeholder="Marca do veículo" name="marca" required>				  
								</div>	
								<div class="form-group text-left">
									<label for="modelo">Modelo do veículo:</label>
									<textarea class="form-control" id="modelo" placeholder="Modelo do veículo" name="modelo" required></textarea>		  
								</div>
								<div class="form-group text-left">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="seuemail@gmail.com" name="email" required>	  
								</div>
								<div class="form-group text-left">
									<label for="telefone">Telefone:</label>
									<input type="text" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX" name="telefone" required>	  
								</div>
								<div class="form-group text-left">
									<label for="valor">Valor:</label>
									<input type="number" class="form-control" id="valor" placeholder="00,00" name="valor" required>	  
								</div>
								<div class="form-group text-left">
									<label for="autor">Autor:</label>
									<input type="text" class="form-control" id="autor" placeholder="Nome do Autor" name="autor" required>		  
								</div>								
								<button name="cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
							</form>   
						</div>


					  <!-- Modal footer -->
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					  </div>
					</div>
				  </div>
				</div>
		   </div>
		</div>
		
		<table class="table table-striped">
		<thead>
		  <tr>
			<th>Id</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>E-Mail</th>
			<th>Telefone</th>
			<th>Valor(R$)</th>
			<th>Autor</th>
			<th class="text-center">Ações</th>
		  </tr>
		</thead>
		<tbody>

				<?php
				#retorna veiculos do banco
				$veiculos = new Crud("veiculos");
				$resposta = $veiculos->selectCrud("*"); #parametro para retornar tudo

				foreach ($resposta as $indice => $valor) {
					echo '<tr>';
					echo '<td>' . $valor->id_veiculos . '</td>';
					echo '<td>' . htmlspecialchars($valor->marca) . '</td>';
					echo '<td>' . $valor->modelo . '</td>';
					echo '<td>' . $valor->email . '</td>';
					echo '<td>' . $valor->telefone. '</td>';
					echo '<td>' . $valor->valor. '</td>';
					echo '<td>' . $valor->autor. '</td>';
					echo '<td class="text-center">';
					echo '<a href="editar.php?id_veiculos=' . $valor->id_veiculos .'" title="Editar"><i class="fa fa-pencil"></i></a> ';
					echo '<a href="excluir.php?id_veiculos=' . $valor->id_veiculos . '" title="Excluir"><i class="fa fa-trash-o text-danger"></i></a>';
					echo '</td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
	
</body>
</html>
