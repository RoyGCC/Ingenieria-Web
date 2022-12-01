<?php
session_start();
include 'phpscripts.php';
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
     <h1>ADMIN MODIFICACIÓN DE PARTIDOS</h1>
     <hr>
     <section>
          <h2>Crear Partido</h2>
          <form action="crear_partido.php" method="POST">
               <label for="admin_grupo_select">Grupo</label>
               <select name="admin_grupo_select">
                    <?php
                    $Group = quick_group();
                    while ($opt_team = mysqli_fetch_assoc($Group)) {
                         echo "<option value='" . $opt_team['grupo'] . "'>" . $opt_team['grupo'] . "</option>";
                    }
                    ?>
               </select>
               <div>
                    <label for="admin_id_equipo1">Equipo 1</label>
                    <select name="admin_id_equipo1">
                         <?php
                         $team = quick_team('*');
                         while ($opt_team = mysqli_fetch_assoc($team)) {
                              echo "<option value='" . $opt_team['id'] . "'>" . $opt_team['grupo'] . ") " . $opt_team['equipo'] . "</option>";
                         }
                         ?>
                    </select>
                    <br>
                    <label for="admin_id_equipo2">Equipo 2</label>
                    <select name="admin_id_equipo2">
                         <?php
                         $team = quick_team('*');
                         while ($opt_team = mysqli_fetch_assoc($team)) {
                              echo "<option value='" . $opt_team['id'] . "'>" . $opt_team['grupo'] . ") " . $opt_team['equipo'] . "</option>";
                         }
                         ?>
                    </select>
               </div>
               <label for="admin_fecha_match">Horario</label>
               <input type="date" name="admin_fecha_match">
               <input type="time" name="admin_horario_match">
               <br>
               <label for="admin_id_estadio">Estadio</label>
               <select name="admin_id_estadio">
                    <?php
                    $estadios = quick_stadium('*');
                    while ($estadio = mysqli_fetch_assoc($estadios)) {
                         echo "<option value='" . $estadio['id'] . "'>" . $estadio['estadio'] . "</option>";
                    }
                    ?>
               </select>
               <input type="submit" value="Crear Partido">
          </form>
     </section>
     <hr>
     <div>
          <h2>Actualizar Partido</h2>
          <form action="" method="get">
               <label for="fecha_Selected">Busqueda por día</label>
               <input type="date" name="fecha_Selected">
               <input type="submit" value="buscar">
               <br>
               <label for="equipoSelect">Equipo</label>
               <select name="equipoSelect">
                    <option value="">--</option>
                    <?php
                    $team = quick_team('*');
                    while ($opt_team = mysqli_fetch_assoc($team)) {
                         echo "<option value='" . $opt_team['id'] . "'>" . $opt_team['grupo'] . ") " . $opt_team['equipo'] . "</option>";
                    }
                    ?>
               </select>
          </form>
          <?php
          if (!empty($_GET['fecha_Selected']) || !empty($_GET['equipoSelect'])) {

               echo "<a href='admin_partidos.php'><button type='reset'>Reset</button></a>";

               if (!empty($_GET['fecha_Selected']) && !empty($_GET['equipoSelect'])) {
                    echo "<h3>Partidos del " . $_GET['fecha_Selected'] . "</h3>
                    <h3>de " . quick_team($_GET['equipoSelect'])['equipo'] . "";
               } 
               elseif (!empty($_GET['equipoSelect'])) {
                    echo "<h3>Partidos de " . quick_team($_GET['equipoSelect'])['equipo'] . "";
               } 
               elseif (!empty($_GET['fecha_Selected'])) {
                    echo "<h3>Partidos del " . $_GET['fecha_Selected'] . "</h3>";
               }
          }
          ?>
     </div>
     <section class="sec_partido">
          <h1>PARTIDOS POR JUGAR O EN JUEGO</h1>
          <?php
          if (!empty($_GET['fecha_Selected']) or !empty($_GET['equipoSelect'])) {
               if (!empty($_GET['fecha_Selected']) and !empty($_GET['equipoSelect'])) {
                    $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE  
                              AND p.horario_juego >= '" . $_GET['fecha_Selected'] . " 00:00:00' 
                              AND p.horario_juego <= '" . $_GET['fecha_Selected'] . " 23:59:59'
                              AND (p.id_equipo1 = '" . $_GET['equipoSelect'] . "' 
                              OR p.id_equipo2 = '" . $_GET['equipoSelect'] . "')
                              ORDER BY p.horario_juego ASC;";
               }
               elseif (!empty($_GET['fecha_Selected']) AND empty($_GET['equipoSelect'])) {
                  $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE 
                              p.horario_juego >= '" . $_GET['fecha_Selected'] . " 00:00:00' 
                              AND p.horario_juego <= '" . $_GET['fecha_Selected'] . " 23:59:59'
                              ORDER BY p.horario_juego ASC;";
               }
               elseif(empty($_GET['fecha_Selected']) AND !empty($_GET['equipoSelect'])){
                    $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE (p.id_equipo1 = '".$_GET['equipoSelect']. "' OR p.id_equipo2 = '" . $_GET['equipoSelect'] . "')
                              ORDER BY p.horario_juego ASC;";
               }
          } 
          else {
               $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              ORDER BY p.horario_juego ASC;";
          }
          admin_display_matches($sql_query_played);
          ?>


          <?php
          /*
          if (!empty($_GET['fecha_Selected'])) {
               $sql_all_matches = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE p.estado != 'Finalizado' AND p.horario_juego >= '" . $_GET['fecha_Selected'] . " 00:00:00' AND p.horario_juego <= '" . $_GET['fecha_Selected'] . " 23:59:59'
                              ORDER BY p.horario_juego ASC;";
               admin_display_matches($sql_all_matches);
          } else {
               $sql_all_matches = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id AND p.id_equipo_ganador = e.id
                              WHERE p.estado != 'Finalizado'
                              ORDER BY p.horario_juego ASC;";
               admin_display_matches($sql_all_matches);
          }
          */ ?>
     </section>
     </section>
     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>

</html>