<?php
	require 'funciones/conexion.php';
	require 'funciones/funcionesMarcas.php';
	$checkeo = consultarMarca();
	$marca = verMarcaPorId();
	include 'includes/header.html';
	include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Confirmacion de Baja de una Marca</h1>

		<?php 
			if ($checkeo > 0) {
				
		 ?>
		 		<div class="alert alert-danger">
		 			No se puede eliminar la marca seleccionada
		 			ya que tiene productos relacionados
		 			<br>
		 			<a href="adminMarcas.php" class="btn btn-outline-secondary">Volver a panel de marcas</a>
		 		</div>
		 <?php }else{ 
		 		$marca = verMarcaPorId();
		 		?>
		<div class="card border-danger col-md-6 mb-3 mx-auto" >
            <div class="card-header">
                <h1>Confirmación de baja de una marca</h1>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title">Nombre: <?php echo $marca['mkNombre']; ?></h5>
                <br>
                <form action="eliminarMarca.php" method="post">
                    <input type="hidden" name="idMarca" value="<?php echo $marca['idMarca'] ?>">
                    <button class="btn btn-danger">Confirmar baja</button>
                    <a href="adminMarcas.php" class="btn btn-secondary">Volver a admin de Marcas</a>
                </form>

            </div>
        </div>
        <script>
        Swal.fire({
            title: 'Advertencia',
            text: 'Si pulsa el botón "Confirmar baja", se eliminará la marca: <?php echo $marca['mkNombre'] ?>',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: '#D33',
            cancelButtonColor: '#ccc',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (!result.value) {
                //redirección
                window.location = 'adminMarcas.php';
            }
        })
    </script>
		 <?php } ?>
    </main>

<?php  include 'includes/footer.php';  ?>