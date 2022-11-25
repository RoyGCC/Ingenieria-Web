<?php
session_start();

include "acceso.php";
acceso('ADMIN');
     if($_SESSION['myrank'] != "admin"){
          echo '<script>alert("Welcome to Geeks for Geeks")</script>';
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

     <section>


     </section>
     <script>
          <?php
        if (!empty($_SESSION['user'])) {
            echo "headerTemplateLogged()";
        } else {
            echo "headerTemplateNotLogged()";
        } ?>
     </script>
</body>

</html>