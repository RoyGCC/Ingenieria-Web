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

               <section class="bracket">
                    <section class="octavos inline-container">
                         <h5 class="titulos-partidos">Octavos</h5>
                         <div class=" match">
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
                         <h4 class="titulos-partidos">Cuartos</h4>
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
                         <h3 class="titulos-partidos">Semifinal</h3>
                         <div class="match">
                         </div>
                         <div class="match">
                         </div>
                    </section>
                    <section class="final inline-container">
                         <h2 class="titulos-partidos">Final</h2>
                         <div class="match">
                         </div>
                    </section>
                    <section class="final inline-container">
                         <h2 class="titulos-partidos">Final</h2>
                         <div class="match">
                         </div>
                    </section>
                    <section class="semi inline-container">
                         <h3 class="titulos-partidos">Semifinal</h3>
                         <div class="match">
                         </div>
                         <div class="match">
                         </div>
                    </section>
                    <section class="cuartos inline-container">
                         <h4 class="titulos-partidos">Cuartos</h4>
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
                         <h5 class="titulos-partidos">Octavos</h5>
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
          <section class="bronze">
               <h2>Tercer Lugar</h2>
               <section>
                    <section class="match">
                    </section>
                    <section class="match">
                    </section>
               </section>

          <script>
               <?php
               include 'phpscripts.php';
               chooseheader();
               ?>
          </script>
</body>

</html>