<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Institut Africain d'informatique</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image" href="image/iai2.png">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">           
</head>
<body style=" background-image: url(image/a9.jpg);">

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
			        <a class="nav-link" href="#" style="color:#FFFF99"><h6>Bienvenue <b><?php echo $_SESSION['login']; ?></b></h6></a>
			      </li>
			      <li class="nav-item">
        			<a class="nav-link" href="login.php" style="color: #FFFF99"><h6>Se déconnecter</h6></a>
     			 </li>
			      </form>
			    </ul>
			</div>
		</nav>
			<div class="span">
				<div class="col-md-12">
					<div class="contact-form">
						<div class="form-group"><br><br><br>
							<div class="col-sm-12">
								<button type="submit" class="btn btn-danger btn-lg btn-block"><a href="AffichageUE.php" style="color: #FFFF99">Voir les Unités d'Enseignement enrégistrées</a> 
								</button><br><br><br><br>
			                    <button type="submit" class="btn btn-danger btn-lg btn-block" ><a href="AffichageEC.php" style="color: #FFFF99">Voir les Elements Consécutifs enrégistrés</a>
			                    </button><br><br><br><br>
							    <button type="submit" class="btn btn-danger btn-lg btn-block" ><a href="AffichageProf.php" style="color: #FFFF99">Voir les Professeurs enrégistrés</a>
							    </button>
							</div>
						</div>
					</div>
				</div>
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