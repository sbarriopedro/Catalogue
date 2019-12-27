<?php   
	    require 'autenticar.php';
		require 'funciones/conexion.php';
		require 'funciones/funcionesUsuarios.php';
		$listaUsuarios = listarUsuario();

		include 'includes/header.html';
	    include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de Administración de Usuarios</h1>
		

		<table class="table table-striped table-hover table-border">
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Pass</th>
					<th>Estado</th>
					<th colspan="2">
						<a href="formAgregarUsuario.php" class="btn btn-light">Agregar</a>
					</th>
				</tr>
			</thead>
			<tbody>
<?php 
	while ($usuario = mysqli_fetch_assoc($listaUsuarios)) {
				
	
 ?>
				<tr>
					<td><?php echo $usuario["idUsuario"];?></td>
					<td><?php echo $usuario["usuNombre"];?></td>
					<td><?php echo $usuario["usuApellido"];?></td>
					<td><?php echo $usuario["usuEmail"];?></td>
					<td><?php echo $usuario["usuPass"];?></td>
					<td><?php echo $usuario["usuEstado"];?></td>
					<td>
						<a href="formModificarUsuario.php?idUsuario=<?php echo $usuario['idUsuario'] ?>" class="btn btn-dark">Modificar</a>
					</td>
					<td>
						<a href="formEliminarUsuario.php?idUsuario=<?php echo $usuario['idUsuario'] ?>" class="btn btn-dark">Eliminar</a>
					</td>
				</tr>
<?php 
}
 ?>
			</tbody>
		</table>
    </main>

<?php  include 'includes/footer.php';  ?>