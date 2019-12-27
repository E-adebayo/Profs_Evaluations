<?php
class connexion{
	public function connection(){
		try{
			$bdd=new pdo('mysql:host=localhost;dbname=db_evaluation','root','');
			$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
			//echo "Connection OK";
		}catch(PDOException $e){
			echo "Une erreur est surnevu ".$e->getMessage();
		}
		return $bdd;
	}


}
$ac = new Connexion();
$test = $ac->connection();
?>