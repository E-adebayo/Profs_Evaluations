<?php session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image" href="../../../assets/img/iai.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Institut Africain d'informatique</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../../../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="../../../assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../../../assets/img/sidebar.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
                    Menu
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="../prof/AffichageProf.php">
                        <i class="pe-7s-user"></i>
                        <p>Professeurs</p>
                    </a>
                </li>
                <li class="active">
                    <a href="AffichageUE.php">
                        <i class="pe-7s-note2 "></i>
                        <p>Unités d'Enseignement</p>
                    </a>
                </li>
                <li >
                    <a href="../ec/AffichageEC.php">
                        <i class="pe-7s-note2"></i>
                        <p>Eléments Constitutifs</p>
                    </a>
                </li>
                <li>
                    <a href="../Statistiques.php">
                        <i class="pe-7s-graph"></i>
                        <p>Statistiques</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="navbar-brand" href="#">Bienvenue <b><?php echo $_SESSION['login']; ?></b></a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../../auth/deconnexion.php">
                                <p>Déconnexion</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="background-color: white">
                            <div class="header">
                                <h4 class="title"style="text-align: center;">Supprimer une UE</h4>
                            </div>
                            <div class="content">
                                <form method="POST" >
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="Code_UE" >Code_UE:</label>
                                                <input type="text" class="form-control" id="Code_UE" placeholder="Entrer le code" name="Code_UE">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div><br><br><br> 

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="Libelle_UE">Libelle_UE:</label>
                                                <input type="text" class="form-control" id="Libelle_UE" placeholder="Entrer le libelle " name="Libelle_UE">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div><br><br> 

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-primary btn-fill" ><a href="AffichageUE.php" style="color: white">Annuler</a></button>&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary btn-fill " name="supprimer"><a href="AffichageUE.php" style="color:white" >Supprimer</a></button>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div><br><br>


                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
               <div class="copyright" style="text-align: center;">
                    <h5>&copy; 2020 Copyright:
                        <a href="http://iai-togo.tg" target="_blank">iai-togo.tg</a> 
                         |  All rights reserved
                    </h5>
                 </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <script src="../../../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../assets/js/chartist.min.js"></script>
    <script src="../../../assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="../../../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="../../../assets/js/demo.js"></script>

</html>

<?php 

require_once('../../auth/connexion.php');
$ac = new connexion();
$con = $ac->connection();

if (isset($_POST['Supprimer'])) {
$Code_UE = $_POST['Code_UE'];

    $req = $con->prepare("DELETE FROM `ue` WHERE `Code_UE` = '$Code_UE' ");
    $req->execute();
    header("location:AffichageUE.php");
}
?>
