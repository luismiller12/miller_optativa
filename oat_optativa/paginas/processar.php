<?php

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$valor = $_POST["valor"];

if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$id = $_GET["editar"];
	$sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', valor= '$valor' WHERE id = $id";
}
else{
	$sql = "INSERT INTO produtos (nome, descricao, valor) VALUES ('$nome', '$descricao', '$valor')";
}

$query = mysqli_query($link, $sql);

if ($query === TRUE) {

	echo '<div class="alert alert-success" role="alert">Cadastro Realizado!</div>';	

}else{
	echo '<div class="alert alert-danger" role="alert">Opa! Você esqueceu de alguma coisa. Formulário incompleto.</div>';
}

?>