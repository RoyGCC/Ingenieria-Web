<?php

session_start();
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
     <section class="sechome" id="equipos_placeholder">
          <div class="contenidoextra">
               <img class="estadio" src="resources/img/estadio.jpg">
               <div class="extra2">
                    <a>
                         <h1 style="font-family: var(--fuente_titulos); color: #7f1947;">Estadios</h1>
                    </a>
                    <span>Nuestros ocho espectaculares estadios de la Copa Mundial de la FIFA Qatar 2022™ están listos para recibir al mundo.</span>
               </div>
          </div>
          <div class="contenidoextra">
               <img class="estadio" src="resources/img/fiesta.jpg">
               <div class="extra2">
                    <a>
                         <h1 style="font-family: var(--fuente_titulos); color: #7f1947;">☪️Diversión🚫</h1>
                    </a>
                    <span style="text-decoration:line-through;">Destinos de entretenimiento, mega atracciones, descubrimiento cultural, aventuras sin fin y mucho más.</span>
                    <span>Hay que respetar la Sharia</span>
               </div>
          </div>
          <div class="contenidoextra">
               <img class="estadio" src="resources/img/Laeeb.jpg">
               <div class="extra2">
                    <a>
                         <h1 style="font-family: var(--fuente_titulos); color: #7f1947;">Mascota Oficial</h1>
                    </a>
                    <span>Soy tu mejor compañero de fútbol del universo de las mascotas.</span>
               </div>
          </div>
          <div class="contenidoextra">
               <img class="estadio" src="resources/img/qatarRules.webp">
               <div class="extra2">
                    <a>
                         <h1 style="font-family: var(--fuente_titulos); color: #7f1947;">Prohibiciones</h1>
                    </a>
                    <span>La cultura Catarí no permite los siguientes comportamientos.<br> Recuerda que los derechos humanos son opcionales aquí</span>
               </div>
          </div>
          <div class="contenidoextra">
               <a href="logout.php">logout</a>
          </div>     
     </section>


     <script>
          headerTemplate()
          
     </script>
     
</body>

</html>