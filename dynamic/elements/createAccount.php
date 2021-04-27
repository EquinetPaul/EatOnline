<?php
  if(isset($_SESSION['logged'])) {
    echo '
    <div class="alert alert-danger" role="alert">
      <div class="spinner-grow spinner-grow-sm text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      Vous êtes déjà connecté. <a href="index.php" class="text-danger">Retour</a>
    </div>
    ';
  }
  else {
    echo '
    <h2>S\'inscrire</h2>
    <form method="post" action="action/createAccount.php">
      <div class="form-group">
        <label for="inputEmail1">Nom d\'utilisateur</label>
        <input type="text" class="form-control" name="username" id="inputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="inputPassword1">Mot de passe</label>
        <input type="password" class="form-control" name="inputPassword1" id="inputPassword1">
      </div>
      <div class="form-group">
        <label for="inputPassword2">Confirmation</label>
        <input type="password" class="form-control" name="inputPassword2" id="inputPassword2">
      </div>
      <button type="submit" class="btn btn-primary">Continuer</button>
    </form>
    ';
  }
 ?>
