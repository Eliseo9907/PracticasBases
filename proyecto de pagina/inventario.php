<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css">
    <script src="jquery-1.11.1.js"></script>
</head>
<body>
    <header>
            <nav>
                <div class ="Base de datos">Registro de Productos</div>
                <div class="enlaces">
                    <a href="Principal.php">Inicio</a>
                    <a href="consultaIn.php">consulta</a>
                </div>
            </nav>
    </header>
   <form action="guain.php" method="post">
        <label for="">Producto</label>
        <input type="text" id="producto" name="producto" placeholder="*producto">
        <input type="text" name="precio" placeholder="*precio">
        <input type="text" name="cantidad" placeholder="*cantidad">

        <button type="submit">Enviar</button>

    </form>
  </body>
</html>
