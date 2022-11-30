<?php
session_start();
<<<<<<< HEAD

include "acceso.php";
acceso('ADMIN');
     if($_SESSION['myrank'] != "admin"){
          echo '<script>alert("Welcome to Geeks for Geeks")</script>';
          header("Location: loginsemestral.php");
     }

     $error = "";

     if($_SERVER['REQUEST_METHOD']== "POST")
     {
       if(!$DB = new PDO("mysql:host=localhost;dbname=humanrightsaresecondary","root",""))
       {
         die("error");
       }
       
       $arr['j_jugados'] = ['j_ganados'] + ['j_empatados'] + ['j_perdidos'];
       $arr['j_ganados'] = $_POST['j_ganados'];
       $arr['j_empatados'] = $_POST['j_empatados'];
       $arr['j_perdidos'] = $_POST['j_perdidos'];
      
   
       $query = "insert into equipos  WHERE id_equipo = '" . $_GET['equipoSeleccionado'] . "'(j_jugados, j_ganados, j_empatados, j_perdidos) values (:j_jugados, :j_ganados, :j_empatados, :j_perdidos)";
       $stm = $DB->prepare($query);
       if($stm)
       {
         $check = $stm->execute($arr);
         if(!$check)
         {
           $error = "error";
         }
         if($error == "")
         {
           header("Location: admin.php");
           die;
         }
       }
   
     }
=======
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
                        SET j_jugados = j_ganados+j_perdidos+j_empatados
                        WHERE id =".$_POST['equipoSelect'].";";
     mysqli_query($conn_BD,$query_jjugados);
     header("Location:Home.php");}
}
>>>>>>> parent of eefcb50 (Merge pull request #21 from RoyGCC/master)
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

     <section>
        <h1>ADMIN</h1>
          <body class="bodyRegister general_backgroundImage">
               <div class="register-box">
               <img src="resources/img/Logo.png" class="avatar" alt="Avatar Image">
               <h1>Ingresar estadisticas de equipo</h1>
               <form method="post">
<<<<<<< HEAD
                    <!-- Equipo SELECT --> 
                    <label for="Firstname">Equipo</label>
                    <select name="select">
                         <option value="Qatar">Qatar</option>
                         <option value="Ecuador">Ecuador</option>
                         <option value="Senegal">Senegal</option>
=======
                    <label for="equipoSelect">Equipo</label>
                    <select name="equipoSelect">
                         <option value="27">Qatar</option>
                         <option value="12">Ecuador</option>
                         <option value="28">Senegal</option>
>>>>>>> parent of eefcb50 (Merge pull request #21 from RoyGCC/master)
                    </select>
                    <!-- Partidos Jugados INPUT -->
                    <label for="j_ganados">Partidos Ganados</label>
                    <input type="text" placeholder="Partidos Ganados" name="j_ganados" id="j_ganados">
                    <!-- Partidos Jugados INPUT -->
                    <label for="j_empatados">Partidos Empatados</label>
                    <input type="text" placeholder="Partidos Empatados" name="j_empatados" id="j_empatados">
                    <!-- Partidos Jugados INPUT -->
                    <label for="j_perdidos">Partidos Perdidos</label>
                    <input type="text" placeholder="Partidos Perdidos" name="j_perdidos" id="j_perdidos">
                    <!-- Enviar -->
                    <input type="submit" value="Ingresar">
               </form>
               </div>
          </body>        

<<<<<<< HEAD


=======
>>>>>>> parent of eefcb50 (Merge pull request #21 from RoyGCC/master)
     </section>
     <script>
          <?php
          include 'phpscripts.php';
          chooseheader();
          ?>
     </script>
</body>

</html>