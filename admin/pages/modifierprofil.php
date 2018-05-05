<?php
session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!isset($_SESSION['name'])){ //If session not registered and mashi admin
header("location:login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                    <h1 class="page-header">Formulaire d'inscription</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		<!--HNAAYAAAA L CODE ------------------------------------------------------------------------------------------------------------------------->

			<?php
			$link = mysqli_connect("localhost","root","","eecomas") OR DIE ("Echec de connexion");
			$sql = "select * from enseignant where id_enseignant=".$_SESSION['id'];
			$resultat = mysqli_query($link,$sql);
			$dataa = mysqli_fetch_assoc($resultat);
			?>
            <div>
			<!--HNAAYAAAA L CODE ------------------------------------------------------------------------------------------------------------------------->
                <form action="modifierprofil.php" method="post" enctype="multipart/form-data">
                    <fieldset><h3 style=" margin:35px; text-align: center;">modifier votre profil</h3></fieldset>
                        <table style="margin: auto;">
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Le nom</label></td>
                        <td><input type="text" name="nom" value="<?php echo $dataa['nom'];?>"></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Le Prenom</label></td>
                        <td><input type="text" name="prenom" value='<?php echo $dataa['prenom'];?>' ></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;" >Description de profil</label></td>
                        <td><textarea name="description" rows=9 cols=100><?php echo $dataa['description'];?></textarea></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Email</label></td>
                        <td><input type="email" name="emailprofil" value="<?php echo $dataa['email'];?>"></td></tr>
						<tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Mot de Passe</label></td>
                        <td><input type="text" name="password"></td></tr>
                        <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Photo</label></td>
                        <td><input type="file" name="imgprofil"></td></tr>
						 <tr><td style="padding: 15px;"><label style="display: inline-block; width: 300px;">Département</label></td>
						<td><select name="id_dep" size="1">
							<option value="1" <?php if($dataa["id_dep"] == 1) echo "SELECTED";?>>	Informatique Logistique et Mathématiques</option>
							<option value="2" <?php if($dataa["id_dep"] == 2) echo "SELECTED";?>>Génie Electrique, Réseaux et Systèmes de Télécommunication</option>
						</select>
							 </td></tr>
                        <tr><td></td><td><input type="submit" name="envoyer" value="Ajouter"></td></tr>
                        </table>
                </form>
				<?php
					if(isset($_POST["envoyer"])){
						
						$nom = $_POST["nom"];
						$password = $_POST["password"];
						$prenom = $_POST["prenom"];
						$description = $_POST["description"];
						$id_dep = $_POST['id_dep'];
						$email = $_POST["emailprofil"];
						$target_dir = "../../../upload/";
						$target_file = $target_dir.basename($_FILES["imgprofil"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						if (move_uploaded_file($_FILES["imgprofil"]["tmp_name"], $target_file)) {
        				echo "<div class='feedback1'>le fichier". basename( $_FILES["imgprofil"]["name"]). " a été uploader.</div>";
    					} 
						else {
        				echo "<div class='feedback2'>pas d'image.</div>";
						}
						$link = mysqli_connect("localhost","root","","eecomas") OR DIE ("Echec de connexion");
						$sql = "update enseignant set nom = '$nom',id_dep='$id_dep',prenom='$prenom',email='$email',description='$description',image_ens='".basename( $_FILES["imgprofil"]["name"])."' where id_enseignant='".$_SESSION['id']."'";
						$sql_admin = "update admin set password=sha('$password') where id_enseignant='".$_SESSION['id']."'";
						$resultat_admin = mysqli_query($link,$sql_admin);
						$resultat = mysqli_query($link,$sql);
						
						
					}

						
				?>
				<!--FINN ------------------------------------------------------------------------------------------------------------------------->

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
