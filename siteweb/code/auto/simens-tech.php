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
<h2> Groupe-cible  </h2>
<h3>Techniciens .  </h3>
<h2>Mise en Situation  </h2>
<h5> La CPU combine un microprocesseur, une alimentation intégrée,
 des circuits d'entrée et de sortie, un PROFINET intégré,
  des E/S rapides de commande de mouvement, 
  ainsi que des entrées analogiques intégrées dans un boîtier compact en vue de créer un contrôleur puissant <br>
  La CPU fournit un port PROFINET permettant de communiquer par le biais d'un réseau PROFINET. Une fois que vous avez chargé votre programme,
   la CPU contient la logique nécessaire au contrôle et à la commande des appareils dans votre application.</h5>
<image>
<img class="tof" src="../image/simens.png">
<image>

<h3> <a class="ici" src="pdf" href="pdf/maneul.pdf">Cliquer ici   </a> pour télécharger le manuel d’utilisation de Siemens s7 1200 </h3> 




<btn  class="btn1">


<button type="submit" name="detail">Page suivante</button>
</btn>



</body>

</html>


<?php
if (isset($_POST['submit']))
{ 
  header("Location: auto.php?error=emptyfields");
  exit();


}
if (isset($_POST['detail'])){
    header("Location:type-maintenance.php");
}

?>