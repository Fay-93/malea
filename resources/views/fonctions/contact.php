<?php
/*on crée une fonction pour contact*/

function contact() {
    global $bdd;
    
    extract($_POST); //on extrait les infos de la super global_POST
    
    //on crée une variable de validation // tant que la variable est true, c'est que le formulaire est remplie correctement et peut-etre envoyé. En cas d'erruer ma variable validation passe à false et le formulaire ne s'enverra pas et le script retournera les erreurs à la variable $erreur dans un tableau
    
    $validation = true;
    $erreurs = [];
    
    //on test si un des champs de formulaire est vide :
    if(empty($nom) || empty($email) || empty($texte)) {
        $validation = false;
        $erreurs[] = "Tous les champs sont obligatoires";
    }
    
     //on test si tous les champs sont renseignés :
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation = false;
        $erreurs[] = "L'adresse e-mail n'est pas valide";
    }
    
    //on vérifie si la variable est true
            //nl2br insère un retour à la ligne HTML à chaque nouvelle ligne// \r: un retour à la ligne et \n saute une ligne
    if($validation) {
        $to = "sambaum@free.fr";
        $sujet = 'Nouveau mmessage de ' . $nom;
        $message = '
        <h1>Nouveau mmessage de ' . $nom .'</h1>
        <h2> Adresse e-mail : ' . $email . '</h2>
        <p>' . nl2br($texte) . '</p> 
        ';
        $headers = 'From: ' . $nom . ' <' . $email . '>' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        
        mail($to, $sujet, $message, $headers);
        
        //on utilise la function Unset pour détruire la variable afin de vider les champs quand le formulaire est validé
    
        unset($_POST["nom"]);
        unset($_POST["email"]);
        unset($_POST["texte"]);
        
        
        
        
    }
        return $erreurs;
    
}
