<?php
include 'phpscripts.php';
include 'config.php';
session_start();
if (!empty($_SESSION['user']) && $_GET['newfav']) {

}
else{
    header('Location:Equipos.php');
}

$update_fav_sql = "
    UPDATE usuarios
    SET id_equipo_fav = ". $_GET['newfav']."
    WHERE id = ". $_SESSION['user'] .";";
$result = mysqli_query($conn_BD, $update_fav_sql);
$new_location = "equipo.php?equipoSeleccionado=".$_GET['newfav']."";
header("Location:".$new_location);
