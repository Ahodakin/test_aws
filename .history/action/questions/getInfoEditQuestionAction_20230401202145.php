<?php
    require 'action/database.php'; 

    //Vérifier si l'id de la question est bien passé en paramètre dans l'URL
    session_start();
    if(isset($_GET["id"]) AND !empty($_GET["id"])){

        $idOfQuestion = $_GET["id"];
        
        //Vérifier si la question existe
        $checkQuestionExists = $bdd->prepare("SELECT * FROM questions WHERE id = ?");
        $checkQuestionExists->execute(array($idOfQuestion));

        if($checkQuestionExists->rowCount() > 0){

              //Récupérer les données de la question
            $questioninfo =  $checkQuestionExists->fetch();
            if($questioninfo["id_auteur"] == $_SESSION["id"]){

                $questiontitre = $questioninfo["title"];
                $questiondescription = $questioninfo["description"];
                $questioncontent = $questioninfo["content"];

                $questiondescription = str_replace('<br />', '', $questiondescription);
                $questioncontent = str_replace('<br />', '', $questioncontent);

            }else{
                $errorMsg = "Vous n'être pas l'auteur de cette question.";
            }
       
    }else{
        $errorMsg = "Aucune question n'a été trouvée";

    } 
    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

?>