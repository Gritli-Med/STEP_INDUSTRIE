<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="./css/detail3.css">
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
      <li> roulement </li>
      <li> deraillement </li>
  </ul>
   
    </boite>   
<btn  >
<button  class="valider" type="submit" name="retour">Nouveau Diagnostic</button>


</btn>
 
  <bouton class="retour">
 
</bouton>

</questionaire>
<detail class="box2">
<h1> Detail </h1>
<h3> 
Les causes d'un déraillement accidentel peuvent être multiples :
</h3>
<ul> <li> défaut de guide  </li>
    <ul>
    <li> : mauvais soudeur aux niveaux des intersections des barres </li> 
</ul>
<li> vitesse excessive </li>
<ul>
    <li> Veuillez vérifier le  vitesse d'entres </li> 
</ul>
<li> Roulage sur un obstacle se trouvant sur la voie. </li>
<ul>
    <li> Veuillez Controller le guide et verifier le présence d'un obstacle</li> 
</ul>
</ul>
    <btn  class="btn">
<button  type="submit" name="submit">Remplir Votre FICHE DE CONTROLLE</button>


</btn>

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
 
    header("Location: ../maintenance/maintenance-1.php");

  }
 


if (isset($_POST['retour'])){
    header("Location:auto.php");
}


?>