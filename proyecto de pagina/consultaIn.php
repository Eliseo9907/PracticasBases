<html lang="es">
<head>
    <title>consulta</title>
    <link rel="Stylesheet" href="style.css">
    <script src="jquery-1.11.1.js"></script>
</head>
<?php

	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$consulta = "SELECT * FROM inventario";

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




	echo "<table borde='2'>";

	echo "<tr>";

	echo "<th>id</th>";

	echo "<th>producto</th>";

        echo "<th>precio</th>";

        echo "<th>cantidad</th>";

	echo "</tr>";





	while ($columna = mysqli_fetch_array( $resultado ))

	{

		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ."</td>";
    echo "<td>  <a href='modif1.php?id=".$columna['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
	  echo "<td> <a href='eliminar.php?id=".$columna['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
		echo "</tr>";

	}


	echo "</table>";
	echo"<br><a href='Principal.php'>Pagina Principal</a>";

	mysqli_close( $conexion );

?>
