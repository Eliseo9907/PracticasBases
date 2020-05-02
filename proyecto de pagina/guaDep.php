<?php

  
  $conectar=@mysqli_connect('127.0.0.1' , 'root' , '');
  
  if(!$conectar){
    echo "no se pudo conectra con el servidor";
    }
  if(!mysqli_select_db($conectar, 'empresa')){
      echo"no se encontro la base de datos";
    }


  $nombres= $_POST['nombres'];
  
  
  $sql="INSERT INTO departamentos(nombres) VALUES('$nombres')";

 
  if(!mysqli_query($conectar,$sql)){
    echo"hubo un error";
  }else{
    echo"datos guardados correctamente<br><a href='departamentos.php'>volver</a>";
  }
?>