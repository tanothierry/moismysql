<?php session_start();?>
<?php

if(isset($_SESSION['auth'])  && !empty($_SESSION["auth"])){
        $_SESSION["flash"]["success text-center"]= "Vous êts dejà connecter!";
        header('Location: home.php');
        exit();  
  }

if (!empty($_POST)) {
    
    $errors = [];

    //connexion a la base de donée 
    require_once 'admin/bd.php';

    //verification des champs de saissire
    if(empty($_POST['email']))
    {
        $errors['email'] = "email incorrect";
    }
    if (empty($_POST['password'])) 
    {
        $errors['password'] = "le mot de passe est incorrect";
    }

    if(empty($errors))
    {
        $verify = $base->prepare('SELECT * FROM users WHERE email=? AND password=? ');
        $verify->execute([$_POST['email'], $_POST['password']]);
        if( $exist = $verify->fetch())
        {
            $_SESSION["auth"] = $exist;
             $_SESSION["flash"]["success text-center"]= "Vous êtes à présents connectés!";

            header("Location: home.php"); //ici Location le L est grand caractère et le deux point es collés à Location
        }else
        {
            header("Location: connexion.php");
            $_SESSION["flash"]["danger text-center"]= "Des donnés sont manquants!";

        }
    }
}



?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="jquery/jquery.js"></script>
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
                      <li class="nav-item"><a href="#" class="nav-link">Nos services</a></li>
                      <li class="nav-item"><a href="services.php" class="nav-link">A propos</a></li>
                      <li class="nav-item"><a href="#footer" class="nav-link">Contactez-nous</a></li>
                  </ul>
  
                  <div class="button ml-auto">
                      <a href="inscription.php">
                          <button type="button" class="btn btn-warning">Inscription</button>
                      </a>
                      <a href="connexion.php">
                          <button type="button" class="btn btn-warning">Connexion</button>
                      </a>
                  </div>
              </div>
          </div>
      </nav>
  </section>
  <!--Fin de la barre de navigation -->

     
  <section id="connexion" >
      <div class="container">
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
                          <form action="" method="post" class="form animated flipInY" s>
                                  <h1>connexion</h1>
                                  <img src="images/circled-user-male-skin-type-1-2.png" alt="logo" width="150px" height="150px">
                                      <input type="email" name="email" id="email" placeholder="Adresse Email">
                                      <input type="password" name="password" id="password" placeholder="Password">
                                      <input type="submit" value="Envoyer" name="submit">
                              </form>
                      </div>
                          
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
$(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});
</script>
</body>
</html>