
<?php
session_start();
// echo $_SESSION['nivel'];
if (($_SESSION['nivel']) == 1 ) {
    header('Location: ../site/index.php');
}else{
    echo "Barrado";
}

?>