<?php
session_start();
include 'phpscripts.php';
include "config.php";
if ($_SESSION['myrank'] != "admin") {
    header("Location: loginsemestral.php");
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
</head>
<body class="general_backgroundImage">
    <div id="general_header"></div>



</section>
     <script>
          <?php
          chooseheader();
          ?>
     </script>
</body>
</html>