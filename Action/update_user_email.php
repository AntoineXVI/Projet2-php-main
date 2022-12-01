<?php require_once "../config.php";

$sql = "UPDATE user SET email = :email WHERE id = :id"; 
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':email'=> $_POST['email'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../admin.php');//on le redirige sur la page d'admin du site !
exit();
?>