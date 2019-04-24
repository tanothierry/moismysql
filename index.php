<?php
  session_start();

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
                <a href="index.php" class="navbar-brand"><h1>BAT-NAN</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">Nos services</a></li>
                        <li class="nav-item"><a href="services.php" class="nav-link">A propos</a></li>
                        <li class="nav-item"><a href="#footer" class="nav-link">Contactez-nous</a></li>
                    </ul>

                    <!-- Pour verifier s'il est connecter on affiche bienvenue nom user sinon on affiche connexion -->
                    <?php if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])): ?>
                           <img src="images/avatar_homme.jpg" class="rounded-circle"  style="width:40px;height: 40px;"> <span style="color:white"> Bienvenue <?=$_SESSION['auth']->nom?> </span>
                           <li class="nav-item"><a href="logout.php" class="nav-link">Déconnection</a></li>
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
        <?php if(isset($_SESSION['flash'])): ?>
                    <?php foreach($_SESSION['flash'] as $type=>$message):?>
                        <div class="alert alert-<?= $type ;?> ">
                        <?= $message; ?>
                        </div>
                    <?php endforeach;?>
                    <?php unset($_SESSION["flash"]);?>
        <?php endif; ?>
                <div class="text"></div>
                <div class="heading ">
                    <h2 class="ecrit animated slideInDown">Contactez-nous pour tout vos projets de construction
                    </h2>
                    <a href="#footer" style="text-decoration:none;" class="contact animated slideInDown">Contactez-nous</a>
                </div>
        </div>
    </section>
<!-- fin images -->

    <section id="services">
        <div class="container-fluid">
            <div class="heading">
                <h2>Nos services</h2>
                <div class="color"></div>
            </div>

            <div class="container">
                <div class="col-md-12 offset-md-1">
                    <div class="row">
                                <div class="thumbnail col-md-5 col-sm-6 text-center  animated bounceInLeft delay-2s">
                                    <a href="index.html" >
                                        <img src="images/dessinateur-en-batiment-86-zoom_0.jpg" alt="plans" class="img-fluid" >
                                    </a>
                                    <div style="padding:10px;">
                                        <h4>Conception de Plans et Devis</h4>
                                    </div>
                                </div>
            
                                <div class="thumbnail col-md-5 col-sm-6 text-center  animated bounceInRight delay-2s">
                                    <a href="index.html">
                                        <img src="images/20150720_122735_istock000043535170xxxlarge-highwaystarz-photography--ok.jpg"  class="img-fluid" >
                                    </a>
                                    <div style="padding:10px;">
                                        <h4>Renovation de Batiment</h4>
                                    </div>
                                </div>
            
                                <div class="thumbnail col-md-5 col-sm-6 text-center  animated bounceInLeft delay-2s">
                                    <a href="index.html">
                                        <img src="images/industriels01.jpg" alt="plans" class="img-fluid" >
                                    </a>
                                    <div style="padding:10px;">
                                        <h4>construction</h4>
                                    </div>
                                </div>
            
                                <div class="thumbnail col-md-5 col-sm-6 text-center  animated bounceInRight delay-2s">
                                    <a href="index.html">
                                        <img src="images/industriels01.jpg"  class="img-fluid" >
                                    </a>
                                    <div style="padding:10px;">
                                        <h4>Design Interieur</h4>
                                    </div>
                                </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

<!-- debut carousel -->
    <section id="section">
        <div class="container">
            <div id="carousel" class="carousel slide carousel-multi-item" data-ride="carousel" >

                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row mt-20">
                                <div class="col-md-4 col-sm-4 col-offset-1 " >
                                    <div>
                                        <img src="images/bande-rdc_1.jpg" alt="image" class="img-fluid">
                                        <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">Conception de plans</h5>
                                    </div>
                                </div>
                    
                                <div class="col-md-4 col-sm-4 col-offset-1" >
                                    <div >
                                        <img src="images/bande-rdc_1.jpg" alt="image" class="img-fluid">
                                        <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">construction</h5>
                                    </div>
                                </div>
                    
                                <div class="col-md-4 col-sm-4 col-offset-1">
                                    <div>
                                        <img src="images/bande-rdc_1.jpg" alt="image" class="img-fluid">
                                        <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">Renovation de batiment</h5>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-offset-1" >
                                <div>
                                    <img src="images/plan-600x300.jpg" alt="image" class="img-fluid">
                                    <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">Conception de plans</h5>
                                </div>
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-offset-1" >
                                <div >
                                    <img src="images/plan-600x300.jpg" alt="image" class="img-fluid">
                                    <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">construction</h5>
                                </div>
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-offset-1">
                                <div>
                                    <img src="images/plan-600x300.jpg" alt="image" class="img-fluid">
                                    <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">Renovation de batiment</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-offset-1" >
                                <div>
                                    <img src="images/te-koop-op-plan-luxe-villa-met-4-slaapkamers-in-marbella-oost-spanje002.jpg" alt="image" class="img-fluid">
                                    <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">Conception de plans</h5>
                                </div>
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-offset-1" >
                                <div >
                                    <img src="images/nieuwe-luxe-villa-te-koop-in-marbella-west-spanje001.jpg" alt="image" class="img-fluid">
                                    <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">construction</h5>
                                </div>
                            </div>
                        
                            <div class="col-md-4 col-sm-4 col-offset-1">
                                <div>
                                    <img src="images/te-koop-op-plan-luxe-villa-met-4-slaapkamers-in-marbella-oost-spanje002.jpg" alt="image" class="img-fluid">
                                    <h5 style="color:#fb3;box-shadow:4px 2px 3px solid black;">Renovation de batiment</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="controls-top text-center">
                        <a class="btn-floating" href="#carousel" data-slide="prev"><i class="fa fa-chevron-circle-left"> </i></a>
                        <a class="btn-floating" href="#carousel" data-slide="next"> <i class="fa fa-chevron-circle-right"></i></a>
                </div>  

            </div>
        </div>
    </section>
<!-- fin du carousel -->

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

