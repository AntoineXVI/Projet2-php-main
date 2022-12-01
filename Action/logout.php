<?php 
require_once "../config.php"; 
unset($_SESSION['user']);
header('Location:../index.php');//on le redirige sur la page d'accueil du site !
exit();
?>