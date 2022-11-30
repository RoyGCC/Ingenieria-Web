<?php
session_start();
include 'phpscripts.php';
if ($_SESSION['myrank'] != "admin") {
    header("Location: loginsemestral.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include('config.php');
    $sql_insert="INSERT INTO partidos (id_equipo1,id_equipo2,
                 horario_juego,
                 estado,grupo_p,estadio)
                 VALUES (".$_POST['admin_id_equipo1'].",". $_POST['admin_id_equipo2'].",
                 '". $_POST['admin_fecha_match']." ". $_POST['admin_horario_match']."',
                'Inactivo','".$_POST['admin_grupo_select']."','". $_POST['admin_id_estadio']."');";
    if ($conn_BD) {
        mysqli_query($conn_BD, $sql_insert);
    }
    header('Location: admin_partidos.php');
}
?>