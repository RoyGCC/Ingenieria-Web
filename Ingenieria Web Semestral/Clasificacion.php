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

     </section>

     <script>
          <?php
          include 'phpscripts.php';
          chooseheader();
          ?>
     </script>
</body>

</html>