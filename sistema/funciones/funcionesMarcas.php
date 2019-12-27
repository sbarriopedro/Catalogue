<?php 

	function listarMarcas()
	{
		$link = conectar();
		$sql = "SELECT idMarca, mkNombre 
				FROM marcas";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($list));
		//control de errores
		return $resultado;
	}

	function agregarMarca()
	{
		$mkNombre = $_POST['mkNombre'];
		$link = conectar();
		$sql = "INSERT INTO marcas (mkNombre)
				VALUES('".$mkNombre."')";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}

	//Funcion para saber si hay productos de una marca existente
	function consultarMarca()
	{
		$idMarca = $_GET['idMarca'];
		$link = conectar();
		$sql = "SELECT COUNT(idMarca) AS cantidad FROM productos
				WHERE idMarca = ".$idMarca."";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		$cantidad = mysqli_fetch_assoc($resultado);
		return $cantidad['cantidad'];
	}
	function verMarcaPorId()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
	                FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }
    function eliminarMarca()
    {
    	$idMarca = $_POST['idMarca'];
    	$link = conectar();
    	$sql = "DELETE FROM marcas
    				Where idMarca = ".$idMarca;

    	$resultado = mysqli_query($link, $sql) or die($link);
    	return $resultado;
    }
     function modificarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $idMarca = $_POST['idMarca'];

        $link = conectar();
        $sql = "UPDATE marcas 
                    SET mkNombre = '".$mkNombre."'
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                            or die(mysqli_error($link));
        return $resultado;
    }
	//CRUD DE MARCAS

	/*listarMarcas()
	verMarcaPorID()
	agregarMarca()
	modificarMarca()
	eliminarMarca()*/
 ?>