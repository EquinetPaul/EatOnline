<?php

  include '../objects.inc.php';
  session_start();
  $idProduct = $_GET['idProduct']-1;
  $quantity = $_GET['quantity'];

  array_push($_SESSION['cart'],array("idProduct"=>$idProduct,"quantity"=>$quantity));

?>
