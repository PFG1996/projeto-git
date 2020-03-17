<?php
require_once("model/crud.class.php");
$id_veiculos = "";
$marca = "";
$modelo = "";
$email = "";
$telefone = "";
$valor = "";
$autor = "";

if (isset($_GET['id_veiculos'])) {
	$noticia = new Crud("veiculos");
	$filtro = array(
		"id_veiculos" => $_GET['id_veiculos']
	);
	$resposta = $noticia->selectCrud("*", true, $filtro);
	$marca = $resposta[0]->marca;
	$id_veiculos = $resposta[0]->id_veiculos;
	$modelo = $resposta[0]->modelo;
	$email = $resposta[0]->email;
	$telefone = $resposta[0]->telefone;
	$valor = $resposta[0]->valor;
	$autor = $resposta[0]->autor;
}

if (isset($_POST['editar'])) {
	$veiculos = new Crud("veiculos");
	$array_dados = array(
		"marca" => $_POST['marca'],
		"modelo" => $_POST['modelo'],
		"email" => $_POST['email'],
		"telefone" => $_POST['telefone'],
		"valor" => $_POST['valor'],
		"autor" => $_POST['autor']

	);

	$array_id = array(
		"id_veiculos" => $_POST['id_veiculos']
	);

	$resposta = $veiculos->atualizaCrud($array_dados, $array_id);
	if ($resposta)
		header("Location: catalogo.php?editar=sucesso");
	else
		header("Location: catalogo.php?editar=erro");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Editar Veículo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">	
		<div class="row pt-4">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2>Editar notícia</h2>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<form action="editar.php" method="POST" class="was-validated">
				<input type="hidden" name="id_veiculos" value="<?php echo $id_veiculos; ?>">
					<div class="form-group text-left">
					  <label for="marca">Marca do veículo:</label>
					  <input type="text" class="form-control" id="marca" placeholder="Marca do veículo" name="marca" value="<?php echo htmlspecialchars($marca); ?>" required>				  
					</div>	
					<div class="form-group text-left">
						<label for="modelo">Modelo:</label>
						<input type="textarea" class="form-control" id="modelo" placeholder="Modelo do veículo" name="modelo" value="<?php echo htmlspecialchars($modelo); ?>" required>		  
						</div>
					<div class="form-group text-left">
						<label for="email">E-Mail:</label>
						<input type="email" class="form-control" id="email" placeholder="seuemail@gmail.com" name="email" value="<?php echo htmlspecialchars($email); ?>" required>	  
					</div>
					<div class="form-group text-left">
					  <label for="telefone">Telefone:</label>
					  <input type="text" class="form-control" id="telefone" placeholder="(XX) XXXXX-XXXX" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>" required>				  
					</div>
					<div class="form-group text-left">
					  <label for="valor">Telefone:</label>
					  <input type="number" class="form-control" id="valor" placeholder="00,00" name="valor" value="<?php echo htmlspecialchars($valor); ?>" required>				  
					</div>
					<div class="form-group text-left">
						<label for="autor">Autor:</label>
						<input type="text" class="form-control" id="autor" placeholder="Nome do Autor" name="autor" value="<?php echo htmlspecialchars($autor); ?>" required>		  
					</div>								
					<button type="submit" name="editar" class="btn btn-primary">Editar notícia</button>
				</form>  
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center mt-4">
				<a class="btn btn-danger" href="catalogo.php">Voltar</a>
			</div>
		</div>
	</div>
</body>
</html>
