<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/default.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/24229652dd.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <style type="text/css">
        .notif:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>


<body>
    <header id="header">
        <ul>
            <li><a href="<?php echo constant('URL');?>index">Inicio</a></li>
            <li><a href="<?php echo constant('URL');?>nuevo">Nuevo</a></li>
            <li><a href="<?php echo constant('URL');?>consulta">Consulta</a></li>
            <li><a href="<?php echo constant('URL');?>dashboard">Dashboard</a></li>
        </ul>
    </header>
</body>
</html>