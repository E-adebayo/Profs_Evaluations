<?php
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();

	$req1 = $con->prepare("SELECT * FROM PROFESSEUR");
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
<body  style="color: white; background-image: url(image/a9.jpg);">

		<nav class="navbar navbar-expand-lg navbar-light bg-dark"  >
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
			        <a class="nav-link" href="FAjouterProf" style="color: white;"><h6> Ajouter un prof</h6></a>
			      </li>
			      <li class="nav-item " >
			        <a class="nav-link" href="login.php" style="color: white;"><h6> Se déconnecter </h6></a>
			      </li>
			      </form>
			    </ul>
			</div>
		</nav>
		<div class="container" >
			<div class="col-md-12">
				<h1 align="center" ><u>Tableau des Professeurs</u></h1> <br>

				<table class="table table-striped table-dark" border="1" width="70%">
				  <thead>
				    <tr>
				      <th scope="col">Code_Prof</th>
				      <th scope="col">Nom_Prof</th>
				      <th scope="col">Prenom_Prof</th>
				    </tr>
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
</body>

</html>