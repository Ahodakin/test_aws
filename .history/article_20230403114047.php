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
                      <form action="" method="POST">
                        <label for="name">Réponse </label>
                        <input type="text"  id="name" class="input" placeholder="John Doe" name="answer"><br><br>
                        <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                   </form> 
                  </div>
                    <?php 
                          while($answer = $getAllAnswer->fetch()){
                            ?>

<div class="widget">
    <h4 class="widget-title"><span>Never Miss A News</span></h4>
    <form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank"
      class="widget-search">
      <input class="mb-3" id="search-query" name="s" type="search" placeholder="Your Email Address">
      <i class="ti-email"></i>
      <button type="submit" class="btn btn-primary btn-block" name="subscribe">Subscribe now</button>
      <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
      </div>
    </form>
  </div>
          <article class="card mb-5">
          <div class="columns is-desktop card-body">

            <div class="column is-8-desktop">
              <h3 class="h4 mb-3"> <?php echo $answer['nom_auteur']; ?></h3>
<hr>
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