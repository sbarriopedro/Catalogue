<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesProductos.php';
    $chequeo = eliminarProducto();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de un producto</h1>

<?php
    if ($chequeo){
?>
        <div class="alert alert-success">
            Producto Eliminado
            <a href="adminProductos.php" class="btn btn-secondary">Volver A Productos</a>
        </div>

<?php
};
?>

    </main>

<?php
    include 'includes/footer.php';
?>