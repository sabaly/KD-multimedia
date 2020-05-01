<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>KD-Multimedia</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon-kolo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Shadow+Info+Light:300,300i,400,400i,500,500i,600,600i,700,700i|Shadow+Info+Light+Two:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!--FontAwesome cdn-->
  <!--link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!--aos-master-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<!--==== header ====-->
	<header id="header" class=" align-items-center"> 

		<div class="container d-flex align-items-center">
			<div class="logo mr-auto">
		       <h1><a href="index.php">KD-Multimédia</a></h1> 
		    </div>

		    <nav id="menu" class="nav-menu d-none d-lg-block">
		        <ul>
		          <li class="active"><a href="#home">Acceuil</a></li>
		          <li class="drop-down"><a href="#">Musiques</a>
		            <ul>
		              <li><a href="#folklore">Folklore</a></li>
		              <li><a href="#galsen">Galsen</a></li>
		              <li><a href="#tradition">Traditionnelle</a></li>
		            </ul>
		          </li>
		          <li><a href="#instru">Instrumentales</a></li>
		          <li><a href="#events">Evénements</a></li>
		          <li><a href="#artists">Espace Artistes</a></li>
		          <li><a href="#about">A propos</a></li>

		        </ul>
        	</nav><!-- .nav-menu -->
		</div>


	  <!-- ======= Banner Section ======= -->
		<section id="banner" class="align-items-center">

		    <div class="container text-center text-md-center">
		        <h1>La music du Fuladu sous toutes ses formes</h1>
		        <h2>Ecouter, télécharger, créer vos playlistes ...</h2>
		        <a href="#about" class="btn-discover scrollto"><span>Decouvrir</span></a>
		    </div>

		</section><!-- ======= Banner Section end ======= -->

		<!--=== Frequence section ===-->
		<section id="frequences">
<?php
		for ($i=0; $i < 195 ; $i++) { 
?>
			<div class="progress" style="left: <?=(1 + ($i+1)/2).'%';?>">
		    	<div class="progress-bar" role="progressbar" style="background: #42455a;" aria-valuenow="<?= rand(1,99);?>" aria-valuemin="0" aria-valuemax="100" id="<?= "b".($i+1) ?>">
		    	</div>
		 </div>
<?php
		}
?>
		</section>
		
	</header><!--=== End header ===-->

	


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery.color/jquery.color.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/index.js"></script>

  <!--aos master-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>