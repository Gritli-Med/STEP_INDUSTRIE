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
<h2 class="titre-roman">     Profinet </h2>
</div>


<p>Dans le navigateur du projet, double cliquer sur "Online & diagnostics (En ligne & diagnostic)". (ﬁ Online & diagnostics (En ligne & diagnostic)</p>
<p>Dans la partie droite de la fenêtre, on peut voir dans les outils en ligne un panneau de commande CPU qui affiche le temps 
de cycle et les ressources mémoire. Mettez la CPU sur RUN</p>
         
<image>
<img class="tof4" src="../image/run.png">
<image>
  <p>Des informations générales sur la CPU s'affichent dans la fenêtre de la zone de travail</p>
  <image>
<img class="tof4" src="../image/gene.png">
<image>

<image>
<p>Les paramètres de réseau et l'état de l'interface PROFINET peuvent également être affichés.</p>
<image>
<img class="tof4" src="../image/prof.png">
<image>
<btn  class="btn2">

<a href="auto.php">Probléme resolué</a>
<a href="fin-p.php">Page suivante</a> <br>

</btn>
<br>
<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger le support Profinet Siemens s7 1200 </h5> 

</body>

</html>

