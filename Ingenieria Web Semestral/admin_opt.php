<?php
session_start();
include 'phpscripts.php';
include "config.php";
if ($_SESSION['myrank'] != "admin") {
    header("Location: loginsemestral.php");
}
?>
<html>
<head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Home</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel="stylesheet" href="resources/main.css">
     <link rel="icon" href="resources/img/Logo.png">
     <script src="./resources/js/templates.js"></script>
</head>
<body class="general_backgroundImage">
    <div id="general_header"></div>
    <section class="sechome" id="equipos_placeholder">
          <div class="contenidoextra">
               <div class="extra2">
                <br>
                <h1>Actualizar estadisticas de los equipos</h1>
               </div>
               <a href="admin.php">
                <br>
                <br>
               <img class="estadio" src="resources/img/ronaldinho.png">
               </a>
          </div>
          <div class="contenidoextra">
               <div class="extra2">
                <br>
                <h1>Administrar Partidos</h1>
               </div>
               <a href="admin_partidos.php">
                <br>
                <br>
               <img class="estadio" src="resources/img/referencias.png">
               </a>
          </div>
    </section>



    <script>
        <?php
        chooseheader();
        ?>
    </script>
</body>
</html>   