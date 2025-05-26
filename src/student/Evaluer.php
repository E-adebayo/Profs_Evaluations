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
    $req2=$con->prepare("SELECT Libelle_CLASSE,Libelle_UE,Libelle_EC,Nom_Prof,Prenom_Prof FROM CLASSE S 
                        INNER JOIN INTERVENIR I ON S.Code_CLASSE=I.FK_Code_CLASSE 
                        INNER JOIN UE U  ON I.FK_Code_UE=U.Code_UE 
                        INNER JOIN ENSEIGNER E ON U.Code_UE=E.FK_Code_UE 
                        INNER JOIN EC C ON E.FK_Code_EC=C.Code_EC 
                        INNER JOIN ENSEIGNER F ON C.Code_EC=F.FK_Code_EC    
                        INNER JOIN PROFESSEUR P ON F.FK_Code_PROF=P.Code_PROF
                        WHERE  Code_CLASSE='$classe' AND I.FK_Code_PROF=P.Code_PROF
                        GROUP BY Libelle_CLASSE,Libelle_UE,Libelle_EC,Nom_Prof,Prenom_Prof");
     $req2->execute();
     $data2 = $req2->fetchall();

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
                <li >
                    <a href="Accueil.php">
                        <i class="pe-7s-home"></i>
                        <p>Accueil</p>
                    </a>
                </li >
                <li class="active">
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
                        <div class="card" >
                            <div class="header">
                                <h4 class="title" style="text-align: center;"><u><b>Evaluation d'un professeur</b></u></h4>
                            </div>
                            <div class="content" >
                                <form method="POST" >
                                    <div class="row" >
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Informations sur le professeur </u> </h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Nom:</label>
                                                <select class="form-control" name="Nom_Prof" >
                                                    <?php 
                                                        foreach ($data2 as $elt) { 
                                                            $get1= $elt['Nom_Prof']
                                                    ?>
                                                            <option value="<?php echo $get1?>">
                                                                <?php echo $get1?>
                                                            </option>
                                                    <?php
                                                        }        
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Prénoms:</label>
                                                <select class="form-control" name="Prenom_Prof" >
                                                    <?php 
                                                        foreach ($data2 as $elt) { 
                                                            $get2= $elt['Prenom_Prof']
                                                    ?>
                                                            <option value="<?php echo $get2?>">
                                                                <?php echo $get2?>
                                                            </option>
                                                    <?php
                                                        }        
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Classe:</label>
                                                <select class="form-control" name="claas" >
                                                    <option value="<?php echo $classe?>">
                                                        <?php echo $classe?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
<br>
                                    <div class="row" >
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle est votre appréciation générale du cours suivi? </u></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Appréciation générale de <br> l'enseignant 
                                                </label> <br> 
                                                <select class="form-control" name="mention1">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Plage horaire prévue pour <br>le cours
                                                </label> <br> 
                                                <select class="form-control" name="mention2">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Cadre logistique: matériel utilisé par l'enseignant
                                                </label>
                                                <select class="form-control" name="mention3">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Implication des étudiants dans <br>le déroulement du cours
                                                </label>
                                                <select class="form-control" name="mention4">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    L'enseignant respecte les tranches <br>de cours prévues
                                                </label>
                                                <select class="form-control" name="mention5">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Disponibilité de l'enseignant <br>au début du cours
                                                </label>
                                                <select class="form-control" name="mention6">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row">
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle est votre appréciation générale du contenu du cours? </u></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Le cours a répondu à mes <br>attentes
                                                </label>
                                                <select class="form-control" name="mention7">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Le cours a capté <br>mon intéret</label>
                                                <select class="form-control" name="mention8">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Le cours était clair <br>et détaillé 
                                                </label>
                                                <select class="form-control" name="mention9">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class">
                                                    Le cours contient le plan,<br> les critères d'évaluation
                                                </label>
                                                <select class="form-control" name="mention10">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row" >
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle est votre appréciation du déroulement du cours?</u></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Qualité des aspects théoriques</label>
                                                <select class="form-control" name="mention11">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Qualité des aspects pratiques</label>
                                                <select class="form-control" name="mention12">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Apport professionnel de l'enseignement 
                                                </label>
                                                <select class="form-control" name="mention13">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row" >
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle est votre appréciation de la documentation fournie?</u></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <label class="control-label " for="class" >Support détaillé papier</label>
                                                <select class="form-control" name="mention14">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Support résumé PowerPoint</label>
                                                <select class="form-control" name="mention15">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Support de Travaux Dirigés ou Pratiques
                                                </label>
                                                <select class="form-control" name="mention16">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row">
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle est votre appréciation Travaux Dirigés ou Travaux Pratiques?</u> </h5>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Travaux Dirigés ou <br>Travaux Pratiques organisés
                                                </label>
                                                <select class="form-control" name="mention17">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Travaux Dirigés ou <br>Travaux Pratiques corrigés</label>
                                                <select class="form-control" name="mention18">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Temps consacrés aux Travaux <br>Dirigés ou Travaux Pratiques
                                                </label>
                                                <select class="form-control" name="mention19">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label " for="class">
                                                    Travaux ont permis la comprehension du cours 
                                                </label>
                                                <select class="form-control" name="mention20">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row">
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle suggestion faites-vous pour améliorer ce cours?</u></h5>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="suggestion1"></textarea>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row" >
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle est votre appréciation du cadre de l'enseignement?</u></h5>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Salle spacieuse</label>
                                                <select class="form-control" name="mention21">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Disponibilité de la connexion internet(WIFI)
                                                </label>
                                                <select class="form-control" name="mention22">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Salle eclairée</label>
                                                <select class="form-control" name="mention23">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Etats des bancs</label>
                                                <select class="form-control" name="mention24">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >Climatisation de la salle</label>
                                                <select class="form-control" name="mention25">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="class" >
                                                    Disponibilité du cours dans les prises
                                                </label>
                                                <select class="form-control" name="mention26">
                                                  <option value="Tres Satisfait" selected>Très Satisfait</option>
                                                  <option value="Satisfait">Satisfait</option>
                                                  <option value="Peu Satisfait">Peu Satisfait</option>
                                                  <option value="Insatisfait">Insatisfait</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
<br>
                                    <div class="row">
                                        <div class="modal-header">
                                         <h5 class="modal-title" style="text-align: center;"><u>Quelle suggestion faites-vous pour améliorer ce cours?</u></h5>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="suggestion2"></textarea>
                                            </div>
                                        </div>
                                    </div>
<br>
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
                                                <button type="submit" class="btn  btn-fill " ><a href="Accueil.php" style="color: white">Annuler</a></button>&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn  btn-fill"name="terminer"   style="color: white" onclick="redirect()">Terminer</button>
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
               <div class="copyright" style="text-align: center;">
                    <h5>&copy; 2020 Copyright:
                        <a href="http://iai-togo.tg" target="_blank">iai-togo.tg</a> 
                         |  All rights reserved
                    </h5>
                </div>
            </div>
        </footer>
</div>




</body>

    <script type="text/javascript">
        function redirect(){
            <?php 
                if(isset($_POST['Nom_Prof'])) {
                $Nom_Prof=$_POST['Nom_Prof']; 
                $Prenom_Prof=$_POST['Prenom_Prof'];

                if (!empty($Nom_Prof) and !empty($Prenom_Prof)) {
            ?>      document.location.href='Accueil.php';
            <?php
                    }else{ 
            ?>
                        document.location.href='Evaluer.php';
            <?php
                    }
                } 
            ?>
        }
    </script>
    <script src="../../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../../assets/js/chartist.min.js"></script>
    <script src="../../assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="../../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../../assets/js/demo.js"></script>

</html>




 <?php
    
    require_once('../auth/connexion.php');
    $ac = new Connexion();
    $con = $ac->connection();

    if(isset($_POST['terminer'])) {
        $Nom_Prof=$_POST['Nom_Prof']; 
        $Prenom_Prof=$_POST['Prenom_Prof'];
        $claas=$_POST['claas'];
        $mention1=$_POST['mention1'];
        $mention2=($_POST['mention2']);
        $mention3=($_POST['mention3']);
        $mention4=$_POST['mention4'];
        $mention5=$_POST['mention5'];
        $mention6=$_POST['mention6'];
        $mention7=$_POST['mention7'];
        $mention8=($_POST['mention8']);
        $mention9=($_POST['mention9']);
        $mention10=$_POST['mention10'];
        $mention11=$_POST['mention11'];
        $mention12=($_POST['mention12']);
        $mention13=($_POST['mention13']);
        $mention14=$_POST['mention14'];
        $mention15=$_POST['mention15'];
        $mention16=$_POST['mention16'];
        $mention17=($_POST['mention17']);
        $mention18=($_POST['mention18']);
        $mention19=$_POST['mention19'];
        $mention20=$_POST['mention20'];
        $suggestion1=$_POST['suggestion1'];
        $mention21=$_POST['mention21'];
        $mention22=($_POST['mention22']);
        $mention23=($_POST['mention23']);
        $mention24=$_POST['mention24'];
        $mention25=$_POST['mention25'];
        $mention26=($_POST['mention26']);
        $suggestion2=($_POST['suggestion2']);

         $req1 = $con->prepare("INSERT INTO `evaluer`(`Nom_Prof`, `Prenom_Prof`, `Classe`, `Mention1`, `Mention2`, `Mention3`, `Mention4`, `Mention5`, `Mention6`, `Mention7`, `Mention8`, `Mention9`, `Mention10`, `Mention11`, `Mention12`, `Mention13`, `Mention14`, `Mention15`, `Mention16`, `Mention17`, `Mention18`, `Mention19`, `Mention20`, `Suggestion1`, `Mention21`, `Mention22`, `Mention23`, `Mention24`, `Mention25`, `Mention26`, `Suggestion2`)
            VALUES ('$Nom_Prof','$Prenom_Prof','$claas','$mention1','$mention2','$mention3','$mention4','$mention5','$mention6','$mention7','$mention8','$mention9','$mention10','$mention11','$mention12','$mention13','$mention14','$mention15','$mention16','$mention17','$mention18','$mention19','$mention20','$suggestion1','$mention21','$mention22','$mention23','$mention24','$mention25','$mention26','$suggestion2')");
         $req1->execute();
    }

?>



