<?php
function chooseheader()
{
     if (!empty($_SESSION['user']) && $_SESSION['myrank'] == 'user') {
          echo "headerTemplateLogged()";
     } elseif (!empty($_SESSION['user']) && $_SESSION['myrank'] == 'admin') {
          echo "headerTemplateAdminLogged()";
     } else {
          echo "headerTemplateNotLogged()";
     }
}


function quick_team($id_team)
{
     include('config.php');
     if ($id_team == '*') {
          $quick_query = "SELECT * FROM equipos ORDER BY grupo ASC;";
     } else {
          $quick_query = "SELECT * FROM equipos WHERE id = '" . $id_team . "'";
     }
     if ($conn_BD) {
          $result = mysqli_query($conn_BD, $quick_query);
          if ($id_team == '*') {
               $return = $result;
          } else {
               $return = mysqli_fetch_assoc($result);
          }
          return $return;
     }
}

function quick_group()
{
     include('config.php');
     $quick_query = "SELECT * FROM grupos ORDER BY grupo ASC";
     if ($conn_BD) {
          $result = mysqli_query($conn_BD, $quick_query);
          $return = $result;
          return $return;
     }
}

function quick_user($id_user)
{
     include('config.php');
     $quick_query = "SELECT * FROM usuarios WHERE id = '" . $id_user . "'";
     if ($conn_BD) {
          $result = mysqli_query($conn_BD, $quick_query);
          $return = mysqli_fetch_assoc($result);
     }
     return $return;
}


function quick_stadium($id_stadium)
{
     include('config.php');
     if ($id_stadium == '*') {
          $quick_query = "SELECT * FROM estadios ORDER BY id ASC;";
     } else {
          $quick_query = "SELECT * FROM estadios WHERE id = '" . $id_stadium . "';";
     }
     if ($conn_BD) {
          $result = mysqli_query($conn_BD, $quick_query);
          if ($id_stadium == '*') {
               $return = $result;
          } else {
               $return = mysqli_fetch_assoc($result);
          }
     }
     return $return;
}

function display_matches($sql)
{
     include('config.php');
     if ($conn_BD) {
          $result = mysqli_query($conn_BD, $sql);
          while ($partido = mysqli_fetch_assoc($result)) {
               if ($partido['estadio'] != null) {

                    $estadio = "<span>Estadio  :  " . quick_stadium($partido['estadio'])['estadio'] . "</span>";
               } else {
                    $estadio = "";
               }
               $print_out = "
               <div class='cont_partido'>
                    <span>GRUPO " . $partido['grupo_p'] . "</span>
                    <span>" . quick_team($partido['id_equipo1'])['equipo'] . "    VS    " . quick_team($partido['id_equipo2'])['equipo'] . "</span>
                    <div class='partido_equipos'>
                         <div class='marc_equipo'>
                              <a href='equipo.php?equipoSeleccionado=" . $partido['id_equipo1'] . "'>
                              <img class='equipoimg' src='./resources/img/Banderas/" . quick_team($partido['id_equipo1'])['dir_bandera'] . "'>
                              </a>
                              <span class='points_partido'>" . $partido['goles_equipo1'] . "</span>
                         </div>
                         <span class='points_partido'>:</span>
                         <div class='marc_equipo'>
                              <span class='points_partido'>" . $partido['goles_equipo2'] . "</span>
                              <a href='equipo.php?equipoSeleccionado=" . $partido['id_equipo2'] . "'>
                              <img  class='equipoimg' src='./resources/img/Banderas/" . quick_team($partido['id_equipo2'])['dir_bandera'] . "'>
                              </a>
                         </div>
                    </div>
                    <div class='partido_detalles'>
                         " . $estadio . "
                         <span><a href='Resultados.php?fecha_Selected=" . date("Y-m-d", strtotime($partido['horario_juego'])) . "'>Horario : " . $partido['horario_juego'] . "</a></span>
                         <span>Estado : " . $partido['estado'] . "</span>";

               if ($partido['estado'] == 'Finalizado' && $partido['id_equipo_ganador'] == null) {
                    echo $print_out . "<span>RESULTADO: Empate</span>
                                        </div>
                                        </div>";
               } elseif ($partido['estado'] == 'Finalizado') {
                    echo $print_out . "<span>RESULTADO: " . quick_team($partido['id_equipo_ganador'])['equipo'] . " es el Ganador</span>
                                        </div>
                                        </div>";
               } else {
                    echo $print_out . "</div>
                                        </div>";
               }
          }
     }
}



