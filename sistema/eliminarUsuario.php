<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesUsuarios.php';
 $eliminarUsuarios = eliminarUsuario();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Eliminar un Usuario</h1>

<?php
    if ($eliminarUsuarios){
?>
        <div class="alert alert-success">
            Usuario Eliminado
            <a href="adminUsuarios.php" class="btn btn-secondary">Volver A Usuarios</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>