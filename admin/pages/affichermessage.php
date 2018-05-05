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

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
      <style type="text/css">

    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	display: block;
    border-collapse: collapse;
    margin: auto;
		margin-left: 250px;
	width: 100%;
}
#customers td, #customers th {
	font-weight: bold;
    border: 1px solid #ddd;
    padding: 8px;
}
	  
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
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
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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

   <div class="container">
        <div class="row">
                
                  <!-- <div class="panel-heading">
                        <h3 class="panel-title">Supprimez un profil</h3>
                    </div>
                    <div class="panel-body">!-->

                       <table id="customers">
                        <tr>
                            <td>Nom : </td>
                            <td>Email : </td>
                            <td>Objet : </td>
                            <td>Message : </td>
                        </tr>
                         <?php
                        include('config.php');
                        $requette="SELECT* FROM message";
                        $resultat=mysqli_query($dbC,$requette);
                        while ($donnees=mysqli_fetch_assoc($resultat)) {
                            echo '<tr>';
                            echo '<td>'.$donnees['nom'].'</td>';
                            echo  '<td>'.$donnees['email'].'</td>';
							echo  '<td>'.$donnees['objet'].'</td>';
							echo  '<td>'.$donnees['message'].'</td>';
							;
							
                            echo '</tr>';
                        }




                        ?>
                           
                       
                       </table>
    
                   <!-- </div>!-->
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
