<!DOCTYPE html>   
<html>      
<head>           
<meta charset="utf-8" />           
<title>Supprimer une EC</title>   

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
			        <a class="nav-link" href="#" style="color:white"><h5> Suppression d'une EC</h5><span class="sr-only">(current)</span></a>
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
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary"><a  style="color:white">Supprimer</a></button>
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
session_start();
require_once __DIR__ . '/../config/connexion.php';

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['id'])) {
    $ac = new Connexion();
    $con = $ac->connection();
    
    $ec_id = htmlspecialchars($_GET['id']);
    
    try {
        // First check if EC exists
        $check = $con->prepare("SELECT COUNT(*) FROM ec WHERE Code_EC = :id");
        $check->execute(['id' => $ec_id]);
        
        if ($check->fetchColumn() > 0) {
            // Delete related records first (assuming foreign key constraints)
            $stmt1 = $con->prepare("DELETE FROM enseigner WHERE FK_Code_EC = :id");
            $stmt1->execute(['id' => $ec_id]);
            
            $stmt2 = $con->prepare("DELETE FROM faire WHERE FK_Code_EC = :id");
            $stmt2->execute(['id' => $ec_id]);
            
            // Finally delete the EC
            $stmt3 = $con->prepare("DELETE FROM ec WHERE Code_EC = :id");
            $stmt3->execute(['id' => $ec_id]);
            
            $_SESSION['success'] = "EC supprimé avec succès.";
        } else {
            $_SESSION['error'] = "EC non trouvé.";
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Erreur lors de la suppression de l'EC.";
    }
}

header("Location: AffichageEC.php");
exit();
?>
