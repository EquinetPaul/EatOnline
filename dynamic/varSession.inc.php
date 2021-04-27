<?php

session_start();

require_once('./objects.inc.php');
// RÉCUPÉRATION DES DONNÉES VIA FICHIER
// $ressource_categories = fopen('save/categories.json', 'rb');
// $categories_datas = get_object_vars(json_decode(fread($ressource_categories, filesize('save/categories.json'))));
// $categories = array();
// for ($i=1; $i <= sizeof($categories_datas); $i++) {
//   array_push($categories, new Category((array)$categories_datas[$i]));
// }
//
// $ressource_products = fopen('save/products.json', 'rb');
// $products_datas = get_object_vars(json_decode(fread($ressource_products, filesize('save/products.json'))));
// $products = array();
// for ($i=1; $i <= sizeof($products_datas); $i++) {
//   array_push($products, new Product((array)$products_datas[$i]));
// }

// RÉCUPÉRATION DES DONNÉES VIA BDD
require 'include/bdd.php';
$requete1 = $bdd->query('SELECT * FROM category');
$categories = array();
while ($donnees = $requete1->fetch()) {
  array_push($categories,new Category(array("name"=>$donnees['name'],"description"=>$donnees['description'],"numberOfProducts"=>$donnees['numberOfProducts'],"nameImage"=>$donnees['nameImage'],"disabled"=>$donnees['disabled'])));
}

$requete2 = $bdd->query('SELECT * FROM product');
$products = array();
while ($donnees = $requete2->fetch()) {
  array_push($products,new Product(array("name"=>$donnees['name'],"description"=>$donnees['description'],"price"=>$donnees['price'],"stock"=>$donnees['stock'],"quantitySelected"=>$donnees['quantitySelected'],"category"=>$donnees['category'])));
}

$_SESSION['categories'] = $categories;
$_SESSION['products'] = $products;

?>
