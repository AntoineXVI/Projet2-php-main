<?php require_once "config.php"; ?>

<h1>Connexion</h1>
  <form method="post" action="action/login.php">
    <input type='name' name='email' placeholder="Entrez un email"/>
    <input type='password' name='password' placeholder="Entrez un mot de passe"/>
    <input type='submit' value='Me connecter' />
  </form>

<?php
if( isset($_SESSION['error'])){
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}
?>