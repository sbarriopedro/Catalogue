<?php

    require 'funciones/conexion.php';
    require 'funciones/funcionesUsuarios.php';
    $listaUsuarios = verUsuarioPorId();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

<main class="container">
    <h1>Formulario de modificación de un Usuario</h1>

    <form action="modificarUsuario.php" method="post" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="usuNombre" value="<?php echo $listaUsuarios['usuNombre'];?>" class="form-control" required>
        <br>
        Apellido: <br>
        <input type="text" name="usuApellido" value="<?php echo $listaUsuarios['usuApellido'];?>" class="form-control" required>
        <br>
        Email: <br>
        <input type="text" name="usuEmail" value="<?php echo $listaUsuarios['usuEmail'];?>" class="form-control" required>
        <br>
        Pass: <br>
        <input type="text" name="usuPass" value="<?php echo $listaUsuarios['usuPass'];?>" class="form-control" required>
        <br>
        Estado: <br>
        <input type="text" name="usuEstado" value="<?php echo $listaUsuarios['usuEstado'];?>" class="form-control" required>
        <br>
        <input type="hidden" name="idUsuario" value="<?php echo $listaUsuarios['idUsuario']; ?>">
        <br>
        <input type="submit" value="Modificar Usuario" class="btn btn-secondary mb-3">
        <a href="adminUsuarios.php" class="btn btn-light mb-3">Volver al panel de Usuarios</a>
    </form>

</main>

<?php  include 'includes/footer.php';  ?>