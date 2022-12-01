<?php require_once "config.php"; ?>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
      <li><a id="black">Noir</a></li>
      <li><a id="white">Blanc</a></li>
      <li><a id="grey">Gris</a></li>
</ul>
<nav>
    <div class="nav-wrapper ">
    <a href="#!" class="brand-logo">Nos projets</a>
    <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons">home</i>Acceuil</a></li>
        <li><a href="projet1.php"  >Projet 1</a></li>
        <li><a href="projet2.php" >Projet 2</a></li>
        <li><a href="projet3.php" >Projet 3</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Couleur<i class="material-icons right">arrow_drop_down</i></a></li>
        <?php
        if (isset($_SESSION['user'])){
          echo "<li><a href='action/logout.php' >se deconnecter</a></li>";
        }else{
          echo "<li><a href='connexion.php' >Se connecter</a></li>";
          echo "<li><a href='inscription.php' >s'inscrire</a></li>";
        }
        ?>
    </ul>
    </div>
</nav>
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img class="sidenav-img" src="../Projet2/img/idee1.jpg">
          </div>
          <a href="#name"><span class="white-text name">John Doe</span></a>
          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
      </li>
      <li><a class="waves-effect" href="index.php"><i class="material-icons">home</i>Acceuil</a></li>
      <li><a class="waves-effect" href="project-1.php" target="_blank">Projet 1</a></li>
      <li><a class="waves-effect" href="project-2.php" target="_blank">Projet 2</a></li>
      <li><a class="waves-effect" href="project-3.php" target="_blank">Projet 3</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Couleur<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>