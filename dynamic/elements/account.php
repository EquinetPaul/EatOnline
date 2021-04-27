<?php
  if(!isset($_SESSION['logged'])) {
    include 'login.php';
    echo '<p> </p>
    <div class="alert alert-success" role="alert">
      <div class="spinner-border spinner-border-sm text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    <strong>Vous n\'avez pas encore créé de compte? <a href="#" class="text-success" onclick="changeCategory(\'createAccount\')" >Il est toujours temps de le faire en cliquant ici!</a></strong>
    </div>
    ';
  }
  else {
    echo '
      <h2>Mon compte</h2>
      <div class="">
        <p>Nom de compte: '.$_SESSION['user']->getUsername().'</p>
        <p>Nombre de commandes: '.$_SESSION['user']->getNumberOfCommands().'</p>
        <p><a href="action/logout.php" class="text-dark">Déconnexion</a> </p>
      </div>
    ';
  }
 ?>
