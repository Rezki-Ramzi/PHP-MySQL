
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;port=3308;dbname=monsite;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

if(isset($_POST['pseudo']) AND isset($_POST['mot_de_passe'])) {
   //echo "les param sont presents";
  
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $mdp=$_POST['mot_de_passe'];

   
    if(!empty($pseudo) AND !empty($mdp)) {
		$mdp=sha1($_POST['mot_de_passe']);
		$req = $bdd->prepare('SELECT * FROM memebre where pseudo=? AND mdp=?');
		$req->execute(
			array(
			$pseudo,$mdp
		));

	     $compte_existe=$req ->rowCount();
		 if($compte_existe>=1){
			
			header('Location: home.php');
		 }
		 else{
			?>
		<script type="text/javascript">alert('un compte introuvable')</script>
		<?php
		include("login.php");
		 }

		 $req->closeCursor();	
	}
	else{
		
		?>
		<script type="text/javascript">alert('les parametres ne sont pas tous presents')</script>
		<?php
		include("login.php");
	}
}
else{
?>
		<script type="text/javascript">alert('les param ne sont pas tous presents')</script>
		<?php
		include("login.php");
} 


?>