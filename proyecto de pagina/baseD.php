<head>
    <title>consulta emp</title>
    <link rel="stylesheet" href="css/pri_style.css">

</head>
<?php

	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$consulta = "SELECT * FROM empleados";

	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");




	echo "<table borde='2'>";

	echo "<tr>";

	echo "<th>id</th>";

	echo "<th>nombre</th>";

        echo "<th>edad</th>";

        echo "<th>correo</th>";

        echo "<th>salario</th>";

				echo "<th>salario</th>";

	echo "</tr>";





	while ($columna = mysqli_fetch_array( $resultado ))

	{

		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario']. "</td>";
		echo "<td>  <a href='ModifE.php?id=".$columna['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
	  echo "<td> <a href='eliminarE.php?id=".$columna['id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";


		echo "</tr>";


	}



	echo "</table>";
	echo"<br><a href='Principal.php'>Pagina Principal</a>";





	mysqli_close( $conexion );


?>
