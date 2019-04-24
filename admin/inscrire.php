<?php session_start();?>

<?php

if(!isset($_SESSION['auth'])  && empty($_SESSION["auth"])){
    $_SESSION["flash"]["success text-center"]= "Vous êts dejà connecter!";
    header('Location: ../index.php');
    exit();  
}
//fonctions de debugagge
// function debug($variable){
//      echo '<pre>' .print_r($variable, true). '</pre>';
// }

// si le post n'est pas vide
if(!empty($_POST))
{
 $errors =[];
 //connexion a la base de donnée
 require_once '../admin/bd.php';

 //verification des differents du formulaire
 if(empty($_POST['nom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['nom']))
 {
    $errors['nom'] = "Entrez votre nom";
 }
 if(empty($_POST['firstname'])){
     $errors['firstname'] = "Entrez votre prenoms";
 }
 if(empty($_POST['ville'])){
    $errors['ville'] = "entrez votre ville";
}
if(empty($_POST['email'])){
    $errors['email'] = "choisir votre email";
}
if(empty($_POST['password']) && empty($_POST['confirmpassword'])){
    $errors['password'] = "entrez votre mot de passe";
}
if( $_POST['password'] != $_POST['confirmpassword']){
    $errors['password'] = "Les deux mot de passe ne correspondent pas!";
}

// var_dump($_POST);
// die();

if(empty($errors)){
    // var_dump($_POST);
//   die();
    $req = $base->prepare("INSERT INTO `ouvrier`( `nom`, `prenom`, `ville`, `email`, `password`,role, `date_inscription`) VALUES (?,?,?,?,?,?,NOW())");
    $req->execute([$_POST['nom'], $_POST['firstname'], $_POST['ville'], $_POST['email'], $_POST['password'], $_POST['role']]);
    $_SESSION["flash"]["success text-center"]= "Vous êtes inscrit avec avec succès";

}else{
    $_SESSION["flash"]["danger text-center"]= "Des donnés sont manquants!";
    header("Location: inscription.php");
    exit();
}
}

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
            <h1>Ajouter un ouvrier</h1>

                    <input type="text" name="firstname" id="firstname" placeholder="Entrez prenoms ouvier">
                    <input type="text" name="nom" id="nom" placeholder="Entrez nom ouvier">
                    <input type="text" name="ville" id="ville" placeholder="Entrez ville ouvier">
                    <input type="email" name="email" id="email" placeholder="Entrez email ouvier">
                    <input type="password" name="password" id="password" placeholder="Mot de passe ouvier">
                    <input type="password" name="confirmpassword" id="password" placeholder="confirmer mot de password ouvier">
                    <div class="form-group">
                    
                    <select name="role" id="role" class="form-controls">
                        <option value="chef de chantier">Chef de chantier</option>
                        <option value="architect">Architect</option>
                        <option value="Ouvrier">Ouvrier</option>
                        <option value="entrepreneur">entrepreneur</option>
                    </select>
                    </div>
                    

                    <input type="reset" value="Annuler" name="reset">
                    <input type="submit" value="Envoyer" name="submit">
                </form>
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