<footer class="bg-light text-center text-lg-start">
   <div class="container p-4">
      <div class="row">
         <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <img src="img/site/logo.gif" alt="logo_site" width="150px">
            <p>
               Une faim? Choisissez parmi notre séléction de restaurant et faites vous livrer!
               La séléction n'est pas réservée qu'à un seul restaurant, vous pouvez choisir de manger des sushis et une pizza.
            </p>
         </div>
         <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Catégories</h5>
            <ul class="list-unstyled mb-0">
              <?php
                for ($i=0; $i < sizeof($_SESSION['categories']); $i++) {
                  echo '<li><a href="#header" class="text-dark" onclick="changeCategory('.$i.')">'.$_SESSION['categories'][$i]->getName().'</a></li>';
                }
               ?>
            </ul>
         </div>
         <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Liens utiles</h5>
            <ul class="list-unstyled">
               <li>
               <li><a href="#header" class="text-dark" onclick="changeCategory('account')">Mon Compte</a></li>
               <li><a href="#header" class="text-dark">Notifications</a></li>
               <li><a href="#header" class="text-dark">Panier</a></li>
               <li><a href="#header" class="text-dark" onclick="changeCategory('contact')">Nous contacter</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright: Bhatti & Equinet
   </div>
</footer>
