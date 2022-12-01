<?php require_once "../config.php"; 

//sauvegarder le fichier dans un dossier spécifique
$destination = "../img/".$_FILES['img']['name']; //dossier "upload"
move_uploaded_file($_FILES['img']['tmp_name'],$destination);

$sql = "UPDATE projects SET img = :img WHERE id = :id"; 
$dataBinded=array(
    ':id'=> $_POST['id'],
    ':img'=> $destination,
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');//on le redirige sur la page d'admin du site !
exit();
?>