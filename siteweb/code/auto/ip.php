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
<h2> Etape de diagnostic de source panne  </h2>
<div>
<h2 class="titre-roman">     Diagnostic complete et adresse IP </h2>
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


<p> S’il y a des informations concernant le diagnostic, elles sont affichées sous Diagnostic status  </p>
<image>
<img class="tof4" src="../image/etat.png">
<image>

<p>Vous trouverez des informations détaillées sur les différents résultats dans le tampon de diagnostic.<p>
<image>
<img class="tof4" src="../image/di.png">
<image>
<p>Les paramètres de réseau et l'état de l'interface PROFINET peuvent également être affichés.</p>
<image>
<img class="tof4" src="../image/prof.png">
<image>
<p>Vous pouvez assigner l'adresse IP à un automate avec la fonction
   "Assign IP address (Affecter l’adresse IP)". Du moins tant qu'aucun matériel n'est chargé dans la CPU.</p>
   <image>
<img class="tof4" src="../image/ip.png">
<image>
<p>Sous "Firmware update (Mise à jour du firmware)", vous pouvez mettre à jour le firmware de l'API.</p>
<image>
<img class="tof4" src="../image/fir.png">
<image>
<p> Sous "Assign name (Affecter un nom)", vous pouvez attribuer un nom d'appareil 
  PROFINET aux appareils de terrain configurés. Il n'est pas possible de modifier le nom d'appareil 
  sur la CPU, cette opération n'est possible qu'en chargeant une configuration matérielle modifiée.
</p>
<image>
<img class="tof4" src="../image/proff.png">
<image>
<p> Sous "Reset to factory settings (Restaurer les paramètres d'usine)", vous pouvez restaurer les les paramètres d'usine de la CPU.
(ﬁFunctions (Fonctions) ﬁ Reset to factory settings (Restaurer les paramètres d'usine)ﬁ Retain/Delete IP IP address (Conserver ou supprimer l'adresse IP)
</p>
<image>
<img class="tof4" src="../image/raz.png">
<image>
<p> Vous pouvez formater la carte mémoire additionnelle si elle est insérée dans la CPU sous "Formater la carte mémoire"
</p>
<image>
<img class="tof4" src="../image/memoire.png">
<image>
<p>interrompre à nouveau la liaison en ligne. </p>
<image>
<img class="tof4" src="../image/on.png">
<image>
<p>TIA Portal est alors à nouveau en mode hors ligne. Les barres oranges et les icônes de diagnostic ne s'affichent plus.</p>
<btn  class="btn2">

<a href="../auto-diag.php">Probléme resolué</a>
<a href="fin.php">Page suivante</a> <br>

</btn>
<br>
<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger le support d'apprentisage de Siemens s7 1200 </h5> 

</body>

</html>

