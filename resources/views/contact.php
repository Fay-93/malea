<?php
session_start();
require_once "fonctions/bdd.php";
include_once "fonctions/contact.php";
$bdd = bdd();
if(!empty($_POST))// si la super Global $_POST n'est pas vide, ça signifie que mon formulaire à bien été envoyé
    $erreurs = contact(); //la variable $erreur contient le returne de la fonction contact() qui retournera les erreurs du formulaire
?>


<!doctype html>
<html lang="fr">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez Malea coiffure</title>
    <!--icone permettant d'identifier l'onglet-->
    <link rel="icon" href="../assets/img/malea.png" type ="image/png">
    <script src="https://kit.fontawesome.com/65699a0028.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="../css/styleBlog.css" type="text/css" />
   
</head>

<body >
<!-- HEADER-->
	 <?php include "header.php" ?>
	 <!--FIN HEADER-->

<div class="image_jfrouge"></div>

    <!--FORMULAIRE-->
    <section class="page-content2">
        <div class="container">
            <h1><span class="monBlog">Contactez-moi</span></h1>
            <p class="artPara">
                Vous désirez obtenir des informations au sujet de nos prestations ou nous faire part de vos remarques ?
            </p>
            <p class="artPara">
                Vous pouvez nous contacter par téléphone au 01.39.95.30.41 ou en remplissant le formulaire ci-dessous.
            </p>
            <p class="artPara">
                Nous vous répondrons dans les plus brefs délais.
            </p>
        </div>
           
            <div class="cherche">
                <form method="post" action="">
                    <!-- si et seulement si la variable $erreur existe, le formulmaire est envoyé et donc on pourra traiter le message d'erreur ou de confirmation-->
                    <?php
                    if(isset($erreurs)) : //on test si la variable erreur existe
                    if($erreurs) :
                    foreach($erreurs as $erreur) :
                        
                    ?>
                    <!-- si erreur il y a le message d'erreur s'affiche -->
                    <div>
                        <div>
                            <div class="message erreur"><?= $erreur ?></div>
                        </div>
                    </div>
                    
                    <!-- si pas d'erreur le message de confirmation s'affiche -->
                    <?php
                    endforeach;
                    else :
                    ?>
                    <div>
                        <div>
                            <div class="message confirmation">Votre message a bien été envoyé !!</div>
                        </div>
                    </div>
                    <?php
                    endif;
                    endif;
                    ?>
                    
                    <div>
                        <div>
                            <input class="quest" type="text" name="nom" placeholder="Votre nom *" value="<?php if(isset($_POST["nom"])) echo $_POST["nom"] ?>">
                        </div>
                        <div>
                            <input class="quest" type="text" name="email" placeholder="Votre adresse email *" value="<?php if(isset($_POST["email"])) echo $_POST["email"] ?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <textarea class="quest "name="texte" cols="150" rows="10" maxlength="300" placeholder="En quoi puis-je vous aider ? *"><?php if(isset($_POST["texte"])) echo $_POST["texte"] ?></textarea>
                        </div>
                    </div>
                    <div>
                        <div class="soumettre">
                            <input class="quest" type="submit" value="Envoyer!">
                        </div>
                    </div>
                </form>
            </div>
            <div class="page-content2"></div>
            
    </section>


<!--FOOTER-->
<footer>
    <!-- Contact  -->
    <section id="contact" class="contact">
        <h2 class="section-title">
          <span>Ou nous trouver</span>
          
        </h2>
        <p class="section-subtitle">
          Au centre de Taverny
        </p>
        <div class="contact-content container">
          <div class="addresses">
                <div class="address-block">
                    <p>139 rue de Paris, 95150 Taverny</p>
                     <p>01 39 95 30 41</p>
                 </div>
                 <div class="address-block">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10465.112628316372!2d2.2237906592163057!3d49.024316452782415!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2819ce3ee4e8557!2sMalea%20coiffure!5e0!3m2!1sfr!2sfr!4v1669447628197!5m2!1sfr!2sfr" width="600" height="450"></iframe>
                </div>
          </div>
      
        </div>
    </section>
    <div class="footer1">
        <h2 class="keepincontact"><span>Restons en contact</span></h2>
        </div>
   <div class="footer2">
        <div class="footerReseau"> <a class="facebook" title ="Suivez-moi sur Facebook" href="https://www.facebook.com/people/Malea-coiffure/100069930256868/?sk=photos" target="_blank">
            <i class="fa-brands fa-facebook-f"></i></a>
        </div>
        <div class="footerReseau" > <a class="insta" title ="Suivez-moi sur Instagram" href="https://www.instagram.com/maleacoiffure_off/" target="_blank">
            <i class="fa-brands fa-instagram"></i></a>
        </div>
            <div class="footerReseau" > <a class="mail" title ="Ecrivez-moi un mail" href="mailto:sambaum@free.fr">
                <i class="fa-solid fa-envelope"></i></a>
            </div>
    </div>
   
  </footer>



 <!--JAVASCRIPT-->
 <!--Jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!--fancy-->
 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
 <script type="text/javascript" src="../js/appcopy.js"></script>


</body>
</html