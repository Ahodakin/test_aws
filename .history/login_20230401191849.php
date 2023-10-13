<?php 
     require 'action/users/loginAction.php'; 
  ?>

<!DOCTYPE html>

<html lang="en">
  <?php include 'include/head.php'; ?>
<body>


  <!-- navigation -->
  <?php require "include/navbar1.php";  ?>
<!-- /navigation -->

<div class="header has-text-centered">
  <div class="container">
    <div class="columns">
      <div class="column is-9-widescreen mx-auto">
        <h1 class="mb-4">S'inscrire</h1>
        <ul class="list-inline">
          <li class="list-inline-item text-primary">Se Connecter</li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php require "include/design.php";  ?>
</div>
<div class="py-3"></div>

<section class="section">
  <div class="container">
    <div class="columns is-multiline is-desktop is-justify-content-center" >

    <?php if(isset ($errorMsg)){ echo "<p>".$errorMsg."</p>"; } ?> 
        <div class="swoh">
            <form action="" >

                <div >
                    <label >Email</label>
                    <input type="email" class="input" name="email">
                </div>

                <div >
                    <label>Password</label>
                    <input type="password" class="input" name="mdp">
                </div> <br>

                <button type="submit" class="btn btn-primary" name="validate">Connexion</button> <br> <br>
                <a href="signup.php"> <p class="login"> je n'ai pas de compte, je m'inscrire</p></a>
            </form>
        </div>
    </div>
  </div>
</section>



  <!-- JS Plugins -->
  <script src="assets/plugins/jQuery/jquery.min.js"></script>

  <script src="assets/plugins/slick/slick.min.js"></script>

  <script src="assets/plugins/instafeed/instafeed.min.js"></script>

  <!-- Main Script -->
  <script src="assets/js/script.js"></script></body>

</html>
