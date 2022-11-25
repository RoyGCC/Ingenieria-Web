<?php

session_start();
/*
if(isset($_SESSION['user']))
{
    unset($_SESSION['user']);
}

header("Location: Home.php");*/
unset($_SESSION['username']);
 unset($_SESSION['password']);
 session_destroy();
 header('Location: Home.php');