<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/title.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Profil</title>

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
        <nav id="nav" class="navbar ">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="index.php">
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
                    <li><a href="index.php">Page d'acceuil</a></li>
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
                            <li><a href="#">Rapport</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Nous Contacter</a></li>
                    <li><a href="admin/pages">Espace Enseignant</a></li>
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
                            <p class="white-text">"La stabilité vient de l’équilibre entre ce qu’on sait et ce qu’on ignore."</p>
                            <span style="font-weight: bold">[El Mehdi Ghalim. (2016) L'art de penser.]</span>

                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>

<?php
    $id=intval($_GET['id_enseignant']);
    $bdd=new PDO('mysql:host=localhost;dbname=eecomas', 'root','');
    $reponse=$bdd->query('SELECT * FROM enseignant WHERE id_enseignant="'.$id.'" ');
    while($donnees=$reponse->fetch())
   {

?>
       <!-- Why Choose Us -->
    <div id="features" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- why choose us content -->
                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="title">Profil :</h2>
                    </div>
                    <p>Professeur chercheur au Laboratoire EECOMAS :</p>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Nom : <?php echo $donnees['nom']; ?></p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Prénom : <?php echo $donnees['prenom']; ?></p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>E-mail : <?php echo $donnees['email']; ?></p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Département :<?php
                                        if($donnees['id_dep']==1)
                                echo  'Informatique Logistique et Mathematiques';
                            else
                                echo  'Genie Electrique, Reseaux et Systemes de Telecommunication';
                        ?></p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Description : <?php echo $donnees['description']; ?></p>
                    </div>
                </div>
                <!-- /why choose us content -->

                <!-- About slider -->
                <div class="col-md-6">
                    <div id="about-slider" class="owl-carousel owl-theme">
                        <?php
                        if($donnees['image_ens']!=NULL)
                        {
                           echo '<img src="../../../upload/'.$donnees['image_ens'].'" alt="Image Perso"  />';
                        }
                        else
                        {
                            echo '<img  src="img\noimage.jpg" alt="pas d image pour ce profil" >';
                        }
                         }
                         ?>
                    </div>
                </div>
                <!-- /About slider -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Why Choose Us -->


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
