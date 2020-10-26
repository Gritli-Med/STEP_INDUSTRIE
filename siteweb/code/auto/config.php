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
<h2 class="titre-roman"> I- Configuration matériel et Logiciel </h2>
</div>
<h3>Diagnostic d'erreurs et erreur matérielle </h3> <h5>Les dérangements peuvent avoir différentes origines.  </h5>

<h5> En cas de dérangement après passage en RUN, on distingue deux types d'erreurs.  </h5>
<ol><li> La CPU reste ou passe à l'arrêt (STOP). La LED STOP jaune est allumée. En plus sont allumées les LED d'affichage de la CPU, de l'unité d'alimentation, des modules de périphérie ou des modules de bus. Dans ce cas, le dérangement se situe au niveau de la CPU. Il se peut qu'un module du système d'automatisation soit défectueux ou mal paramétré ou que le système de bus soit défaillant. 
Une analyse d'interruption est exécutée. Par l’évaluation du diagnostic matériel et la lecture de l'état du module dans le tampon de diagnostic de la CPU.</li><br>
<li> La CPU est en mode RUN mais avec un défaut actif. La LED RUN verte est allumée, les LED d'affichage de la CPU, de l'unité d'alimentation, des modules de périphérie ou des modules de bus sont allumées ou clignotent.<br>
Dans ce cas, le dérangement se situe au niveau de la périphérie ou l'alimentation. On effectue d'abord un contrôle visuel pour délimiter la zone d'erreur. Les LED d'affichage de la CPU et de la périphérie sont évaluées. Les données de diagnostic matériel des modules de périphérie et de bus sont consultées. Il est également possible de lancer une analyse de défaillance sur la console de programmation à l'aide d'une table de visualisation.
</li></ol>

<h3>Diagnostic matériel </h3>
<h5> La vue des appareils en mode en ligne de TIA Portal présente un aperçu rapide de la structure et de l'état du système d'automatisation.</h5>



         
<image>
<img class="tof2" src="../image/conf.png">
<image>
 


<h2 class="titre-roman"> II- Charger le programme </h2>
<h3> Désarchiver un projet existant  </h3>
<p>Avant d'aborder les fonctions de diagnostic, il nous faut un projet avec une programmation et une configuration matérielle.<br>
Pour désarchiver un projet existant, vous devez rechercher l'archive à partir de la vue de projet sous ﬁProject (Projet)ﬁRetrieve (Désarchiver).
   Confirmez votre choix avec "Ouvrir". (ﬁ Project (Projet) ﬁ Retrieve (Désarchiver) ﬁ Sélection d'une archive .zap ﬁ ouvrir) </p>
   <image>
<img class="tof3" src="../image/archive.png">
<image>
  <p>Sélectionner ensuite le répertoire cible pour enregistrer le projet désarchivé. Confirmez votre sélection par "OK". </p>

<h3>Charger une copier de programme </h3>

<p>Une fois le désarchivage terminé, sélectionner l'automate et le charger ainsi que le
programme créé.</p>
<image>
<img class="tof2" src="../image/charger.png">
<image>
  <p> Avant le chargement, certaines actions (en rose) devront peut-être être paramétrées. Cliquer ensuite à nouveau sur "Charger" </p>
 

<btn  class="btn2">

<a href="../auto-diag.php">Probléme resolué</a>
<a href="action.php">Page suivante</a> <br>

</btn>
<br>
<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger le support d'apprentisage de Siemens s7 1200 </h5> 

</body>

</html>



