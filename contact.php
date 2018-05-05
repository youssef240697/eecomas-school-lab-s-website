<!DOCTYPE html>
<html lang="en">

<head>
	<style>
	.feedback1{
width:450px;
padding:5px;
border-radius:5px;
font-size:20px;
margin-left:20%;

color:#FFFFCC;
background-color:#009900;
font-family:Arial, Helvetica, sans-serif;
text-align:center;
}

.feedback2{
width:450px;
border-radius: 5px;
padding:5px;
margin-left:20%;
font-size:30px;
color:#FFFFCC;
background-color:#CC3300;
font-family:Arial, Helvetica, sans-serif;
text-align:center;
}
	
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/title.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Laboratoire</title>

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
        <div class="bg-img" style="background-image: url('img/local.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Nav -->
        <nav id="nav" class="navbar">
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
                            <li><a href="theses.html">Théses</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.html">Nous Contacter</a></li>
                </ul>
                <!-- /Main navigation -->

            </div>
        </nav>
            <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h2 class="white-text">Electrical Engineering, Computing and Mathematical Sciences</h2>
                            <p class="white-text">" Penser requiert d'être assez modeste pour admettre son ignorance</br> et assez présomptueux pour croire qu'on peut la combler."</p>
                            <span style="font-weight: bold">[El Mehdi Ghalim. (2016) L'art de penser.]</span>
                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
    <!-- About -->
       <!-- Contact -->
    <div id="contact" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section-header -->
                <div class="section-header text-center">
                    <h2 class="title">Nous contacter</h2>
                </div>
                <!-- /Section-header -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <h3>Tel</h3>
                        <p>(+212) 5 37 32 94 48</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <h3>Email</h3>
                        <p>nsty.projetweb2017.2018@gmail.com</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <h3>Addresse</h3>
                        <p>Ecole Nationale des Sciences Appliquées de Kénitra | Adresse : campus universitaire, B.P 241, Kénitra - Maroc</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact form -->
                <div class="col-md-8 col-md-offset-2">
					<?php
						if(isset($_GET['succes'])){
							echo "<div class='feedback1'>votre message a été envoyé avec succés</div>";
						}
						if(isset($_GET['erreur'])){
							echo "<div class='feedback2'>votre message n'a pas été envoyé</div>";
						}
						 ?>
                    <form class="contact-form" name="form" action="admin/pages/message.php" method="post">
						
                        <input type="text" name="nom" required class="input" placeholder="Votre nom">
                        <input type="email" name="email" required class="input" placeholder="Email">
                        <input type="text" name="objet" required class="input" placeholder="Objet">
                        <textarea class="input" required name="message" placeholder="Message"></textarea>
                        <button class="main-btn" name="submit" >Envoyer un message</button>
                    </form>
                </div>
                <!-- /contact form -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Contact -->


<footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">


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




    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>