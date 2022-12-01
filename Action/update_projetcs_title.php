<?php require_once "../config.php";

$sql = "UPDATE projects SET h1 = :h1 WHERE id = :id"; 
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':h1'=> $_POST['h1'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../admin.php');//on le redirige sur la page d'admin du site !
exit();
?>