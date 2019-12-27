<?php
	
	session_start();
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();
	
	$class=$_POST['class'];

	// $req1 = $con->prepare("SELECT (Libelle_CLASSE) FROM CLASSE  JOIN INTERVENIR ON INTERVENIR.FK_Code_CLASSE=CLASSE.Code_CLASSE  JOIN UE ON 					UE.Code_UE=INTERVENIR.FK_Code_UE JOIN PROFESSEUR ON PROFESSEUR.Code_PROF=INTERVENIR.FK_Code_PROF");
	// $req1->execute();
	// $data1 = $req1->fetchall();

	// $req1 = $con->prepare("SELECT (Libelle_CLASSE) FROM CLASSE  ");
	//  $req1->execute();
	//  $data1 = $req1->fetchall();

	$req1 = $con->prepare("SELECT Libelle_CLASSE,Libelle_UE,Libelle_EC,Nom_Prof,Prenom_Prof FROM CLASSE S INNER JOIN INTERVENIR I ON 		 				S.Code_CLASSE=I.FK_Code_CLASSE INNER JOIN UE U  ON I.FK_Code_UE=U.Code_UE INNER JOIN ENSEIGNER E ON 							U.Code_UE=E.FK_Code_UE INNER JOIN EC C ON E.FK_Code_EC=C.Code_EC INNER JOIN	FAIRE F ON C.Code_EC=F.FK_Code_EC  						 INNER JOIN PROFESSEUR P ON F.FK_Code_PROF=P.Code_PROF WHERE Code_CLASSE='$class'");
	 $req1->execute();
	 $data1 = $req1->fetchall();
?>

<!DOCTYPE html> 
<html>
<head>
	<title>Institut Africain d'informatique</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image" href="image/iai2.png">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">           
</head>
<body style="color: #FFFF99; background-image: url(image/a9.jpg);">

		<nav class="navbar navbar-expand-lg navbar-light bg-danger"  >
    		<div class="col-md-9">
    		<h1>
       			<img src="image/iai2.png" width="80">
       	 		<a class="navbar-brand" href="#" style="color: #FFFF99; font-family: algerian" > IAI-TOGO <br>
            		<p style="color: #FFFF99; font-family: bell mt" >La référence en matière d'informatique</p>
         		</a>
      		</h1>
      		</div>
			<div  class="col-md-3" >
				<ul  class="nav justify-content-end" >
			 	  <form class="form-inline my-2 my-lg-0">
			      <li class="nav-item active" >
			        <a class="nav-link" href="#" style="color:#FFFF99"><h6> Bienvenue <b><?php echo $_SESSION['login']; ?></b></h6></a>
			      </li>
			      <li class="nav-item">
        			<a class="nav-link" href="login.php" style="color: #FFFF99"><h6>Se déconnecter</h6></a>
     			 </li>
			      </form>
			    </ul>
			</div>
		</nav>
		<div class="container">
			<div class="col-md-12">
				<form method="POST">
				<div class="form-group" hidden>
            		<label class="control-label col-sm-2" for="class" ></label>
            			<div class="col-sm-10">          
            			  <input type="text" class="form-control" id="class" placeholder="Saisir votre classe" name="class">
            			  <?php $class=$_POST['class'];?>
            			</div>
          		</div>
          		</form><br><br>
				<table class="table table-striped table-warning" border="3" width="70%" style="color:red">
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
								<td>
									<a href="evaluer.php" style="color:red">
										<?php echo $elt['Nom_Prof'].' '.$elt['Prenom_Prof']; ?>
									</a>
								</td> 
								
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
			</div>
		</div>

	<script src="js/bootstrap.min.js"></script>   
	<script src="js/bootstrap.bundle.js"></script>   
	<script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/bootstrap.js"></script>   
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>