function admin_display_matches($sql)
{
     include('config.php');
     function priv_quickgroup(){
          $grupo = quick_group();
          $return = "";
          while ($out = mysqli_fetch_assoc($grupo)) {
               $return = $return." <option value='" . $out['grupo'] . "'>" . $out['grupo'] . "</option>";
          }
          return $return;
     }
     function priv_quickteam(){
          $team = quick_team('*');
          $return = "";
          while ($out = mysqli_fetch_assoc($team)) {
               $return = $return . " <option value='" . $out['id'] . "'>" . $out['equipo'] . "</option>";
          }
          return $return;
     }
     function priv_quickstadium(){
          $stadium = quick_stadium('*');
          $return = "";
          while ($out = mysqli_fetch_assoc($stadium)) {
               $return = $return . " <option value='" . $out['id'] . "'>" . $out['estadio'] . "</option>";
          }
          return $return;
     }
     
     if ($conn_BD) {
          $result = mysqli_query($conn_BD, $sql);
          $necesario = priv_quickgroup();
          $necesario2 = priv_quickteam();
          $necesario3 = priv_quickstadium();
          while ($partido = mysqli_fetch_assoc($result)) {
          echo"
          
               <div class='cont_partido'>
               <form action='actualizar_partido.php?delete=true&&id_partido=".$partido['id_partido']. "' method='POST'><input type='submit' value='Eliminar partido'></form>
               <form action='actualizar_partido.php?id_partido=".$partido['id_partido']. "' method='POST'>
               
               <label for='new_Grupo_Match'>Grupo Actual: '".$partido['grupo_p']. "'</label>
               <br>
               <select name='new_Grupo_Match'>
                    <option value=''>Nuevo Grupo?</option>
                    ". $necesario. "
               </select>
               <br>

               <span>
               <select name='new_equipo1_Match'>
               <option value ='".$partido['id_equipo1']."'>".quick_team($partido['id_equipo1'])['equipo']. "</option>
               ".$necesario2."
               </select> 
               VS 
               <select name='new_equipo2_Match'>
               <option value ='" . $partido['id_equipo2'] . "'>" . quick_team($partido['id_equipo2'])['equipo'] . "</option>
               ".$necesario2."
               </select> 
               </span>
               <div class='partido_equipos'>
                    <div class='marc_equipo'>
                    <a href='admin_partidos.php?equipoSelect=".quick_team($partido['id_equipo1'])['id']. "'>
                         <img class='equipoimg' src='./resources/img/Banderas/" . quick_team($partido['id_equipo1'])['dir_bandera'] . "'>
                    </a>
                    <span class='points_partido'>" . $partido['goles_equipo1'] . "</span>
               </div>
               <span class='points_partido'>:</span>
               <div class='marc_equipo'>
                    <span class='points_partido'>".$partido['goles_equipo2']."</span>
                    <a href='admin_partidos.php?equipoSelect=" . quick_team($partido['id_equipo2'])['id'] . "'>
                         <img class='equipoimg' src='./resources/img/Banderas/" . quick_team($partido['id_equipo2'])['dir_bandera'] . "'>
                    </a>
               </div>
          </div>
          <div class='partido_detalles'>
               <span>Goles de equipo1 '" . quick_team($partido['id_equipo1'])['equipo'] . "' = <input type='number' name='new_goles_equipo1' value='" . $partido['goles_equipo1'] . "'></span>
               <span>Goles de equipo2 '" . quick_team($partido['id_equipo2'])['equipo'] . "' = <input type='number' name='new_goles_equipo2' value='" . $partido['goles_equipo2'] . "'></span>
               <span><a href='admin_partidos.php?fecha_Selected=". date("Y-m-d", strtotime($partido['horario_juego'])). "'>Horario : </a><input type='date' name='new_date_match' value='" . date("Y-m-d", strtotime($partido['horario_juego'])) . "'> <input type='time' name='new_horario_match' value='" . date("H:i", strtotime($partido['horario_juego'])) . "'></span>
               <label for='new_Estadio_Match'>Estadio : '" . quick_stadium($partido['estadio'])['estadio']. "'</label>
               <select name='new_Estadio_Match'>
                    <option value=''>Nuevo Estadio?</option>
                    ".$necesario3."
               </select>
               <br>
               <label for='new_Estado_Match'>Estado Actual: '".$partido['estado']."'</label>
               <select name='new_Estado_Match'>
                    <option value=''>Nuevo Estado?</option>
                    <option value='Inactivo'>Inactivo</option>
                    <option value='En Curso'>En Curso</option>
                    <option value='Finalizado'>Finalizado</option>
               </select>
               <input type='submit' value='Actualizar'>
          </div>

     </div>
</form>
          ";
          }
     }
}

?>

<?php

/*
<form action="actualizar_partido.php?id_partido='1'" method="POST">
     <div class='cont_partido' id="(id_partido)=1">
          <label for="new_Grupo_Match">Grupo Actual: 'B'</label>
          <select name="new_Grupo_Match">
               <option value="">Nuevo Grupo?</option>
               <?php
               $grupo = quick_group();
               while ($out = mysqli_fetch_assoc($grupo)) {
                    echo " <option value='" . $out['grupo'] . "'>" . $out['grupo'] . "</option>";
               }
               ?>
          </select>
          <span>'ESPAÑA' VS 'JAPON'</span>
          --
          <div class='partido_equipos'>
               <div class='marc_equipo'>
                    <a href='equipo.php?equipoSeleccionado='>
                         <img class='equipoimg' src='./resources/img/Banderas/Japon.svg'>
                    </a>
                    <span class='points_partido'>1</span>
               </div>
               <span class='points_partido'>:</span>
               <div class='marc_equipo'>
                    <span class='points_partido'>1</span>
                    <a href='equipo.php?equipoSeleccionado='>
                         <img class="equipoimg" src='./resources/img/Banderas/España.webp'>
                    </a>
               </div>
          </div>
          --
          <div class='partido_detalles'>
               <span>Goles de equipo1 'ESPAÑA' = <input type="number" name="new_goles_equipo1" value="1"></span>
               <span>Goles de equipo2 'JAPON' = <input type="number" name="new_goles_equipo1" value="1"></span>
               <span><a href='Resultados.php?fecha_Selected="2022-11-30"'>Horario : </a><input type="date" name="new_date_match" value="2022-11-30"> <input type="time" name="new_horario_match" value="12:00:00"></span>

               <label for="new_Estado_Match">Estado Actual: 'En Curso'</label>
               <select name="new_Estado_Match">
                    <option value="">Nuevo Estado?</option>
                    <option value="Inactivo">Inactivo</option>
                    <option value="En Curso">En Curso</option>
                    <option value="Finalizado">Finalizado</option>
               </select>
          </div>
     </div>
</form>*/
?>