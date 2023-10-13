
<?php
    require("action/database.php");

    if(isset($_POST["validate"])){

        if(isset($_SESSION["id"])){

            if(!empty($_POST["answer"])){

                $user_answer = nL2br(htmlspecialchars($_POST["answer"]));
    
                $insertAnswer =  $bdd->prepare("INSERT INTO reponse (id_auteur, nom_auteur, id_question, contenu) VALUE(?, ?, ?, ?)");
                $insertAnswer->execute(array ($_SESSION["id"], $_SESSION["N_d_utilisateur"],  $idOfTheQuestion, $user_answer));
            }else{
                echo '<script language="Javascript"> alert ("erreu" ) </script>';
            }
        }else{
            echo '<script language="Javascript"> alert ("vous ne pouvez pas répondre à cette publication. "<br>" Connectez-vous " ) </script>';
        }


    }
?>