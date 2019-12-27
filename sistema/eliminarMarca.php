<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesMarcas.php';
 $eliminarMarcas = eliminarMarca();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Eliminar una Marca</h1>

<?php
    if ($eliminarMarcas){
?>
        <div class="alert alert-success">
            Marca Eliminada
            <a href="adminMarcas.php" class="btn btn-secondary">Volver A Marcas</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>