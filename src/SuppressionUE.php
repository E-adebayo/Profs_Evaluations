<!DOCTYPE html>   
<html>      
<head>           
<meta charset="utf-8" />           
<title>Supprimer une UE</title>   

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
			        <a class="nav-link" href="#" style="color:white"><h5> Suppression d'une UE</h5><span class="sr-only">(current)</span></a>
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
					  <label class="control-label col-sm-2" for="Code_UE" >Code_UE:</label>
					  <div class="col-sm-10">          
						<input type="text" class="form-control" id="Code_UE" placeholder="Entrer le code" name="Code_UE">
					  </div>
					</div>
					
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary"><a  style="color:white">Supprimer</a></button>
                        <button type="submit" class="btn btn-primary" ><a href="AffichageUE.php" style="color: white">Annuler</a></button>
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
    
    $ue_id = htmlspecialchars($_GET['id']);
    
    try {
        // First check if UE exists
        $check = $con->prepare("SELECT COUNT(*) FROM ue WHERE Code_UE = :id");
        $check->execute(['id' => $ue_id]);
        
        if ($check->fetchColumn() > 0) {
            // Delete related records first (assuming foreign key constraints)
            $stmt1 = $con->prepare("DELETE FROM enseigner WHERE FK_Code_UE = :id");
            $stmt1->execute(['id' => $ue_id]);
            
            $stmt2 = $con->prepare("DELETE FROM intervenir WHERE FK_Code_UE = :id");
            $stmt2->execute(['id' => $ue_id]);
            
            // Finally delete the UE
            $stmt3 = $con->prepare("DELETE FROM ue WHERE Code_UE = :id");
            $stmt3->execute(['id' => $ue_id]);
            
            $_SESSION['success'] = "UE supprimée avec succès.";
        } else {
            $_SESSION['error'] = "UE non trouvée.";
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Erreur lors de la suppression de l'UE.";
    }
}

header("Location: AffichageUE.php");
exit();
?>
