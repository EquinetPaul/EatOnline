// déclaration des objets dont on souhaite vérifier la validité
emailInput = document.getElementById("emailInput");
nomInput = document.getElementById("nomInput");
prenomInput = document.getElementById("prenomInput");

// on récupère le box qui affichera les erreurs
boxErreur = document.getElementById("boxAlert");

// fonction permettant de vérifier la validité de l'adresse email
function validateEmail(email){
    var emailReg = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    var valid = emailReg.test(email);

    if(!valid) {
        return false;
    }
    else {
        return true;
    }
}

function validateName(name){
    var emailReg = new RegExp(/^[a-z ,.'-]+$/i);
    var valid = emailReg.test(name);
    if(!valid) {
        return false;
    }
    else {
        return true;
    }
}

emailInput.onchange = function(){
  if(validateEmail(emailInput.value)){
    boxErreur.setAttribute("hidden","true");
  }
  else {
    boxErreur.removeAttribute("hidden");
    boxErreur.innerHTML = "L'adresse email n'est pas au bon format!";
  }
};

nomInput.onchange = function(){
  if(validateEmail(nomInput.value)){
    boxErreur.setAttribute("hidden","true");
  }
  else {
    boxErreur.removeAttribute("hidden");
    boxErreur.innerHTML = "Le nom n'est pas au bon format.";
  }
};

prenomInput.onchange = function(){
  if(validateEmail(prenomInput.value)){
    boxErreur.setAttribute("hidden","true");
  }
  else {
    boxErreur.removeAttribute("hidden");
    boxErreur.innerHTML = "Le prénom n'est pas au bon format.";
  }
};
