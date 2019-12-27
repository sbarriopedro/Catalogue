<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesProductos.php';
 $modificarProductos = modificarProducto();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Modificacion de Producto</h1>

<?php
    if ($modificarProductos){
?>
        <div class="alert alert-success">
            Producto Modificado
            <br>
            <a href="adminProductos.php" class="btn btn-secondary">Volver A Productos</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>