<nav class="site-header sticky-top py-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a href="index.php" class="mt-1">
            <i class="fab fa-meetup fa-2x"></i>
        </a>

        <a class="py-2" href="adminMarcas.php">Marcas</a>
        <a class="py-2" href="adminCategorias.php">Categorías</a>
        <a class="py-2" href="adminProductos.php">Productos</a>
        <a class="py-2" href="adminUsuarios.php">Usuarios</a>
<?php 
    if (!isset($_SESSION['login'])) {
 ?>
        <button class="btn btn-dark">
            <a href="formLogin.php"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</a>
        </button>
<?php } else { ?>
         <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-sign-in-alt"></i> Salir
        </button>
        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item bg-dark" href="#"><?php echo $_SESSION['usuNombre'], ' ', $_SESSION['usuApellido']; ?></a>
            <a class="dropdown-item bg-dark" href="logout.php">Salir de la sesion</a>
        </div>
<?php } ?>
        <!--
                       
        -->
    </div>
</nav>
