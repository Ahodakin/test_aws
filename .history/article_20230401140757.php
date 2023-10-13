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
				<h3 class="mb-2">Charls Xaviar</h2><hr>

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
					</div>
					
					<a class="post-count mb-1" href="author-single.html#post"><i class="ti-pencil-alt mr-2"></i><span
							class="text-primary">2</span> Posts by this author</a>
					<ul class="social-icons">
						
						<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
						
						<li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
						
						<li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
						
						<li class="list-inline-item"><a href="#"><i class="ti-link"></i></a></li>
						
					</ul>
			</div>
		</div>
	</div>

  <!-- footer-->
  <?php require "include/footer.php";  ?>
<!-- /footer-->

</html>