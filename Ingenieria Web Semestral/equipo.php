<?php
session_start();
if (!empty($_SESSION['user'])) {
    echo $_SESSION['user'];
    echo $_SESSION['myrank'];
}
if(!$_GET['equipoSeleccionado']){
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
    </script>

</head>

<body class="general_backgroundImage">
    <div id="general_header"></div>

    <form action="Equipos.php" method="post">

        <section class="secequipos">

            <?php
            include('config.php');
            $sql_query = "SELECT * FROM equipos WHERE id = '" . $_GET['equipoSeleccionado'] . "';";
            $result = mysqli_query($conn_bd, $sql_query);
            $row = $result->fetch_assoc();
            echo "
            
            <h1>". $row['equipo'] ."</h1>
            <img class='equipoimg' src='./resources/img/Banderas/". $row['dir_bandera'] . "'>
            <span>
                <h3>Puntos</h3>
                <span>" . $row['puntos'] . "</span>
            </span>
            <span>
                <h3>Partidos Jugados</h3>
                <span>" . $row['j_jugados'] . "</span>
            </span>
            <span>
                <h3>Partidos Ganados</h3>
                <span>" . $row['j_ganados'] . "</span>
            </span>
            <span>
                <h3>Partidos Empatados</h3>
                <span>" . $row['j_empatados'] . "</span>
            </span>
            <span>
                <h3>Partidos Perdidos</h3>
                <span>" . $row['j_perdidos'] . "</span>
            </span>"
            ?>
        </section>

        <section class="secequipos">
               <?php
               include('config.php');
                $sql_query = "SELECT * FROM jugadores_equipo;";
               if ($conn_bd) {
                    $result = mysqli_query($conn_bd, $sql_query);

                    while ($equipos = mysqli_fetch_assoc($result)) {
                         echo "<div class='equipo'>
                                   
                                   <img class='equipoimg' src='./resources/img/EQUIPOS/" . $equipos['marco_dir'] . "'>
                                   
                                   </a>
                                   </div>";
                    }
                    $conn_bd->close();
               }
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