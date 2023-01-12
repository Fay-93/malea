<?php
//on crée une fonction inscription
function inscription() {
    global $bdd;
    
    extract($_POST); //on extrait les infos de la super global_POST
    
    //on crée une variable de validation // tant que la variable est true, c'est que le formulaire est remplie correctement et peut-etre envoyé. En cas d'erreur ma variable validation passe à false et le formulaire ne s'enverra pas et le script retournera les erreurs à la variable $erreur dans un tableau
    
    $validation = true;
    $erreur = [];
    
    //on test si un des champs de formulaire est vide :
    if(empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)) {
        $validation = false;
        $erreur[] = "Tous les champs sont obligatoires";
    }
    
      //on vérifie que le pseudo n'existe pas déjà. Si le pseudo existe $validation renverra false avec le message suivant
    if(existe($pseudo)) {
        $validation = false;
        $erreur[] = "Ce pseudo est déjà pris";
    }
    
    //on vérifie si l'adresse email est au bon format
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation = false;
        $erreur[] = "L'adresse e-mail n'est pas valide";
    }
    
     //on test si l'email de confirmation est identique à l'email entré par l'utilisateur
    elseif($emailconf != $email) {
        $validation = false;
        $erreur[] = "L'adresse e-mail de confirmation est incorrecte";
    }
    
     //on test si le mot de passe de validation est identique au premier mot de passe entré en premier
    if($passwordconf != $password) {
        $validation = false;
        $erreur[] = "Le mot de passe de confirmation est incorrect";
    }
    
     //si aucune des erreurs ci-dessus n'est rencontrées alors on enregistre le nouveau membre:
    if($validation) {
        $inscription = $bdd->prepare("INSERT INTO membres(pseudo, email, password) VALUES(:pseudo, :email, :password)");
        $inscription->execute([
            //htmlentities est de se prémunir des failles XSS (hameçonnage, une usurpation d'identité) on évite ainsi les éventuelle faille en protègeant les données qui viennent d'un visiteur extérieur en l'entourant avec la fonction htmlentities
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            
            //la fonction password_hash () Crée une clé de hachage pour un mot de passe / hache le mot de passe pour sa sécurité
//PASSWORD_DEFAULT est un protocole de cryptage, qui utilisera le protocole de cryptage le plus sécurisé du moment (BCRYPT actuellement)
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        
        unset($_POST["pseudo"]);
        unset($_POST["email"]);
        unset($_POST["emailconf"]);
        
    }
    
    return $erreur;
}


//on vérifie si le pseudo entré existe dans la base de données

function existe($pseudo) {
    global $bdd;
     //on récupère le nombre d'entrée qui ont le même pseudo qui ont été entré dans le formulaire
    $resultat = $bdd->prepare("SELECT COUNT(*) FROM membres WHERE pseudo = ?");
    $resultat->execute([$pseudo]);
    $resultat = $resultat->fetch()[0];
    //si le resultat est true
    return $resultat;
}

//on creer la fonction connexion
function connexion() {
    global $bdd;
    
    extract($_POST);
    
    $erreur = "Les identifiants sont erronés";
    
    $connexion = $bdd->prepare("SELECT id, password FROM membres WHERE pseudo = ?");
    $connexion->execute([$pseudo]);
    $connexion = $connexion->fetch();
    
   
   if(isset($connexion["password"]) && password_verify($password, $connexion["password"])){
         $_SESSION["membre"] = $connexion["id"];
         header("Location: compte.php"); //redirection du membre à la page de connexion
    } else
        return $erreur;
}

function deconnexion() {
    unset($_SESSION["membre"]); //on détruit la variable de session qui s'appelle membre
    session_destroy(); //on détruit totalement la session
    header("Location: connexion.php");//on redirige le membre sur le formulaire de connexion pour qu'il se reconnecte
}


//
function infos() {
    global $bdd;
    
    $membre = $bdd->prepare("SELECT pseudo, email FROM membres WHERE id = ?");
    $membre->execute([$_SESSION["membre"]]);
    $membre = $membre->fetch();
    
    return $membre;
}


