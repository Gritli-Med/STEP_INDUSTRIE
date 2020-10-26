<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="./css/fin.css">
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
<h2 class="titre-roman">     Problème d'alimentation du CPU </h2>
</div>


<p>Une panne de l'alimentation d'un automate peut entrainer le dysfonctionnement ou l'arrêt inopiné de celui-ci.Les causes d'une panne d'alimentation peuvent être :</p>
<ul> <li> module brûlé</li>
   <li> un mauvais choix du module d'alimentation entrainant des surtensions</li>
   <li>une mauvaise mise à la terre lors du câblage</li>
   <li>une borne de connexion déserrée </li>
   <li>etc...</li></ul>
 <p> Au niveau des CPU Siemens,on retrouve différents LED qui permettent de déceler les erreurs au niveau de celui-ci.
   Si aucune erreur d'alimentation n'est décelée,la LED DC5V du CPU de l'automate doit être de couleur verte.Dans certains cas
    ,vous aurez besoin d'un module d'alimentation redondant qui va permettre de garder l'automate fonctionnel en cas de coupure inopinée.<p>
         
<image>
<img class="tof4" src="../image/dc.png">
<image>
<btn  class="btn2">

<a href="../auto-diag.php">Probléme resolué</a>
<a href="fin-d.php">Page suivante</a> <br>

</btn>
<br>
<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger le support d'apprentisage de Siemens s7 1200 </h5> 

</body>

</html>

