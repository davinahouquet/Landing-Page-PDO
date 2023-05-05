<?php

//On met le lien avec la BDD dans une fonction pour nous permettre de la rapppeler plus tard ! Sinon hors de portée
function connexion(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=landing_page;charset=utf8', 'root', '');
        return $db;
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

// On récupère TOUT le contenu de la table pricing
function getAllPricings(){

    //Essentielle sinon pas de lien avec la base de données !!!
    $db = connexion();
    $sqlQuery = 'SELECT * FROM pricing';
    $pricing = $db->prepare($sqlQuery);
    $pricing->execute();
    return $pricing->fetchAll();

}

?>

