<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="production-historique.css">
  <link rel="stylesheet" type="text/css" href="alerte.css">
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
<div> 
<h2> Controle D'etat de Production </h2>


</div>




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
      
        
       if($diff_timestamp < 60){
        echo ' <p> La Ligne Caroussel en EN PANNE depuis'.round($diff_timestamp).' seconds </p>';
           }
           else if($diff_timestamp>=60 && $diff_timestamp<3600){
            echo  ' <p> La Ligne Caroussel en EN PANNE depuis  ' .  round($diff_timestamp/60). ' Minutes </p>' ;
           }
           else if($diff_timestamp>=3600 && $diff_timestamp<86400){
            echo  ' <p> La Ligne Caroussel en EN PANNE depuis  ' . round($diff_timestamp/3600).' heures </p>';
           }
           else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){
            echo  ' <p>La Ligne Caroussel en EN PANNE depuis  ' . round($diff_timestamp/(86400)).' Jours </p>';
           }
          
          }
          elseif($prod==1){
          
            $now_timestamp = strtotime(date('H:i:s'));
            $diff_timestamp = $now_timestamp - strtotime($date);
            $x=$now_timestamp;
         
            
           if($diff_timestamp < 60){
            echo ' <p> La ligne caroussel est en PAUSE depuis '.round($diff_timestamp).' seconds </p> ';
               }
               else if($diff_timestamp>=60 && $diff_timestamp<3600){
                echo  '<p> La ligne caroussel est en PAUSE depuis ' .  round($diff_timestamp/60). ' Minutes </p>' ;
               }
               else if($diff_timestamp>=3600 && $diff_timestamp<86400){
                echo  ' <p> La ligne caroussel est en PAUSE depuis  ' . round($diff_timestamp/3600).' heures </p> ';
               }
               else if($diff_timestamp>=86400 && $diff_timestamp<(86400*30)){
                echo  ' <p> La ligne caroussel est en PAUSE depuis ' . round($diff_timestamp/(86400)).' Jours </p> ';
               }
              
              }
else {
  echo  ' <p> La Ligne Caroussel est en etat normale de prodcution  </p> ';
}

    }
    }
?>


<a class ="super" href="home.php" > supervision </a>

<bottom>
      <div>
        <img class="image" src="../image/66.png">
        <h3>BUREAUX ET USINE : KM 10, ROUTE DE FOUCHANA. SIDI HASSINE. 1095 TUNIS- TUNISIE</h3>
        <img class="logo" src="../image/logo.png">
      </div>
    </bottom>

</body>
</html>