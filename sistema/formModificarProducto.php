<?php

    require 'funciones/conexion.php';
    require 'funciones/funcionesMarcas.php';
    require 'funciones/funcionesCategorias.php';
    require 'funciones/funcionesProductos.php';
    $listaMarcas = listarMarcas();
    $listaCategorias = listarCategorias();
    $producto = verProductoPorID();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de modificación de un Producto</h1>

    <form action="modificarProducto.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="prdNombre" value="<?php echo $producto['prdNombre'];?>" class="form-control" required>
        <br>
        Precio: <br>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input type="text" value="<?php echo $producto['prdPrecio']; ?>" name="prdPrecio" class="form-control" required>
        </div>
        <br>
        Marca: <br>
        <select name="idMarca" class="form-control" required>
            <option value="<?php echo $producto['idMarca']; ?>"><?php echo $producto['mkNombre'] ?></option>
<?php
            while ( $marca = mysqli_fetch_assoc($listaMarcas) ){
?>
            <option value="<?php echo $marca['idMarca']; ?>"><?php echo $marca['mkNombre']; ?></option>
<?php
            }
?>
        </select>
        <br>
        Categoría: <br>
        <select name="idCategoria" class="form-control" required>
            <option value="">Seleccione una Categoría</option>
<?php
            while ( $categoria = mysqli_fetch_assoc($listaCategorias) ) {
?>
            <option <?php if($producto['idCategoria']==$categoria['idCategoria'] ){echo 'selected';} ?> value="<?php echo $categoria['idCategoria']; ?>"><?php echo $categoria['catNombre']; ?></option>
<?php
            }
?>
        </select>
        <br>
        Presentacion: <br>
        <textarea name="prdPresentacion" class="form-control"><?php echo $producto['prdPresentacion']; ?></textarea>
        <br>
        Stock: <br>
        <input type="number" name="prdStock" value="<?php echo $producto['prdStock']; ?>" class="form-control">
        <br>
        Imagen: <br>
        <img src="images/productos/<?php echo $producto['prdImagen']; ?>">
        <input type="file" name="prdImagen" class="form-control">
        <input type="hidden" name="prdImagenAnterior" value="<?php echo $producto['prdImagen'];?>">
        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
        <br>
        <input type="submit" value="Modificar Producto" class="btn btn-secondary mb-3">
        <a href="adminProductos.php" class="btn btn-light mb-3">Volver al panel de Productos</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>