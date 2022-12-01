<?php 
require_once "../config.php"; 

if (empty($_POST['email'])){
    $_SESSION['error'] = "email invalide";
    header('Location:../connexion.php');//on le redirige sur la page de connexion du site !
    exit();
}

if (empty($_POST['password'])){
    $_SESSION['error'] = "mot de passe invalide";
    header('Location:../connexion.php');//on le redirige sur la page de connexion du site !
    exit();
}

$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
    $_SESSION['error'] = "utilisateur ou mot de passe incorect";
    header('Location:../connexion.php');//on le redirige sur la page de connexion du site !
    exit();
}else{
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    header('Location:../index.php');//on le redirige sur la page d'accueil du site !
}
?>