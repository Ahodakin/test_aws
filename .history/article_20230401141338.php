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

<div class="container">
	<div class="columns is-desktop is-multiline is-gapless is-justify-content-center">

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
            <label for="name">Langage (Required)</label>
            <input type="text"  id="name" class="input" placeholder="John Doe" name="title" required>
          </div>
			    </div>
					
	</div>
</div>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>