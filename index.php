

<!DOCTYPE html>
<html lang="fr">
  <?php include 'include/head.php'; ?>
<body>


<!-- navigation -->
  <?php require "include/navbar.php";  ?>
<!-- /navigation -->

<div class="header has-text-centered">
  <div class="container">
    <div class="columns">
      <div class="column is-9-widescreen mx-auto">
        <h1 class="mb-4">Formulaire d'enregistrement des participants</h1>
      </div>
    </div>
  </div>
  
  <?php require "include/design.php"; ?>

</div>
<div class="py-3"></div>

<section class="section">
  <div class="container">
    <div class="columns is-multiline is-desktop is-justify-content-center" >
        <div class="swoh">

        <?php 
            if(isset ($errorMsg)){ 
             echo "<p>".$errorMsg."</p>";
             } elseif(isset( $succesMsg)){
             echo "<p>". $succesMsg."</p>";
                 }                
           ?> 
            <form action="" method="POST" >

                <div >
                    <label >Nom</label>
                    <input type="text" class="input" name="nom" require>
                </div>

                <div >
                    <label >Prénom</label>
                    <input type="text" class="input" name="prenom" require>
                </div>

                <div >
                    <label>Numéro</label>
                    <input type="tel" class="input" name="telephone" pattern="[0-9]{10}" required>
                </div> 

                <div>
                <label>Email</label>
                  <input type="email" name="email" class="input" require>  
                </div> <br>
                

                <button type="submit" class="btn btn-primary" name="validate">Envoyer</button> <br> <br>
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
