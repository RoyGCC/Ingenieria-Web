<?php
include('phpscripts.php');
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
     <section class="res">
     <form action="" method="get">
          <label for="fecha_Selected">Busqueda por día</label>
          <input type="date" name="fecha_Selected">
          <input type="submit" value="buscar por fecha">
     </section>
     </form>
     <?php
          if (!empty($_GET['fecha_Selected'])) {
               echo"<a href='Resultados.php'><button type='reset'>Reset</button></a>";
               echo "<h3>Partidos del ".$_GET['fecha_Selected']."</h3>";
          }
     ?>
     <section class="sec_partido">
          <h1>PARTIDOS POR JUGAR O EN JUEGO</h1>
          <?php
          if (!empty($_GET['fecha_Selected'])) {
               $sql_all_matches = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE p.estado != 'Finalizado' AND p.horario_juego >= '" . $_GET['fecha_Selected'] . " 00:00:00' AND p.horario_juego <= '" . $_GET['fecha_Selected'] . " 23:59:59'
                              ORDER BY p.horario_juego ASC;";
               display_matches($sql_all_matches);
          } else {
               $sql_all_matches = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id AND p.id_equipo_ganador = e.id
                              WHERE p.estado != 'Finalizado'
                              ORDER BY p.horario_juego ASC;";
               display_matches($sql_all_matches);
          }
          ?>
     </section>
     <section class="sec_partido">
          <h1>PARTIDOS Finalizados</h1>
          <?php
          if (!empty($_GET['fecha_Selected'])) {
               $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE p.estado = 'Finalizado' AND p.horario_juego >= '" . $_GET['fecha_Selected'] . " 00:00:00' AND p.horario_juego <= '" . $_GET['fecha_Selected'] . " 23:59:59'
                              ORDER BY p.horario_juego ASC;";
               display_matches($sql_query_played);
          } else {
               $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE p.estado = 'Finalizado'
                              ORDER BY p.horario_juego ASC;";
               display_matches($sql_query_played);
          }
          ?>
     </section>
     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>

</html>