<?php 
require_once "config.php"; 
$sql = "INSERT INTO user(email,password,name) VALUES(:email,:password,:name)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> sha1("hsvbsxhjwbvwdxvwhdxkhkwxbwxhkvkvhwbhvkbwvx".$_POST['password']),
    ':username'=> $_POST['name'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>