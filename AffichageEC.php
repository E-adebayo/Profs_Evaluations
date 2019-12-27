<?php
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();

	$req1 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%1'");
	$req1->execute();
	$data1 = $req1->fetchall();

	$req2 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%2'");
	$req2->execute();
	$data2 = $req2->fetchall();

	$req3 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%3'");
	$req3->execute();
	$data3 = $req3->fetchall();

	$req4 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%4'");
	$req4->execute();
	$data4 = $req4->fetchall();

	$req51 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%5G'");
	$req51->execute();
	$data51 = $req51->fetchall();

	$req52 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%5S'");
	$req52->execute();
	$data52 = $req52->fetchall();

	$req53 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%5M'");
	$req53->execute();
	$data53 = $req53->fetchall();

	$req61 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%6G'");
	$req61->execute();
	$data61 = $req61->fetchall();

	$req62 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%6S'");
	$req62->execute();
	$data62 = $req62->fetchall();

	$req63 = $con->prepare("SELECT * FROM EC WHERE Code_EC LIKE '%6M'");
	$req63->execute();
	$data63 = $req63->fetchall();
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
			        <a class="nav-link" href="FAjouterEC" style="color:white"><h6> Ajouter un EC</h6></a>
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
				<h1 align="center" ><u>Tableau des Elements Constitutifs(EC)</u></h1>
			<h3 align="center" ><u>LICENCE 1(L1)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 1</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data1 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 2</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<?php
						foreach ($data2 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>

			<h3 align="center" ><u>LICENCE 2(L2)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 3</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data3 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="modifierEtudiant.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 4</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<?php
						foreach ($data4 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>

			<h3 align="center" ><u>Génie Logiciel 3(GLSI3)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" style="color: black;"><h3><u>SEMESTRE 5</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data51 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 6</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<?php
						foreach ($data61 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>

					<h3 align="center" ><u>Administration Systèmes et Réseaux 3(ASR3)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 5</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data52 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
						</tr>
					</tbody>
				</table><br>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 6</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<?php
						foreach ($data62 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
								</td>
							</tr>
						<?php
						} ?>
					</tbody>
				</table><br><br>

					<h3 align="center" ><u>Multimédia Web 3(MTWI3)</u></h3>
				<table class="table table-striped table-dark" border="1" width="70%">
					<thead>
						<tr align="justify" ><h3><u>SEMESTRE 5</u></h3></tr>
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<tr>
						<?php
						foreach ($data53 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
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
						<th scope="col">Code_EC</th>
				      	<th scope="col">Libelle_EC</th>
					</thead>
					<tbody>
						<?php
						foreach ($data63 as $elt) { ?>
							<tr>
								<td><?php echo $elt['Code_EC']; ?></td>
								<td><?php echo $elt['Libelle_EC']; ?></td>
								<td>
									<a href="FModifierEC.php?id=<?php echo $elt['Code_EC'] ?>">Modifier | </a>
									<a href="SuppressionEC.php?id=<?php echo $elt['Code_EC'] ?>">Supprimer</a>
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