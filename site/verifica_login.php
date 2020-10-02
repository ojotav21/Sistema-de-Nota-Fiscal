<?php
if((session_start() == true)){
//Se ele for undefined ou diferente de 1, ferifica se eles estão nulos, se tiver, da unset por segurança e mand apro login
if ((($_SESSION['nivel']) == 1) ) { 
   
}else{
    if ((!isset($_SESSION['id']) == true ) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email'])) && (!isset($_SESSION['nivel'])) ) 
        {
        unset(
            $_SESSION['nome'], 
            $_SESSION['email']
        );
        header('Location: ../login/index.php');
        }
    }

}
?>