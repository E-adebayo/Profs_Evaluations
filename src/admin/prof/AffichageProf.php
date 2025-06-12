<?php
    session_start();


    require_once('../../auth/connexion.php');
    $ac = new Connexion();
    $con = $ac->connection();

    $req1 = $con->prepare("SELECT * FROM PROFESSEUR WHERE Code_PROF LIKE '%L1'");
    $req1->execute();
    $data1 = $req1->fetchall();

    $req2 = $con->prepare("SELECT * FROM PROFESSEUR WHERE Code_PROF LIKE '%L2'");
    $req2->execute();
    $data2 = $req2->fetchall();

    $req3 = $con->prepare("SELECT * FROM PROFESSEUR WHERE Code_PROF LIKE '%L3G'");
    $req3->execute();
    $data3 = $req3->fetchall();

    $req4 = $con->prepare("SELECT * FROM PROFESSEUR WHERE Code_PROF LIKE '%L3S'");
    $req4->execute();
    $data4 = $req4->fetchall();

    $req5 = $con->prepare("SELECT * FROM PROFESSEUR WHERE Code_PROF LIKE '%L3M'");
    $req5->execute();
    $data5 = $req5->fetchall();
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
    <link href="../../../assets/css/custom-theme.css" rel="stylesheet" />
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
                            <a href="FAjouterProf.php">
                                <p >Ajouter un professeur</p>
                            </a>
                        </li>
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
                                <h4 class="title" style="text-align: center;"><b>Afficher les professeurs</b></h4>
                            </div><br>

                            <div class="col-md-12">
                            <div class="card card-plain">
                            <div class="header">
                                <h3 class="title" style="text-align: center;"><u>LICENCE 1</u></h3>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-light">
                                    <thead>
                                          <th scope="col">Code_Prof</th>
                                          <th scope="col">Nom_Prof</th>
                                          <th scope="col">Prenom_Prof</th>
                                          <th scope="col">Actions</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php
                                        foreach ($data1 as $elt) { ?>
                                            <tr>
                                                <td><?php echo $elt['Code_PROF']; ?></td>
                                                <td><?php echo $elt['Nom_Prof']; ?></td>
                                                <td><?php echo $elt['Prenom_Prof']; ?></td>
                                                <td>
                                                    <a href="FModifierProf.php?id=<?php echo $elt['Code_PROF'] ?>">Modifier | </a>
                                                    <a href="SuppressionProf.php?id=<?php echo $elt['Code_PROF'] ?>">Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>

                            <div class="col-md-12">
                            <div class="card card-plain">
                            <div class="header">
                                <h3 class="title" style="text-align: center;"><u>LICENCE 2</u></h3>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-light">
                                  <thead>
                                      <th scope="col">Code_Prof</th>
                                      <th scope="col">Nom_Prof</th>
                                      <th scope="col">Prenom_Prof</th>
                                      <th scope="col">Actions</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <?php
                                        foreach ($data2 as $elt) { ?>
                                            <tr>
                                                <td><?php echo $elt['Code_PROF']; ?></td>
                                                <td><?php echo $elt['Nom_Prof']; ?></td>
                                                <td><?php echo $elt['Prenom_Prof']; ?></td>
                                                <td>
                                                    <a href="FModifierProf.php?id=<?php echo $elt['Code_PROF'] ?>">Modifier | </a>
                                                    <a href="SuppressionProf.php?id=<?php echo $elt['Code_PROF'] ?>">Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                        </tr>
                                  </tbody>
                                </table>
                            </div>
                            </div>
                            </div>


                            <div class="col-md-12">
                            <div class="card card-plain">
                            <div class="header">
                                <h3 class="title" style="text-align: center;"><u>GENIE LOGICIEL 3</u></h3>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-light">
                                  <thead>
                                      <th scope="col">Code_Prof</th>
                                      <th scope="col">Nom_Prof</th>
                                      <th scope="col">Prenom_Prof</th>
                                      <th scope="col">Actions</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <?php
                                        foreach ($data3 as $elt) { ?>
                                            <tr>
                                                <td><?php echo $elt['Code_PROF']; ?></td>
                                                <td><?php echo $elt['Nom_Prof']; ?></td>
                                                <td><?php echo $elt['Prenom_Prof']; ?></td>
                                                <td>
                                                    <a href="FModifierProf.php?id=<?php echo $elt['Code_PROF'] ?>">Modifier | </a>
                                                    <a href="SuppressionProf.php?id=<?php echo $elt['Code_PROF'] ?>">Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                        </tr>
                                  </tbody>
                                </table>
                            </div>
                            </div>
                            </div>

                            <div class="col-md-12">
                            <div class="card card-plain">
                            <div class="header">
                                <h3 class="title" style="text-align: center;"><u>SYSTÈME ET RESEAUX 3</u></h3>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-light">
                                  <thead>
                                      <th scope="col">Code_Prof</th>
                                      <th scope="col">Nom_Prof</th>
                                      <th scope="col">Prenom_Prof</th>
                                      <th scope="col">Actions</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <?php
                                        foreach ($data4 as $elt) { ?>
                                            <tr>
                                                <td><?php echo $elt['Code_PROF']; ?></td>
                                                <td><?php echo $elt['Nom_Prof']; ?></td>
                                                <td><?php echo $elt['Prenom_Prof']; ?></td>
                                                <td>
                                                    <a href="FModifierProf.php?id=<?php echo $elt['Code_PROF'] ?>">Modifier | </a>
                                                    <a href="SuppressionProf.php?id=<?php echo $elt['Code_PROF'] ?>">Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                        </tr>
                                  </tbody>
                                </table>
                            </div>
                            </div>
                            </div>

                            <div class="col-md-12">
                            <div class="card card-plain">
                            <div class="header">
                                <h3 class="title" style="text-align: center;"><u>MULTIMEDIA WEB 3 </u></h3>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-light">
                                  <thead>
                                      <th scope="col">Code_Prof</th>
                                      <th scope="col">Nom_Prof</th>
                                      <th scope="col">Prenom_Prof</th>
                                      <th scope="col">Actions</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <?php
                                        foreach ($data5 as $elt) { ?>
                                            <tr>
                                                <td><?php echo $elt['Code_PROF']; ?></td>
                                                <td><?php echo $elt['Nom_Prof']; ?></td>
                                                <td><?php echo $elt['Prenom_Prof']; ?></td>
                                                <td>
                                                    <a href="FModifierProf.php?id=<?php echo $elt['Code_PROF'] ?>">Modifier | </a>
                                                    <a href="SuppressionProf.php?id=<?php echo $elt['Code_PROF'] ?>">Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                        </tr>
                                  </tbody>
                                </table>
                            </div>
                            </div>
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
    <script src="../../../assets/js/custom-theme.js"></script>

</html>
