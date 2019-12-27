<?php
 session_start();

 $bdd = new PDO('mysql:host=localhost;dbname=db_evaluation', 'root', '');

	if(isset($_POST['connecter'])) {
	   $login = htmlspecialchars($_POST['login']);
	   $password = sha1($_POST['password']);
	   $class = ($_POST['class']);
	   if(!empty($login) AND !empty($password)) {
	    $requser = $bdd->prepare("SELECT * FROM UTILSATEUR WHERE login = '$login'AND password = '$password' AND FK_Code_CLASSE='$class'");
	    $requser->execute(array($login, $password,$class));
	    $userinfo = $requser->fetch();
	      	  $_SESSION['login'] =$login;
	      	  $_SESSION['FK_Code_CLASSE'] =$class;

	      	if(($userinfo=['login'])AND($userinfo=['password'])){ 
	      		if (($login!='admin')AND($password!='admin')) {
	      			header("location:MenuPrincipal.php");
	      		} else {
	      			header("location:Administrateur.php"); 
	      		}
	      		
	      	}
		    else { 
		    $erreur = "Mauvais login ou mot de passe !"; 
			} 
		}
		else { 
		    $erreur = "Tous les champs doivent être complétés !"; 
		}
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Institut Africain d'informatique</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image" href="image/iai2.png">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">           
</head>
<style type="text/css">
  .div 
  {
  	border: yellow;
  }
  </style>
<body style="background-image: url(image/a9.jpg);" >

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
			        <a class="nav-link" href="#" style="color:#FFFF99"><h1> Accueil </h1><span class="sr-only">(current)</span></a>
			      </li>
			      </form>
			    </ul>
			</div>
		</nav>
		
		
		<br>
		<div class="container">
		<div class="col-md-12">
				<?php
	         if(isset($erreur)) {
	            echo '<h1 align="center"><font color="yellow">'.$erreur."</font></h1>";
         		}
         	?>
			<h2 style="font-family: arial; color: #FFFF99; ">
			 <div aria-live="polite" aria-atomic="true"class="d-flex justify-content-center align-items-center" style="min-height: 200px;">
					  <form method="POST" class="px-4 py-3">
						<fieldset >
							<table align="center" border="3" > 	
								<tr>
									<td style="background:rgb(0, 0, 0, 0.6); ">
										<div class="span" >
										<div class="col-md-12" >
												<div class="contact-form">
													<div class="d-flex justify-content-center align-items-center"><br>
														<img src="image/icone.png" width="100">
													</div >
													<div class="dropdown-divider"></div>
													<div class="form-group">
														<label class="control-label col-sm-2" for="login" >Login</label>
														<div class="col-sm-10">          
															<input type="text" class="form-control" id="login" placeholder="Login" name="login">
														</div>
													</div>
													
													<div class="form-group"> 
														<label class="control-label col-sm-2" for="password">Password</label>
														<div class="col-sm-10">          
															<input type="password" class="form-control" id="password" placeholder=" Mot de passe" name="password">
														</div>
													</div>
												 	 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												    <div class="modal-dialog" role="document">
												      <div class="modal-content">
												        <div class="modal-header">
												          <h5 class="modal-title" id="exampleModalLabel" style="color: black">Classe</h5>
												          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
												        </div>
												        <div class="modal-body">
												          <div class="form-group">
												            <label class="control-label col-sm-2" for="class" ></label>
												            <div class="col-sm-10">          
												              <input type="text" class="form-control" id="class" placeholder="Saisir votre classe" name="class">
												            </div>
												          </div>
												        </div>
												        <div class="modal-footer">
												          <button type="submit" class="btn btn-danger btn-lg btn-block "name="connecter"> 
												           <a >Suivant</a>
												         </button>
												      </div>
												    </div>
												  </div>
													</div>
												  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
												  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
												  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
												  <script>
												    $(document).on("click" function() {
												      $('#exampleModal').modal('hide');
												    });
												  </script>

													<div class="form-group">
														<div class="form-check">
															<label class="form-check-label" for="dropdownCheck"><h5>&nbsp;
															<input type="checkbox" class="form-check-input" id="dropdownCheck">
															Se rappeler de moi</h5></label>
														 </div>
													</div>
													<div class="form-group" >        
														<div class="col-sm-offset-2 col-sm-10">
															<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" style="color: #FFFF99">Se connecter</a></button>
														</div>
														<div class="dropdown-divider" ></div>
														<div align="left">
															<a class="dropdown-item" href="Formulaire.php" style="color:#FFFF99; background:rgb(0, 0, 0, 0.1); " ><h5>Nouveau? S'inscrire ici</h5></a>
														</div>
												</div>
											</div>
										</div>
											</div>
										</div>
									</td>
								</tr>
							</table>
					</fieldset>
			 </form>
			 

	    	 </div>
	    	</h2>
	    	
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