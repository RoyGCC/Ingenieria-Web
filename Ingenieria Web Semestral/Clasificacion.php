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

     <?php

       


          include('config.php');
          //grupo a
          $sql_query1a="SELECT * FROM `equipos` WHERE equipos.grupo='A' ORDER BY puntos DESC LIMIT 1;";
          $result1A = mysqli_query($conn_bd, $sql_query1a);
          $row1A = $result1A->fetch_assoc();
          $name1A=$row1A['equipo'];
          $pic1A=$row1A['dir_bandera'];

          $sql_query2a="SELECT * FROM `equipos` WHERE equipos.grupo='A' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2A = mysqli_query($conn_bd, $sql_query2a);
          $row2A = $result2A->fetch_assoc();
          $name2A=$row2A['equipo'];
          $pic2A=$row2A['dir_bandera'];

          //grupo b

          $sql_query1b="SELECT * FROM `equipos` WHERE equipos.grupo='B' ORDER BY puntos DESC LIMIT 1;";
          $result1B = mysqli_query($conn_bd, $sql_query1b);
          $row1B = $result1B->fetch_assoc();
          $name1B=$row1B['equipo'];
          $pic1B=$row1B['dir_bandera'];

          $sql_query2b="SELECT * FROM `equipos` WHERE equipos.grupo='B' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2B= mysqli_query($conn_bd, $sql_query2b);
          $row2B = $result2B->fetch_assoc();
          $name2B=$row2B['equipo'];
          $pic2B=$row2B['dir_bandera'];
     

          //grupo c

          $sql_query1c="SELECT * FROM `equipos` WHERE equipos.grupo='C' ORDER BY puntos DESC LIMIT 1;";
          $result1C = mysqli_query($conn_bd, $sql_query1c);
          $row1C = $result1C->fetch_assoc();
          $name1C=$row1C['equipo'];
          $pic1C=$row1C['dir_bandera'];

          $sql_query2c="SELECT * FROM `equipos` WHERE equipos.grupo='C' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2C= mysqli_query($conn_bd, $sql_query2c);
          $row2C = $result2C->fetch_assoc();
          $name2C=$row2C['equipo'];
          $pic2C=$row2C['dir_bandera'];
     

          //grupo d

          $sql_query1d="SELECT * FROM `equipos` WHERE equipos.grupo='D' ORDER BY puntos DESC LIMIT 1;";
          $result1D = mysqli_query($conn_bd, $sql_query1d);
          $row1D = $result1D->fetch_assoc();
          $name1D=$row1D['equipo'];
          $pic1D=$row1D['dir_bandera'];

          $sql_query2d="SELECT * FROM `equipos` WHERE equipos.grupo='D' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2D= mysqli_query($conn_bd, $sql_query2d);
          $row2D = $result2D->fetch_assoc();
          $name2D=$row2D['equipo'];
          $pic2D=$row2D['dir_bandera'];


          //grupo e

          $sql_query1e="SELECT * FROM `equipos` WHERE equipos.grupo='E' ORDER BY puntos DESC LIMIT 1;";
          $result1E = mysqli_query($conn_bd, $sql_query1e);
          $row1E = $result1E->fetch_assoc();
          $name1E=$row1E['equipo'];
          $pic1E=$row1E['dir_bandera'];

          $sql_query2e="SELECT * FROM `equipos` WHERE equipos.grupo='E' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2E= mysqli_query($conn_bd, $sql_query2e);
          $row2E = $result2E->fetch_assoc();
          $name2E=$row2E['equipo'];
          $pic2E=$row2E['dir_bandera'];

          // grupo f

          $sql_query1f="SELECT * FROM `equipos` WHERE equipos.grupo='F' ORDER BY puntos DESC LIMIT 1;";
          $result1F = mysqli_query($conn_bd, $sql_query1f);
          $row1F = $result1F->fetch_assoc();
          $name1F=$row1F['equipo'];
          $pic1F=$row1F['dir_bandera'];

          $sql_query2f="SELECT * FROM `equipos` WHERE equipos.grupo='F' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2F= mysqli_query($conn_bd, $sql_query2f);
          $row2F = $result2F->fetch_assoc();
          $name2F=$row2F['equipo'];
          $pic2F=$row2F['dir_bandera'];


          //grupo g

          $sql_query1g="SELECT * FROM `equipos` WHERE equipos.grupo='G' ORDER BY puntos DESC LIMIT 1;";
          $result1G = mysqli_query($conn_bd, $sql_query1g);
          $row1G = $result1G->fetch_assoc();
          $name1G=$row1G['equipo'];
          $pic1G=$row1G['dir_bandera'];

          $sql_query2g="SELECT * FROM `equipos` WHERE equipos.grupo='G' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2G= mysqli_query($conn_bd, $sql_query2g);
          $row2G = $result2G->fetch_assoc();
          $name2G=$row2G['equipo'];
          $pic2G=$row2G['dir_bandera'];


          //grupo h

          $sql_query1h="SELECT * FROM `equipos` WHERE equipos.grupo='H' ORDER BY puntos DESC LIMIT 1;";
          $result1H = mysqli_query($conn_bd, $sql_query1h);
          $row1H = $result1H->fetch_assoc();
          $name1H=$row1H['equipo'];
          $pic1H=$row1H['dir_bandera'];

          $sql_query2h="SELECT * FROM `equipos` WHERE equipos.grupo='H' ORDER BY puntos DESC LIMIT 1 OFFSET 1;";
          $result2H= mysqli_query($conn_bd, $sql_query2h);
          $row2H = $result2H->fetch_assoc();
          $name2H=$row2H['equipo'];
          $pic2H=$row2H['dir_bandera'];

          echo

          "


     <section class='classification-content inline-container'>

          <section class='titulos-partidos inline-container'>

               <h5>Octavos</h5>
               <h4>Cuartos</h4>
               <h3>Semifinal</h3>
               <h2>Final</h2>
               <h3>Semifinal</h3>
               <h4>Cuartos</h4>
               <h5>Octavos</h5>
               
          </section>

          <section class='bracket-container'>


               <section class='bracket'>

                    <section class='octavos inline-container'>

                         <div class='match'>

                              <div><h1>".$name1B."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic1B . "'>

                         </div>

                              <div class='match'>

                              <div><h1>".$name2A."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic2A . "'>                              

                         </div>

                         <div class='match'>

                              <div><h1>".$name1A."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic1A . "'>     

                         </div>

                         <div class='match'>

                              <div><h1>".$name2B."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic2B . "'>   

                         </div>

                         <div class='match'>

                              <div><h1>".$name1D."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic1D . "'>  

                         </div>

                         <div class='match'>

                              <div><h1>".$name2C."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic2C . "'>                                

                         </div>

                         <div class='match'>

                              <div><h1>".$name1C."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic1C . "'>   

                         </div>

                         <div class='match'>

                              <div><h1>".$name2D."</h1></div>
                              <h2>|</h2>
                              <img src='./resources/img/Banderas/". $pic2D . "'>   

                         </div>
                    </section>

                    <section class='cuartos inline-container'>

                    <div class='match'>



                    </div>

                    <div class='match'>

                         

                    </div>

                    <div class='match'>



                    </div>

                    <div class='match'>

                         

                    </div>

                    </section>

                    <section class='semi inline-container'>

                         <div class='match'>



                         </div>

                         <div class='match'>

                              

                         </div>
                    </section>

                    <section class='final inline-container'>

                         <div class='match'>

                              

                         </div>
                    </section>

               </section>

               <section class='bracket2'>
                              
                    <section class='final inline-container'>

                         <div class='match'>

                              

                         </div>
                    </section>


                    <section class='semi inline-container'>

                         <div class='match'>



                         </div>

                         <div class='match'>

                              

                         </div>
                    </section>

                    <section class='cuartos inline-container'>

                         <div class='match'>



                         </div>

                         <div class='match'>

                              

                         </div>

                         <div class='match'>



                         </div>

                         <div class='match'>

                              

                         </div>
                    </section>

                    <section class='octavos inline-container'>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic1H . "'> 
                         <h2>|</h2>
                         <div><h1>".$name1H."</h1></div>

                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic2G . "'>
                         <h2>|</h2>
                         <div><h1>".$name2G."</h1></div>


                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic1G . "'>
                         <h2>|</h2> 
                         <div><h1>".$name1G."</h1></div>

                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic2H . "'>
                         <h2>|</h2>
                         <div><h1>".$name2H."</h1></div>

                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic1F . "'>
                         <h2>|</h2>
                         <div><h1>".$name1F."</h1></div> 

                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic2E . "'>
                         <h2>|</h2>
                         <div><h1>".$name2E."</h1></div>  

                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic1E . "'>
                         <h2>|</h2>
                         <div><h1>".$name1E."</h1></div> 

                         </div>

                         <div class='match'>

                         <img src='./resources/img/Banderas/". $pic2F . "'> 
                         <h2>|</h2> 
                         <div><h1>".$name2F."</h1></div>

                         </div>
                    </section>
               </section>

          </section>

          <section class='bronze'>

               <h2>Tercer Lugar</h2>

               <section class='bronze-container'>

                    <section class='match'>

                    </section>

                    <section class='match'>

                    </section>
               </section>

          </section>

     </section>";

     ?>

     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>

</html>