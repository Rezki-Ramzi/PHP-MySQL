<html>
<head>
<style>
       
     body{
        background:thistle;
     }
     h1{
           text-align:center;
       }

     </style>
 <title>formulaire inscription</title>
 <link href="home.css" rel="stylesheet">
 
</head>
<body>
   <button> <a href="home.php">Annuler </a></button>
    <form  action="inscription.php" method="POST">
    <div class="div_form">
    <h1>Inscription</h1>
         <input type="text" placeholder="Nom" name="nom"><br> <br>
		<input type="text" placeholder="prenom" name="prenom" ><br> <br>
       <input type="text" placeholder="pseudo" name="pseudo"> <br> <br>
       <input type="email" placeholder="E-mail" name="mail" ><br> <br>
       <input type="password" placeholder="mot de passe" name="mdp"><br><br>
       <input type="checkbox" name="case" id="case" style="width: 16px;height: 16px;"/> 
       <label for="">Souvenir de moi</label> <br> <br>
        <input type="submit" name="submit" value=" Se Connecter " id="submit"><br>
    </div>
    </form>
    
</body>

</html>