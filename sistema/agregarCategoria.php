<?php  
		require 'funciones/conexion.php';
		require 'funciones/funcionesCategorias.php';
		$checkeo = agregarCategoria();
		include 'includes/header.html'; 
		include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Agregar nueva Categoria</h1>
		<?php 
			if ($checkeo) {
		?>
			<div class="alert alert-success">
				Categoria agregada con éxito.
				<a href="adminCategorias.php" class="btn btn-dark">Volver a panel de categorias</a>
			</div>
		<?php
			}
		 ?>
    </main>

<?php  include 'includes/footer.php';  ?>