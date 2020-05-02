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

$consulta=ConsultarEmpleados($_GET['id']);

function ConsultarEmpleados($id)
{
	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$consulta="SELECT * FROM empleados WHERE id='".$id."' ";
	$resultado = mysqli_query( $conexion, $consulta );
	$columna=mysqli_fetch_array($resultado);
	return [
		$columna['id'],
		$columna['nombre'],
		$columna['edad'],
		$columna['correo'],
		$columna['salario']
	];

}

?>
<html>
<head>
	<title></title>
</head>
<body>
	<span> <h1>Editar Empleados</h1> </span>
	  		<br>
		  <form action="empleadosM.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
	      <input type="hidden" name="id" value="<?php echo $_GET['id']?> ">

	  		<label>nombre: </label>
	  		<input type="text" name="nombre" name="nombre" value="<?php echo $consulta[1] ?>"><br>

				<label>edad: </label>
	  		<input type="text" name="edad" name="edad" value="<?php echo $consulta[2] ?>"><br>

	  		<label>correo: </label>
	  		<input type="text" name="correo" name="correo" value=" <?php echo $consulta[3] ?> "><br>

				<label>salario: </label>
	  		<input type="text" name="salario" name="salario" value=" <?php echo $consulta[4] ?> "><br>

	  		<br>
	  		<button type="submit" class="btn btn-success">Guardar</button>
</form>
</body>
</html>
