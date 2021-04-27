<?php

  require_once('../objects.inc.php');
  require_once('../include/bdd.php');
  session_start();

  // vérification des données de connexions
  $username = $_POST['username'];
  $password = $_POST['password'];

  // $file = '../save/users.csv';
  // $getUsers = fopen($file, 'rb');
  // $fileLines = file($file);
  // $i=0; $userFound = false;
  // while(!feof($getUsers) && $i<count($fileLines) && !$userFound){
  //   $ligne = explode(";",fgets($getUsers));
  //   $user = new User($ligne[0],$ligne[1],$ligne[2],$ligne[3]);
  //   if($user->getUsername() == $username) {
  //     $userFound = true;
  //   }
  //   $i++;
  // }
  $reponse = $bdd->query('SELECT * FROM user WHERE username = "'.$username.'"');
  $donnees = $reponse->fetch();

  $foundPassword = $donnees['password'];
  if($foundPassword==$password) {
    $_SESSION['logged'] = true;
    $_SESSION['user'] = new User($donnees['id'],$donnees['username'],$donnees['password'],$donnees['numberOfCommands'],$donnees['rang']);
    $_SESSION['cart'] = array();
    header('Location:../index.php?message=connected');
  }
  else {
    header('Location:../index.php?message=ConnexionFailed');
  }

?>
