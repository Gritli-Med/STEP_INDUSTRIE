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
<button  class="valider" type="submit" name="submit2">Nouveau diagnostic </button>


</btn>
 
  <bouton class="retour">
 
</bouton>

</questionaire>
<detail class="box2">
<h1> Detail </h1>
<h2> Groupe-cible  </h2>
<h3> personnel de production sans aucune connaissance des automates programmables Siemens ou avec une connaissance reduite  </h3>
<h2> Démarche  </h2>
<ul> <li> Contrôle marche arret d'automate </li>
    <ul>
    <li> Vérifier que la bouton marche/ arret clignote en vert</li> 
</ul><br>
<photo>
<img class="img" src="../image/automate.PNG"> 
</photo>
<li> Etat du support  </li>
<ul>
    <li> Vérifier le positionnement des supports et leur état de surface.</li> 
</ul><br>
<li> Disfonctionnement de capteur de proximité </li>
<ul>
    <li> Vérifié le positionnement de capteur </li> 
</ul><br>


</ul>



<btn  class="btn">
<button  type="submit" name="submit">Problème résolue </button>

<button type="submit" name="detail">Page suivante</button>
</btn>


</detail>


</body>

</html>


<?php
if (isset($_POST['submit']))
{ 
  header("Location: ../auto-diag.php?error=emptyfields");
  exit();
}
if (isset($_POST['submit2']))
{ 
  header("Location: auto.php?error=emptyfields");
  exit();

}
if (isset($_POST['detail'])){
    header("Location:manque-ind2.php");
}

?>