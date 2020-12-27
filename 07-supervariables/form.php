<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="get" action="recieve.php">
        <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" />
        </p>
        <p>
        <label for="apellidos">apellidos</label>
        <input type="text" name="apellidos" />
        </p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>