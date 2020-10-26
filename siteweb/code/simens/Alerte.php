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
  

    <div class="effectif">
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
      <th> Descrption (Remarque)</th>

  
   </tr> 
   
   <?php
require 'database.php';
$sql="SELECT * FROM mainte";
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
</div>






<div class="effectif-2">
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
      <th> Descrption (Remarque)</th>
     <div>
  
   </tr> 
<?php
require 'database.php';
$sql="SELECT * FROM information ORDER BY production DESC " ;

$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);
if ($rowcount>0) {
    while($row=mysqli_fetch_assoc($res)){
        $x=$row['id'];
        $y=$row['production'];
        for ($j = 1; $j <= $x; $j++)
        { 
          
        }
    ?>    
     </td>
    
     <td>
     <?php
    $sum = 0;
    for($i = 1; $i<=$x; $i++) 
    {
        
         $sum = $sum + $i;
         
        
    
    }
      
       echo'<tr>';
       echo '<th>'. $row['production'] .'</th>';
       echo '<th>'. $i .'</th>';
       echo '<th>'. $j .'</th>';
        echo '<th>'. $x .'</th>';
        echo '<th>'. $sum .'</th>';
       
    }
    }

?>





<div class="effectif-2">
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
      <th> Descrption (Remarque)</th>
     <div>
  
   </tr> 
<?php
require 'database.php';
$sql="SELECT * FROM information ORDER BY production DESC " ;

$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);
if ($rowcount>0) {
    while($row=mysqli_fetch_assoc($res)){
    $x=$row['arret production'];
    $y=$row["arret d'urgence"];
    if ($x==1){
      if ($y==1){
     
        echo'<tr>';
        echo '<th>'. $row['id'] .'</th>';
       
        echo '<th>'. $x .'</th>';
        echo '<th>'. 'no' .'</th>';
      }
    }
  
      
      
    }
    }

?>
</body>
</html>