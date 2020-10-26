<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="production-historique.css">
</head>
<body class="photo">
 
    <header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="#"><i class="fa fa-home"></i>   Acceuil</a> </li>
         <li><a class="col"href="login.php"><i class="fa fa-user-o"></i>  Depatement</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="#">Mecanique</a></li>
              <li><a href="#">Electrique</a></li>
              <li><a href="#">Production</a></li> 
              <li><a href="#">Maintenance</a></li>
            </ul>
          </div>
           </li>
         <li><a class="col active" href="#"><i class="fa fa-wrench"></i> Simens s7 1200</a>
        
          <div class="sub-menu-1">
            <ul>
              <li><a href="#">informations</a></li>
              <li><a href="#">Supervision</a></li>
              <li><a href="#">Alertes</a></li>
            </ul>
          </div>
        </li>
         <li><a class="col" href="https://www.linkedin.com/company/cofat-group/about/"><i class="fa fa-phone"></i>  Contact</a> </li>
     </ul>
     
     </div> 
    </header>
   <br>
<box class='avant'>
<div class='title'>
<h2> recherche <h2>
<form action="ex2.php" method="post">
<input type="text" name="recherche" placeholder="Projet" >
<div >
         <button id="btn-rech" type="submit" name="recherche">Valider</button>
          </div>
</div>


<div class='title'>
    
<h2> Filtrer<h2>
    <h3 class='ligne'> Par Référence </h3>
<select name="ref" >
                 <option value="">pas de filtrage</option>
				<option value="ref:9820939380">ref:9820939380</option>
				<option value="ref:9821499980">ref:9821499980</option>
                <option value="ref:9821499780">ref:9821499780</option>
                <option value="ref:9821500280">ref:9821500280</option>
                
							</select>



<h3> Par production </h3>
<select name="ref" >
                               <option value="">pas de filtrage</option>
								<option value="conforme">Conforme </option>
								<option value="conforme">Non Conforme</option>
                               
                
                            </select>
  <h3> Par effectif</h3>
  <select name="ref" >
                               <option value="">pas de filtrage</option>
								<option value="normale">Normale</option>
								<option value="sous">sous</option>
                <option value="sur">sur</option>
               
                
                            </select>
                            <div >
         <button id="btn-rech" type="submit" name="submit">Valider</button>
          </div>
</div>

</box>





<div class="titre">
<h2> Historique De production </h2>
  </div>

<div class="effectif-2">
  <table>
    <tr class="case1">
    <th> numéro</th>
      <th> Date</th>
      <th> Projet</th>
      <th> Réferance</th>
      <th> Nombre des Postes </th>
      <th> Quantité demander</th>
      <th> Quantité Réalisé</th>
      <th> Effectif</th>
      <th> Dureé de production (min) </th>
      <th> Productivié</th> 
      <th> Efficience</th>
     <div>
  
   </tr> 
  
<?php
require 'database.php';
$sql="SELECT * FROM donee";
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);
if ($rowcount>0) {

    while($row=mysqli_fetch_assoc($res)){
      $x=$row['demande'];
      $y=$row['realise'];
      $a=$row['effectif'];
      $b=$row['duree'];
      /*heure de production par cable */
   $h=12000/$x;
     /* resultat finale */
     $resultat=(($y*$h)/($a*$b))*100;
 
       $c=' Conforme' ;
       $d='Non Conforme' ;
       echo'<tr>';
       echo '<th>'. $row['id'] .'</th>';
        echo '<th>'. $row['date'] .'</th>';
		echo '<th>'. $row['projet'] .'</th>';
		echo '<th>'. $row['ref'] .'</th>';
		echo '<th>'. $row['poste'] .'</th>';
		echo '<th>'. $row['demande'] .'</th>';
		echo '<th>'. $row['realise'] .'</th>';
		echo '<th>'. $row['effectif'] .'</th>';
		echo '<th>'. $row['duree'] .'</th>';
    echo '<th>'. number_format($resultat,3).' %</th>';
    if ($resultat>80){
     
      echo '<th>'. $c .'</th>';
    }
    if ($resultat<=80){
     
      echo '<th>'. $d .'</th>';
     
   
    }
        echo '</tr>';
    }
    }

?>
 </table>
</div>
<div>
<a class="page" href="detail.php"> Voir Les Details </a>
  </div>


</body>
</html>


<?php

$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'cofat2';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


 // Récupère la recherche
 $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

 // la requete mysql
 $res = $conn->query(
 "SELECT * FROM donee
  WHERE projet LIKE '%$recherche%'
  
  LIMIT 10");
if ($res){
 echo "votre resultat est";
 $nbutilisateurs=mysqli_num_rows($res);
if($nbutilisateurs>0){
echo "hello";
 // affichage du résultat
 while( $row = mysqli_fetch_array($res)){
 echo 'Résultat de la recherche:  '.$row['projet'].' <br />';
 
 echo 'Résultat de la recherche:  '.$row['id'].' <br />';
 }}}
?>