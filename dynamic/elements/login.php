<?php
  if(isset($_SESSION['logged'])) {
    echo '
    <h2>Mon compte</h2>
    ';
  }
  else {
    echo '
    <h2>Se connecter</h2>
    <form method="post" action="action/login.php">
      <div class="form-group">
        <label for="inputEmail1">Nom d\'utilisateur</label>
        <input type="text" class="form-control" name="username" id="inputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="inputPassword1">Mot de passe</label>
        <input type="password" class="form-control" name="password" id="inputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
    ';
  }
 ?>
