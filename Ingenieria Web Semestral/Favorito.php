<?php
include('phpscripts.php');
include('config.php');
session_start();
if (!empty($_SESSION['user'])) {
     $user = quick_user($_SESSION['user']);
     if($user['id_equipo_fav'] == null){
          header('Location:nofav.php');
     }

}
else{
     header('Location:Equipos.php');
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

     <script lang="javascript" type="text/javascript">
          function seleccionarEquipo(equipo) {
               location.href = "equipo.php?equipoSeleccionado=" + equipo;
          }
     </script>
</head>
<body class="general_backgroundImage">
     <div id="general_header"></div>
     <section class="secequipos">
          <?php
          $sql_query = "
               SELECT *
               FROM usuarios u join equipos e
               ON e.id = u.id_equipo_fav
               WHERE u.id =" . $_SESSION['user'] . "
               ;";
          if ($conn_BD) {
               $favorite_result = mysqli_query($conn_BD, $sql_query);
               
               while ($equipos = mysqli_fetch_assoc($favorite_result)) {
                    $fav_team_p = $equipos['id'];
                    echo "
                         <div class='equipo'>
                              <a class='equipocontainer' href='equipo.php?equipoSeleccionado=" . $equipos['id'] . "'>
                              <span>" . $equipos['grupo'] . "</span>
                              <img class='equipoimg' src='./resources/img/Banderas/" . $equipos['dir_bandera'] . "'>
                              <span>" . $equipos['equipo'] . "</span>
                              </a>
                              </div>";
               }
          }
          ?>
     </section>
     <section class="sec_partido">
          <h1>PARTIDOS POR JUGAR O EN JUEGO</h1>
          <?php
          $fav_team = $GLOBALS['fav_team_p'];
          $sql_all_matches = "SELECT * 
               FROM partidos p LEFT JOIN equipos e 
               ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
               WHERE p.estado != 'Finalizado' AND (p.id_equipo1 = '".$fav_team."' OR p.id_equipo2 = '".$fav_team."')
               ORDER BY p.horario_juego ASC;";
          display_matches($sql_all_matches);
          ?>
     </section>
     <section class="sec_partido">
          <h1>PARTIDOS Finalizados</h1>
          <?php
          $fav_team = $GLOBALS['fav_team_p'];
          $sql_query_played = "SELECT * 
               FROM partidos p LEFT JOIN equipos e 
               ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
               WHERE p.estado = 'Finalizado' AND (p.id_equipo1 = '".$fav_team."' OR p.id_equipo2 = '".$fav_team."')
               ORDER BY p.horario_juego ASC;";
          display_matches($sql_query_played);
          ?>
     </section>
     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>
</html>