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
				<h2 class="mb-2">Charls Xaviar</h2><hr>

				<div class="content">
					<p>Donec nisi dolor, consequat vel pretium id, auctor in dui. Nam iaculis, neque ac ullamcorper.</p><hr>
					<p>Donec nisi dolor, consequat vel pretium id, auctor in dui. Nam iaculis, neque ac ullamcorper.</p><hr>

                        <ul class="card-meta list-inline">
                            <li class="list-inline-item">
                                <span>John Doe</span>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>15 jan, 2020
                            </li>
                        </ul>
                        
                    <div class="input-group">
                        <label for="name">Réponse </label>
                        <input type="text"  id="name" class="input" placeholder="John Doe" name="answer"><br><br>
                        <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                    </div>
			    </div>
        }
          ?>
          
  </div>
</div>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>