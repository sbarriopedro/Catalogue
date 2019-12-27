<?php   
	    require 'autenticar.php';
		require 'funciones/conexion.php';
		require 'funciones/funcionesMarcas.php';
		$listaMarcas = listarMarcas();
		include 'includes/header.html';
	    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración de Marcas</h1>
		

		<table class="table table-striped table-hover table-border">
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Marca</th>
					<th colspan="2">
						<a href="formAgregarMarca.php" class="btn btn-light">Agregar</a>
					</th>
				</tr>
			</thead>
			<tbody>
<?php 
	while ($marca = mysqli_fetch_assoc($listaMarcas)) {
				
	
 ?>
				<tr>
					<td><?php echo $marca["idMarca"];?></td>
					<td><?php echo $marca["mkNombre"];?></td>
					<td>
						<a href="formModificarMarca.php?idMarca=<?php echo $marca['idMarca']?>" class="btn btn-dark">Modificar</a>
					</td>
					<td>
						<a href="formEliminarMarca.php?idMarca=<?php echo $marca['idMarca']?>" class="btn btn-dark">Eliminar</a>
					</td>
				</tr>
<?php 
}
 ?>
			</tbody>
		</table>
    </main>

<?php  include 'includes/footer.php';  ?>