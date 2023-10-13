<?php
    session_start();
    require("c:/xampp/htdocs/project/action/questions/showArticleAction.php");
    require("c:/xampp/htdocs/project/action/questions/postAnswerAction.php");
    require("c:/xampp/htdocs/project/action/questions/showAnswerOfQuestionAction.php");
?>

<!DOCTYPE html>

<html lang="en">
  <?php include 'include/head.php'; ?>
  <body>

    <!-- navigation -->
      <?php require "include/navbar.php";  ?>
    <!-- /navigation -->

    <div class="header has-text-centered">
      <div class="container">
        <div class="columns">
          <div class="column is-9-widescreen mx-auto">
            <h1 class="mb-4">Accéder</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-default" href="index.php">Home
                  &nbsp; &nbsp; /</a></li>
              <li class="list-inline-item text-primary">Accéder</li>
            </ul>
          </div>
        </div>
      </div>
      
      <?php require "include/design.php";  ?>
    </div>


            
            <?php 
              while($answer = $getAllAnswer->fetch()){
            ?>

            <div class="widget">
              <h4 class="widget-title"><span class="h5 section-title"><?php echo $answer['nom_auteur']; ?></span></h4>
              <div class="column is-8-desktop">
                <p><?php echo $answer['contenu']; ?></p> 
              </div>       
            </div>

            <?php
              }
            ?>
          </div>

      </div>
  


  </body>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
  <!-- /footer-->

</html>