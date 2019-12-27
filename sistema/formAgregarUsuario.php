<?php  include 'includes/header.html';  ?>
<?php  include 'includes/nav.php';  ?>

    <main class="container">
        <h1>Formulario de Alta de una Nuevo Usuario</h1>

		<form action="agregarUsuario.php" method="POST">
			
			Nombre del Usuario:
			<br>
			<input type="text" name="usuNombre" class="form-control" required>
			<br>
			Apellido del Usuario:
			<br>
			<input type="text" name="usuApellido" class="form-control" required>
			<br>
			Email del Usuario:
			<br>
			<input type="email" name="usuEmail" class="form-control" required>
			<br>
			Password del Usuario:
			<br>
			<input type="text" name="usuPass" class="form-control" required>
			<br>
			Estado del Usuario:
			<br>
			<input type="number" name="usuEstado" class="form-control" required>
			<br>
			<button class="btn btn-dark">Agregar Usuario</button>
			<a href="adminUsuarios.php" class="btn btn-dark mx-3">Volver a admin de Usuarios</a>

		</form>

    </main>

<?php  include 'includes/footer.php';  ?>