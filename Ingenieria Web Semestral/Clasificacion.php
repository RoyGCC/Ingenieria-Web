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
<<<<<<< Updated upstream
     <section class="sec_partido">
          <h1>PARTIDOS POR JUGAR O EN JUEGO</h1>
          <?php
          $sql_all_matches = "SELECT * 
                                   FROM partidos p LEFT JOIN equipos e 
                                   ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                                    WHERE p.estado != 'Finalizado'
                                   ORDER BY p.horario_juego ASC;";
          display_matches($sql_all_matches);
          ?>
     </section>
     <section class="sec_partido">
          <h1>PARTIDOS Finalizados</h1>
          <?php
          $sql_query_played = "SELECT * 
                              FROM partidos p LEFT JOIN equipos e 
                              ON  p.id_equipo1 = e.id && p.id_equipo2 = e.id && p.id_equipo_ganador = e.id
                              WHERE p.estado = 'Finalizado'
                              ORDER BY p.horario_juego ASC;";
          display_matches($sql_query_played);
          ?>
=======

     <section class="classification-content inline-container">

          <section class="titulos-partidos inline-container">

               <h5>Octavos</h5>
               <h4>Cuartos</h4>
               <h3>Semifinal</h3>
               <h2>Final</h2>
               <h3>Semifinal</h3>
               <h4>Cuartos</h4>
               <h5>Octavos</h5>
               
          </section>

          <section class="bracket-container">


               <section class="bracket">

                    <section class="octavos inline-container">

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                    </section>

                    <section class="cuartos inline-container">

                    <div class="match">



                    </div>

                    <div class="match">

                         

                    </div>

                    <div class="match">



                    </div>

                    <div class="match">

                         

                    </div>

                    </section>

                    <section class="semi inline-container">

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>


                    </section>

                    <section class="final inline-container">

                         <div class="match">

                              

                         </div>

                    </section>

               </section>

               <section class="bracket2">
                              
                    <section class="final inline-container">

                         <div class="match">

                              

                         </div>

                    </section>


                    <section class="semi inline-container">

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>


                    </section>

                    <section class="cuartos inline-container">

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                    </section>

                    <section class="octavos inline-container">

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                         <div class="match">



                         </div>

                         <div class="match">

                              

                         </div>

                    </section>

               </section>

          </section>

          <section class="bronze">

               <h2>Tercer Lugar</h2>

               <section class="bronze-container">

                    <section class="match">

                    </section>

                    <section class="match">

                    </section>

               </section>

          </section>

>>>>>>> Stashed changes
     </section>

     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>
</html>