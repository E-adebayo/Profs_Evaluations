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
<body style="color: black; background-image: url(image/a9.jpg);">

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
		<br><br><br>
		<button type="submit" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#modal01" style="color: #FFFF99">Evaluer ici</button>
	<form method="POST">
<div class="modal" id="modal01" tabindex="-1" role="dialog" >
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle est votre appréciation générale du cours suivi?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<label class="control-label " for="class" >Appréciation générale de l'enseignant</label>
			<select class="form-control" name="mention1">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		<div class="form-group">
			<label class="control-label " for="class" >Plage horaire prévue pour le cours</label>
			<select class="form-control" name="mention2">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		</div>
		 <div class="form-group">
			<label class="control-label " for="class" >Cadre logistique: matériel utilisé par l'enseignant</label>
			<select class="form-control" name="mention3">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class" >Implication des étudiants dans le déroulement du cours</label>
			<select class="form-control" name="mention4">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class" >L'enseignant respecte les tranches de cours prévues</label>
			<select class="form-control" name="mention5">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class" >Disponibilité de l'enseignant au début du cours</label>
			<select class="form-control" name="mention6">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal02" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal02" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle est votre appréciation générale du contenu du cours?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="form-group">
			<label class="control-label " for="class" >Le cours a répondu à mes attentes</label>
			<select class="form-control" name="mention7">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		<div class="form-group">
			<label class="control-label " for="class" >Le cours a capté mon intéret</label>
			<select class="form-control" name="mention8">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		</div>
		 <div class="form-group">
			<label class="control-label " for="class" >Le cours était clair et détaillé </label>
			<select class="form-control" name="mention9">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class">Le cours contient le plan, les objectifs, critères d'évaluation,biographie </label>
			<select class="form-control" name="mention10">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal03" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal03" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle est votre appréciation du déroulement du cours?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="form-group">
			<label class="control-label " for="class" >Qualité des aspects théoriques</label>
			<select class="form-control" name="mention11">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		<div class="form-group">
			<label class="control-label " for="class" >Qualité des aspects pratiques</label>
			<select class="form-control" name="mention12">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		</div>
		 <div class="form-group">
			<label class="control-label " for="class" >Apport professionnel de l'enseignement </label>
			<select class="form-control" name="mention13">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal04" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal04" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle est votre appréciation de la documentation fournie? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="form-group">
			<label class="control-label " for="class" >Support détaillé papier</label>
			<select class="form-control" name="mention14">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		<div class="form-group">
			<label class="control-label " for="class" >Support résumé PowerPoint</label>
			<select class="form-control" name="mention15">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		</div>
		 <div class="form-group">
			<label class="control-label " for="class" >Support de Travaux Dirigés ou Pratiques</label>
			<select class="form-control" name="mention16">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal05" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal05" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle est votre appréciation Travaux Dirigés ou Travaux Pratiques?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="form-group">
			<label class="control-label " for="class" >Travaux Dirigés ou Travaux Pratiques organisés</label>
			<select class="form-control" name="mention17">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		<div class="form-group">
			<label class="control-label " for="class" >Travaux Dirigés ou Travaux Pratiques corrigés</label>
			<select class="form-control" name="mention18">
		      <option value="Très Satisfait">Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		</div>
		 <div class="form-group">
			<label class="control-label " for="class" >Temps consacrés aux Travaux Dirigés ou Travaux Pratiques</label>
			<select class="form-control" name="mention19">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class">Travaux Dirigés ou Travaux Pratiques ont permis la comprehension du cours </label>
			<select class="form-control" name="mention20">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal06" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal06" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle suggestion faites-vous pour améliorer ce cours?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<textarea class="form-control" name="suggestion1"></textarea>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal07" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modal07" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle est votre appréciation du cadre de l'enseignement?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
			<label class="control-label " for="class" >Salle spacieuse</label>
			<select class="form-control" name="mention21">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		<div class="form-group">
			<label class="control-label " for="class" >Disponibilité de la connexion internet(WIFI)</label>
			<select class="form-control" name="mention22">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		</div>
		 <div class="form-group">
			<label class="control-label " for="class" >Salle eclairée</label>
			<select class="form-control" name="mention23">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class" >Etats des bancs</label>
			<select class="form-control" name="mention24">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class" >Climatisation de la salle</label>
			<select class="form-control" name="mention25">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div>
		 <div class="form-group">
			<label class="control-label " for="class" >Disponibilité du cours dans les prises</label>
			<select class="form-control" name="mention26">
		      <option value="Très Satisfait" selected>Très Satisfait</option>
		      <option value="Satisfait">Satisfait</option>
		      <option value="Peu Satisfait">Peu Satisfait</option>
		      <option value="Insatisfait">Insatisfait</option>
		    </select>
		 </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal08" data-dismiss="modal">Suivant</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modal08" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quelle suggestion faites-vous pour améliorer ce cours?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      	<textarea class="form-control" name="suggestion2"></textarea>
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-danger" ><a href="MenuPrincipal" style="color: white" name="connecter">Terminer</a></button>
      </div>
    </div>
  </div>
