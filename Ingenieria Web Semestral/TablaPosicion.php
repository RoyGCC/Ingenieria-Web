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
<<<<<<< HEAD

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

=======
     <h1 style="margin-top:50px;color: #fff;">Tabla de posición</h1>
     <h1 style="margin-top:50px;color: #fff;">Grupo A</h1>
     <section style="margin-top:0px;" class="secequipos">
     
          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'A' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
          echo "<div class='tablaspace'>

          <table class='tablapos'>
               <tr>
                    <th><h1>". $equipos['equipo'] ."</h1></th>
                    <td></td>
                    <td><h3>Pts</h3></td>
                    <td><h3>PJ</h3></td>
                    <td><h3>G</h3></td>
                    <td><h3>E</h3></td>
                    <td><h3>P</h3></td>
               </tr>

               <tr>
                    <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                    <td></td>
                    <td>" . $equipos['puntos'] . "</td>
                    <td>" . $equipos['j_jugados'] . "</td>
                    <td>" . $equipos['j_ganados'] . "</td>
                    <td>" . $equipos['j_empatados'] . "</td>
                    <td>" . $equipos['j_perdidos'] . "</td>
               </tr>
          </table>
          <div>
          "
          ;

>>>>>>> parent of eefcb50 (Merge pull request #21 from RoyGCC/master)
          }
          $conn_bd->close();
          }
          ?>
     </section>
<<<<<<< HEAD
=======
     <h1 style="color: #fff;">Grupo B</h1>
     <section style="margin-top:0px;" class="secequipos">
     
          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'B' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
     <h1 style="color: #fff;">Grupo C</h1>
     <section style="margin-top:0px;" class="secequipos">
     
          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'C' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
     <h1 style="color: #fff;">Grupo D</h1>
     <section style="margin-top:0px;" class="secequipos">

          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'D' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
     <h1 style="color: #fff;">Grupo E</h1>
     <section style="margin-top:0px;" class="secequipos">

          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'E' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
     <h1 style="color: #fff;">Grupo F</h1>
     <section style="margin-top:0px;" class="secequipos">

          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'F' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
     <h1 style="color: #fff;">Grupo G</h1>
     <section style="margin-top:0px;" class="secequipos">

          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'G' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
     <h1 style="color: #fff;">Grupo H</h1>
     <section style="margin-top:0px;" class="secequipos">

          <?php
          include('config.php');
          $sql_query = "SELECT * FROM equipos WHERE grupo = 'H' ORDER BY puntos ASC;";
          $result = mysqli_query($conn_bd, $sql_query);
          $row = $result->fetch_assoc();

          if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql_query);
          while ($equipos = mysqli_fetch_assoc($result)) {
               echo "<div class='tablaspace'>

               <table class='tablapos'>
                    <tr>
                         <th><h1>". $equipos['equipo'] ."</h1></th>
                         <td></td>
                         <td><h3>Pts</h3></td>
                         <td><h3>PJ</h3></td>
                         <td><h3>G</h3></td>
                         <td><h3>E</h3></td>
                         <td><h3>P</h3></td>
                    </tr>
     
                    <tr>
                         <td style='text-align: center;'><img style='width: 50px; height: 25px;' src='./resources/img/Banderas/". $equipos['dir_bandera'] . "'></td>
                         <td></td>
                         <td>" . $equipos['puntos'] . "</td>
                         <td>" . $equipos['j_jugados'] . "</td>
                         <td>" . $equipos['j_ganados'] . "</td>
                         <td>" . $equipos['j_empatados'] . "</td>
                         <td>" . $equipos['j_perdidos'] . "</td>
                    </tr>
               </table>
               <div>
               "
          ;

          }
          $conn_bd->close();
          }
          ?>
     </section>
>>>>>>> parent of eefcb50 (Merge pull request #21 from RoyGCC/master)

     <script>
          <?php
          include 'phpscripts.php';
          chooseheader();
          ?>
     </script>
</body>

</html>