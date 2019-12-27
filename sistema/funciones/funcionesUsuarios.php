<?php 

	function listarUsuario()
	{
		$link = conectar();
		$sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail,
						usuPass, usuEstado 
				FROM usuarios";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($list));
		//control de errores
		return $resultado;
	}

	function agregarUsuario()
	{
		$usuNombre = $_POST['usuNombre'];
		$usuApellido = $_POST['usuApellido'];
		$usuEmail = $_POST['usuEmail'];
		$usuPass = $_POST['usuPass'];
		$usuEstado = $_POST['usuEstado'];
		$link = conectar();
		$sql = "INSERT INTO usuarios
				VALUES(NULL, '".$usuNombre."', '".$usuApellido."',
				 '".$usuEmail."', '".$usuPass."', ".$usuEstado.")";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}
	function verUsuarioPorId()
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado
	                FROM usuarios
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }
    function eliminarUsuario()
    {
    	$idUsuario = $_POST['idUsuario'];
    	$link = conectar();
    	$sql = "DELETE FROM usuarios
    				Where idUsuario =".$idUsuario;

    	$resultado = mysqli_query($link, $sql) or die($link);
    	return $resultado;
    }
     function modificarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
		$usuEmail = $_POST['usuEmail'];
		$usuPass = $_POST['usuPass'];
		$usuEstado = $_POST['usuEstado'];
        $idUsuario = $_POST['idUsuario'];

        $link = conectar();
        $sql = "UPDATE usuarios 
                    SET usuNombre = '".$usuNombre."',
                    	usuApellido = '".$usuApellido."',
                    	usuEmail = '".$usuEmail."',
                    	usuPass = '".$usuPass."',
                    	usuEstado = '".$usuEstado."'
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $resultado;
    }
    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido 
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                     AND  usuPass = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        if($cantidad == 0){
            header('location: formLogin.php?error=1');
        }
        else{
            // rutina de autenticación
            session_start();
            $_SESSION['login'] = 1;
            $usuario = mysqli_fetch_assoc($resultado);
            $_SESSION['usuNombre'] = $usuario['usuNombre'];
            $_SESSION['usuApellido'] = $usuario['usuApellido'];
            //redirección
            header('location: admin.php');
        }
    }
    function logout()
    {
        //session_unset(); borra todas las variables de sesion
        session_start();
        session_destroy();
        header('refresh:3; url=index.php');
    }
	//CRUD DE MARCAS

	/*listarMarcas()
	verMarcaPorID()
	agregarMarca()
	modificarMarca()
	eliminarMarca()*/
 ?>