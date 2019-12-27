<?php
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Formulario de ingreso</h1>
        <form action="login.php" method="post">
            Usuario:
            <br>
            <input type="text" name="usuEmail" class="form-control" required>
            <br>
            Contraseña:
            <br>
            <input type="password" name="usuPass" class="form-control" required>
            <br>
            <button class="btn btn-outline-secondary">Ingresar</button>

        </form>

<?php
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            if ($error == 1) {
                $mensaje = 'Usuario y/o clave incorrectos';
            }
            else if($error == 2){
                $mensaje = 'Debe loguearse para ingresar';
            }
?>
        <script>
            Swal.fire({
                type: 'error',
                title: 'Advertencia',
                text: '<?php echo $mensaje; ?>',
            })
        </script>
<?php
            
        }
?>
    </main>

<?php
    include 'includes/footer.php';
?>