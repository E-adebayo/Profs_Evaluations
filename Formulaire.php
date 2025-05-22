
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image" href="image/iai2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Institut Africain d'informatique</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a  class="simple-text">
                    Menu
                </a>
            </div><br><br><br><br><br><br><br><br><br><br><br><br>

            <ul class="nav">
                <li class="active">
                    <a href="Formulaire.php">
                        <i class="pe-7s-user"></i>
                        <p>Inscription</p>
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
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="background-color: white">
                            <div class="header">
                                <h4 class="title"align="center"><u><b>Enrégistrement</b></u></h4>
                            </div>
                            <div class="content">
                                <form method="POST" >
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="fname">Nom:</label>
												<input type="text" class="form-control" id="fname" placeholder="Entrer votre Nom" name="fname" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="lname">Prénoms:</label>
												<input type="text" class="form-control" id="lname" placeholder="Entrer votre Prenom" name="lname" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="class">Classe:</label>
												<input type="text" class="form-control" id="class" placeholder="Entrer votre classe" name="class" required="true">
                                            </div>
                                        </div>
                                    </div><br><br>

                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="login">Login:</label>
                                                <input type="text" class="form-control" id="login" placeholder="Entrer votre login" name="login" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label " for="password">Password:</label>
												<input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" name="password" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label " for="tel">Téléphone:</label>
												<input type="text" class="form-control" id="tel" placeholder="Entrer votre numero de téléphone" name="tel" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label class="control-label " for="email">Email:</label>
												<input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" required="true">
                                            </div>
                                        </div>
                                    </div>

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
						                        <button type="submit" class="btn btn-primary btn-fill" ><a href="deconnecter.php" style="color: white">Annuler</a></button>&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary btn-fill "  name="send"><a style="color:white">Envoyer</a> </button>
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

	
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="assets/js/demo.js"></script>


</body>
</html> 
 
 <?php
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();

	if(isset($_POST['send'])) {
		$nom=$_POST['fname'];
		$prenom=$_POST['lname'];
		$classe=$_POST['class'];
		$user=htmlspecialchars($_POST['login']);
        $password=htmlspecialchars($_POST['password']);
		$telephone=$_POST['tel'];
		$email=$_POST['email'];

		$req1 = $con->prepare("INSERT INTO `utilisateur`(`Nom_User`, `Prenom_User`, `FK_Code_CLASSE`, `login`, `password`, `Telephone`, `Email_User`)VALUES('$nom','$prenom','$classe','$user','$password','$telephone','$email')");
		$req1->execute();
		header("location:index.php");
	}
?>