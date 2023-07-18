<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/quejas y sugerencias.css">
</head>

<body>

    <div class="container">
        <h1>Formulario de Quejas y Sugerencias</h1>
        <form  action="./php/registrar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>

            <label for="correo">Email:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" ></textarea>

            <label for="terminos">Acepto los términos y condiciones <input type="checkbox" id="terminos" name="terminos" required></label>


            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>