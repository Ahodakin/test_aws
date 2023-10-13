

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
        <h1 class="mb-4">Liste des participants</h1>
      </div>
    </div>
  </div>

  <?php require "include/design.php";?>
  
</div>
<div class="py-3"></div>

<section class="section">
  <div class="container">
    <div class="columns is-multiline is-desktop is-justify-content-center" >
    <div style="width: 100%;
    box-shadow: 10px 5px 5px #Ce0033;">

  <table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Numéro</th>
      <th>Email</th>
    </tr>
  </thead>


</table>

     

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
