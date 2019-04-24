<?php session_start();?>

<?php

if(!isset($_SESSION['auth'])  && empty($_SESSION["auth"])){
    $_SESSION["flash"]["success text-center"]= "Vous n'êtes pas connecter!";
    header('Location: connexion.php');
    exit();  
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contruction</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="jquery/maman.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
    <!-- barre de navigation -->
    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container"> 
                <a href="index.html" class="navbar-brand"><h1>BAT-NAN</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a href="#" class="nav-link">Acceuil</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Nos services</a></li>
                        <li class="nav-item"><a href="services.php" class="nav-link">A propos</a></li>
                        <li class="nav-item"><a href="#footer" class="nav-link">Contactez-nous</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Déconnexion</a></li>

                    </ul>
      <!-- Pour verifier s'il est connecter on affiche bienvenue nom user sinon on affiche connexion -->
      <?php if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])): ?>
                           <img src="images/avatar_homme.jpg" class="rounded-circle"  style="width:40px;height: 40px;"> <span style="color:white"> Bienvenue <?=$_SESSION['auth']->nom?> </span>
                    <?php else: ?>
                    <div class="button ml-auto">
                        <a href="inscription.php">
                            <button type="button" class="btn btn-warning">Inscription</button>
                        </a>
                        <a href="connexion.php">
                            <button type="button" class="btn btn-warning">Connexion</button>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </section>
    <!--Fin de la barre de navigation -->

    <!--images-->
    <section id="image">
        <div class="container-fluid">
                <div class="text"></div>
                <div class="heading ">
                    <h2 class="ecrit animated slideInDown">
                            Avec BAT-NAN vos projet se realise
                    </h2>
                    <a href="#footer" style="text-decoration:none;" class="contact animated slideInDown">Contactez-nous</a>
                </div>
        </div>
    </section>
    <!-- fin images -->


    <!-- qui sommes nous  -->

    <section id="sert" >
        <div class="container-fluid">
        <?php if(isset($_SESSION['flash'])): ?>
                    <?php foreach($_SESSION['flash'] as $type=>$message):?>
                        <div class="alert alert-<?= $type ;?> ">
                        <?= $message; ?>
                        </div>
                    <?php endforeach;?>
                    <?php unset($_SESSION["flash"]);?>
        <?php endif; ?>
                <div class="noir"></div>
            <div class="heading">
                <h2>Qui Sommes Nous ?</h2>
                <div class="text-center">
                    <img src="images/seprator.png" class="img-fluid">
                </div>
            </div>

            <div class="container" style="background:white;">
                    <div class="container-body">
                        <p class="container-text">
                            <span class="bat">BAT-NAN</span> est une entreprise de constrcution qui vise a aider les personnes qui souhaitent construire, ou même des personnes qui ne reside pas en Afrique.
                            Nous sommes specialisé Génie civil, etude et conception de plans et devis, Design Interieur et Renovation de Bâtiment. <span class="bat">BAT-NAN</span> propose des Chefs chantier,
                            des Entrepreneurs et des Architectes pour la realisation de votre plans et devis, de tous travaux de gros oeuvre et second oeuvre se place ainsi comme 
                            interlocutrice crédible dans les domaines de la construction. Soucieuse de satisfaire ses clients,l’entreprise met à votre disposition des constructions de
                            qualité et une garantie du travail bien fait.
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!-- fin qui sommes nous  -->

    <section id="fin">
        <div class="container" style="margin-bottom:80px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="">
                        <img src="images/shutterstock_277549817.jpg" class="img-circle img-fluid" style="border-radius:50%;">
                        
                    </div>
                   
                </div>

                <div class="col-md-3">
                    <div class="">
                        <img src="images/shutterstock_277549817.jpg" class="img-circle img-fluid" style="border-radius:50%;">
                        
                    </div>
                   
                </div>

                <div class="col-md-3">
                    <div class="">
                        <img src="images/shutterstock_277549817.jpg" class="img-circle img-fluid" style="border-radius:50%;">
                        
                    </div>
                   
                </div>

                <div class="col-md-3">
                    <div class="">
                        <img src="images/shutterstock_277549817.jpg" class="img-circle img-fluid" style="border-radius:50%;">
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>


<!-- debut du footer -->
   <footer id="footer">
     <div class="container-fluid bg-dark">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 peter text-center">
                            <h4>A propos</h4>
                            <div class="divider mx-auto"></div>
                            <p class="text-justify">
                            BAT-NAN est une entreprise qui donne la possibilité a tout les propiétaires
                            ou tout les personnes qui veulent investir dans le domaine de la construire , de trouver des
                             chefs chatiers.</p>
                        </div>
        
                        <div class="col-md-4 col-sm-4 peter text-center">
                            <h4>Nos  contacts</h4>
                            <div class="divider mx-auto"></div>
                            <p> +225 00 00 00 00</p>
                            <p> +225 00 00 00 00</p>
                            <p> +225 00 00 00 00</p>
                        </div>
        
                        <div class="col-md-4 col-sm-4 peter text-center">
                            <h4 class="text-center">A propos</h4>
                            <div class="divider mx-auto"></div>
                            <p> +225 00 00 00 00</p>
                            <p> +225 00 00 00 00</p>
                            <p> +225 00 00 00 00</p>
                    </div>
               </div>
            </div>
        </div>
     </div> 
     
     <div class="container-fluid">
            <div class="copy">
                <p>Copyright © 2017 BAT-NAN -Tous droits reservés</p>
            </div>
     </div>
   </footer>


   <!-- changement de la couleur de la navbar -->
<script>
$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 80) {
      $('.navbar').addClass('scrolled-nav');
    } else if (scrollTop < 80) {
      $('.navbar').removeClass('scrolled-nav');
    } 
    
  }); 
  
});
</script>

</body>
</html>

