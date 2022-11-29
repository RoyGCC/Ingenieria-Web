<?php
session_start();
include 'phpscripts.php';
include "config.php";
if($_SESSION['myrank'] != "admin"){
     header("Location: loginsemestral.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
     if($_POST['j_ganados'] == null){
          $_POST['j_ganados'] = 'j_ganados';}
     if ($_POST['j_empatados'] == null) {
          $_POST['j_empatados'] = 'j_empatados';}
     if ($_POST['j_perdidos'] == null) {
          $_POST['j_perdidos'] = 'j_perdidos';}
     if($conn_BD){
     /*$Total_Games = $_POST['j_ganados'] + $_POST['j_empatados'] + $_POST['j_perdidos'];*/
     

     $query = "UPDATE equipos 
               SET  j_ganados = ". $_POST['j_ganados'].", j_empatados = ". $_POST['j_empatados'].", j_perdidos = ". $_POST['j_perdidos']."
               WHERE id = " . $_POST['equipoSelect'].";";

     mysqli_query($conn_BD,$query);
     $query_jjugados = "UPDATE equipos 
                        SET j_jugados = j_ganados+j_perdidos+j_empatados, puntos = (j_ganados*3)+j_empatados 
                        WHERE id =".$_POST['equipoSelect'].";";
     mysqli_query($conn_BD,$query_jjugados);
     header("Location:Home.php");
     }
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
          <body class="bodyRegister general_backgroundImage">
               <div class="register-box">
               <img src="resources/img/Logo.png" class="avatar" alt="Avatar Image">
               <h1>Ingresar estadisticas de equipo</h1>
               <form method="post">
                    <label for="equipoSelect">Equipo</label>
                    <select name="equipoSelect">
                         <?php
                         $team = quick_team('*');
                         while($opt_team = mysqli_fetch_assoc($team)) {
                              echo "<option value='". $opt_team['id']."'>". $opt_team['grupo'] .") ".$opt_team['equipo']."</option>"  ;
                         }
                         ?>
                    </select>
                    <label for="j_ganados">Partidos Ganados</label>
                    <input type="number" placeholder="Partidos Ganados" name="j_ganados" id="j_ganados">
                    <label for="j_empatados">Partidos Empatados</label>
                    <input type="number" placeholder="Partidos Empatados" name="j_empatados" id="j_empatados">
                    <label for="j_perdidos">Partidos Perdidos</label>
                    <input type="number" placeholder="Partidos Perdidos" name="j_perdidos" id="j_perdidos">
                    <input type="submit" value="Ingresar">
               </form>
               </div>
          </body>        

     </section>
     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>

</html>