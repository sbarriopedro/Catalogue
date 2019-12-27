<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesProductos.php';
    $producto = verProductoPorId();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">


        <div class="card border-danger col-md-6 mb-3 mx-auto" >
            <div class="card-header">
                <h1>Confirmación de baja de un producto</h1>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title">Nombre: <?php echo $producto['prdNombre']; ?></h5>
                Imagen: <img src="images/productos/<?php echo $producto['prdImagen'] ?>">
                <br>
                Precio: <?php echo $producto['prdPrecio']; ?>
                <br>
                Marca:<?php echo $producto['mkNombre'] ?>
                <br>
                Categoria: <?php echo $producto['catNombre'] ?>
                <br>
                Presentación: <?php echo $producto['prdPresentacion'] ?>
                <br>
                <form action="eliminarProducto.php" method="post">
                    <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto'] ?>">
                    <button class="btn btn-danger">Confirmar baja</button>
                    <a href="adminProductos.php" class="btn btn-secondary">Volver a admin de Productos</a>
                </form>

            </div>
        </div>
    </main>
    <script>
        Swal.fire({
            title: 'Advertencia',
            text: 'Si pulsa el botón "Confirmar baja", se eliminará el producto',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: '#D33',
            cancelButtonColor: '#ccc',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (!result.value) {
                //redirección
                window.location = 'adminProductos.php';
            }
        })
    </script>
<?php
    include 'includes/footer.php';
?>