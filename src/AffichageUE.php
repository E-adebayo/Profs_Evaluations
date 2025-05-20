<?php
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();

	$req1 = $con->prepare("SELECT * FROM UE WHERE Code_UE LIKE '%S1'");
	$req1->execute();
	$data1 = $req1->fetchall();

	$req2 = $con->prepare("SELECT * FROM UE WHERE Code_UE LIKE '%S2'");
	$req2->execute();
	$data2 = $req2->fetchall();

	$req3 = $con->prepare("SELECT * FROM UE WHERE Code_UE LIKE '%S3'");
	$req3->execute();
	$data3 = $req3->fetchall();

	$req4 = $con->prepare("SELECT * FROM UE WHERE Code_UE LIKE '%S4'");
	$req4->execute();
	$data4 = $req4->fetchall();

	$req5 = $con->prepare("SELECT * FROM UE WHERE Code_UE LIKE '%S5%' ");
	$req5->execute();
	$data5 = $req5->fetchall();

	$req6 = $con->prepare("SELECT * FROM UE WHERE Code_UE LIKE '%S6%'");
	$req6->execute();
	$data6 = $req6->fetchall();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Institut Africain d'informatique</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image" href="image/iai2.png">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">           
</head>
<body style="color: white; background-image: url(image/a9.jpg);">

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
			        <a class="nav-link" href="FAjouterUE" style="color:white"><h6> Ajouter une UE</h6></a>
			      </li>
			      <li class="nav-item " >
			        <a class="nav-link" href="login.php" style="color:white"><h6> Se déconnecter </h6></a>
			      </li>
			      </form>
			    </ul>
			</div>
		</nav>
		<div class="container">
			<div class="col-md-12">
				<h1 align="center"><u>Tableau des Unités d'Enseignement(UE)</u></h1>




				<h3 align="center"><u>LICENCE 1(L1)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify"><h3><u>SEMESTRE 1</u></h3></tr>
						<th scope="col">Code_UE</th>
				     	<th scope="col">Libelle_UE</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data1 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_UE']; ?></td>
								<td><?php echo $elt['Libelle_UE']; ?></td>
								<td>
									<a href="FModifierUE.php?id=<?php echo $elt['Code_UE'] ?>">Modifier | </a>
									<a href="SuppressionUE.php?id=<?php echo $elt['Code_UE'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify"><h3><u>SEMESTRE 2</u></h3></tr>
						<th scope="col">Code_UE</th>
				     	<th scope="col">Libelle_UE</th>
					</thead>
					<tbody>
						<?php
						foreach ($data2 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_UE']; ?></td>
								<td><?php echo $elt['Libelle_UE']; ?></td>
								<td>
									<a href="FModifierUE.php?id=<?php echo $elt['Code_UE'] ?>">Modifier | </a>
									<a href="SuppressionUE.php?id=<?php echo $elt['Code_UE'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>




				<h3 align="center"><u>LICENCE 2(L2)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify"><h3><u>SEMESTRE 3</u></h3></tr>
						<th scope="col">Code_UE</th>
				     	<th scope="col">Libelle_UE</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data3 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_UE']; ?></td>
								<td><?php echo $elt['Libelle_UE']; ?></td>
								<td>
									<a href="FModifierUE.php?id=<?php echo $elt['Code_UE'] ?>">Modifier | </a>
									<a href="SuppressionUE.php?id=<?php echo $elt['Code_UE'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify"><h3><u>SEMESTRE 4</u></h3></tr>
						<th scope="col">Code_UE</th>
				     	<th scope="col">Libelle_UE</th>
					</thead>
					<tbody>
						<?php
						foreach ($data4 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_UE']; ?></td>
								<td><?php echo $elt['Libelle_UE']; ?></td>
								<td>
									<a href="FModifierUE.php?id=<?php echo $elt['Code_UE'] ?>">Modifier | </a>
									<a href="SuppressionUE.php?id=<?php echo $elt['Code_UE'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>



				<h3 align="center"><u>LICENCE 3(L3)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify"><h3><u>SEMESTRE 5</u></h3></tr>
						<th scope="col">Code_UE</th>
				     	<th scope="col">Libelle_UE</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data5 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_UE']; ?></td>
								<td><?php echo $elt['Libelle_UE']; ?></td>
								<td>
									<a href="FModifierUE.php?id=<?php echo $elt['Code_UE'] ?>">Modifier | </a>
									<a href="SuppressionUE.php?id=<?php echo $elt['Code_UE'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify"><h3><u>SEMESTRE 6</u></h3></tr>
						<th scope="col">Code_UE</th>
				     	<th scope="col">Libelle_UE</th>
					</thead>
					<tbody>
						<?php
						foreach ($data6 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_UE']; ?></td>
								<td><?php echo $elt['Libelle_UE']; ?></td>
								<td>
									<a href="FModifierUE.php?id=<?php echo $elt['Code_UE'] ?>">Modifier | </a>
									<a href="SuppressionUE.php?id=<?php echo $elt['Code_UE'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>
			</div>
		</div>
</body>

</html>