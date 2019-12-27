<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesCategorias.php';
 $modificarCategoria = modificarCategoria();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Modificacion de Categorias</h1>

<?php
    if ($modificarCategoria){
?>
        <div class="alert alert-success">
            Categoria Modificada
            <br>
            <a href="adminCategorias.php" class="btn btn-secondary">Volver A Categorias</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>