<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Historique de production</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/production-historique.css">
  
</head>
<body class="photo">
 
    <header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="home25.html"><i class="fa fa-home"></i>   Acceuil</a> </li>
         <li><a class="col active"href=""><i class="fa fa-user-o"></i>  Depatement</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="../mecanique.php">Mecanique</a></li>
              <li><a href="../electrique.php">Electrique</a></li>
              <li><a href="../production.php">Production</a></li> 
              <li><a href="../auto-diag.php">Maintenance</a></li>
            </ul>
          </div>
           </li>
         <li><a class="col" href="../login-simens.php"><i class="fa fa-wrench"></i> Simens s7 1200</a>
        
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
    <intermidiare>
    


    <contenu class="box">
    <div>
      <ul>
        <li ><a href="../production.php"></i>Calcul Et Prevésionnement</a></li>
        <li ><a href="prod-donnee.php">Enregistrement des Donneés </a></li>
        <li><a class="active-3" href="#">Historique De production</i></a></li>
      </ul>
      </div>
       <!--table a deplacé-->
 <div2 class="effectif">
  <table>
    <tr class="case1">
    <th> numéro</th>
      <th> Date</th>
      <th> Projet</th>
      <th> Réferance</th>
      <th> Nombre des Postes </th>
      <th> Quantité demander</th>
      <th> Quantité Réalisé</th>
      <th> Dureé de production (min) </th>
      <th> Effectif</th>
    
  
      <th> Productivié</th> 
    
     
  
   </tr> 
    
  
<?php
require 'database.php';
$sql="SELECT * FROM donee";
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);
if ($rowcount>0) {
 
    while($row=mysqli_fetch_assoc($res)){
      $poste=$row['poste'];
     $dureé= $row['duree'];
      $demande= $row['demande'];
      $realise= $row['realise'];
      $effectif=$row['effectif'];
      $tak=$dureé/$demande;
      $main=$tak*$poste;
      $productivité= (($realise*$main)/($effectif*$dureé))*100;
       echo'<tr>';
       echo '<th>'. $row['id'] .'</th>';
        echo '<th>'. $row['date'] .'</th>';
		echo '<th>'. $row['projet'] .'</th>';
		echo '<th>'. $row['ref'] .'</th>';
		echo '<th>'. $row['poste'] .'</th>';
		echo '<th>'. $row['demande'] .'</th>';
		echo '<th>'. $row['realise'] .'</th>';
		echo '<th>'. $row['duree'] .'</th>';
		echo '<th>'. $row['effectif'] .'</th>';
    echo '<th>'. number_format($productivité,2) .' % </th>';
        echo '</tr>';
    }
    }

?>
 </table> 

 <div >
   <br>
     <a class="ret" href="prod-donnee.php"> Retour </a>
</div>
    </contenu>
  
  </intermidiare>

 
</body>
</html>
