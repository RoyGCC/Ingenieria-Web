
//Este script de JS se encarga de imprimir los elementos repetitivos de la aplicación web

function headerTemplate(){
    var tempInput = '<header class="header-home">\
                    <a href="Home.php"><img src="resources/img/Logo.png" alt="IconSoloCiencia"></a>\
                    <h1 style = "font-family: var(--fuente_Header) ;">\
                    <a href="loginsemestral.php" style="text-decoration: none;color: #7f1947;">Iniciar Sesión</a>\
            |       <a href="registrarse.php" style="text-decoration: none;color: #7f1947">Registrarse</a>\
                    </h1></header>\
                    <nav class="navbar-home">\
                        <ul style = "font-family: var(--fuente_titulos);">\
                            <li><a href="Equipos.php">Equipos</a></li>\
                            <li><a href="Resultados.php">Resultados</a></li>\
                            <li><a href="TablaPosicion.php">Tabla de posición</a></li>\
                            <li><a href="Clasificacion.php">Clasificación</a></li>\
                            <li><a href="Favorito.php">Favorito</a></li>\
                        </ul>\
                    </nav>'
                    document.getElementById("general_header").innerHTML = tempInput;
}