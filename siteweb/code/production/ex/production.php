<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>production</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="departement.css">
</head>
<body class="photo">
 
    <header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="home.php"><i class="fa fa-home"></i>   Acceuil</a> </li>
         <li><a class="col active"href=""><i class="fa fa-user-o"></i>  Depatement</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="mecanique.php">Mecanique</a></li>
              <li><a href="electrique.php">Electrique</a></li>
              <li><a href="production.php">Production</a></li> 
              <li><a href="maintenance.php">Maintenance</a></li>
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
    <intermidiare>
    <box>
      <div class="boite">
        <ul>
      
        <li ><a class="ecrit"  href="mecanique.php"></i>Mecanique  </a></li><br>
        <li><a href="electrique.php">Electrique</a></li><br>
        <li class="active-2"><a href="production.php">Production <i class="fa fa-arrow-circle-right"></i></a></li> <br>
        <li><a href="maintenance.php">Maintenance</a></li>
      </ul>
    </div>
   <div class="sortie">
    <a href="home.php">  <i class="fa fa-reply" ></i>  Sorter </a>
     </div>
    </box>


    <contenu class="box">
      <div>
      <ul>
        <li ><a class="active-3" href="#"></i>Calcul Et Prevésionnement</a></li>
        <li><a href="./production/production-doneé.php">Enregistrement des Donneés  </a></li>
        <li><a href="./production/production-historique.php">Historique De production</i></a></li>
      </ul>
      </div>
      
      <calcul  >
        <diver class="calcul-1">
        <h1>Estimation D'effectif </h1>
        <p> L’effectif est un facteur qui influé directement sur 
          la qualité de production. Le travail est élaboré dans le
           but d’avoir un rendement maximal tends vers 100%. Le calculateur de ce site vous permet
            de déterminer l’effectif nécessaire et suffisant pour atteindre l’objectif de production
             avec un minimum de personnel possible.  </p>
        <a href="production/effectif.php">lire la suite</a>
        <h1>Controlle de rendement de Production</h1>
        <p> Le but de cette partie est le contrôle de taux d'efficacité de la ligne carrousel.  
          Le calculateur vous permet de déterminer le rendement à chaque instant. 
          Cela vous permet le réglage de ce facteur pour avoir le rendement optimal à la fin de journée.</p>
          <h2>     Noter bien : COFAT cherche à obtenir un rendement du linge atteint 80%.</h2>
        <a href="production/rendement.php">lire la suite</a>
        </diver>
      </calcul>
    </contenu>
  </intermidiare>
    
 
</body>
</html>