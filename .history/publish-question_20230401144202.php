<?php 
        require ("action/questions/publishQuestionAction.php"); 
        require ("action/users/securityAction.php"); 
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
        <h1 class="mb-4">Publier </h1>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-default" href="index.php">Home
              &nbsp; &nbsp; /</a></li>
          <li class="list-inline-item text-primary">Publier une question</li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php require "include/design.php";  ?>
</div>

<section class="section-sm">
  <div class="container">
    <div class="columns">
      <div class="column is-8-widescreen mx-auto">
        
        <div class="content mb-5">
          <h2 id="we-would-love-to-hear-from-you">We would Love To Hear From You&hellip;.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa vitae felis augue. In venenatis scelerisque accumsan egestas mattis. Massa feugiat in sem pellentesque.</p>
        </div>
        
        <form method="POST" action="#">
         
          <div class="input-group">
              <label for="name">Langage (Required)</label>
              <input type="text"  id="name" class="input" placeholder="John Doe" name="title" required>
          </div>

          <div class="input-group">
            <label for="message">Description de la question</label>
            <textarea  id="message" class="input" placeholder="Lorem ipsum dolor sit amet..." name="description"></textarea>
          </div>

          <div class="input-group">
            <label for="message">Code source</label>
            <textarea id="message" class="input" placeholder="Lorem ipsum dolor sit amet..." name="content"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="validate">Plublié la question</button>

        </form>
      </div>
    </div>
  </div>
</section>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>