<?php

require("action/database.php");

//Récuper les questions par défaut sans recherche
$getAllQuestion = $bdd->query("SELECT id, id_auteur, title, description, content, date_pub, nom FROM questions ORDER BY id DESC LIMIT 0,5");

// Vérifier si une recherche a été rentrée par l'utilisateur
if (isset($_GET["search"]) AND !empty($_GET["search"])) {

//Recherche
    $usersSearch = $_GET["search"];
    
    //Récupérer toutes les questions qui correspondent à  la recherche (en fonction du titre)
    $getAllQuestion= $bdd->query('SELECT id, id_auteur, title, description, content, date_pub, nom FROM questions WHERE title LIKE "%'.$usersSearch.'%" ORDER BY id DESC');
}

?>