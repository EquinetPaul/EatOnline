<h2>Nous contacter</h2>
<h6>Une <strong>question</strong>? Une <strong>réponse</strong>!</h6>
<div class="text-center">
  <div class="alert alert-danger" id="boxAlert" role="alert" hidden></div>
  <form method="post" action="#">
     <small class="form-text text-muted">Vos informations ne seront jamais partagées.</small>
     <div class="form-group">
        <label for="emailInput">Adresse Email</label>
        <input type="email" class="form-control" id="emailInput" placeholder="Entrez votre adresse email" required>
     </div>
     <div class="form-group">
        <label for="nomInput">Nom</label>
        <input type="text" class="form-control" id="nomInput" placeholder="Entrer votre nom" required>
     </div>
     <div class="form-group">
        <label for="prenomInput">Prénom</label>
        <input type="text" class="form-control" id="prenomInput" placeholder="Entre votre prénom" required>
     </div>
     <p>Genre</p>
     <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="sexeHommeRadio" value="1" checked>
        <label class="form-check-label" for="sexeHommeRadio">Homme</label>
     </div>
     <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="sexeFemmeRadio" value="2">
        <label class="form-check-label" for="sexeFemmeRadio">Femme</label>
     </div>
     <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="sexeNonRadio" value="0">
        <label class="form-check-label" for="sexeNonRadio">Non specifié</label>
     </div>
     <div class="form-group">
        <label for="dateNaissanceInput">Date de naissance</label>
        <input type="date" class="form-control" id="dateNaissanceInput" value="2015-01-01" max="2015-01-01" min="1900-01-01" placeholder="Entrez votre date de naissance" required>
     </div>
     <p>Fonction</p>
     <select class="form-control form-control-sm" name="fonction">
        <option>Etudiant</option>
        <option>Professeur</option>
        <option>Autre</option>
     </select>
     <div class="form-group">
        <label for="sujetMessage">Sujet du message</label>
        <input type="text" class="form-control" id="sujetMessage" placeholder="Entrez le sujet du message" required>
     </div>
     <div class="form-group">
        <label for="contenuMessage"></label>
        <textarea class="form-control" id="contenuMessage" rows="3" placeholder="Entrez votre message" required></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
<script src="../assets/js/contactForm.js"></script>
