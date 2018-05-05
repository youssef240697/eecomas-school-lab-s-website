<?php
session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!isset($_SESSION['name']) or $_SESSION['is_admin'] == 0){ //If session not registered and mashi admin
header("location:login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<?php
if (isset($_POST['supprimer']) && $_POST['supprimer']=='supprimer') {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email=htmlentities($_POST['email']);
        $link=mysqli_connect("localhost","root","","eecomas");
        if ($link) {
            $sql1="SELECT* FROM enseignant WHERE email='".$email."'";
            $donnees1=mysqli_query($link,$sql1);
            if (mysqli_num_rows($donnees1)!=0) {
				$data1 = mysqli_fetch_assoc($donnees1);
                $sql2="DELETE FROM enseignant WHERE id_enseignant='".$data1['id_enseignant']."'";
                $donnees2=mysqli_query($link,$sql2);
				//si il est admin on supprime son compte aussi
				if($data1['is_admin'] == 1){
				$sql3="DELETE FROM admin WHERE id_enseignant='".$data1['id_enseignant']."'";
				$donnees3 = mysqli_query($link,$sql3);
				}
                if ($donnees2) {
                    $succes="Ce profil a été supprimé avec succès";
                } else {
                    $erreur="Ce profil n'a pas été supprimé ";
                }
                
            } else {
                $erreur="Ce profil n'existe pas ";
            }
            
        } else {
            $erreur="Echec de connexion à la base de données ";
        }
        
    } else {
        $erreur="Le champ email est vide";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
      <style type="text/css">
        .erreur{
            <?php if (isset($erreur)) {
                echo "background-color: red;";
            } else {
                echo "background-color: green;";
            }
             ?>
            border-width: 1px;
            border-radius: 5px;
            font-size: 2em;
            color: white;
            width:40%;
            padding-top:20px;
            padding-bottom:20px;
            margin-top: 60px;
            margin-left:auto;
            margin-right:auto;
            text-align: center
            }
    </style>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
               
                </button>
                <a class="navbar-brand" href="index.php">Admin EECOMAS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
						<?php
						if($_SESSION['is_admin'] == 1){
						include('config.php');
						$sql = "select * from message";
						$resultat = mysqli_query($dbC,$sql);
						if($resultat)
						$nombre = mysqli_num_rows($resultat);
                        echo '<li><a href="affichermessage.php"><i class="fa fa-user fa-fw"></i>';
						if (isset($nombre)){echo"Messages($nombre)</a>";}
                        echo '</li>';
						}
						?>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                       
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="myprofil.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="index.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                           
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Les profiles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<?php
								if($_SESSION['is_admin'] == 1){
                                echo "<li>";
                                echo '<a href="formprofil.php">Ajouter un profil</a>';
                                echo '</li>';
								}
								?>
								<li>
                                    <a href="modifierprofil.php">modifier votre profil</a>
                                </li>
								
								<?php 
								if($_SESSION['is_admin'] == 1){
                                echo "<li>";
                                echo '<a href="supprimeprofil.php">Supprimer un profil</a>';
                                echo '</li>';
								}
								?>
								<?php
								if($_SESSION['is_admin'] == 1){
                                echo "<li>";
                                echo '<a href="visualiseprofil.php">Visualiser les profils</a>';
                                echo '</li>';
								}
								?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php
								if($_SESSION['is_admin'] == 1){
                        echo"<li>";
						echo '<a href="ajouterannonce.php"><i class="fa fa-edit fa-fw"></i> Ajoutez une annonce</a>';
						echo "</li>";
								}
						?>
                        
                       
                        <li>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
               
                <!-- /.col-lg-12 -->
            </div>
          <body>
            <?php
                    if(isset($erreur)){echo "<h3 class='erreur'>".$erreur."</h3>";}elseif (isset($succes)) {
                        echo "<h3 class='erreur'>".$succes."</h3>";
                    }
                    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                
                    <div class="panel-heading">
                        <h3 class="panel-title">Supprimez un profil</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="supprimeprofil.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" style="background-color:red;" value="supprimer" name="supprimer" >
                            </fieldset>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>               
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

</body>

</html>
