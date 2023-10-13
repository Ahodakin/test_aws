
<?php 
    require "c:/xampp/htdocs/project/action/questions/my-questionAction.php";
    require "c:/xampp/htdocs/project/action/users/securityAction.php";
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
        <h1 class="mb-4">Mes questions</h1>
        <ul class="list-inline">
          <li class="list-inline-item"><a class="text-default" href="index.php">Home
              &nbsp; &nbsp; /</a></li>
          <li class="list-inline-item text-primary">Mes questions</li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php require "include/design.php";  ?>
</div>
<div class="py-3"></div>

<section class="section">
  <div class="container">
    <div class="columns is-multiline is-desktop is-justify-content-center">

      <div class="column is-10-desktop">
      <?php 
     while($question = $getAllMyquestions->fetch()){
     ?>
        <article class="card mb-5">
          <div class="columns is-desktop card-body">

            <div class="column is-8-desktop">
              <h3 class="h4 mb-3"><a class="post-title" href="article.php?id=<?php echo $question["id"]; ?>"><?php echo $question["title"]; ?></a></h3>

              <p><?php echo $question["description"]; ?></p>
              <p><?php echo $question["content"]; ?></p>
              <a class="btn btn-outline-primary" href="article.php?id=<?php echo $question["id"]; ?>" >Accéder </a>
              <a class="btn btn-outline-primary" href="edit-question.php?id=<?php echo $question["id"]; ?>" >Modifier </a>
              <a class="btn btn-outline-primary" href="action/questions/deleteQuestionAction.php?id=<?php echo $question["id"]; ?>" onclick="return confirm('Voulez-vous supprimer?');">Supprimer </a>
            </div>
          </div>
        </article>
<?php     
  }
  ?>
      </div>
    </div>
  </div>
</section>

 <!-- footer-->
 <?php require "include/footer.php";  ?>
<!-- /footer-->

  
</body>
</html>
