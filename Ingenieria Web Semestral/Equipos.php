<?php
session_start();
if (!empty($_SESSION['user'])) {
     echo $_SESSION['user'];
     echo $_SESSION['myrank'];
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
     <section class="secequipos">
          <?php
          include('config.php');
          if (!empty($_SESSION['user'])){
               $sql_query = "
               SELECT *
               FROM usuarios u join equipos e
               ON e.id = u.id_equipo_fav
               WHERE u.id =". $_SESSION['user'] ."
               ;";  
               if ($conn_bd) {
                    $favorite_result = mysqli_query($conn_bd, $sql_query);
                    while ($equipos = mysqli_fetch_assoc($favorite_result)) {
                         echo "
                         <div class='equipo'>
                              <a class='equipocontainer' href='equipo.php?equipoSeleccionado=". $equipos['id'] ."'>
                              <span>" . $equipos['grupo'] . "</span>
                              <img class='equipoimg' src='./resources/img/Banderas/" . $equipos['dir_bandera'] . "'>
                              <span>" . $equipos['equipo'] . "</span>
                              </a>
                              </div>";
                    }  
               }
          }?>
     </section>
          <section class="secequipos">
               <?php
               include('config.php');
                $sql_query = "SELECT * FROM equipos ORDER BY grupo ASC;";
               if ($conn_bd) {
                    $result = mysqli_query($conn_bd, $sql_query);

                    while ($equipos = mysqli_fetch_assoc($result)) {
                         echo "<div class='equipo'>

                                   <a class='equipocontainer' href='equipo.php?equipoSeleccionado=" . $equipos['id'] . "'>
                                   <span>" . $equipos['grupo'] . "</span>
                                   <img class='equipoimg' src='./resources/img/Banderas/" . $equipos['dir_bandera'] . "'>
                                   <span>" . $equipos['equipo'] . "</span>
                                   </a>
                                   </div>";
                    }
                    $conn_bd->close();
               }
               ?>
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