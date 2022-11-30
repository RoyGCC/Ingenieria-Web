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

    <section class="equipo-selec inline-container">

        <section class="secequipos-selec inline-container">

            <?php
            include('config.php');
            $sql_query = "SELECT * FROM equipos WHERE id = '" . $_GET['equipoSeleccionado'] . "';";
            $result = mysqli_query($conn_bd, $sql_query);
            $row = $result->fetch_assoc();
            echo "

            <h1>". $row['equipo'] ."</h1>
            <img src='./resources/img/Banderas/". $row['dir_bandera'] . "'>";

            echo '<br><h2>Logros previos:</h2>';

            $xmldata = simplexml_load_file("./resources/xml/equipos.xml") or die("Faileddd to load");

            foreach($xmldata as $equipo) {
                if($row['id'] == $equipo->id){
                    echo '<h1 class="logros">'.$equipo->logros.'</h1>';
                }
               
            }
            ?>

        </section>

        <section class="jugadores-selec inline-container">

            <h1>Jugadores</h1>

            <section class="secjugadores-selec inline-container">

            <?php
            include('config.php');
                $sql_query = "SELECT * FROM jugadores_equipo a
                JOIN equipos b ON a.id_equipo = b.id
                WHERE id_equipo = '" . $_GET['equipoSeleccionado'] . "';";

                if ($conn_bd) {
                        $result = mysqli_query($conn_bd, $sql_query);

                        $equipos = mysqli_fetch_assoc($result);

                        echo "<div class='jugador big-shield'>

                                    <img class='jugadorimg' src='./resources/img/EQUIPOS/". $equipos['equipo'] ."/" . $equipos['equipo'] . ".gif'>
                                
                                    </div>";

                        while ($equipos = mysqli_fetch_assoc($result)) {
                            echo "<div class='jugador'>

                                    <img class='jugadorimg' src='./resources/img/EQUIPOS/". $equipos['equipo'] ."/" . $equipos['marco_dir'] . "'>
                                
                                    </div>";
                        }
                        $conn_bd->close();
                }

            ?>

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