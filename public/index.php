<?php
	
	session_start();

    require_once('../src/auth/connexion.php');
 	$ac = new Connexion();
	$con = $ac->connection();

	if(isset($_POST['login']))
	{
		$login = ($_POST['login']);
		$password = ($_POST['password']);
		$login = htmlspecialchars($login);
		$password = htmlspecialchars($password);
		$login = stripcslashes($login);
		$password = stripcslashes($password);

	   $type=$_POST['type'];

	   $_SESSION['login'] =$login;
 	   $_SESSION['password'] =$password;

	   $req = $con->prepare("SELECT * FROM utilisateur WHERE login = '$login' AND password = '$password' ");
	   $req->execute();
	   $data = $req ->fetch();

  		$req2 = $con->prepare("SELECT * FROM administrateur WHERE login = '$login' AND password = '$password'");
	    $req2->execute();
	    $data2 = $req2 ->fetch();

	    if ($data=='' AND $data2=='') {
	    	$error = "Tous les champs doivent être complétés !"; 
	    }
	    elseif ($data!='' and $type == "Etudiant") {
	    	header("location:../src/student/Accueil.php");
	    }
	    elseif ($data2!='' and $type == "Administrateur") {
	    	header("location:../src/admin/prof/AffichageProf.php");
	    }
	    elseif ($data!='' and $type != "Etudiant") {
	    	$erreur0 = "Type incorrect !"; 
	    }
	    elseif ($data2!='' and $type != "Administrateur") {
	    	$erreur0 = "Type incorrect !"; 
	    }
	    else{
	    	$erreur = "Mauvais login ou mot de passe !"; 
	    }
	}
?>


<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<link rel="shortcut icon" type="image" href="../assets/img/iai.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Institut Africain d'informatique</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>
    <link href="../assets/css/light.css?v=1.4.0" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="../assets/css/custom-theme.css" rel="stylesheet" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"	 rel="stylesheet">
</head>

<body>
	<div class="main-bg">
		<h3></h3>
			<?php
	         if(isset($erreur)) {
	            echo '<h1 style="text-align: center;"><b><span style="color: white;">'.$erreur."</span></b></h1>";
         		}
	         elseif(isset($error)) {
	            echo '<h1 style="text-align: center;"><b><span style="color: white;">'.$error."</span></b></h1>";
         		}
         	  elseif(isset($erreur0)) {
	            echo '<h1 style="text-align: center;"><b><span style="color: white;">'.$erreur0."</span></b></h1>";
         		}
         	?>
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style" >
                         <a href="#">
                            <img class="avatar border-gray" src="../assets/img/face.jpg" alt="..."/>
						 </a>
				</div>
				<form action="index.php" method="POST">
					<p class="legend">Connexion<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="text" placeholder="Login" name="login" required />
						<span class="fa fa-user"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" required />
						<span class="fa fa-unlock"></span>
					</div>
					<div  class="option">
						<select  name="type" >
							<option value="Administrateur"  class="tp">Administrateur</option>
							<option value="Etudiant" class="tp" selected>Etudiant</option>
						</select>
						
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<a href="../src/Inscription.php" class="bottom-text-w3ls"><b>S'inscrire</b></a>
			</div>
		</div>
		<div class="copyright">
			<h2>&copy; 2020 Copyright:
				<a href="http://iai-togo.tg" target="_blank">iai-togo.tg</a> 
				 |  All rights reserved
			</h2>
		</div>
	</div>
	<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/chartist.min.js"></script>
    <script src="../assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="../assets/js/demo.js"></script>
	<script src="../assets/js/custom-theme.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "<b>Bienvenue sur le site d'évaluation des professeurs</b> "

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</body>

</html>