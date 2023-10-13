<?php

    require 'action/database.php'; 
    session_start();

    //Validation du formulaire
    if(isset($_POST["validate"])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST["N_d_utilisateur"]) && !empty($_POST["email"]) && !empty($_POST["mdp"])){

        //Les données de l'user
        $user_N_d_utilisateur = htmlspecialchars($_POST["N_d_utilisateur"]);
        $user_email = htmlspecialchars($_POST["email"]);
        $user_mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);


        //Vérifier si l'utilisateur existe déjà sur le site
        $recup = $bdd ->prepare("SELECT email FROM users WHERE  email = ? ");
        $recup->execute(array($user_email));

        if($recup->rowCount()==0){
        //Insérer l'utilisateur dans la bdd
        $insert = $bdd->prepare("INSERT INTO users (N_d_utilisateur,email,mdp) VALUES (?,?,?)");
        $insert-> execute(array( $user_N_d_utilisateur, $user_email,  $user_mdp));

        //Récupérer les informations de l'utilisateur
        $getusersInfosReq = $bdd->prepare("SELECT id, N_d_utilisateur, email FROM users WHERE N_d_utilisateur = ? AND  email = ? AND mdp = ?");
        $getusersInfosReq->execute(array($user_N_d_utilisateur, $user_email, $user_mdp));

        $usersInfos = $getusersInfosReq->fetch();

        //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
        $_SESSION["auth"] = true;
        $_SESSION["id"] =  $usersInfos["id"];
        $_SESSION["N_d_utilisateur"] =  $usersInfos["N_d_utilisateur"];
        $_SESSION["email"] =  $usersInfos["email"];
        $_SESSION["mdp"] =  $usersInfos["mdp"];

        //Rediriger l'utilisateur vers la page d'accueil
        header("Location:index.php");
        } 
        else{
            $errorMsg = "L'utilisateurs existe déjà sur le site";}

        } else{
            $errorMsg = "Veuillez compléter tous les champs."; }
    }
?>