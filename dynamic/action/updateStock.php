<?php

session_start();

include '../include/bdd.php';

foreach ($_SESSION['cart'] as $key => $value) {
  $bdd->exec('UPDATE product SET stock = stock - '.$value['quantity'].' WHERE id = '.$value['idProduct'].' + 1 ');
}

$_SESSION['cart'] = array();

?>
