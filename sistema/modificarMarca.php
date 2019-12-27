<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesMarcas.php';
 $modificarMarcas = modificarMarca();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Modificacion de Producto</h1>

<?php
    if ($modificarMarcas){
?>
        <div class="alert alert-success">
            Marca Modificada
            <br>
            <a href="adminMarcas.php" class="btn btn-secondary">Volver A Marcas</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>