<?php
session_start();
//inclusion
require_once "fonctions/bdd.php";
include_once "fonctions/blog.php";
$bdd = bdd(); // on crée la varible $bdd qui utilisie la fonction bdd() du fichier "bdd.php" qui exécute  try(), objet contenu dans la fonction bdd();
//gestion de l'envoi de formulaire :
    //on vérifie si post n'est pas vide 
if(!empty($_POST))
    $articles = recherche();
else
    $articles = articles();
?>

<!doctype html>
<html lang="fr">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le Blog de Malea Coiffure</title>
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

<section class="page-content">
    <div class="container">
        <h1 class="welcome"><span class="monBlog">Bienvenue </span> <span>sur</span> <span >le blog de Malea</span></h1>
    <!--Barre de recherche du blog-->
    <div class="cherche">
        <form method="post" action="maleaBlog.php" class="search">
            <div class="enLigne">
            <div class="textSearch">
                <input class="quest" type="text" name="query" placeholder="Rechercher un article ..." value="<?php if(isset($_POST["query"])) echo $_POST["query"] ?>">
            </div>
            <div class="ok">
                <input type="submit" value="OK!">
            </div>
        </div>
        </form>
        
        <!--pour que la demande de recherche s'affiche-->
        <?php
        if(isset($_POST["query"])) :
        ?>
        <div class="rang">
            <div class ="result">
                <p>Résultat de votre recherche avec "<?= $_POST["query"] ?>"</p>
            </div>
        </div>
          <?php
          endif;
          ?>
        <div class="intro">
            <h2 class="pourquoi">Pourquoi ce blog ? </h2>
            <p>J’ai décidé de partager avec vous mon savoir faire, mes connaissances et mes conseils et de rendre accessible à tous certaines de mes  techniques ! Vous saurez tout sur les dernières tendances .
            </p>
            </div>
    </div>
</div>  
</section>

<div class="containerArticle">
<?php
        //la boucle foreach va parcourir le tableau et récupérer chaque article inividuellement-->
            foreach($articles as $article) :
                
        ?>
    <div class="rang">
        <div class="sujet">
            <article>
                <!--dans mon tableau article je selectionne la première cellule dans laquelle je viens récupérer la valeur de la clé "image"-->
                <img class="imgBlog" src="../assets/img/blog/<?= $article["image"] ?>" alt="<?= $article["image"] ?>">
                <p class="date">Posté le <time datetime="<?= $article["publication"] ?>"><?= formattage_date ($article["publication"]) ?></time></p>
                <h1 class="artTitle"><?= $article["titre"] ?></h1>
                <p class="artPara"><?= $article["accroche"] ?></p>
                <a class="lire" href="article.php?id=<?= $article["id"] ?>">Lire l'article</a>
            </article>
        </div> 
    </div>
    <?php
        endforeach;
        ?>
</div>

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