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
          $sql_query = "SELECT * FROM equipos ORDER BY grupo ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();
          
          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
          echo "<div class='equipo'>

          <h1>". $equipos['equipo'] ."</h1>
          <img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'>

          <span>
          <h3>Pts</h3>
          <span>" . $equipos['puntos'] . "</span>
          </span>

          <span>
          <h3>PJ</h3>
          <span>" . $equipos['j_jugados'] . "</span>
          </span>

          <span>
          <h3>G</h3>
          <span>" . $equipos['j_ganados'] . "</span>
          </span>

          <span>
          <h3>E</h3>
          <span>" . $equipos['j_empatados'] . "</span>
          </span>

          <span>
          <h3>P</h3>
          <span>" . $equipos['j_perdidos'] . "</span>
          </span>
          </div>
          "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>

     <script>
          <?php
          include 'phpscripts.php';
          chooseheader();
          ?>
     </script>
</body>

</html>