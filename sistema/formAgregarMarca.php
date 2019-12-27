<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Formulario de Alta de una Nueva Marca</h1>

		<form action="agregarMarca.php" method="POST">
			
			Nombre de la Marca:
			<br>
			<input type="text" name="mkNombre" class="form-control" required>
			<br>
			<button class="btn btn-dark">Agregar Marca</button>
			<a href="adminMarcas.php" class="btn btn-dark mx-3">Volver a admin de Marcas</a>

		</form>

    </main>

<?php  include 'includes/footer.php';  ?>