<?php
    session_start();
    require("c:/xampp/htdocs/project/action/questions/showArticleAction.php");
    require("c:/xampp/htdocs/project/action/questions/postAnswerAction.php");
    require("c:/xampp/htdocs/project/action/questions/showAnswerOfQuestionAction.php");
?>

<!DOCTYPE html>

<html lang="en-us">
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

<div class="container">
	<div class="columns is-desktop is-multiline is-gapless is-justify-content-center">
  <?php 
          if(isset($errorMsg)){echo $errorMsg; }

            if(isset($question_date_pub)){
    ?>
			<div class="column is-6-widescreen is-8-desktop col-md-8 col-lg-6 has-text-left-desktop has-text-centered">
				<h2 class="mb-2"><?php echo $question_title; ?></h2><hr>

				<div class="content">
					<p><?php echo $question_description; ?></p><hr>
					<p><?php echo $question_content; ?></p><hr>

                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <span><?php echo $question_nom?> </span>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i><?php echo $question_date_pub;?> 
                            </li>
                        </ul>
                    
                    <div class="input-group">
                        <label for="name">Réponse </label>
                        <input type="text"  id="name" class="input" placeholder="John Doe" name="answer"><br><br>
                        <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                    </div>
                    <?php 
                          while($answer = $getAllAnswer->fetch()){
                            ?>
          <article class="card mb-5">
          <div class="columns is-desktop card-body">

            <div class="column is-8-desktop">
              <h3 class="h4 mb-3"> <?php echo $answer['nom_auteur']; ?></h3><hr>
            </div>
            <div class="column is-8-desktop">
              <p> <?php echo $answer['contenu']; ?></p>
            </div>
          </div>
        </article>
        <?php
                         }
                  ?>
			    </div>
          <?php 
        }
          ?>
          
  </div>
</div>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>