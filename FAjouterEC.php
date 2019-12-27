<!DOCTYPE html>   
<html>      
<head>           
<meta charset="utf-8" />           
<title>Ajouter un EC</title>   

</head>   
<body style="background:url(image/IMG024.jpg); color: white; font-size: 24px ">  
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
			        <a class="nav-link" href="#" style="color:white"><h5> Ajout d'un EC</h5><span class="sr-only">(current)</span></a>
			    </li>
			</form>
		</ul>
	</div>
	</nav>
	<form method="POST">
	<div class="container contact"  >
		<div class="row">
			<div class="col-md-9">
				<div class="contact-form">
					<div class="form-group"><br><br>
					  <label class="control-label col-sm-2" for="Code_EC" >Code_EC:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="Code_EC" placeholder="Entrer le code" name="Code_EC">
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Libelle_EC">Libelle_EC:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="Libelle_EC" placeholder="Entrer le libelle " name="Libelle_EC">
					  </div>
					</div>
					
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary"><a  style="color:white" name="ajouter">Valider</a></button>
                        <button type="submit" class="btn btn-primary" ><a href="AffichageEC.php" style="color: white">Annuler</a></button>
				     </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div></form>
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/3.2.1/jquery.min.js"></script>    
	 <script src="js/jquery-3.3.1.slim.min.js"></script>
	   <script src="js/popper.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>
</body>
</html> 
 


 <?php
require_once('connexion.php');
$ac = new connexion();
$con = $ac->connection();

	$Code_EC = $_POST['Code_EC'];
	$Libelle_EC =$_POST['Libelle_EC'];

	$req = $con->prepare(" INSERT INTO `ec`(`Code_EC`, `Libelle_EC`) VALUES ('$Code_EC','$Libelle_EC')");
	$req->execute();
	header("location:AffichageEC.php");

?>
