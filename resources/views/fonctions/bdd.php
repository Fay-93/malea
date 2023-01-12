<?php

/*fonction pour se connecter à notre base de données*/
function bdd() {

    /* Pour vérifier si il y a une erreur :
cette fonction nous permet de vérifier s'il y a une erreur de connexion; Dans ce cas, une exception PDO sera 
renvoyée et stockée dans la variable $e, puis un message s'affichera pour indiquer l'erreur de connexion. En cas de pbm, cela évitera au mot de passe d'être affiché en clair sur le site à la vue de tous */

    try{
         $bdd = new PDO("mysql:dbname=samiabaum_maleaBlog;host=db.3wa.io;charset=UTF8", "samiabaum", "79356c7a269c862259dbc5decb12cc63"); /*on crée un un nouvel objet PDO qui fait le lien entre la variable bdd et la base de donnée*/
    } catch (PDOException $e) {
        echo 'connexion échouée : ' . $e->getMessage();
    }
    return $bdd;//on retourne $bdd pour qu'il soit contenu dnas la variable globale
    
}



