
<?php require_once "config.php"; ?>

<h2>Inscription</h2>
<form method="post" action="action/signup.php">
    <input type='name' name='email' placeholder="Entrez un email"/>
    <input type='name' name='name' placeholder="Entrez un pseudo" />
    <input type='password' name='password' placeholder="Entrez un mot de passe"/>
    <input type='hidden' name='admin' value="0"/>
    <input type='submit' value='Me connecter' />
</form>