<?php

require("action/database.php");
$getAllAnswer = $bdd->prepare("SELECT id_auteur, nom_auteur, id_question, contenu FROM reponse WHERE id_question = ? ORDER BY id DESC");
$getAllAnswer->execute(array($_GET['id']));
?>