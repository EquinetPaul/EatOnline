<?php
  include '../objects.inc.php';
  include '../include/bdd.php';
  if(isset($_POST['username']) && isset($_POST['inputPassword1']) && isset($_POST['inputPassword2']) ) {
    // vérification des informations
    $noc = 0; $rang = 0;
    $req = $bdd->prepare('INSERT INTO user(username,password,numberOfCommands,rang) VALUES(:username, :password, :numberOfCommands, :rang)');
    $req->execute(array(
    	'username' => $_POST['username'],
    	'password' => $_POST['inputPassword1'],
    	'numberOfCommands' => $noc,
    	'rang' => $rang,
    	));
    header('Location:../index.php?message=accountCreated');
  }
  else {
    header('Location:./index.php');
    exit();
  }
?>
