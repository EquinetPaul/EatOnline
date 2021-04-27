<?php

  function displayCategory($category,$id) {
    echo '<h2>
      '.$category->getName().'';
      if($_SESSION['user']->getRang()>=1) {
        echo '<button type="button" name="displayStock" class="btn btn-secondary" value="0" onclick="displayStock(this)">Afficher les stocks</button>';
      }
    echo '</h2>';
    if($category->getNumberOfProducts()==0) {
      echo '<p>'.$category->getNumberOfProducts().' Produit</p>';
      echo'<div class="alert alert-warning" role="alert">Aucun produit disponible pour cette catégorie.</div>';
    }
    else {
      echo '<p>'.$category->getNumberOfProducts().' Produits</p>';
      $added=0;
      for ($i=0; $i<sizeof($_SESSION['products']); $i++) {
        if($_SESSION['products'][$i]->getCategory()==$id) {
          if($added%3==0) {
            echo '<div class="card-group">';
          }
          echo '
            <div class="card hover-cursor-pointer" onclick="openOverlay('.$id.','.$i.')">
               <img src="img/products/category/'.$id.'/'.($i+1).'.jpg" height="180px" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">'.$_SESSION['products'][$i]->getName().'</h5>
                  <p class="card-text">'.$_SESSION['products'][$i]->getDescription().'</p>
               </div>
               <div class="card-footer">
                  <div>
                     <h3>'.$_SESSION['products'][$i]->getPrice().'€</h3>
                     <p class="displayStock" hidden>Stock: '.$_SESSION['products'][$i]->getStock().'</p>
                  </div>
               </div>
            </div>';
            $added++;
        }
        if($added%3==0) {
          echo '</div>';
        }
      }
    }
  }

if(isset($_GET['cat']))  {
  include '../objects.inc.php';
  session_start();
  switch ($_GET['cat']) {
    case 'contact':
      include 'contact.php';
      break;
    case 'account':
      include 'account.php';
      break;
    case 'createAccount':
      include 'createAccount.php';
      break;
    case 'login':
      include 'login.php';
      break;
    case 'cart':
      include 'cart.php';
      break;
    default:
      if(isset($_SESSION['logged'])) {
        displayCategory($_SESSION['categories'][$_GET['cat']],$_GET['cat']);
      }
      else {
        echo '<h2>Vous devez être connecté pour afficher les produits en vente.</h2>';
      }
      break;
  }
}
else {
  echo '
  <h2>Bienvenue sur EatOnline</h2>
  <h6>Leader du service de <strong>livraison</strong> inter-restaurants!</h6>
  <div class="text-center">
    <i class="bi bi-cart4 fa-3x"></i>
    <i class="bi bi-arrow-right fa-3x"></i>
    <i class="bi bi-hourglass-bottom fa-3x"></i>
    <i class="bi bi-arrow-right fa-3x"></i>
    <i class="bi bi-house fa-3x"></i>
    <h3>Commandez - Patientez - C\'est livré!</h3>
  </div>
  ';
}
?>
