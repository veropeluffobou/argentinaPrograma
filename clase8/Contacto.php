<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturaleza</title>

    <!-- CSS -->
    <link href="style.css" rel="stylesheet">

</head>
<body>


<nav>
        <ul>
        <li><a href="index.php">Inicio</a></li>
            <li><a href="Acerca.php">Acerca</a></li>
            <li><a href="Contenido.php">Contenido</a></li>
            <li><a href="Contacto.php">Contacto</a></li>
        </ul>
    </nav>


       <br>
    <br>  

    <div class="container">
        <h2>Contacto</h2>
        <form action="#" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>


</body>
</html>