
<?php 
    require "c:/xampp/htdocs/project/action/questions/my-questionAction.php";
    require "c:/xampp/htdocs/project/action/users/securityAction.php";
  ?>
<!DOCTYPE html>

<html lang="en">
  <?php include 'include/head.php'; ?>
<body>
<?php 
            while($question = $getAllMyquestions->fetch()){
         ?>

  <!-- navigation -->
  <?php require "include/navbar1.php";  ?>
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

        <article class="card mb-5">
          <div class="columns is-desktop card-body">

            <div class="column is-8-desktop">
              <h3 class="h4 mb-3"><a class="post-title" href="post-elements.html">Elements That You Can Use In This Template.</a></h3>

              <p>Heading example Here is example of hedings. You can use this heading by following markdownify rules.</p>
              <a href="article.php" class="btn btn-outline-primary">Accéder </a>
              <a href="edit-question.php" class="btn btn-outline-primary">Modifier </a>
              <a href="" class="btn btn-outline-primary">Supprimer </a>
            </div>
          </div>
        </article>

      </div>
    </div>
  </div>
</section>

 <!-- footer-->
 <?php require "include/footer.php";  ?>
<!-- /footer-->
</html>