</div>




				</form>
			</div>
		</div>

	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"></script>   
	<script src="js/bootstrap.bundle.js"></script>   
	<script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/bootstrap.js"></script>   
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>

</body>
</html>


 <?php
	require_once('connexion.php');
	$ac = new Connexion();
	$con = $ac->connection();

	//if(isset($_POST['connecter'])) {
	//	$FK_Code_PROF=$_POST['Code_PROF'];
		$FK_Code_PROF='hdhfk';
		$mention1=$_POST['mention1'];
		$mention2=($_POST['mention2']);
		$mention3=($_POST['mention3']);
		$mention4=$_POST['mention4'];
		$mention5=$_POST['mention5'];
		$mention6=$_POST['mention6'];
		$mention7=$_POST['mention7'];
		$mention8=($_POST['mention8']);
		$mention9=($_POST['mention9']);
		$mention10=$_POST['mention10'];
		$mention11=$_POST['mention11'];
		$mention12=($_POST['mention12']);
		$mention13=($_POST['mention13']);
		$mention14=$_POST['mention14'];
		$mention15=$_POST['mention15'];
		$mention16=$_POST['mention16'];
		$mention17=($_POST['mention17']);
		$mention18=($_POST['mention18']);
		$mention19=$_POST['mention19'];
		$mention20=$_POST['mention20'];
		$suggestion1=$_POST['suggestion1'];
		$mention21=$_POST['mention21'];
		$mention22=($_POST['mention22']);
		$mention23=($_POST['mention23']);
		$mention24=$_POST['mention24'];
		$mention25=$_POST['mention25'];
		$mention26=($_POST['mention26']);
		$suggestion2=($_POST['suggestion2']);

		echo("Le nom est " . $_POST['mention2'] . " et l'Email est " . $_POST['mention9'] . ".");

		// $req1 = $con->prepare("INSERT INTO `evaluer`( `FK_Code_PROF`, `Mention1`, `Mention2`, `Mention3`, `Mention4`, `Mention5`, `Mention6`, `Mention7`, `Mention8`, `Mention9`, `Mention10`, `Mention11`, `Mention12`, `Mention13`, `Mention14`, `Mention15`, `Mention16`, `Mention17`, `Mention18`, `Mention19`, `Mention20`, `Suggestion1`, `Mention21`, `Mention22`, `Mention23`, `Mention24`, `Mention25`, `Mention26`, `Suggestion2`)
		// 	VALUES('$FK_Code_PROF',$mention1','$mention2','$mention3','$mention4','$mention5','$mention6','$mention7','$mention8','$mention9','$mention10','$mention11','$mention12','$mention13','$mention14','$mention15','$mention16','$mention16','$mention17','$mention18','$mention19','$mention20','$suggestion1','$mention21','$mention22','$mention23','$mention24','$mention25','$mention26','$suggestion2')");
		// $req1->execute();
	//	header("location:MenuPrincipal.php");
	//}
?>