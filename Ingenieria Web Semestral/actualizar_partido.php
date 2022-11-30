<?php
session_start();
include 'config.php';
include 'phpscripts.php';
if ($_SESSION['myrank'] != "admin") {
    header("Location: loginsemestral.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if($_REQUEST['delete'] == 'true'){
        $sql_delete = "DELETE FROM partidos WHERE id_partido = ".$_REQUEST['id_partido'].";";
        if ($conn_BD) {
        mysqli_query($conn_BD,$sql_delete);
        }
        header('Location: admin_partidos.php');
    }
    else{
        if($_POST['new_Grupo_Match'] == ''){
            $_POST['new_Grupo_Match'] = 'grupo_p';
        }
        else{
           $_POST['new_Grupo_Match'] = '\''. $_POST['new_Grupo_Match'].'\''; 
        }
        if ($_POST['new_Estado_Match'] == '') {
            $_POST['new_Estado_Match'] = 'estado';
        } else {
            $_POST['new_Estado_Match'] = '\'' . $_POST['new_Estado_Match'] . '\'';
        }
        if ($_POST['new_Estadio_Match'] == '') {
            $_POST['new_Estadio_Match'] = 'estadio';
        } else {
            $_POST['new_Estadio_Match'] = '\'' . $_POST['new_Estadio_Match'] . '\'';
        }
        $slq_update = "UPDATE partidos SET 
        id_equipo1=".$_POST['new_equipo1_Match']."
        ,id_equipo2=".$_POST['new_equipo2_Match']."
        ,horario_juego='".$_POST['new_date_match']." ".$_POST['new_horario_match']."'
        ,goles_equipo1=".$_POST['new_goles_equipo1']."
        ,goles_equipo2=".$_POST['new_goles_equipo2']."
        ,estado=".$_POST['new_Estado_Match']."
        ,grupo_p=".$_POST['new_Grupo_Match']."
        ,estadio=".$_POST['new_Estadio_Match']."
        WHERE id_partido = ".$_REQUEST['id_partido'].";";
        if ($conn_BD) {
            mysqli_query($conn_BD, $slq_update);
        }
        header('Location: admin_partidos.php');
    }
}