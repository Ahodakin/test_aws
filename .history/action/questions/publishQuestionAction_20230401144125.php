<?php
   require('action/database.php'); 
    session_start();

    
    if(!isset( $_SESSION["auth"]) &&  $_SESSION["auth"] !== true){
    header("location: login.php ");
    }
    $recuperer =  $_SESSION["email"];
    $id_user =  $_SESSION["id"];
    $user_name = $_SESSION["N_d_utilisateur"];
    
    //Valider le formulaire
    if(isset($_POST['validate'])) {

    //Vérifier si les champs ne sont pas vides
    if (!empty ($_POST["title"]) AND !empty($_POST["description"]) AND !empty($_POST["content"])) {

        //Les données de la question
        $_question_title = nL2br(htmlspecialchars($_POST["title"]));
        $_question_description = nL2br(htmlspecialchars($_POST["description"]));
        $_question_content = nL2br(htmlspecialchars($_POST["content"]));
        $_question_date = date("d/n/Y");

        //Insérer la question sur la question
        $insertQuestionWebsite = $bdd->prepare("INSERT INTO questions(title, description, content, email_auteur, date_pub, id_auteur, nom ) VALUE(?, ?, ?, ?, ?,?,?)");
        $insertQuestionWebsite->execute(array($_question_title, $_question_description, $_question_content, $recuperer, $_question_date, $id_user, $user_name));
        // $succesMsg = "votre question a été bien publiée sur le site";
        echo "<script>alert('votre question a été bien publiée sur le site')</script>";
    } else{
        $errorMsg = "Veuillez compléter tous les champs.";
    } 
}

?>