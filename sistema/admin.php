<?php
    require 'autenticar.php';

    include 'includes/header.html';
    include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Panel de administracòn</h1>

		<div class="list-group">
  <h2 class="list-group-item list-group-item-action active">
    Administración
  </h2>
  <a href="adminMarcas.php" class="list-group-item list-group-item-action">Panel de administración de Marcas</a>
  <a href="adminCategorias.php" class="list-group-item list-group-item-action">Panel de administración de Categorías</a>
  <a href="adminProductos.php" class="list-group-item list-group-item-action">Panel de administración de Productos</a>
  <a href="adminUsuarios.php" class="list-group-item list-group-item-action">Panel de administración de Usuarios</a>
</div>
    </main>

<?php  include 'includes/footer.php';  ?>