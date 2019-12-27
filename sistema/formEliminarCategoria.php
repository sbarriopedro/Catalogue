<?php
    require 'funciones/conexion.php';
    require 'funciones/funcionesCategorias.php';
    $categoria = verCategoriaPorId();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">


        <div class="card border-danger col-md-6 mb-3 mx-auto" >
            <div class="card-header">
                <h1>Confirmación de baja de un categoria</h1>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title">Nombre: <?php echo $categoria['catNombre']; ?></h5>
                <br>
                <form action="eliminarCategoria.php" method="post">
                    <input type="hidden" name="idCategoria" value="<?php echo $categoria['idCategoria'] ?>">
                    <button class="btn btn-danger">Confirmar baja</button>
                    <a href="adminCategorias.php" class="btn btn-secondary">Volver a admin de Productos</a>
                </form>

            </div>
        </div>
    </main>
    <script>
        Swal.fire({
            title: 'Advertencia',
            text: 'Si pulsa el botón "Confirmar baja", se eliminará la categoria',
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