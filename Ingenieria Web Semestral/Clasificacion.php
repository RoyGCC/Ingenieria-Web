<?php
session_start();
include 'phpscripts.php';
include('config.php');
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

     <section class="bracket">
          <section class="octavos inline-container">
               <h5 class="titulos-partidos">Octavos</h5>
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 8
                         ORDER BY p.id_partido ASC LIMIT 4;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </section>
          <section class="cuartos inline-container">
               <h4 class="titulos-partidos">Cuartos</h4>
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 4
                         ORDER BY p.id_partido ASC LIMIT 2;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </section>
          <section class="semi inline-container">
               <h3 class="titulos-partidos">Semifinal</h3>
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 2
                         ORDER BY p.id_partido ASC LIMIT 1;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </section>
          <?php
          $sql_query =
               "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 1
                         ORDER BY p.id_partido ASC LIMIT 1 ;";
          if ($conn_BD) {
               $t8 = mysqli_query($conn_BD, $sql_query);
               while ($team = mysqli_fetch_assoc($t8)) {
                    echo "
                                   <section class='final inline-container'>
                                        <h2 class='titulos-partidos'>Final</h2>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        </section>

                                        <section class='final inline-container'>
                                        <h2 class='titulos-partidos'>Final</h2>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                    </section>
                                        ";
               }
          }
          ?>
          <section class="semi inline-container">
               <h3 class="titulos-partidos">Semifinal</h3>
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 2
                         ORDER BY p.id_partido ASC LIMIT 1 OFFSET 1;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </section>
          <section class="cuartos inline-container">
               <h4 class="titulos-partidos">Cuartos</h4>
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 4
                         ORDER BY p.id_partido ASC LIMIT 2  OFFSET 2;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </section>
          <section class="octavos inline-container">
               <h5 class="titulos-partidos">Octavos</h5>
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 8
                         ORDER BY p.id_partido ASC LIMIT 4 OFFSET 4  ;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </section>
     </section>
     <section class="bronze">
          <h2>Tercer Lugar</h2>
          <div class="bronzei">
               <?php
               $sql_query =
                    "SELECT * 
                         FROM partidos p LEFT JOIN equipos e 
                         ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                         WHERE p.grupo_p = 3
                         ORDER BY p.id_partido ASC LIMIT 1;";
               if ($conn_BD) {
                    $t8 = mysqli_query($conn_BD, $sql_query);
                    while ($team = mysqli_fetch_assoc($t8)) {
                         echo "<div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo1'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo1'])['equipo'] . "</span>
                                        </div>
                                        <div class='match'>
                                        <img src='./resources/img/Banderas/" . quick_team($team['id_equipo2'])['dir_bandera'] . "'>
                                        <span>" . quick_team($team['id_equipo2'])['equipo'] . "</span>
                                        </div>
                                        ";
                    }
               }
               ?>
          </div>
     </section>

     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>

</html>