<?php
session_start();
  $error = "";

  if($_SERVER['REQUEST_METHOD']== "POST")
  {
    $arr['username'] = $_POST['username'];
    $arr['password'] = $_POST['password'];

    $query = "select id, rank from usuarios where username = '".$arr['username']."' && password = '".$arr['password']."'";
    $conn_bd = mysqli_connect('localhost', 'server', '', 'humanrightsaresecondary', 3306);
    
    if($conn_bd){
      $stm = mysqli_query($conn_bd, $query);
      $count = mysqli_num_rows($stm);
      if($count == 0) {
        echo "error";
      }
      else
      {
      $stm = mysqli_fetch_assoc($stm);
          $_SESSION['user'] = $stm['id'];
          $_SESSION['myrank'] = $stm['rank'];
          header("Location: Home.php");
      }

      





      /*
      if($error == "")
      {
        header("Location: Home.php");
        die;
      }*/
    }
  }
?>

<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Inicio de Sesion</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='resources/main.css'>
  <link rel="icon" href="resources/img/scienceICON.png">
</head>

<body class="bodyLogin general_backgroundImage">
  <div class="login-box">
    <img src="resources/img/Logo.png" class="avatar" alt="Avatar Image">
    <form action="" method="post">
      <label for="username">Nombre de Usuario</label>
      <input type="text" placeholder="Enter Username" name="username" id="username">
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Enter Password" name="password" id="password">
      <input type="submit" value="Iniciar sesion">
      <a href="registrarse.php">¿No tienes una cuenta?</a>
    </form>
  </div>

</body>

</html>