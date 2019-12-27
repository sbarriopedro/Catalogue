<?php  
		require 'funciones/conexion.php';
		require 'funciones/funcionesMarcas.php';
		$checkeo = agregarMarca();
		include 'includes/header.html'; 
		include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Agregar nuevo Marca</h1>
		<?php 
			if ($checkeo) {
		?>
			<div class="alert alert-success">
				Marca agregada con éxito.
				<a href="adminMarcas.php" class="btn btn-dark">Volver a panel de Marca</a>
			</div>
		<?php
			}
		 ?>
    </main>

<?php  include 'includes/footer.php';  ?>