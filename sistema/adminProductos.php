<?php
    require 'autenticar.php';
    require 'funciones/conexion.php';
    require 'funciones/funcionesProductos.php';
    $listaProductos = listarProductos();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de productos</h1>

        <table class="table table-striped table-hover table-border">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Presentación</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-light">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
            while( $producto = mysqli_fetch_assoc($listaProductos) ){
?>
                <tr>
                    <td><?php echo $producto['prdNombre']; ?></td>
                    <td><?php echo $producto['prdPrecio']; ?></td>
                    <td><?php echo $producto['mkNombre']; ?></td>
                    <td><?php echo $producto['catNombre']; ?></td>
                    <td><?php echo $producto['prdPresentacion']; ?></td>
                    <td><img src="images/productos/<?php echo $producto['prdImagen']; ?>" class="img50"></td>
                    <td>
                        <a href="formModificarProducto.php?idProducto=<?php echo $producto['idProducto'] ?>" class="btn btn-secondary">Modificar</a>
                    </td>
                    <td>
                        <a href="formEliminarProducto.php?idProducto=<?php echo $producto['idProducto'] ?>" class="btn btn-secondary">Eliminar</a>
                    </td>
                </tr>
<?php
            }
?>
            </tbody>
        </table>

    </main>

<?php
    include 'includes/footer.php';
?>