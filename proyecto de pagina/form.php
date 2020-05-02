<?php

  
  $conectar=@mysqli_connect('127.0.0.1' , 'root' , '');
  
  if(!$conectar){
    echo "no se pudo conectra con el servidor";
    }
  if(!mysqli_select_db($conectar, 'empresa')){
      echo"no se encontro la base de datos";
    }


  $nombre= $_POST['nombre'];
  $edad= $_POST['edad'];
  $correo= $_POST['correo'];
  $salario= $_POST['salario'];
  $sql="INSERT INTO empleados(nombre, edad, correo, salario) VALUES('$nombre','$edad','$correo','$salario')";

 
  if(!mysqli_query($conectar,$sql)){
    echo"hubo un error";
  }else{
    echo"datos guardados correctamente<br><a href='registro.html'>volver</a>";
  }
?>
