<?php


	$usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$consulta = mysqli_query( $conexion, "SELECT salario FROM empleados;" )
	or die ( "Algo ha ido mal en la consulta a la base de datos");

  $suma = 0;
  $contador = 0;
  while($elemento = mysqli_fetch_array($consulta)){
  $suma =$suma + $elemento['salario'];
  $contador++;
  }
  $promedio = $suma/$contador;

	echo "el salario menor es: ";

	$consulta = mysqli_query( $conexion, "SELECT * FROM empleados ORDER BY salario ASC LIMIT 1")
	 or die ( "Error en la consulta a la base de datos");

	echo '<table borde="2">';

	echo '<tr>';

	echo '<th id="$id">id</th>';

	echo '<th id="$nombre">nombre</th>';

        echo '<th id="edad">edad</th>';

        echo '<th id="correo">correo</th>';

        echo '<th id="salario">salario</th>';

	echo '</tr>';


	while ($columna = mysqli_fetch_array( $consulta ))
	{
		echo "<tr>";

		echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

		echo "</tr>";

	}
			$consulta = mysqli_query($conexion, "SELECT * FROM empleados ORDER BY salario DESC LIMIT 1")
			or die ( "Error en la consulta a la base de datos");


			echo '<table borde="2">';

			echo '<tr>';

			echo '<th id="$id">id</th>';

			echo '<th id="$nombre">nombre</th>';

		        echo '<th id="edad">edad</th>';

		        echo '<th id="correo">correo</th>';

		        echo '<th id="salario">salario</th>';

			echo '</tr>';
			echo"<br>el salario mayor es: ";
		 while ($columna = mysqli_fetch_array( $consulta ))

		 {

			 echo "<tr>";

			 echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

			 echo "</tr>";

		 }

	echo "</table>";
	echo "<br><br>el promedio del salario es: $promedio<br><br>";
	$consulta = mysqli_query($conexion, "SELECT * FROM empleados where salario<$promedio")
	or die ( "Error en la consulta a la base de datos");

	echo '<table borde="2">';

 	echo '<tr>';

 	echo '<th id="$id">id</th>';

 	echo '<th id="$nombre">nombre</th>';

         echo '<th id="edad">edad</th>';

         echo '<th id="correo">correo</th>';

         echo '<th id="salario">salario</th>';

 	echo '</tr>';
	echo"<br> los salarios de bajo del promedio son: ";
 while ($columna = mysqli_fetch_array( $consulta ))

 {

	 echo "<tr>";

	 echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

	 echo "</tr>";

 }
 echo '</table>';

 echo '</table>';
 $consulta = mysqli_query($conexion, "SELECT * FROM empleados where salario>$promedio")
 or die ( "Error en la consulta a la base de datos");

//	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Error en la consulta a la base de datos");

echo '<table borde="2">';

echo '<tr>';

echo '<th id="$id">id</th>';

echo '<th id="$nombre">nombre</th>';

			echo '<th id="edad">edad</th>';

			echo '<th id="correo">correo</th>';

			echo '<th id="salario">salario</th>';

echo '</tr>';
echo "<br>los salarios sobre el promedio son: ";
while ($columna = mysqli_fetch_array( $consulta ))

{

	echo "<tr>";

	echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td><td>" . $columna['correo'] . "</td><td>" . $columna['salario'] . "</td>";

	echo "</tr>";

}
echo'</table>';
echo"<br><a href='Principal.php'>volver</a>";
?>
