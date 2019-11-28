<?php

$actionEditar = "";
$id = 0;
$nome = NULL;
$descricao = NULL;
$valor = NULL;

if (isset($_GET["editar"])) {
	$id = $_GET["editar"];
	$sql = "SELECT * FROM produtos WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		$nome = $row["nome"];
		$descricao = $row["descricao"];
		$valor = $row["valor"];
	}
	else{
		echo "Falha ao carregar registro!";
	}
	$actionEditar = "&editar=$id";
}

?>
		<div class="row">
    		<div class="col-lg-12 text-center">
    			<br><br>
     			<h3 class="section-heading text-uppercase">Cadastrar Produtos</h3>
     			<br><br>
    		</div>
  		</div>

<div class="row">

	<div class="col-md-3">
	</div>
	
    <div class="col-md-6">

		<form action="?pg=processar<?= $actionEditar ?>" method="POST">

		<div class="form-group">
			<label for="exampleInputEmail1">Nome:</label>
			<input type="nome" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" placeholder="Digite o nome do produto">
			<small id="emailHelp" class="form-text text-muted"></small>
		</div>

		<div class="form-group">
			<label for="exampleInputName1">Descrição:</label>
			<input type="text" class="form-control" id="exampleInputName1" name="descricao" placeholder="Digite uma descrição para o produto">
		</div>

		<div class="form-group">
			<label for="exampleInputTelefone1">Valor:</label>
			<input type="decimal(6,2)" class="form-control" id="exampleInputTelefone1" name="valor" placeholder="Digite o valor">
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</div>
</div>