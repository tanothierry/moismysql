<?php session_start();?>

<?php

if(!isset($_SESSION['auth'])  && empty($_SESSION["auth"])){
    $_SESSION["flash"]["success text-center"]= "Vous êts dejà connecter!";
    header('Location: ../index.php');
    exit();  
}
 //connexion a la base de donnée
 require_once '../admin/bd.php';
    $req = $base->prepare("SELECT * FROM ouvrier");
    $req->execute();


// debug($errors);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css" />
    <script src="../jquery/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
                      <li class="nav-item"><a href="index.php" class="nav-link">Nos services</a></li>
                      <li class="nav-item"><a href="services.php" class="nav-link">A propos</a></li>
                      <li class="nav-item"><a href="#footer" class="nav-link">Contactez-nous</a></li>
                  </ul>
     <!-- Pour verifier s'il est connecter on affiche bienvenue nom user sinon on affiche connexion -->
     <?php if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])): ?>
                           <img src="../images/avatar_homme.jpg" class="rounded-circle"  style="width:40px;height: 40px;"> <span style="color:white"> Bienvenue <?=$_SESSION['auth']->nom?> </span>
                           <li class="nav-item"><a href="../logout.php" class="nav-link">Déconnection</a></li>

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

     
  <section id="connexion" >
      <div class="container">
      <div class="container mb-5">
        <?php if(isset($_SESSION['flash'])): ?>
                    <?php foreach($_SESSION['flash'] as $type=>$message):?>
                        <div class="alert alert-<?= $type ;?> ">
                        <?= $message; ?>
                        </div>
                    <?php endforeach;?>
                    <?php unset($_SESSION["flash"]);?>
        <?php endif; ?>
          <div class="row" >
            <div class="a mx-auto" >
                <form  method="post" role="form" class="sign animated flipInY">
            <h1>Admin  ouvrier</h1>

                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Rôle</th>
                                <th>description</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($rep  = $req->fetch()) :?>
                            <tr>
                                <td><?=$rep->nom?></td>
                                <td><?=$rep->prenom?></td>
                                <td><?=$rep->email?></td>
                                <td><?=$rep->role?></td>
                                <td><i class="fa fa-trash-alt"></i></td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
            </div>
          </div>
      </div>
  </section>
    <!-- slideInDown --> 

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