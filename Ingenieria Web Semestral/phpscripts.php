<?php
function chooseheader(){
               if (!empty($_SESSION['user']) && $_SESSION['myrank'] == 'user') {
                    echo "headerTemplateLogged()";
               } 
               elseif  (!empty($_SESSION['user']) && $_SESSION['myrank'] == 'admin') {
                    echo "headerTemplateAdminLogged()";
               }
               else {
                    echo "headerTemplateNotLogged()";
               }}  
            


function quick_team($id_team){
                    include('config.php');
                    $quick_query = "SELECT * FROM equipos WHERE id = '".$id_team."'";
                    if ($conn_bd) {
                         $result = mysqli_query($conn_bd, $quick_query);
                         $return = mysqli_fetch_assoc($result);
                         }
                    return $return;
               }


function display_matches($sql){
               include('config.php');
               if ($conn_bd) {
               $result = mysqli_query($conn_bd, $sql);
                    while($partido = mysqli_fetch_assoc($result)){
                         $print_out = "
                         <div class='cont_partido'>
                              <span>GRUPO ".$partido['grupo_p']."</span>
                              <span>".quick_team($partido['id_equipo1'])['equipo']."    VS    ".quick_team($partido['id_equipo2'])['equipo']."</span>
                              <div class='partido_equipos'>
                                   <div class='marc_equipo'>
                                        <img class='equipoimg' src='./resources/img/Banderas/". quick_team($partido['id_equipo1'])['dir_bandera'] ."'>
                                        <span class='points_partido'>". $partido['goles_equipo1'] . "</span>
                                   </div>
                                   <span class='points_partido'>:</span>
                                   <div class='marc_equipo'>
                                        <span class='points_partido'>" . $partido['goles_equipo2'] . "</span>
                                        <img class='equipoimg' src='./resources/img/Banderas/" . quick_team($partido['id_equipo2'])['dir_bandera'] . "'>
                                   </div>
                              </div>
                              <div class='partido_detalles'>
                                   <span>Horario : ". $partido['horario_juego'] ."</span>
                                   <span>Estado : ".$partido['estado']."</span>";
                              
                              if($partido['estado'] == 'Finalizado' && $partido['id_equipo_ganador'] == null){
                                   echo $print_out."<span>RESULTADO: Empate</span>
                                                  </div>
                                                  </div>";
                              }
                              elseif($partido['estado'] == 'Finalizado'){
                                   echo $print_out. "<span>RESULTADO: ". quick_team($partido['id_equipo_ganador'])['equipo'] ." es el Ganador</span>
                                                  </div>
                                                  </div>";
                              }
                              
                              else{
                                   echo $print_out ."</div>
                                                  </div>";
                              }     
                    }}}


?>