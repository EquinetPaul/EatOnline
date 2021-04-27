category = ["accueil","americain","burger","fastfood","pizza","japonais","sushi","francais","italien","thai"];

function hideThisParent(child) {
  child.parentNode.setAttribute("hidden","true");
}

function giveCategory(id) {
  id = parseInt(id);
  return(category[id]);
}

function changeCategory(id) {
  categoryToDisplay = giveCategory(id);
  for (var i = 0; i < category.length; i++) {
    if(categoryToDisplay==category[i]) {
      document.getElementById(categoryToDisplay).classList.add("fadeInBox");
      document.getElementById(categoryToDisplay).removeAttribute("hidden");
    }
    else {
      document.getElementById(category[i]).setAttribute("hidden","true");
      document.getElementById(category[i]).setAttribute("display","false");
    }
  }
}

// fonction permettant de modifier la quantité de produit voulue
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

function openOverlay(id) {
  document.getElementById("overlay").style.display = "block";
  document.getElementById("overlay-card-img").src = "img/products/items/product"+id+".jpg";
  document.getElementById("overlay-card-text").innerHTML = '<small class="text-muted"><i class="bi bi-patch-minus fa-2x" onclick="updateQuantity(-1,'+id+')"></i><span id="quantityProduct'+id+'">0</span><input type="hidden" name="quantityProduct'+id+'" value="0"><i class="bi bi-patch-plus fa-2x" onclick="updateQuantity(1,'+id+')"></i></small>';
}

function closeOverlay() {
  document.getElementById("overlay").style.display = "none";
}
