<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css">
    <script src="jquery-1.11.1.js"></script>
</head>
<?php

$consulta=ConsultarDep($_GET['id']);

function ConsultarDep($id)
{
	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$consulta="SELECT * FROM departamentos WHERE id='".$id."' ";
	$resultado = mysqli_query( $conexion, $consulta );
	$columna=mysqli_fetch_array($resultado);
	return [
		$columna['id'],
		$columna['nombres']
	];

}

?>
<html>
<head>
	<title></title>
</head>
<body>
	<span> <h1>Editar Departamentos</h1> </span>
	  		<br>
		  <form action="DepM2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	      <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">

	  		<label>nombre: </label>
	  		<input type="text" name="nombres" name="nombres" value="<?php echo $consulta[1] ?>"><br>

	  		<br>
	  		<button type="submit" class="btn btn-success">Guardar</button>
</form>
</body>
</html>
