<?php 

	function listarCategorias()
	{
		$link = conectar();
		$sql = "SELECT idCategoria, catNombre 
				FROM categorias";
		$resultado = mysqli_query($link, $sql);
		//control de errores
		return $resultado;
	}
	function agregarCategoria()
	{
		$catNombre = $_POST['catNombre'];
		$link = conectar();
		$sql = "INSERT INTO categorias (catNombre)
				VALUES('".$catNombre."')";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}
	function verCategoriaPorId()
{
	$link = conectar(); 

 
	$idCategoria = $_GET['idCategoria'];
	$sql = "SELECT idCategoria, catNombre
	          FROM categorias
	          WHERE idCategoria = ".$idCategoria;

	$resultado = mysqli_query($link, $sql)
	                  or die(mysqli_error($link));

	$categoria = mysqli_fetch_assoc($resultado);
	return $categoria;


};
function eliminarCategoria()
{
	$idCategoria = $_POST['idCategoria'];
	$link = conectar();

	$sql = "DELETE FROM categorias
	              Where idCategoria = ".$idCategoria;
	$resultado = mysqli_query($link, $sql) or die(mysqli_error($sql));

	return $resultado;
}
function modificarCategoria()
    {
        $catNombre = $_POST['catNombre'];
        $idCategoria = $_POST['idCategoria'];

        $link = conectar();
        $sql = "UPDATE categorias 
                    SET catNombre = '".$catNombre."'
                    WHERE idCategoria = ".$idCategoria;
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