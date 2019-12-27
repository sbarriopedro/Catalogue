<?php

    require 'funciones/conexion.php';
    require 'funciones/funcionesProductos.php';
    $chequeo = agregarProducto();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un nuevo producto</h1>
<?php
        if( $chequeo ){
?>
            <div class="alert alert-success">
                Marca agregada con éxito.
                <a href="adminProductos.php" class="btn btn-secondary">Volver a panel de productos</a>
            </div>
<?php
        }
?>
    </main>

<?php
    include 'includes/footer.php';
?>