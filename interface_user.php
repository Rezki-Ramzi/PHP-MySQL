
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#div_ver ul {
  list-style-type: none;
  background:#f1f1f1 ; //
  margin: 0;
  padding: 0;
  width: 200px;
  height: 1000px; 
  position:absolute ; 
 
}
#div_ver li {
  /*text-align: center;
   border-bottom: 1px solid #555; */
}
#div_ver li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
#div_ver li a:hover {
  background-color: #555;
  color: white;
}
#ul{
  display:none;
}
#contact{
  display:none;
}
</style>
    <meta charset="UTF-8">
    <title>user</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="document.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div style="margin-top:80px;" id="div_ver">
    <ul id="ul">
      <li><a href="#">INTRODUCTION</a></li>
      <li><a href="#news">BASE DE DONNEES</a></li>
      <li><a href="#contact">LE LANGAGE  SQL</a></li>
      <li><a href="#about">SELECT</a></li>
      <li><a href="#home">WHERE</a></li>
      <li><a href="#news">AS</a></li>
      <li><a href="#contact">GROUP BY</a></li>
      <li><a href="#about">AND-OR-IN-BETWEEN</a></li>
      <li><a href="#home">HAVING</a></li>
      <li><a href="#news">LES DATES</a></li>
      <li><a href="#news">UPDATE</a></li>
      <li><a href="#news">DELETE</a></li>
      <li><a href="#news">ORDER BY</a></li>
      <li><a href="#news">INSERT INTO</a></li>
      <li><a href="#news">EXISTS</a></li>
      <li><a href="#news">ANY-ALL</a></li>
      <li><a href="#news">CASE</a></li>
      <li><a href="#news">MIN-MAX</a></li>
      <li><a href="#news">AVG-SUM-COUNT</a></li>
      <li><a href="#news">LIKE</a></li>
      <li><a href="#news">INNER JOIN</a></li>
      <li><a href="#news">LEFT JOIN</a></li>
      <li><a href="#news">RIGHT JOIN</a></li>
      <li><a href="#news">UNION</a></li>
      <label for="">------------------------------------</label>
      <li><a href="#news">PARAMETRES</a></li>
      <li><a href="#news">PAIEMENT</a></li>
      <li onclick="gestion_contact()"><a href="#news">CONTACT</a></li>
      <div id="contact">
      <label for=""> TEL: 0672657073</label> <br> <br>
      <label for=""> Mail: ir_rezki@esi.dz</label>
      </div>
    </ul>
    
</div>
<nav>
    <label class="class_lab"><i class="material-icons" style="font-size:36px; cursor:pointer;" onclick="charger_menu()">menu</i>
    <!-- <i class="material-icons" style="font-size:36px; color:white;">menu</i> -->
    <ul>
        <li><a href="logout.php"> Log out</a> </li>
        <li><a href="help.php"> help</a> </li>
    </ul>
</nav>


</body>
</html>