<!DOCTYPE html>   
<html>      
<head>           
<meta charset="utf-8" />           
<title>Enregistrement</title>   

</head>   
<body style="background:url(../assets/image/IMG024.jpg); color: white; font-size: 24px ">  
	<nav class="navbar navbar-expand-lg navbar-light bg-primary"  >
    <div class="col-md-9">
    	<h1>
       		<img src="image/iai2.png" width="80">
       	 	<a class="navbar-brand" href="#" style="color: white; font-family: algerian" > IAI-TOGO <br>
            	<p style="color: white; font-family: bell mt" >La référence en matière d'informatique</p>
         	</a>
      	</h1>
    </div>
	<div  class="col-md-3" >
		<ul  class="nav justify-content-end" >
			<form class="form-inline my-2 my-lg-0">
			    <li class="nav-item active" >
			        <a class="nav-link" href="#" style="color:white"><h5> Enregistrement d'un professeur</h5><span class="sr-only">(current)</span></a>
			    </li>
			</form>
		</ul>
	</div>
	</nav>
	<form method="POST">
	<div class="container contact" >
		<div class="row">
			<div class="col-md-9">
				<div class="contact-form">
					<div class="form-group"><br><br>
					  <label class="control-label col-sm-2" for="fname">Nom:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="fname" placeholder="Entrer votre Nom" name="fname" required="true">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="lname">Prénoms:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="lname" placeholder="Entrer votre Prenom" name="lname" required="true">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="class">Classe:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="class" placeholder="Entrer votre classe" name="class" required="true">
					  </div>
					</div>    
					<div class="form-group">
					  <label class="control-label col-sm-2" for="login">Login:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="login" placeholder="Entrer votre login" name="login" required="true">
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="password">Password:</label>
					  <div class="col-sm-10">          
						<input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" name="password" required="true">
					  </div>
					</div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="tel">Téléphone:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="tel" placeholder="Entrer votre numero de téléphone" name="tel" required="true">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="email">Email:</label>
					  <div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" required="true">
					  </div>
					</div>
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary"><a style="color:white" name="send">Envoyer</a> </button>
                        <button type="submit" class="btn btn-primary" ><a href="login.php" style="color: white">Home</a></button>
				     </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</form>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/3.2.1/jquery.min.js"></script>    
	 <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
	   <script src="../assets/js/popper.min.js"></script>
	   <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html> 
 
 <?php
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();

	//if(isset($_POST['send'])) {
		$nom=$_POST['fname'];
		$prenom=$_POST['lname'];
		$classe=$_POST['class'];
		$user=htmlspecialchars($_POST['login']);
		$password=($_POST['password']);
		$telephone=$_POST['tel'];
		$email=$_POST['email'];

		$req1 = $con->prepare("INSERT INTO `utilisateur`(`Nom_User`, `Prenom_User`, `FK_Code_CLASSE`, `login`, `password`, `Telephone`, `Email_User`)VALUES('$nom','$prenom','$classe','$user','$password','$telephone','$email')");
		$req1->execute();
		header("location:MenuPrincipal.php");
//	}
?>