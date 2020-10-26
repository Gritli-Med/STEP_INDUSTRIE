<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  
  <link rel="stylesheet" type="text/css" href="./css/detail-bruit.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body class="photo">
 
    <header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="../home.php"><i class="fa fa-home"></i>   Acceuil</a> </li>
         <li><a class="col active"href=""><i class="fa fa-user-o"></i>  Depatement</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="#">Mecanique</a></li>
              <li><a href="#">Electrique</a></li>
              <li><a href="#">Production</a></li> 
              <li><a href="#">Maintenance</a></li>
            </ul>
          </div>
           </li>
         <li><a class="col" href="#"><i class="fa fa-wrench"></i> Simens s7 1200</a>
        
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

 <form action="#" method="post">


  <questionaire class="box">
   <h1> Auto diagnostic</h1> 
   
  <boite class="radio2">
 
   <h2 > Source de Panne </h2> <br>
  <ul> 
      <li> Simens S7 1200 </li>
      <li> Message D'erreur </li>
  </ul>
   
    </boite>   
<btn  >
<button  class="valider" type="submit" name="auto">Nouveau diagnostic </button>


</btn>
 
  <bouton class="retour">
 
</bouton>

</questionaire>
<detail class="box2">
 <form action="#" method="post">


  <questionaire id="box">
   <h1> Auto diagnostic</h1> 
   <h3> Vous avez indiqué que vous avez reçu un message d’erreur avec indice 2
 </h3>
  <boite class="radio2">
 
   <h2 >Type D'indince </h2> <br>
   
   <h4>Le message d’erreur commence par l’indice2 est conçue pour des technicien de maintenance spécialisé </h4>

<btn  class="btn">
<button  type="submit" name="retour">Retour</button>

<button type="submit" name="detail">Consulter Un Technicien De Maintenance</button>
</btn>

<h4> 
pour continuer l'analyse 
    <a class='ici' href="bruit-tech.php">   cliquer ici   </a>    afin de confirmer que vous etes un technicien de maintenance. </h4>
</detail>


</body>

</html>


<?php
if (isset($_POST['detail']))
{ 

    header("Location:../maintenance/maintenance-1.php");

  }
 
if (isset($_POST['auto'])){
    header("Location:auto.php");
}
if (isset($_POST['retour'])){
    header("Location:manque-ind2.php");
}

?>