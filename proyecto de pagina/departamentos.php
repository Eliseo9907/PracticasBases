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
                <div class ="Base de datos">Registro de departamentos</div>
                <div class="enlaces">
                    <a href="Principal.php">Inicio</a>
                    <a href="consultaDep.php">consulta</a>
                </div>
            </nav>
    </header>
   <form action="guaDep.php" method="post">
        <label for="">Departamento</label>
        <input type="text" id="nombres" name="nombres" placeholder="*nombre">

        <button type="submit">Enviar</button>

    </form>
  </body>
</html>
