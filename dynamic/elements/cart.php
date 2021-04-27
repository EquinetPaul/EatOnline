<?php
  echo '<h2>Panier</h2>';

  if(isset($_SESSION['logged'])) {
    $totalPrice = 0;
    foreach ($_SESSION['cart'] as $key => $value) {
      $totalPrice += $_SESSION['products'][$value["idProduct"]]->getPrice() * $value["quantity"];
      echo '
      <div class="card" style="width: 18rem;">
        <img src="img/products/category/'.$_SESSION['products'][$value["idProduct"]]->getCategory().'/'.(($value["idProduct"])+1).'.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$_SESSION['products'][$value["idProduct"]]->getName().'</h5>
          <p class="card-text">Quantité: '.$value['quantity'].'</p>
        </div>
      </div>
      ';
    }
    echo '
    <div class="alert alert-light" role="alert"> Sous total: '.$totalPrice.'€</div>
    <button type="button" class="btn btn-primary btn-lg" onclick="openOverlayCheckout()">Valider la commande</button>
    ';
  }
  else {
    echo '
      <div class="alert alert-danger text-center" id="messageBox" role="alert">
        Vous devez être connecté pour accèder à cette section. <a href="#" class="text-danger" onclick="changeCategory(\'account\')">Se connecter</a> </br>
        <button type="button" onclick="hideThisParent(this)" class="btn-close" aria-label="Close"></button>
      </div>
      ';
  }
?>
