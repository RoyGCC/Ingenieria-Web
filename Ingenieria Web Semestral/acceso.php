<?php

function acceso($rank)
{
    if(isset($_SESSION["ACCESO"]) && !$_SESSION["ACCESO"][$rank])
    {
        header("Location: denegar.php");
        die;
    }
}

$_SESSION["ACCESO"]["ADMIN"] = isset($_SESSION['rank'], $_SESSION['rank']) == "admin";
