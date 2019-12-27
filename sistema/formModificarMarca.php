<?php

    require 'funciones/conexion.php';
    require 'funciones/funcionesMarcas.php';
    $listaMarcas = verMarcaPorId();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de modificación de una Marca</h1>

    <form action="modificarMarca.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="mkNombre" value="<?php echo $listaMarcas['mkNombre'];?>" class="form-control" required>
        <br>
        <input type="hidden" name="idMarca" value="<?php echo $listaMarcas['idMarca']; ?>">
        <br>
        <input type="submit" value="Modificar Marca" class="btn btn-secondary mb-3">
        <a href="adminMarcas.php" class="btn btn-light mb-3">Volver al panel de Marcas</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>