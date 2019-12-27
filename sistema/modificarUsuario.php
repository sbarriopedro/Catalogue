<?php
 require 'funciones/conexion.php';
 require 'funciones/funcionesUsuarios.php';
 $modificarUsuarios = modificarUsuario();
 include 'includes/header.html';
 include 'includes/nav.php';


  ?>

<main class="container">
    <h1>Modificacion de Usuarios</h1>

<?php
    if ($modificarUsuarios){
?>
        <div class="alert alert-success">
            Usuario Modificado
            <br>
            <a href="adminUsuarios.php" class="btn btn-secondary">Volver A Usuarios</a>
        </div>

<?php
};
?>
</main>

<?php  include 'includes/footer.php';  ?>