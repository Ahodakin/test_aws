<?php
     require 'action/database.php';
     
      //Validation du formulaire
     if(isset($_POST["validate"])) {

      //Vérifier si les champs sont remplis
      if(!empty($_POST["title"]) AND !empty($_POST["description"]) AND !empty($_POST["content"]))
      
      //Les données à faire passer dans la requête
      $new_question_title = nL2br(htmlspecialchars($_POST["title"]));
      $new_question_description = nL2br(htmlspecialchars($_POST["description"]));
      $new_question_content = nL2br(htmlspecialchars($_POST["content"]));

      //Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
      $editQuestion = $bdd->prepare("UPDATE questions SET title = ?, description = ?, content = ? WHERE id = ?");
      $editQuestion->execute(array($new_question_title, $new_question_description, $new_question_content, $idOfQuestion));

      //Redirection vers la page d'affichage des questions de l'utilisateur
      header("location: my-question.php");

     }else{
        $errorMsg = "compléter tous les champs...";
     }

?> 