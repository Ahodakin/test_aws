<?php 
    session_start();
    require("action/questions/showQuestionAction.php");
?>
<!DOCTYPE html>

<html lang="en">
  <?php include 'include/head.php'; ?>
  <body>

    <!-- navigation -->
      <?php require "include/navbar.php";  ?>
    <!-- /navigation -->

    <!-- start of banner -->
    <div class="banner has-text-centered">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-9-widescreen">
            <h1 class="mb-6">What Would You <br> Like To Read Today?</h1>
            <iframe src="https://embed.lottiefiles.com/animation/140433">reine</iframe>
          </div>
        </div>
      </div>

      <?php require "include/design.php";  ?>

    </div>
    <!-- end of banner -->

    <section class="section-sm">
      <div class="container">

        <div class="pt-5">
          <form method="GET">  
            <div class="input-group py-0 column is-4-desktop">
              <input class="input" type="text" placeholder="Rechercher" name="search">
              <br><br>
              <button type="submit" class="btn btn-primary"> Rechercher</button>
            </div>
          </form>
        </div>

      <div class="columns is-multiline is-desktop is-justify-content-center">       
        <div class="column is-8-desktop mb-5">
        <h2 class="h5 section-title">Recent Post</h2>

          <?php
          while($question = $getAllQuestion->fetch()){
            ?>
      
                    <article class="card mb-4">

                    <div class="card-body">
                        <h3 class="mb-3"><a class="post-title" href="article.php?id=<?php echo $question["id"]; ?>"><?php echo $question["title"];?></a></h3>

                        <ul class="card-meta list-inline">

                          <li class="list-inline-item">
                              <a class="card-meta-author" href="profile.php?id=<?php echo $question["id_auteur"];?>"><span><?php echo $question['nom'];?></span></a>
                          </li>

                          <li class="list-inline-item">
                              <i class="ti-calendar"></i><?php echo $question["date_pub"]; ?>
                          </li>

                        </ul>

                        <div>
                          <?php echo $question["description"]; ?> <br> <br>
                          <?php echo $question["content"]; ?>
                        </div>

                    </div>
            
                </article> 
                  <?php
                }
              ?>
            </div>
        </div>  
      
    </section>

  </body>
 <!-- footer-->
 <?php require "include/footer.php";  ?>
  <!-- /footer-->

</html>
