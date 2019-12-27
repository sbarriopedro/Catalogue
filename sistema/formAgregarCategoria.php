<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Formulario de Alta de una Nueva Categoria</h1>

		<form action="agregarCategoria.php" method="POST">
			
			Nombre de la Categoria:
			<br>
			<input type="text" name="catNombre" class="form-control" required>
			<br>
			<button class="btn btn-dark">Agregar Categoria</button>
			<a href="adminCategorias.php" class="btn btn-dark mx-3">Volver a admin de Categorias</a>

		</form>

    </main>

<?php  include 'includes/footer.php';  ?>