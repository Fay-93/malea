<?php
session_start();
require_once "fonctions/bdd.php";
include_once "fonctions/blog.php";
$bdd = bdd();
$article = article();
$nb_commentaires = nb_commentaires();
$commentaires = commentaires();
if(!empty($_POST))
    $erreur = commenter();
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Article Malea Coiffure</title>
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
        <h1 class="welcome"><span class="monBlog">Bienvenue </span> <span>sur</span> <span >le blog de Malea</span></h1>
    <!--Barre de recherche du blog-->
    <div class="cherche">
        <form method="post" action="maleaBlog.php" class="search">
            <div class="enLigne">
            <div class="textSearch">
                <input class="quest" type="text" name="query" placeholder="Rechercher un article ...">
            </div>
            <div class="ok">
                <input type="submit" value="OK!">
            </div>
        </div>
        </form>
    
    </div>
</div>  
</section>

<div class="containerColonne">
    <div class="colonne">
        <div class="articleSujet">
            <article class="articleImg">
                <div>
                    <img class="imgBlogArt" src="../assets/img/blog/<?= $article["image"] ?>" alt="<?= $article["image"] ?>">
                </div>
                <div class="articleText">
                    <p class="date">Posté le <time datetime="<?= $article["publication"] ?>"><?= formattage_date($article["publication"]) ?></time></p>
                    <h1 class="artTitle"><?= $article["titre"] ?></h1>
                    <p class="artPara"><?= $article["contenu"] ?></p>
                </div>
            </article>
        </div> 
    </div> 
</div> 
<div class="containerCommentaire">
        <div class="rang">
            <div class="artTitle">
                <h3>Commentaire (<?= $nb_commentaires ?>)</h3>
            </div>
        </div>
        <?php
        foreach($commentaires as $commentaire) :
        ?>
        <div class="rang">
            <p class="date">Posté par <?= $commentaire["pseudo"] ?> le <time datetime="<?= $commentaire["publication"] ?>"><?= formattage_date($commentaire["publication"]) ?></time></p>
            <p class="comment"><?= $commentaire["commentaire"] ?></p>
        </div>

        <?php
        endforeach;
        if(isset($_SESSION["membre"])) :
        ?>
</div>

<div class="cherche">
        <form method="post" action="">
            <?php
            if(isset($erreur)) :
            if($erreur) :
            ?>
            <div>
                <div>
                    <div class="message erreur"><?= $erreur ?></div> 
                </div>
            </div>
            
            <?php
            else :
            ?>   
            <div>
                <div><!--Le message de confirmation suivant s'affiche si pas d'erreur-->
                    <div class="message confirmation">Votre commentaire a bien été posté</div>
                </div>
            </div>
            <?php
            endif;
            endif;
            ?>
            <div class="textSearch">
                <div class="textSearch">
                    <textarea class="quest" name="commentaire" cols="150" rows="10" maxlength="300" placeholder="Votre commentaire ici"></textarea>
                </div>
            </div>
            
            <div class="textSearch">
                <div class="soumettre">
                    <input class="quest" type="submit" value="commenter">
                </div>
            </div>
        </form>
</div>
<?php
endif;
?>
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
</html>