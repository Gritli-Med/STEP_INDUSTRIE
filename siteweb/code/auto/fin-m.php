<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="./css/erreur.css">
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

<div>
<h2 class="titre-roman">     Télecharger les guides simens </h2>
</div>

<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger "le support d'apprentisage de Siemens s7 1200" </h5> 
<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger "le Manuel systéme Simens s7 1200" </h5> 
<h5> <a class="ici" src="pdf" href="pdf/prof.pdf">Cliquer ici   </a> pour télécharger "PROFINET Description du système"  </h5> 
<h5> <a class="ici" src="pdf" href="pdf/simens.pdf">Cliquer ici   </a> pour télécharger "Diagnostics for SIMATIC S7-1200  and S7-1500 ". Ce document est posté en anglais </h5>
<h5> <a class="ici" src="pdf" href="pdf/easy.pdf">Cliquer ici   </a> pour télécharger "SIMATIC S7-1200 Easy Book Manuel "Ce document est posté en anglais  </h5>
<h5> <a class="ici" src="pdf" href="pdf/manuel.pdf">Cliquer ici   </a> pour télécharger "SIMATIC S7-1200 Easy Book "Ce document est posté en anglais  </h5> 
<h5> <a class="ici" src="pdf" href="pdf/s7.pdf">Cliquer ici   </a> pour télécharger "S7 S7-1200 Programmable controller "Ce document est posté en anglais  </h5> <br>

<btn  class="btn2">

<a href="memoire.php">Rétour</a>
<a href="../maintenance/maintenance-1.php">Remplir Votre Fiche de Controlle </a> <br>

</btn>
<br>


</body>

</html>


<?php
if (isset($_POST['submit']))
{ 
  header("Location: auto.php?error=emptyfields");
  exit();
}

?>