<?php
  include 'varSession.inc.php';
?>

<header class="blog-header py-3 d-flex justify-content-between" id="header">
   <a href=""><img class="logoHeader" src="img/site/logo.gif" alt="logo_site"></a>
   <div class="boxHeaderContent">
      <a href="#" class="text-muted" data-toggle="tooltip" title="Mon Compte" onclick="changeCategory('account')"><i class="bi bi-person"></i></a>
      <a href="#" class="text-muted" data-toggle="tooltip" title="Notification"><i class="bi bi-bell"></i></a>
      <a href="#" class="text-muted" data-toggle="tooltip" title="Panier" onclick="changeCategory('cart')" ><i class="bi bi-cart"></i></a>
      <a href="#" class="text-muted" data-toggle="tooltip" title="Contact" onclick="changeCategory('contact')"><i class="bi bi-envelope"></i></a>
   </div>
</header>
<p class="text-muted">Categories (<?php echo sizeof($_SESSION['categories']); ?>)</p>
<div class="nav-scroller py-1 mb-2">
   <nav class="nav d-flex justify-content-between categoryBox">
     <?php
       for ($i=0;$i<sizeof($_SESSION['categories']); $i++) {
         echo'
         <a class="p-2 text-muted btn '.$_SESSION['categories'][$i]->getDisabled().' " href="#" id="cat'.$i.'" onclick="changeCategory('.$i.')">
            <img class="imgCategory" src="img/site/category/'.$_SESSION['categories'][$i]->getNameImage().'.png" alt="'.$_SESSION['categories'][$i]->getName().'">
            <p>'.$_SESSION['categories'][$i]->getName().'</p>
         </a>
         ';
       }
      ?>
   </nav>
</div>
