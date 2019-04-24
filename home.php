<?php
  session_start();

    require_once 'admin/bd.php';

    $verify = $base->prepare("SELECT * FROM inscription")


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
                        <li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
                        <li class="nav-item"><a href="#equipe" class="nav-link"></a></li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Nos experts </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#architecte">Architectes</a>
                                  <a class="dropdown-item" href="#entrepeneur">Entrepreneur</a>
                                  <a class="dropdown-item" href="#chantier">Chef chantiers</a>
                                </div>
                        </li>
                        <li class="nav-item"><a href="prestation.php" class="nav-link">Prestation</a></li>
                        <li class="nav-item"><a href="#footer" class="nav-link">Contactez-nous</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Déconnexion</a></li>
                    </ul>
    
                    <div class="button1 ml-auto">

                        <?php
                          
                          while ($nom = $verify->fetch())

                          {

                        
                
                        ?>
                        <a href="index.php" >
                            <button type="button" class="btn btn-warning"><?php echo $nom['name']; ?> </button>
                            <?php

                            };
                            $verify->closeCursor();
                            ?>
                            
                            <img src="images/avatar_homme.jpg" class="rounded-circle"  style="width:40px;height: 40px;">
                        </a>

    
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!--Fin de la barre de navigation -->


    <!-- images acrousel -->
    <!--Carousel Wrapper-->
    <style>
    .w-100{
        height: 100%!important;
    }
    
    </style>
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
            <img class="d-block w-100" src="images/367_563b4d20363c5-construire-maison-abidjan.jpg" alt="First slide" >
            <div class="mask rgba-black-light"></div>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
            <img class="d-block w-100" src="images/20bc2b43.png"  alt="Second slide">
            <div class="mask rgba-black-strong"></div>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
            <img class="d-block w-100" src="images/mort-4.jpg"  alt="Third slide" class="img-fluid">
            <div class="mask rgba-black-slight"></div>
            </div>
            </div>
        </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <section id="equipe">
        <div class="container">
               <div class="heading">
                    <h2>NOS EXPERTS</h2>
                    <div class="text-center">
                        <img src="images/seprator.png" class="img-fluid">
                    </div>
               </div>

                <div class="row" id="architecte">
                    <div class="chef col-md-3">
                        <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Architecte</h5>
                            <hr>
                            <!-- Quotation -->
                            <p>
                                <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </p>
                            </div>
                        </div>
                    </div>

                     <div class="chef col-md-3" >
                         <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body  text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Architecte</h5>
                            <hr>
                            <!-- Quotation -->
                            <p>      
                                <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </p>
                            </div>
                        </div>
                    </div>

                     <div class="chef col-md-3">
                        <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Architecte</h5>
                            <hr>
                            <!-- Quotation -->
                            <p> 
                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </div>
                        </div>
                    </div>


                     <div class="chef col-md-3">
                         <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Architecte</h5>
                            <hr>
                            <!-- Quotation -->
                            <p> 
                                <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row" id="entrepeneur">
                        <div class="chef col-md-3">
                            <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Entrepreneur</h5>
                            <hr>
                            <!-- Quotation -->
                            <p>
                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </div>
                        </div>
                        </div>
    
                         <div class="chef col-md-3">
                             <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Entrepreneur</h5>
                            <hr>
                            <!-- Quotation -->
                            <p>
                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </div>
                        </div>
                        </div>
    
                         <div class="chef col-md-3">
                            <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Entrepreneur</h5>
                            <hr>
                            <!-- Quotation -->
                            <p>
                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </div>
                        </div>
                        </div>
    
    
                         <div class="chef col-md-3">
                            <div class="travel">
                            <div class="text-center">
                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                            </div>                        
                                    <!-- Content -->
                            <div class="card-body text-center">
                            <!-- Name -->
                            <h4 class="card-title">xxxxxxxxx</h4>
                            <h5 class="card-title">Entrepreneur</h5>
                            <hr>
                            <!-- Quotation -->
                            <p> 
                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                            </div>
                        </div>
                        </div>
                    </div> 

                    <div class="row" id="chantier">
                            <div class="chef col-md-3">
                                        <div class="travel">
                                    <div class="text-center">
                                        <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                                    </div>                        
                                            <!-- Content -->
                                    <div class="card-body text-center">
                                    <!-- Name -->
                                    <h4 class="card-title">xxxxxxxxx</h4>
                                    <h5 class="card-title">Chef chantier</h5>
                                    <hr>
                                    <!-- Quotation -->
                                    <p>
                                         <button type="button" class="btn btn-warning btn-md">Contact</button>
                                    </div>
                                </div>
                            </div>
        
                             <div class="chef col-md-3">
                                    <div class="travel">
                                            <div class="text-center">
                                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;padding-top: 10px;" >
                                            </div>                        
                                                    <!-- Content -->
                                            <div class="card-body text-center">
                                            <!-- Name -->
                                            <h4 class="card-title">xxxxxxxxx</h4>
                                            <h5 class="card-title">Chef chantier</h5>
                                            <hr>
                                            <!-- Quotation -->
                                            <p>
                                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                                            </div>
                                    </div>
                            </div>
        
                             <div class="chef col-md-3">
                                    <div class="travel">
                                            <div class="text-center">
                                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;" >
                                            </div>                        
                                                    <!-- Content -->
                                            <div class="card-body text-center">
                                            <!-- Name -->
                                            <h4 class="card-title">xxxxxxxxx</h4>
                                            <h5 class="card-title">Chef chantier</h5>
                                            <hr>
                                            <!-- Quotation -->
                                            <p> 
                                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                                            </div>
                                    </div>
                            </div>
        
        
                             <div class="chef col-md-3">
                                    <div class="travel">
                                            <div class="text-center">
                                                <img src="images/avatar_homme.jpg" class="rounded-circle" style="width:50%;" >
                                            </div>                        
                                                    <!-- Content -->
                                            <div class="card-body text-center">
                                            <!-- Name -->
                                            <h4 class="card-title">xxxxxxxxx</h4>
                                            <h5 class="card-title">Chef chantier</h5>
                                            <hr>
                                            <!-- Quotation -->
                                            <p>
                                                 <button type="button" class="btn btn-warning btn-md">Contact</button>
                                            </div>
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

