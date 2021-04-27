function changeCategory(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("boxCategory").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "./elements/category.php?cat="+id, true);
  xhttp.send();
}

function displayStock(btn) {
  val = btn.value;
  stocksDisplay = document.getElementsByClassName("displayStock");
  if(val==1) {
    for (var i = 0; i < stocksDisplay.length; i++) {
      stocksDisplay[i].setAttribute("hidden","true");
    }
      btn.value = 0;
      btn.innerHTML = "Afficher les stocks"
  }
  else {
    for (var i = 0; i < stocksDisplay.length; i++) {
      stocksDisplay[i].removeAttribute("hidden");
    }
      btn.value = 1;
      btn.innerHTML = "Cacher les stocks"
  }
}

function openOverlay(idCategory,idProduct) {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("overlay-card-img").removeAttribute("hidden");
  document.getElementById("addToCart").removeAttribute("hidden");
  document.getElementById("removeToCart").removeAttribute("hidden");
  document.getElementById("overlay-card-title").innerHTML = "Votre produit"
  document.getElementById("overlay-card-img").src = "img/products/category/"+idCategory+"/"+(idProduct+1)+".jpg";
  document.getElementById("overlay-card-text").innerHTML = '<small class="text-muted"><i class="bi bi-patch-minus fa-2x" onclick="updateQuantity(-1,'+(idProduct+1)+')"></i><span id="quantityProduct'+(idProduct+1)+'">0</span><input type="hidden" name="quantityProduct'+(idProduct+1)+'" value="0"><i class="bi bi-patch-plus fa-2x" onclick="updateQuantity(1,'+(idProduct+1)+')"></i></small>';
  document.getElementById("overlay-card-text").setAttribute("val",(idProduct+1));
}

function openOverlayCheckout() {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("overlay-card-img").setAttribute("hidden","true");
  document.getElementById("addToCart").setAttribute("hidden","true");
  document.getElementById("removeToCart").setAttribute("hidden","true");
  document.getElementById("overlay-card-text").innerHTML = "";
  document.getElementById("overlay-card-title").innerHTML = 'Commande en cours... <div class="progress">  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div></div><small>Vos informations ont été utilisées afin de procéder au paiement.</small> ';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     ;
    }
  };
  xhttp.open("GET", "./action/updateStock.php", true);
  xhttp.send();
}

function closeOverlay() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById("addToCartDone").setAttribute("hidden","true");
}

function updateQuantity(val,id) {
  val = parseInt(val);
  id = parseInt(id);
  quantity = document.getElementsByName("quantityProduct"+id)[0];
  display = document.getElementById("quantityProduct"+id);
  if(parseInt(quantity.value) + val > -1) {
    quantity.value = parseInt(quantity.value) + val;
    display.innerHTML = quantity.value;
  }
}
