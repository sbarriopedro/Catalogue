<?php
	require 'funciones/conexion.php';
    require 'funciones/funcionesProductos.php';
    $listaProductos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Lista de Productos</h1>
		<div class="card" col-md-3 mx-2" style="width: 100%; display:flex; flex-direction:row; flex-wrap:wrap">
<?php while ($producto = mysqli_fetch_assoc($listaProductos)) {
	
 ?>
        <div class="d-flex flex-wrap">
			<div class="card-body">
		  	<img class="card-img-top" src="images/productos/<?php echo $producto['prdImagen']; ?>"	 alt="Card image cap">
		    		<h5 class="card-title"><?php echo $producto['prdNombre']; ?></h5>
		    		<p class="card-text"><?php echo $producto['prdPresentacion']; ?></p>
		    		<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
<?php } ?>
		</div>
    </main>
<?php  include 'includes/footer.php';  ?>