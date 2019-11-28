
<?php

if (isset($_GET["excluir"])) {
	$id = $_GET["excluir"];
	$sql = "DELETE FROM produtos WHERE id = $id";
	$query = mysqli_query($link, $sql);
	if ($query === TRUE) {
		echo "Registro $id excluído com sucesso!";
	}
}

?>

		<div class="row">
    		<div class="col-lg-12 text-center">
    			<br><br>
     			<h3 class="section-heading text-uppercase">Produtos Cadstrados</h3>
     			<br><br>
    		</div>
  		</div>

<table class="table">

	<tr>
		<td>Nome</td>
		<td>Email</td>
		<td>Cpf</td>
		<td></td>
		<td></td>
	</tr>

	<?php
		$sql = "SELECT * FROM produtos";

		$query = mysqli_query($link, $sql);
		if ($query) {
			while ($row = $query->fetch_object()) {

	?>

			<tr>
			        <td><b><?= $row->id ?></b></td>
			        <td><?= $row->nome ?></td>
			        <td><?= $row->descricao ?></td>
			        <td><?= $row->valor ?></td>
			        <td><a href="?pg=cadastro&editar=<?= $row->id ?>">Alterar</a></td>
			        <td><a href="?pg=listagem&excluir=<?= $row->id ?>" onclick="return confirm('Isso removerá o produto.');">Remover</a></td>
		        <tr>

		        <?php

			}

			$query->close();
		}
		?>
</table>