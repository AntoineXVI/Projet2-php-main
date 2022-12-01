<?php require_once "../config.php"; 


//sauvegarder le fichier dans un dossier spécifique
$destination = "../img/".$_FILES['img']['name']; //dossier "upload"
move_uploaded_file($_FILES['img']['tmp_name'],$destination);

$sql = "INSERT INTO projects(name,h1,img,text) VALUES(:name,:h1,:img,:text)";
$dataBinded=array(
    ':name'=> $_POST['name'],
    ':h1'=> $_POST['h1'],
    ':text'=> $_POST['text'],
    ':img'=> $destination,
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../admin.php');//on le redirige sur la page d'admin du site !
exit();
?>