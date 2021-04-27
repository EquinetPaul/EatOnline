<?php
  if(isset($_GET['message'])) {
    switch ($_GET['message']) {
      case 'accountCreated':
        echo '
          <div class="alert alert-success text-center" id="messageBox" role="alert">
            Compte créé, vous pouvez vous <a href="#" class="text-dark" onclick="changeCategory(\'login\');hideThisParent(this)">connecter!</a>
            <button type="button" onclick="hideThisParent(this)" class="btn-close" aria-label="Close"></button>
          </div>
        ';
        break;
      case 'connected':
        echo '
          <div class="alert alert-success text-center" id="messageBox" role="alert">
            Vous êtes bien connecté!
            <button type="button" onclick="hideThisParent(this)" class="btn-close" aria-label="Close"></button>
          </div>
        ';
        break;
      case 'ConnexionFailed':
        echo '
          <div class="alert alert-danger text-center" id="messageBox" role="alert">
            Votre tentative de connexion a échoué. </br>
            <a href="#" class="text-danger" onclick="changeCategory(\'account\')">Reconnexion</a> </br>
            <button type="button" onclick="hideThisParent(this)" class="btn-close" aria-label="Close"></button>
          </div>
        ';
        break;
      case 'logout':
        echo '
          <div class="alert alert-success text-center" id="messageBox" role="alert">
            Vous avez bien été déconnecté.
            <button type="button" onclick="hideThisParent(this)" class="btn-close" aria-label="Close"></button>
          </div>
        ';
        break;
      case 'notConnected':
        echo '
          <div class="alert alert-danger text-center" id="messageBox" role="alert">
            Vous devez être connecté pour accèder à cette section. <a href="#" class="text-danger" onclick="changeCategory(\'account\')">Se connecter</a> </br>
            <button type="button" onclick="hideThisParent(this)" class="btn-close" aria-label="Close"></button>
          </div>
        ';
        break;

      default:
        // code...
        break;
    }
  }

?>
