<?php
include "config.php"; 

if($_SERVER['REQUEST_METHOD']== "POST"){ 
  $arr['username'] = $_POST['username'];
  $arr['password'] = $_POST['password'];
  $arr['nombre'] = $_POST['nombre'];
  $arr['email'] = $_POST['email'];
  $arr['rank'] = "user";
  $query = "INSERT INTO usuarios (username, password, nombre, email, rank) VALUES ('".$arr['username']."', '".$arr['password']."', '".$arr['nombre']."', '".$arr['email']."', '".$arr['rank']."');";
  mysqli_query($conn_BD,$query);
  header("Location: loginsemestral.php");
}
?>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Registrarse</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='resources/main.css'>
  <link rel="icon" href="resources/img/Logo.png">

  <!-- A esta página le falta optimización de css  -Miguel --> 
</head>
<body class="bodyRegister general_backgroundImage sechome">
  <div class="register-box">
    <img src="resources/img/Logo.png" class="avatar" alt="Avatar Image">
    <h1>Registrarse</h1>
    <form method="post">
      <!-- FirstNAME INPUT -->
      <label for="Firstname">Nombre de Usuario</label>
      <input type="text" placeholder="Escriba nombre de usuario" name="username" id="username">
      <!-- LAST NAME INPUT-->
      <label for="Lastname">Nombre</label>
      <input type="text" placeholder="Escriba nombre" name="nombre" id="nombre">
      <!-- EMAIL INPUT -->
      <label for="CED">Email</label>
      <input type="email" placeholder="Escriba el email" name="email" id="email">
      <!-- PASSWORD INPUT -->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Escriba contraseña" name="password" id="password">
      <!-- Enviar -->
      <input type="submit" value="Registrarse">
    </form>
  </div>

</body>

</html>