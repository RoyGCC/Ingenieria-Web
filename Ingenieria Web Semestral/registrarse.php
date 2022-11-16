<!DOCTYPE html>
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


<body class="bodyRegister general_backgroundImage">
  <div class="register-box">
    <img src="resources/img/Logo.png" class="avatar" alt="Avatar Image">
    <h1>Registrarse</h1>
    <form action="" method="post">
      <!-- FirstNAME INPUT -->
      <label for="Firstname">Nombre</label>
      <input type="text" placeholder="Escriba nombre" name="Firstname" id="Firstname">
      <!-- LAST NAME INPUT-->
      <label for="Lastname">Apellido</label>
      <input type="text" placeholder="Escriba apellido" name="Lastname" id="Lastname">
      <!-- EMAIL INPUT -->
      <label for="CED">Edad</label>
      <input type="text" placeholder="Escriba la edad" name="edad" id="edad">
      <!-- PASSWORD INPUT -->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Escriba contraseña" name="password" id="password">

      <input type="submit" value="Registrarse">
    </form>
  </div>

</body>

</html>