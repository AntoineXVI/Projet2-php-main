<!DOCTYPE html>
<?php require_once "config.php"; 

if(!isset($_SESSION['user']['admin']) || $_SESSION['user']['admin']==0){
  header('Location: index.php');
  exit();
}

?>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body id="color">

    <?php require "menu.php"; ?>
    <h2><a href='index.php' >retour index</a></h2>
    <h1>Liste des utilisateurs</h1>
    <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $user){ ?>
    <div class="bloc_user">
      <h2><?php echo $user['name'] ?></h2>
      <form method="post" action="action/update_user_name.php">
        <input type='name' name='name' placeholder="nouveau nom"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='Modifier' />
      </form>
      <span class="email"><?php echo $user['email'] ?></span>
      <form method="post" action="action/update_user_email.php">
        <input type='name' name='email' placeholder="nouvel email"/>
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>" />
        <input type='submit' value='Modifier' />
      </form>
      <form method="post" action="action/delete_user.php" >
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='supprimer' />
      </form>
      <form method="post" action="action/update_user_admin.php" >
        <input type='hidden' name='id' value="<?php echo $user['id'] ?>"/>
        <input type='submit' value='switch admin' />
      </form>
    </div>
    <?php } ?>

    <h1>Liste des projets</h1>

    <?php
    $sql = "SELECT * FROM projects"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $projects){ ?>
    <div class="bloc_user">
      <h2><?php echo $projects['name'] ?></h2>
      <form method="post" action="action/update_projects_name.php">
        <input type='name' name='name' placeholder="nouveau nom"/>
        <input type='hidden' name='id' value=" <?php echo $projects['id'] ?>" />
        <input type='submit' value='Modifier nom' />
      </form>
      <span class="name"><?php echo $projects['h1'] ?></span>
      <form method="post" action="action/update_projects_title.php">
        <input type='name' name='h1' placeholder="nouveau titre"/>
        <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
        <input type='submit' value='Modifier titre' />
      </form>
      <form method="post" action="action/update_projects_img.php" enctype="multipart/form-data">
        <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
        <input type='file' name='img'/>
        <input type='submit' value='modifier image' />
      </form>
      <form method="post" action="action/delete_projects.php" >
      <input type='hidden' name='id' value="<?php echo $projects['id'] ?>"/>
      <input type='submit' value='supprimer' />
    </form>
    </div>
    <?php } ?>

    
    <h1>creer un projet</h1>
    <form method="post" action="action/create_projects.php" enctype="multipart/form-data">
    <input type='name' name='name' placeholder="Entrez le nom" />
    <input type='name' name='h1' placeholder="Entrez un titre"/>
    <input type='name' name='text' value="null"/>
    <input type='file' name='img'/>
    <input type='submit' value='creer projet' />
    </form>
  </body>
</html>