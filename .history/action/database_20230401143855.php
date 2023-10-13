<?php
  
    $serveur = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'forum';
    if ($bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$password)) {} 
    else { 
      echo("une erreur a été trouvée : ". $e->getMessage());
    }
  

?>