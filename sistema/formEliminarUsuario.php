<?php
	require 'funciones/conexion.php';
	require 'funciones/funcionesUsuarios.php';
	$usuario = verUsuarioPorId();
	include 'includes/header.html';
	include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Confirmacion de Baja de un Usuario</h1>

			<div class="card border-danger col-md-6 mb-3 mx-auto" >
            <div class="card-header">
                <h1>Confirmación de baja de un usuario</h1>
            </div>
            <div class="card-body text-danger">
                <h5 class="card-title">Nombre: <?php echo $usuario['usuNombre']; ?></h5>
                <br>
                <form action="eliminarUsuario.php" method="post">
                    <input type="hidden" name="idUsuario" value="<?php echo $usuario['idUsuario'] ?>">
                    <button class="btn btn-danger">Confirmar baja</button>
                    <a href="adminUsuarios.php" class="btn btn-secondary">Volver a admin de Usuarios</a>
                </form>

            </div>
        </div>
        <script>
        Swal.fire({
            title: 'Advertencia',
            text: 'Si pulsa el botón "Confirmar baja", se eliminará el usuario: <?php echo $usuario['idUsuario'] ?>',
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: '#D33',
            cancelButtonColor: '#ccc',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (!result.value) {
                //redirección
                window.location = 'adminUsuarios.php';
            }
        })
    </script>
    </main>

<?php  include 'includes/footer.php';  ?>