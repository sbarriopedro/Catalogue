<?php  
		require 'funciones/conexion.php';
		require 'funciones/funcionesUsuarios.php';
		$checkeo = agregarUsuario();
		include 'includes/header.html'; 
		include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Agregar nuevo Usuario</h1>
		<?php 
			if ($checkeo) {
		?>
			<div class="alert alert-success">
				Usuario agregado con éxito.
				<a href="adminUsuarios.php" class="btn btn-dark">Volver a panel de Usuarios</a>
			</div>
		<?php
			}
		 ?>
    </main>

<?php  include 'includes/footer.php';  ?>