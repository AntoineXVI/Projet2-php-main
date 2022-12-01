<?php require_once "../config.php"; 

$sql = "INSERT INTO user(name,email,password,admin) VALUES(:name,:email,:password,:admin)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':name'   => $_POST['name'],
    ':password'=> $_POST['password'],
    ':admin'=> $_POST['admin']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
exit();
?>