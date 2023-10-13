<?php
     //Vérifier si l'utilisateur est authentifié au niveau du site
        session_start();
        if(!isset($_SESSION["auth"])){
            header("Location: ../../login.php");
        } 
        
        require("../database.php");
        
     //Vérifier si l'id est rentré en paramètre dans l'URL
        if(isset($_GET["id"]) AND !empty($_GET["id"])) {

        //L'id de la question en paramète
            $idQuestion = $_GET["id"];

         //Vérifier si la question existe
            $checkIfQuestionExist = $bdd->prepare("SELECT id_auteur FROM Questions WHERE id = ?");
            $checkIfQuestionExist->execute(array($idQuestion));
            
            if ($checkIfQuestionExist->rowCount() > 0) {

                //Récupérer les infos de la question
                $questionInfos = $checkIfQuestionExist->fetch();
                if($questionInfos["id_auteur"] == $_SESSION["id"]){

                    //Supprimer la question en fonction de son id rentré en paramètre
                    $checkIfQuestionExist = $bdd->prepare("SELECT id_auteur FROM Questions WHERE id = ?");
                    $deleteThisQuestion = $bdd->prepare("DELETE FROM questions WHERE id = ? ");

                    $deleteThisQuestion->execute(array($idQuestion));

                    //Rediriger l'utilisateur vers ses questions
                    header('Location: ../../my-question.php');

                }else{
                    echo "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
                 }

            }else{
            echo "Aucune question n'a été trouvée";
         }

        }else{
            echo  "Aucune question n'a été trouvée";
        }

    ?>