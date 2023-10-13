
<?php
    require("action/database.php");

    if(isset($_GET['id']) AND !empty($_GET['id'])){

        //L'id de l'utilisateur
        $idOfUser = $_GET['id'];
    
        //Vérifier si l'utilisateur existe
        $checkIfUserExists = $bdd->prepare('SELECT N_d_utilisateur FROM users WHERE id = ?');
        $checkIfUserExists->execute(array($idOfUser));
    
        if($checkIfUserExists->rowCount() > 0){
            
            //Récupérer toutes les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();
    
            $user_N_d_utilisateur = $usersInfos['N_d_utilisateur'];
            
    
            //Récupérer toutes les questions publiées par l'utilisateur
            $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_auteur = ? ORDER BY id DESC');
            $getHisQuestions->execute(array($idOfUser));
    
        }else{
            $errorMsg = "Aucun utilisateur trouvé";
        }
    
    }else{
        $errorMsg = "Aucun utilisateur trouvé";
    }
   
   
?>