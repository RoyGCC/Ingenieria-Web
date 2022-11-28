<?php
session_start();
if (!empty($_SESSION['user'])) {
     echo $_SESSION['user'];
     echo $_SESSION['myrank'];
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

     <section>
     <main>
          <ul class="a">
          <li>&nbsp;</li>

          <li class="game game-top winner">Lousville <span>79</span></li>
          <li>&nbsp;</li>
          <li class="game game-bottom ">NC A&T <span>48</span></li>

          <li>&nbsp;</li>

          <li class="game game-top winner">Colo St <span>84</span></li>
          <li>&nbsp;</li>
          <li class="game game-bottom ">Missouri <span>72</span></li>

          <li>&nbsp;</li>

          <!-- REDACTED SOME GAMES --->

          <li class="game game-top winner">Duke <span>73</span></li>
          <li>&nbsp;</li>
          <li class="game game-bottom ">Albany <span>61</span></li>

          <li>&nbsp;</li>
          </ul>
          <ul class="a">
          <!-- redacted, same structure as round 1 -->
          </ul>
          <ul class="a">
          <!-- redacted -->
          </ul>
          <ul class="a">
          <li>&nbsp;</li>

          <li class="game game-top winner">Lousville <span>85</span></li>
          <li>&nbsp;</li>
          <li class="game game-bottom ">Duke <span>63</span></li>

          <li>&nbsp;</li>
          </ul>
     </main>
     

     </section>
     <script>
          <?php
          include 'phpscripts.php';
          chooseheader();
          ?>
     </script>
</body>

</html>