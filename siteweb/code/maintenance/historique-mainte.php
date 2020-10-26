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
      <li><a href="../auto-diag.php">Auto Diagnostique </a></li>
        <li ><a href="maintenance-1.php"></i>Intervension De Maintenance</a></li>
        <li class="active-3"><a href="#"> Historique De Maintenance</i></a></li>
      
       
      </ul>
      </div>
       <!--table a deplacé-->
 <div2 class="effectif">
  <table>
    <tr class="case1">
      <th> Date </th>
      <th> Identifiant Unique  </th>
      <th> Département</th>
      <th> Heures D'Intervension</th>
      <th> Dureé D'opération de Maintenance (min)</th>
      <th> Type de Panne</th>
      <th> Cause  </th>
      <th> Méthode de Résolution de Probléme  </th>
      <th> Piéces a remplacer (s'il existe)</th> 
      <th class='des'> Descrption (Remarque)</th>
     
  
   </tr> 
   
<?php
require 'database.php';
$sql="SELECT * FROM mainte   ";
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);
if ($rowcount>0) {
    while($row=mysqli_fetch_assoc($res)){
       echo '<tr>';
       echo '<th>'. $row['jours'] .'</th>';
        echo '<th>'. $row['idt'] .'</th>';
		echo '<th>'. $row['dep'] .'</th>';
		echo '<th>'. $row['heure'] .'</th>';
		echo '<th>'. $row['duree'] .'</th>';
		echo '<th>'. $row['type'] .'</th>';
		echo '<th>'. $row['cause'] .'</th>';
		echo '<th>'. $row['methodes'] .'</th>';
		echo '<th>'. $row['pieces'] .'</th>';
   
		echo '<th>'. $row['des'] .'</th>';
        echo '</tr>';
       
    }
    }
?>
 </table> 
 <div >
   <br>
     <a class="ret" href="maintenance-1.php"> Retour </a>
</div>
     
    </contenu>
  </intermidiare>
    
 
</body>
</html>
