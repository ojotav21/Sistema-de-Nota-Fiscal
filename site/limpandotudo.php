<?php
session_start();
unset(
    $_SESSION['nf'],
    $_SESSION['id'], 
    $_SESSION['nome'], 
    $_SESSION['email']
);

header('Location: ../login/logout.php');

?>