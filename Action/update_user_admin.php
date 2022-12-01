<?php require_once "../config.php";

$sql = "SELECT * FROM user WHERE id=:id"; 
$dataBinded=array(
    ':id'=> $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $user){


if($user['admin']==0){ 
    $user['admin']=1;
}else{
    $user['admin']=0;
}

}
header('Location:../admin.php');//on le redirige sur la page d'admin du site !
exit();
?>