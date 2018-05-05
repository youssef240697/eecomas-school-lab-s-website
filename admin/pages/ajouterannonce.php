<?php
session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!isset($_SESSION['name']) or $_SESSION['is_admin'] == 0){ //If session not registered and mashi admin
header("location:login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
	.feedback1{
width:650px;
padding:15px;
font-size:30px;
color:#FFFFCC;
background-color:#009900;
font-family:Arial, Helvetica, sans-serif;
text-align:center;
}

.feedback2{
width:650px;
padding:5px;
font-size:30px;
color:#FFFFCC;
background-color:#CC3300;
font-family:Arial, Helvetica, sans-serif;
text-align:center;
}
	
	</style>
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
                <div class="col-lg-12">
                    <h1 class="page-header">Formulaire d'annonce</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    <fieldset><h3 style=" margin:35px; text-align: center;">Ajoutez votre annonce</h3></fieldset>
                        <table style="margin: auto;">
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Titre</label></td>
                        <td><input type="text" name="titre" ></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;" >Description de l'annonce</label></td>
                        <td><textarea name="description" rows=4 cols=40></textarea></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Date d'expiration de l'annonce</label></td>
                        <td><input type="Date" name="dateannonce"></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Image d'acceuil a propos d'annonce</label></td>
                        <td><input type="file" name="imgannonce"></td></tr>
                        <tr><td></td><td><input type="submit" name="envoyer" value="Effectuer"></td></tr>
                        </table>
                </form>
            </div>
                                
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php 

   

if( isset($_POST['envoyer']) ) // si formulaire soumis
{
    $content_dir = '../../../annonce/'; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES['imgannonce']['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }

   	$target_file = $content_dir.basename($_FILES["imgannonce"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if (move_uploaded_file($_FILES["imgannonce"]["tmp_name"], $target_file)) {
        echo "<div class='feedback1'>le fichier". basename( $_FILES["imgannonce"]["name"]). " a été uploader.</div>";
    		} 
	else {
        echo "<div class='feedback2'>pas d'image.</div>";
		}
$titre=addslashes($_POST['titre']);
   $description=addslashes($_POST['description']);
   $datelimite=addslashes($_POST['dateannonce']);
   
   $nom_image=basename( $_FILES["imgannonce"]["name"]);


   $sql="INSERT INTO annonce (titre,description_annonce,dateannonce,lien_image) VALUES ('$titre','$description','$datelimite','$nom_image')";
   $link = mysqli_connect("localhost","root","","eecomas") or die("Echec de connexion à la base");
   $result=mysqli_query($link,$sql);
   if($result==false)
     {
        echo "<div class='feedback2'>echec d'enregistrement</div>";
     }
     else
     {
        echo "<div class='feedback1'>L'enregistrement reussite</div>";
     }
}
     

?>











   