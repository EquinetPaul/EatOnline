function addToCart() {
  idProduct = document.getElementById("overlay-card-text").getAttribute("val");
  quantityInput = document.getElementsByName("quantityProduct"+idProduct)
  for(var value of quantityInput.values()) {
    quantity = value.value;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("addToCartDone").innerHTML = "Produit(s) ajouté(s) dans le panier!";
      document.getElementById("addToCartDone").removeAttribute("hidden");
    }
  };
  xhttp.open("GET", "./action/addToCart.php?idProduct="+idProduct+"&quantity="+quantity, true);
  xhttp.send();
}
