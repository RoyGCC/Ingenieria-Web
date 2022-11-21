<html>
<head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>Home</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel="stylesheet" href="resources/main.css">
     <link rel="icon" href="resources/img/Logo.png">
     <script src="./resources/js/templates.js"></script>
</script>

</head>
<body class="general_backgroundImage">
     <div id="general_header"></div>
     
     <form action="Equipos.php" method="post">

     <section class="secequipos">


          <?php

               $con = mysqli_connect('localhost','root','') or die(mysqli_error());  
               mysqli_select_db($con,'humanrightsaresecondary') or die("cannot select DB");
               
               $sql = "SELECT * FROM equipos WHERE id = $_GET[equipoSeleccionado]";

               $result = $con->query($sql);

               $row = $result->fetch_assoc();

               echo $row['equipo'];

          ?>

     </section>

     </form>

     <script>
               <?php
               if (!empty($_SESSION['user'])) {
                    echo "headerTemplateLogged()";
               } else {
                    echo "headerTemplateNotLogged()";
               } ?>
          </script>
</body>
</html>