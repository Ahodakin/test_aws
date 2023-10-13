<?php

  require 'action/database.php'; 
  session_start();

    //Validation du formulaire
      if(isset ($_POST["validate"])) {

       //Vérifier si l'user a bien complété tous les champs
        if(!empty($_POST["email"]) AND !empty($_POST["mdp"])){

            //Les données de l'user
            $user_email = htmlspecialchars($_POST["email"]);
            $user_mdp = htmlspecialchars($_POST["mdp"]);

            //Vérifier si l'utilisateur existe (si le pseudo est correct)
            $getusersInfosReq = $bdd->prepare('SELECT * FROM users WHERE email = ?');
            $getusersInfosReq->execute(array($user_email));
            
            if ( $getusersInfosReq->rowCount () > 0){

              //Récupérer les données de l'utilisateur
              $getusersInfos = $getusersInfosReq->fetch();
              
              //Vérifier si le mot de passe est correct
              if(password_verify( $user_mdp,  $getusersInfos["mdp"])){

                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                $_SESSION["auth"] = true;
                $_SESSION["id"] = $getusersInfos["id"];
                $_SESSION["N_d_utilisateur"] =$getusersInfos["N_d_utilisateur"];
                $_SESSION["email"] =   $getusersInfos["email"];
                $_SESSION["mdp"] =$getusersInfos["mdp"];

                //Rediriger l'utilisateur vers la page d'accueil
                header("Location:publish-question.php");

              }else{
                $errorMsg = "Votre email ou mot de passe est incorrect";
            }
            
            }else{
                $errorMsg = "Votre email ou mot de passe est incorrect";
            }
        
    }else{
      $errorMsg = "Veuillez compléter tous les champs.";
     }
}


?>