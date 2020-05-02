<?php


  $usuario = "root";

	$password = "";

	$servidor = "localhost";

	$basededatos = "empresa";
  $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

  $consulta = mysqli_query($conexion, "SELECT cantidad FROM inventario;")
  or die ("error al traer los datos");
  echo"el producto con menor existencia es: ";
  $consulta = mysqli_query($conexion, "SELECT * FROM inventario ORDER BY cantidad ASC LIMIT 1") or die ("error al traer los datos");
  echo '<table border="2">';
  echo '<tr>';
  echo '<th id="$id">id</th>';
  echo '<th id="$producto">producto</th>';
  echo '<th id="precio">precio</th>';
  echo '<th id="cantidad">cantidad</th>';
  echo '</tr>';
  while($columna = mysqli_fetch_array($consulta))
  {
    echo "<tr>";

    echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ."</td>";



  echo'</tr>';

  }
  echo'</table>';


    $consulta = mysqli_query($conexion, "SELECT * FROM inventario ORDER BY cantidad DESC LIMIT 1")
    or die ("error al traer los datos");
    echo '<table border="1">';
    echo '<tr>';
    echo '<th id="$id">id</th>';
    echo '<th id="$producto">producto</th>';
    echo '<th id="precio">precio</th>';
    echo '<th id="cantidad">cantidad</th>';
    echo '</tr>';
    echo"<br>el producto con mayor existencia es: ";
    while($columna = mysqli_fetch_array($consulta))
    {
      echo "<tr>";

  		echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ."</td>";

  		echo "</tr>";

    }
      echo'</table>';

    $consulta = mysqli_query($conexion, "SELECT * FROM inventario where cantidad=0")
    or die ("error al traer los datos");
    echo '<table border="1">';
    echo '<tr>';
    echo '<th id="$id">id</th>';
    echo '<th id="$producto">producto</th>';
    echo '<th id="precio">precio</th>';
    echo '<th id="cantidad">cantidad</th>';
    echo '</tr>';
    echo"<br>Productos sin existencias: ";
    while($columna = mysqli_fetch_array($consulta))
    {
      echo "<tr>";

  		echo "<td>" . $columna['id'] . "</td><td>" . $columna['producto'] . "</td><td>" . $columna['precio'] . "</td><td>" . $columna['cantidad'] ."</td>";

  		echo "</tr>";
    }
echo'</table>';
echo"<br><a href='Principal.php'>volver</a>";
?>
