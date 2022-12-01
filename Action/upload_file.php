<?php
//sauvegarder le fichier dans un dossier spécifique
$destination = "upload/".$_FILES['image']['name']; //dossier "upload"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);
?>