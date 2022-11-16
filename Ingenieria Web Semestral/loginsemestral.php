<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Inicio de Sesion</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='resources/main.css'>
  <link rel="icon" href="resources/img/scienceICON.png">
</head>

<body class="bodyLogin" style="background-color: #7f1947;">
  <div class="login-box">
    <img src="resources/img/Logo.png" class="avatar" alt="Avatar Image">
    <h1>Solo Ciencia</h1>
    <form action="loginsemestral.jsp" method="post">
      <!-- USERNAME INPUT -->
      <label for="username">Nombre de Usuario</label>
      <input type="text" placeholder="Enter Username" name="username" id="username">
      <!-- PASSWORD INPUT -->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Enter Password" name="password" id="password">
      <input type="submit" value="Iniciar sesion">
      <a href="registrarse.php">¿No tienes una cuenta?</a>
    </form>
  </div>

</body>

</html>