<!DOCTYPE html>
<?php require_once "config.php"; ?>
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
 
  <?php require "menu.php";

  if(isset($_SESSION['user']['admin']) && $_SESSION['user']['admin']==1){
  echo "<h2>bienvenue , admin</h2>";
  echo "<h2><a href='admin.php' >admin</a></h2>";
  }
  ?>

    <div class="carousel carousel-slider center">
      <div class="carousel-item background1 white-text" href="#one!">
        <h2>1er projet</h2>
        <p class="white-text">Clique pour voir notre 1er projet</p>
      </div>
      <div class="carousel-item background2 white-text" href="#two!">
        <h2>2eme projet</h2>
        <p class="white-text">Clique pour voir notre 2eme projet</p>
      </div>
      <div class="carousel-item background3 white-text" href="#three!">
        <h2>3eme projet</h2>
        <p class="white-text">Clique pour voir notre 3eme projet</p>
      </div>
    </div>
    <h1 class="title-index">A propos de nous :</h1>
    <div class="row">
      <div class="col antoine s3 offset-s2">
        <p>Présentation de Antoine Pichard</p>
        <img class="presentation-antoine" src="../Projet2/img/photo-profil-antoine.png" alt="photo de profil antoine">
        <div class="row">
          <div class="col s12 m6 offset-m3">19ans</div>
          <div class="col s12 m6 offset-m3">Bac optenu en 2021</div>
          <div class="col s12 m6 offset-m3">à fait une licence informatique</div>
          <div class="col s12 m6 offset-m3">Vit a Lyon</div>
          <div class="col s12 m6 offset-m3">Aime coder</div>
          <div class="col s12 m6 offset-m3">------------</div>
          <div class="col s12 m6 offset-m3"> Projet futurs :</div>
          <div class="col s12 m6 offset-m3"> Mon premier objectif est déja de reussir mes 3 premières années à Gaming Campus, puis peut etre la 4eme et 5eme année ensuite , et apres j'aimerai travailler ou participer à la création d'un jeu en indépendant ou avec une boite de jeux vidéo</div>
        </div>
      </div>
      <div class="col kyllian s3 offset-s2">
        <p>Presentation de Kyllian Tondu</p>
        <img class="presentation-kyllian" src="../Projet2/img/photo-profil-kyllian.png" alt="photo de profil kyllian">
        <div class="row">
          <div class="col s12 m6 offset-m3">18ans</div>
          <div class="col s12 m6 offset-m3">Bac optenu (mention bien)</div>
          <div class="col s12 m6 offset-m3">à fait une année sti2D </div>
          <div class="col s12 m6 offset-m3">Vit a Lyon</div>
          <div class="col s12 m6 offset-m3">Aime coder</div>
          <div class="col s12 m6 offset-m3">---------------</div>
          <div class="col s12 m6 offset-m3"> Projet futurs :</div>
          <div class="col s12 m6 offset-m3">Apres ma sortie de Gaming Campus j'envisage serieusement d'obtenir un poste dans un boite basé sur la création de jeu video. Ambitieux me diriez vous ? Oui mais ma motivation fait grandir cette ambition de vivre de ma passion et de réaliser mon réve !</div>
        </div>
      </div>
    </div>
    <?php require "footer.php"; ?>
  </body>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</html>