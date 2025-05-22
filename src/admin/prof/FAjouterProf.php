<?php session_start(); ?>
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
                <li class="active">
                    <a href="AffichageProf.php">
                        <i class="pe-7s-user"></i>
                        <p>Professeurs</p>
                    </a>
                </li>
                <li>
                    <a href="../ue/AffichageUE.php">
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
                    <a href="../statistiques/Statistiques.php">
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
                                <h4 class="title"align="center">Ajouter un professeur</h4>
                            </div>
                            <div class="content">
                                <form method="POST" >
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="control-label " for="Code_PROF" >Code_PROF:</label>
                                                <input type="text" class="form-control" id="Code_PROF" placeholder="Entrer le code" name="Code_PROF">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div><br><br> 

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  for="Nom_Prof">Nom_Prof:</label>    
                                                <input type="text" class="form-control" id="Nom_Prof" placeholder="Entrer le nom " name="Nom_Prof">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  for="Prenom_Prof">Prenom_Prof:</label>
                                                <input type="text" class="form-control" id="Prenom_Prof" placeholder="Entrer le prénom " name="Prenom_Prof">
                                            </div>
                                        </div>
                                    </div><br><br> 

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label  for="classe">Code_Classe:</label>
                                                <input type="text" class="form-control" id="classe" placeholder="Entrer la classe " name="classe">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="ue">Code_UE:</label>
                                                <input type="text" class="form-control" id="ue" placeholder="Entrer l'unité d'enseignement " name="ue">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="ec">Code_EC:</label>
                                                <input type="text" class="form-control" id="ec" placeholder="Entrer l' élément constitutif " name="ec">
                                            </div>
                                        </div>
                                    </div><br><br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-fill " ><a href="AffichageProf.php" style="color: white">Annuler</a></button>&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary btn-fill " name="ajouter"><a href="AffichageProf.php" style="color:white" >Valider</a></button>
                                            </div>
                                        </div>
                                    </div>

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
               <div class="copyright" align="center">
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

if(isset($_POST['ajouter'])) {
    $Code_PROF = $_POST['Code_PROF'];
    $Nom_Prof =$_POST['Nom_Prof'];
    $Prenom_Prof=$_POST['Prenom_Prof'];
    $classe=$_POST['classe'];
    $ue=$_POST['ue'];
    $ec=$_POST['ec'];

    $req =$con->prepare("INSERT INTO `professeur`(`Code_PROF`, `Nom_Prof`, `Prenom_Prof`)VALUES('$Code_PROF','$Nom_Prof','$Prenom_Prof')");
    $req->execute();
    $req1=$con->prepare("INSERT INTO `intervenir`( `FK_Code_CLASSE`, `FK_Code_PROF`, `FK_Code_UE`) VALUES ('$classe','$Code_PROF','$ue')");
    $req1->execute();
    $req2=$con->prepare("INSERT INTO `enseigner`(`FK_Code_EC`, `FK_Code_UE`, `FK_Code_PROF`) VALUES ('$ec','$ue','$Code_PROF')");
    $req2->execute();
    
    header("location:AffichageProf.php");
}
?>

