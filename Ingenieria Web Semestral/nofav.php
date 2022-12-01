<?php
include('phpscripts.php');
include('config.php');
session_start();
if (!empty($_SESSION['user'])) {
} else {
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
</head>
<body class="general_backgroundImage">
    <div id="general_header"></div>
    <section class="sechome">
    <div class="contenidoextra">
               <img class="estadio" src="resources/img/laebb.png">
               <div class="extra2">
                    <a>
                         <h1 style="font-family: var(--fuente_titulos); color: #7f1947; display:border-box;">No tienes nigun equipo como favorito</h1>
                    </a>
                    <span>Vuelve y elige el tuyo;recuerda que el fanatismo es la mejor forma para controlar las masas Y en Qatar nos encanta el control =)</span>
               </div>
          </div>
    </section>







    <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>
</html>