


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
//echo "connexion etablie";
if(isset($_POST['pseudo']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mail']) AND
isset($_POST['mdp'])){
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $mdp=sha1($_POST['mdp']);
    $mail=htmlspecialchars($_POST['mail']);
   // $case_cochee=$_POST['case'];
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    if(!empty($pseudo) AND !empty($mdp) AND !empty($mail) AND !empty($nom) AND !empty($prenom))
{
   
   // il faut s'assurer que le mail est valide et eviter les doublons;
   $req1 = $bdd->prepare('SELECT * from memebre where pseudo=? or mail=?');
   $req1->execute(array($pseudo, $mail));
   $occurence_compte=$req1 ->rowCount();
   if($occurence_compte >=1){
    ?>
    <script type="text/javascript">alert('verifier votre mail ou votre pseudo est deja utilisé!')</script>
    <?php
    include("formulaire.php");
   }
   else{
    $req = $bdd->prepare('INSERT INTO memebre (pseudo,nom,prenom,mail,mdp,case_cochee) VALUES(:pseudo,:nom,:prenom,:mail,:mdp,:cas)');
    $req->execute(array(
         'pseudo' => $pseudo,
         'nom' => $nom,
         'prenom' => $prenom,
         'mail' => $mail,
         'mdp' => $mdp,
         'cas' => $_POST['case']
    
    ));
   // on envoie un mail de bienvenue à l'utilisateur
     $req->closeCursor();
     header('Location: home.php');
   }

   
}
else{
    ?>
    <script type="text/javascript">alert('veuillez entrer tous les champs du form')</script>
    <?php
    include("formulaire.php");
    //echo "entrer tous les champs !"; // alerte en javascript
}

}


?>

