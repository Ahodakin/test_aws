    <?php
        require("action/database.php");

        if(isset($_GET['id']) AND !empty($_GET['id'])){

          //Récupérer l'identifiant de la question
          $idOfTheQuestion = $_GET['id'];
      
          //Vérifier si la question existe
          $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
          $checkIfQuestionExists->execute(array($idOfTheQuestion));
      
          if($checkIfQuestionExists->rowCount() > 0){
      
              //Récupérer toutes les datas de la questions
              $questionsInfos = $checkIfQuestionExists->fetch();
      
              //Stocker les datas de la question dans des variables propres.
              $question_title =  $questionsInfos['title'];
              $question_description =  $questionsInfos['description'];
              $question_content =  $questionsInfos['content'];
              $question_nom =  $questionsInfos['nom'];
              $question_date_pub =  $questionsInfos['date_pub'];
              
          }else{
              $errorMsg = "Aucune question n'a été trouvée";
          }
      
      }else{
          $errorMsg = "Aucune question n'a été trouvée";
      }
        
    ?>