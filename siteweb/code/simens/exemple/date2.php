<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="alerte.css">
  <link rel="stylesheet" type="text/css" href="production-historique.css">
</head>
<body class="photo">
 

   
   <?php
require 'database.php';
$sql="SELECT * FROM info
where id =(SELECT MAX(id) FROM info)" ;
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);
if ($rowcount>0) {
    while($row=mysqli_fetch_assoc($res)){
        $date =$row['heure'];
        $urg=$row['arret urgence'];
        $prod=$row['arret production'];
        if($urg==1){
          
        $now_timestamp = strtotime(date('H:i:s'));
        $diff_timestamp = $now_timestamp - strtotime($date);
        $x=$now_timestamp;
       echo '<p> votre'. $diff_timestamp. '</p>' ;
       echo'<p>'.  $now_timestamp.'</p>' ;
       echo'<p>'.  $urg.'</p>' ;
        
       if($diff_timestamp < 60){
        echo 'La Ligne Caroussel en EN PANNE depuis'.round($diff_timestamp).' seconds';
           }
           else if($diff_timestamp>=60 && $diff_timestamp<3600){
            echo  'La Ligne Caroussel en EN PANNE depuis  ' .  round($diff_timestamp/60). ' Minutes' ;
           }
           else if($diff_timestamp>=3600 && $diff_timestamp<86400){
            echo  'La Ligne Caroussel en EN PANNE depuis  ' . round($diff_timestamp/3600).' heures';
           }
           else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){
            echo  'La Ligne Caroussel en EN PANNE depuis  ' . round($diff_timestamp/(86400)).' Jours';
           }
          
          }
          elseif($prod==1){
          
            $now_timestamp = strtotime(date('H:i:s'));
            $diff_timestamp = $now_timestamp - strtotime($date);
            $x=$now_timestamp;
           echo '<p> votre'. $diff_timestamp. '</p>' ;
           echo'<p>'.  $now_timestamp.'</p>' ;
           echo'<p>'.  $prod.'</p>' ;
            
           if($diff_timestamp < 60){
            echo 'La ligne caroussel est en PAUSE depuis '.round($diff_timestamp).' seconds';
               }
               else if($diff_timestamp>=60 && $diff_timestamp<3600){
                echo  'La ligne caroussel est en PAUSE depuis ' .  round($diff_timestamp/60). ' Minutes' ;
               }
               else if($diff_timestamp>=3600 && $diff_timestamp<86400){
                echo  'La ligne caroussel est en PAUSE depuis  ' . round($diff_timestamp/3600).' heures';
               }
               else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){
                echo  'La ligne caroussel est en PAUSE depuis ' . round($diff_timestamp/(86400)).' Jours';
               }
              
              }
else {
  echo 'La Ligne Caroussel est en etat normale de prodcution ';
}

    }
    }
?>