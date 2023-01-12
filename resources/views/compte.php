<?php
session_start();
if(!isset($_SESSION["membre"]))
    header("Location: connexion.php");
require_once "fonctions/bdd.php";
include_once "fonctions/membre.php";
include_once "fonctions/blog.php";
$bdd = bdd();
$infos = infos();
$commentaires = commentaires_user();
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Espace membre Malea Coiffure</title>
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
				<h1 class="welcome">
					<span class="monBlog">Bienvenue <?= $infos["pseudo"] ?> </span>
				</h1>
			</div>
		</section>
		
	
	<div class="containerCommentaire">
     
        <div class="rang">
            <div class="artTitle">
                <p>Adresse e-mail : <?= $infos["email"] ?></p>
            </div>
        </div>
        <div class="rang">
            <div class="artTitle">
                <h3>Derniers commentaires !</h3>
            </div>
        </div>
        <!--On va stocker chaque commentaire un à un dans une variable qu'on appelle $commentaire-->
        <?php
        foreach($commentaires as $commentaire) :
        ?>
        <div class="rang">
            <div class="artTitle">
                <p class="date">Posté sur l'article "<?= $commentaire["titre"] ?>" le <time datetime="<?= $commentaire["publication"] ?>"><?= formattage_date($commentaire["publication"]) ?></time> :</p>
                <p><?= $commentaire["commentaire"] ?></p>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
	

	<!--FOOTER-->
	
	
	<!--JAVASCRIPT-->
	<!--Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!--fancy-->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script type="text/javascript" src="../js/appcopy.js"></script>
</body>
</html>