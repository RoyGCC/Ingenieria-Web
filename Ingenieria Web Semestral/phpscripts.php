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
            ?>