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
                        <li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
                        <li class="nav-item"><a href="#equipe" class="nav-link"></a></li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Nos experts </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="home.php">Architectes</a>
                                  <a class="dropdown-item" href="home.php">Entrepreneur</a>
                                  <a class="dropdown-item" href="home.php">Chef chantiers</a>
                                </div>
                        </li>
                        <li class="nav-item"><a href="#..." class="nav-link">Prestation</a></li>
                        <li class="nav-item"><a href="#footer" class="nav-link">Contactez-nous</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Déconnexion</a></li>
                    
                    </ul>
    
                    <div class="button1 ml-auto">
                        <a href="index.php" >
                            <button type="button" class="btn btn-warning">TANO THIERRY</button>
                            <img src="images/avatar_homme.jpg" class="rounded-circle"  style="width:40px;height: 40px;">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!--Fin de la barre de navigation -->

    <?php if(isset($_SESSION['flash'])): ?>
                    <?php foreach($_SESSION['flash'] as $type=>$message):?>
                        <div class="alert alert-<?= $type ;?> ">
                        <?= $message; ?>
                        </div>
                    <?php endforeach;?>
                    <?php unset($_SESSION["flash"]);?>
        <?php endif; ?>

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

