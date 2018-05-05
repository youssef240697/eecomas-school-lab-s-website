<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/title.png" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Acceuil</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo2.png" alt="logo" >
							<img class="logo-alt" src="img/logo2.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.html">Page d'acceuil</a></li>
					<li class="has-dropdown"><a href="#blog">Presentation</a>
						<ul class="dropdown">
							<li><a href="ensa.html">Ensa</a></li>
							<li><a href="Laboratoire.html">laboratoire</a></li>
							<li><a href="membres.html">Membres</a></li>
							<li><a href="#">Textes juridiques</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#blog">Activité de recherche</a>
						<ul class="dropdown">
							<li><a href="axe_recherche.html">Axes de recherche</a></li>
							<li><a href="thss.html">Théses</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Nous Contacter</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/8.jpg" alt="Los Angeles" style="margin: auto;">
      <div class="container">
            <div class="carousel-caption">
						<div class="carousel-text">
            <h1  id="animated-example" class="animated bounceInRight" >IC-CC 2017 Conference</h1>			
						  <ul>
			 <li  id="animated-example" class="animated bounceInLeft">3th International Conference on Cybercrime and Cybersecurity </li>
			 </ul>
			             <a class="enigma_blog_read_btn animated bounceInUp" href="2017/03/23/3th-international-conference-on-cybercrime-and-cybersecurity-ic-cc-2017/index.html" role="button">Voir Plus</a>
			            </div>
						</div>
          </div>
    </div>

    

      <?php $link=mysqli_connect("localhost","root","","eecomas") or die("echec de connection a la base");
     $sql="SELECT * FROM annonce where dateannonce > (SELECT NOW())";
     $result=mysqli_query($link, $sql);
      while($data=mysqli_fetch_assoc($result))
      {
      	echo "<div class='item'>
      <img src='admin/pages/".$data['lien_image']."' alt='New York' style='margin: auto;'>
      <div class='container'>
            <div class='carousel-caption'>
						<div class='carousel-text'>";
						echo "<h1  id='animated-example' class='animated bounceInRight' >".$data['titre']."</h1>";
						echo " <ul>
			 <li  id='animated-example' class='animated bounceInLeft'>3th International Conference on Cybercrime and Cybersecurity </li>
			 </ul>";
						echo "</div>
						</div>
          </div>
    </div>
  </div>";
      }
      ?>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		<!-- home wrapper -->
		
	</header>
	<!-- /Header -->

	


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey" style="margin-top: 0px;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Articles récents</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/8.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Article 1</span>
						<h3>Titre d'article 1</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/DSC_8551-900x600.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Article 2</span>
						<h3>Titre d'article 2</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work2.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/imguniv.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Article 3</span>
						<h3>Titre d'article 3</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="./img/work3.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->


					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->




	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/logo2.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>© 2018 EECOMAS-LAB. All Rights Reserved.</p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
