<?php

//Pour qu’un membre puisse se connecter à son espace membre, on passe des valeurs dans une variable super globale «session» qui pourront identifier de manière unique le membre
session_start();
if(isset($_SESSION["membre"]))
header("Location: compte.php");
require_once "fonctions/bdd.php";
include_once "fonctions/membre.php";
$bdd = bdd();
if(!empty($_POST))// si la super Global $_POST n'est pas vide, ça signifie que mon formulaire à bien été envoyé
    $erreur = connexion(); //la variable $erreur contient le returne de la fonction connexion() qui retournera les erreurs du formulaire
?>

<!doctype html>
<html lang="fr">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion blog Malea Coiffure</title>
    <!--icone permettant d'identifier l'onglet-->
    <link rel="icon" href="../assets/img/malea.png" type ="image/png">
    <script src="https://kit.fontawesome.com/65699a0028.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="../css/styleBlog.css" type="text/css" />
    <link rel="stylesheet" href="../css/normalize.css" type="text/css" />
</head>

<body >

 <!-- HEADER-->
	 <?php include "header.php" ?>
	 <!--FIN HEADER-->
	 
<section class="page-content">
    <div class="container">
        <h1><span class="monBlog">Connectez-vous</h1>
    </div>
    <div class="cherche">
        <form method="post" action="connexion.php" class="search">
              <!-- si et seulement si la variable $erreur existe, le formulmaire est envoyé et donc on pourra traiter le message d'erreur-->
                    <?php
                    if(isset($erreur)) : //on test si la variable erreur existe
                    ?>
                    <!-- si erreur il y a le message d'erreur s'affiche et si les identifiants sont bons, alors on quitte la page et on est redirigé vers notre espace personnel-->
                    <div>
                        <div>
                            <div class="message erreur"><?= $erreur ?></div>
                        </div>
                    </div>
                    
                    <!-- si pas d'erreur le message de confirmation s'affiche -->
                    <?php
                    endif;
                    ?>
            <div class="textSearch">
                <div class="textSearch">
                    <input  class="quest" type="text" name="pseudo" placeholder="Pseudo *" value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"] ?>">
                </div>
            </div>
            <div class="textSearch">
                <div class="textSearch">
                    <input class="quest" type="password" name="password" placeholder="Mot de passe *">
                </div>
            </div>
            <div class="textSearch">
                <div class="textSearch">
                    <input type="submit" value="Me connecter!">
                </div>
            </div>
        </form>
    </div>
    </section>

<!--FOOTER-->
<footer>
   
</footer>

 <!--JAVASCRIPT-->
 <!--Jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <!--fancy-->
 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
 <script type="text/javascript" src="../js/appcopy.js"></script>


</body>
</html