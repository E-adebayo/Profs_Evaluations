<?php
    
    session_start();
    require_once('../auth/connexion.php');
    $ac = new Connexion();
    $con = $ac->connection();

    $log=$_SESSION['login'];
    $psw=$_SESSION['password'];
    $req = $con->prepare("SELECT FK_Code_CLASSE FROM utilisateur WHERE login ='$log' AND password ='$psw' ");
       $req->execute();
       $data = $req ->fetch();
     $classe=$data[0];

     $req2 = $con->prepare("SELECT Code_user  FROM utilisateur WHERE login ='$log' AND password ='$psw' ");
       $req2->execute();
       $data2 = $req2 ->fetch();
     $_SESSION['id']=$data2[0];

    $req1=$con->prepare("SELECT Libelle_CLASSE,Libelle_UE,Libelle_EC,Nom_Prof,Prenom_Prof FROM CLASSE S 
                        INNER JOIN INTERVENIR I ON S.Code_CLASSE=I.FK_Code_CLASSE 
                        INNER JOIN UE U  ON I.FK_Code_UE=U.Code_UE 
                        INNER JOIN ENSEIGNER E ON U.Code_UE=E.FK_Code_UE 
                        INNER JOIN EC C ON E.FK_Code_EC=C.Code_EC 
                        INNER JOIN ENSEIGNER F ON C.Code_EC=F.FK_Code_EC    
                        INNER JOIN PROFESSEUR P ON F.FK_Code_PROF=P.Code_PROF
                        WHERE  Code_CLASSE='$classe' AND I.FK_Code_PROF=P.Code_PROF
                        GROUP BY Libelle_CLASSE,Libelle_UE,Libelle_EC,Nom_Prof,Prenom_Prof");
     $req1->execute();
     $data1 = $req1->fetchall();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="shortcut icon" type="image" href="../../assets/img/iai.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Institut Africain d'informatique</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../../assets/img/sidebar.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
                    Menu
                </a>
            </div><br><br><br><br><br><br><br><br>

            <ul class="nav">
                <li class="active">
                    <a href="Accueil.php">
                        <i class="pe-7s-home"></i>
                        <p>Accueil</p>
                    </a>
                </li>
                <li>
                    <a href="Evaluer.php">
                        <i class="pe-7s-note2"></i>
                        <p>Evaluer</p>
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
                            <a href="../auth/deconnexion.php">
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
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-light">
                                    <thead>
                                        <th scope="col" >Libelle_CLASSE</th>
                                        <th scope="col">Libelle_UE</th>
                                        <th scope="col">Libelle_EC</th>
                                        <th scope="col">Libelle_Prof</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
                                        foreach ($data1 as $elt) { ?>
                                            <tr>
                                                <td><?php echo $elt['Libelle_CLASSE']; ?></td>
                                                <td><?php echo $elt['Libelle_UE']; ?></td>
                                                <td><?php echo $elt['Libelle_EC']; ?></td>
                                                <td><?php 
                                                        echo $get1= $elt['Nom_Prof'].' '.$get2=$elt['Prenom_Prof'];
                                                        $_SESSION['Nom_Prof']=$get1;
                                                        $_SESSION['Prenom_Prof']=$get2; 
                                                    ?>
                                                </td>
                                                <td>
                                                    <button class="btn  badge-pill btn-fill" >
                                                        <a href="Evaluer.php" style="color:white; ">
                                                            Evaluer
                                                        </a>
                                                    </button>
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

    <script src="../../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../assets/js/chartist.min.js"></script>
    <script src="../../assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="../../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../../assets/js/demo.js"></script>

</html>
