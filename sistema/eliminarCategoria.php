<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesCategorias.php';
 $eliminarCategorias = eliminarCategoria();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Eliminar una Categoria</h1>

<?php
    if ($eliminarCategorias){
?>
        <div class="alert alert-success">
            Categoria Eliminada
            <a href="adminCategorias.php" class="btn btn-secondary">Volver A Categorias</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>