<?php   
		require 'autenticar.php';
		require 'funciones/conexion.php';
		require 'funciones/funcionesCategorias.php';
		$listaCategorias = listarCategorias();

		include 'includes/header.html'; 
		include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Panel de Administracion de Categorias</h1>
		<table class="table table-striped table-hover table-border">
			<thead class="thead-dark">
				<tr>
					<th>Categoria</th>
					<th>Nombre</th>
					<th colspan="2">
						<a href="formAgregarCategoria.php" class="btn btn-light">Agregar</a>
					</th>
				</tr>
			</thead>
			<tbody>
<?php 
	while ($categoria = mysqli_fetch_assoc($listaCategorias)) {
				
	
 ?>
				<tr>
					<td><?php echo $categoria["idCategoria"];?></td>
					<td><?php echo $categoria["catNombre"];?></td>
					<td>
						<a href="formModificarCategoria.php?idCategoria=<?php echo $categoria['idCategoria'] ?>" class="btn btn-dark">Modificar</a>
					</td>
					<td>
						<a href="formEliminarCategoria.php?idCategoria=<?php echo $categoria['idCategoria'] ?>" class="btn btn-secondary">Eliminar</a>
					</td>
				</tr>
<?php 
}
 ?>
    </main>

<?php  include 'includes/footer.php';  ?>