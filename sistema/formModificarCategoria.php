<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesCategorias.php';
    $listaCategorias = verCategoriaPorId();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de modificación de una Categorias</h1>

    <form action="modificarCategoria.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="catNombre" value="<?php echo $listaCategorias['catNombre'];?>" class="form-control" required>
        <br>
        <input type="hidden" name="idCategoria" value="<?php echo $listaCategorias['idCategoria']; ?>">
        <br>
        <input type="submit" value="Modificar Categoria" class="btn btn-secondary mb-3">
        <a href="adminCategorias.php" class="btn btn-light mb-3">Volver al panel de Categorias</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>