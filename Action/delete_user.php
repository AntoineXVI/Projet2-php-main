<?php require_once "../config.php"; 

$sql = "DELETE FROM user WHERE id = :id";
$dataBinded=array(
    ':id'=> $_POST['id'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');//on le redirige sur la page d'admin du site !
exit();

?>