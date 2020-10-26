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
      <li> Manque D'indication </li>
  </ul>
   
    </boite>   
<btn  >
<button  class="valider" type="submit" name="submit">Nouveau diagnostic </button>


</btn>
 
  <bouton class="retour">
 
</bouton>

</questionaire>
<detail class="box2">
<h1> Detail </h1>
<h3> Ce défaut est un indice de disfonctionnement totale de système. Il peut être un effet de </h3>
<ul> <li> Paramétrage  </li>
    <ul>
    <li> Vérifier les paramètres d’entrés (vitesse – nombres des planches…)</li> 
</ul><br>
<li> Etat de support  </li>
<ul>
    <li> Vérifié le positionnement des supports et leur état de surface.</li> 
</ul><br>
<li> Disfonctionnement de capteur de fin de course </li>
<ul>
    <li> Vérifié le positionnement de capteur </li> 
</ul><br>
<li> Defaut de cablage </li>
<ul>
    <li> vérifié que la bouton marche/arrêt et clignoté en vert </li> 
</ul>
</ul>



<btn  class="btn">
<button  type="submit" name="submit">Problème résolue </button>

<button type="submit" name="detail">Consulter Un Technicien De Maintenance</button>
</btn>

<h3> 
pour continuer l'analyse 
    <a class='ici' href="manque-tech.php">   cliquer ici   </a>    afin de confirmer que vous etes un technicien de maintenance. </h3>

</detail>
<bottom>
      <div>
        <img class="image" src="./image/66.png">
        <h3>BUREAUX ET USINE : KM 10, ROUTE DE FOUCHANA. SIDI HASSINE. 1095 TUNIS- TUNISIE</h3>
        <img class="logo" src="./image/logo.png">
      </div>
    </bottom>

</body>

</html>


<?php
if (isset($_POST['submit']))
{ 
  header("Location: ../index.php?error=emptyfields");
  exit();


}
if (isset($_POST['detail'])){
    header("Location:manque-tech.php");
}

?>