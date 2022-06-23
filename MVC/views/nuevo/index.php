<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once 'views/header.php' ?>
    <main>
        <h2 class="center">Es la pagína Nuevo!</h1>
            <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">
                <input type="text" name="matricula"><br>
                <input type="text" name="nombre"><br>
                <input type="text" name="apellido"><br>
                <input type="submit" value="Registrar nuevo alumno">
            </form>
    </main>
    <?php require_once 'views/footer.php' ?>
</body>

</html>