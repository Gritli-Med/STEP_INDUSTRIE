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
<h2 class="titre-roman">   I- Visualisation et forçage de variables  </h2>
</div>


<p>Ouvrir la  table "watch table".
Vous pouvez saisir les variables dans la table ou sélectionner la table de variables
 "tag_table_sorting_station" et faire glisser les variables à visualiser de la vue de détail sur la table de visualisation</p>
         
<image>
<img class="tof4" src="../image/var.png">
<image>
  <p> Afin de disposer de toutes les fonctions de visualisation et de forçage, les colonnes suivantes doivent être affichées :
 "Toutes les colonnes de forçage" et "Toutes les colonnes du mode étendu".
Choisir le point de déclenchement de la visualisation. (Permanent)</p>
  <image>
<img class="tof4" src="../image/per.png">
<image>
    <p>Les modes de visualisation et de forçage suivants sont disponibles </p>
    <ul> <lil>Permanent (Dans ce mode, les entrées peuvent être visualisées au début du cycle et les sorties à la fin du cycle). </li> 
    <li> Once only, at start of scan cycle (Début du cycle, unique)</li>
    <li> Once only, at end of scan cycle (Fin du cycle, unique)</li>
    <li> Permanently, at start of scan cycle (Début du cycle, permanent) </li>
    <li>Permanently, at end of scan cycle (Fin du cycle, permanent)</li>
    <li> Once only, at transition to STOP (Passage de MARCHE à ARRET, unique)</li>
    <li>Permanently, at transition to STOP (Passage de MARCHE à ARRET, permanent) </li>
</ul>

<p>forcer toutes les valeurs activées de manière unique et immédiate  par "Forçage avec condition de déclenchement".</p>
<image>
<img class="tof4" src="../image/va.png">
<image>

<p> Confirmer l'avertissement en cliquant sur "Yes". (ﬁ Yes (Oui))
</p>
<image>
<img class="tof4" src="../image/oui.png">
<image>

<p> La sortie est activée, bien que les conditions programmées ne soient pas remplies.<p>
<image>
<img class="tof4" src="../image/fin.png">
<image>
<h3>Remarque : </h3> <p> si la table de visualisation est fermée ou si la connexion avec l'API est perdue, toutes les variables forcées deviennent inactives.</p> 

<div>
<h2 class="titre-roman">   II- Forçage permanent de variables  </h2>
</div>
<p> La fonction Forçage permanent permet de renseigner les variables avec une valeur fixe. Les valeurs de forçage sont prédéfinies comme avec la fonction "Forçage de variables", mais à l'inverse,
 elles sont conservées après l'arrêt ou la mise hors tension de la CPU. La principale différence entre "Forçage de variables" et la fonction "Forçage permanent" est la suivante :<br>
A l'inverse de la fonction "Forçage de variables", la fonction "Forçage permanent" ne permet pas d’attribuer de valeurs aux blocs de données, aux temporisations, aux compteurs et aux mémentos.<br>
Avec "Forçage permanent", les entrées en périphérie (p.ex. Ewxx:P) ne peuvent pas être forcées, mais elles peuvent être définies par défaut.<br>
A l'inverse de la fonction "Forçage de variables", les valeurs par défaut définies avec la fonction "Forçage permanent" ne peuvent pas être écrasées par le programme utilisateur.<br>
Une fois que la table de forçage permanent est fermée, les valeurs sont conservées contrairement à la fonction "Forçage des variables".<br>
Si la connexion en ligne avec la CPU est interrompue, la valeur des variables définies avec "Forçage permanent" est conservée.

<p>Sélectionner sur la liste l'opérande "Q1" avec l'adresse %A0.0</p>
<image>
<img class="tof4" src="../image/adresse.png">
<image>
<p>  Pour le forçage permanent, les opérandes sont saisis avec un accès direct à la périphérie (%A0.0:P) </p>
<image>
<img class="tof4" src="../image/12.png">
<image>
<p>Entrer les valeurs voulues et les activer </p>

<p>Ensuite, cliquer sur "Démarrer forçage permanent ou remplacer" ; cette action transfère la nouvelle demande forcée dans la CPU.</p>
<image>
<img class="tof4" src="../image/123.png">
<image>
<p>Le forçage permanent est activé et la LED MAINT jaune sur la CPU est allumée. De plus, un F s'affiche sur fond rouge sur l'écran du S7-1200.</p>
<h3>Remarque : </h3><p>si la table de visualisation est fermée ou si la connexion avec l'API est perdue, le forçage permanent reste actif et la LED FORCE jaune sur la CPU reste allumée.
<br>Pour "Quitter le forçage permanent", cliquer sur . "Quitter forçage permanent" et confirmer la remarque suivante en cliquant sur "Oui".</p><br>
<p>Si une demande de forçage permanent existe déjà, elle peut être affichée et terminée via la vue des appareils en ligne. Pour cela, vous devez faire un clic droit sur la CPU en mode « en ligne » de la vue des appareils et sélectionner "Update and display forced operands (Actualiser et afficher les opérandes soumis au forçage permanent)".<br>
</p>
<image>
<img class="tof4" src="../image/1234.png">
<image>



<btn  class="btn2">
<a href="auto.php">Probléme resolué</a>
<a href="fin-e.php">Page suivante</a> <br>

</btn>
<br>
<h5> <a class="ici" src="pdf" href="pdf/sce.pdf">Cliquer ici   </a> pour télécharger le support d'apprentisage de Siemens s7 1200 </h5> 

</body>

</html>

