<?php

session_start();
/*
if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
}

header("Location: Home.php");*/
unset($_SESSION['user']);
 unset($_SESSION['pass']);
 session_destroy();
 header('Location: Home.php');