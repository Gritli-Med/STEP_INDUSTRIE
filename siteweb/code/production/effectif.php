<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Effectif</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/departement.css">
  <link rel="stylesheet" type="text/css" href="../css/production.css">
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
    <intermidiare>
    <box>
      <div class="boite">
        <ul>
      
        <li ><a class="ecrit"  href="../mecanique.php"></i>Mecanique  </a></li><br>
        <li><a href="../electrique.php">Electrique</a></li><br>
        <li class="active-2"><a href="#">Production <i class="fa fa-arrow-circle-right"></i></a></li> <br>
        <li><a href="../maintenance.php">Maintenance</a></li>
      </ul>
    </div>
   <div class="sortie">
    <a href="../home.php">  <i class="fa fa-reply" ></i>  Sorter </a>
     </div>
    </box>


    <contenu class="box">
      <div>
      <ul>
        <li><a  class="active-3" href="#"></i>Calcul Et Prevésionnement</a></li>
        <li><a href="production-doneé.php">Enregistrement des Donneés  </a></li>
        <li><a href="production-historique.php">Historique De production</i></a></li>
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
         
 <!--table a deplacé-->
 <div2 class="effectif">
  <table>
    <tr class="case1">
      <th> Réference de cable</th>
      <th> Quantité Planifié</th>
      <th> Dureé de production (min) </th>
      <th> Nombre des Postes </th>
     
    </tr>
   <tr class="case">
   <form action="#" method="post">
     <td><select name="ref" >
								<option value="9820939380">ref:9820939380</option>
								<option value="9821499980">ref:9821499980</option>
                <option value="9821499780">ref:9821499780</option>
                <option value="9821500280">ref:9821500280</option>
              
							</select></td>
     <td><input type="number" name="num2" ></td>
     <td><input type="number" name="num3" ></td>
     <td><input type="number" name="num4" ></td>
   
   </tr> 
 </table> 
 <div>
 <form action="effectif.php" method="get">
 <button class="valider" type="submit" name="submit">Valider</button>
 </div>
 </div2>
 <div3 id="rendement">
 <?php


if (isset($_POST['submit'])) {
  $r=$_POST["ref"];
$q=$_POST["num2"];
$d=$_POST["num3"];
$po=$_POST["num4"];

  if ($po%2==1)
  {echo "Vérifier le nombre des postes";
  }
  else {
    if ($r=="9820939380"){
      $y=0.2;
     
    }
    else if (($r=="9821499980")){
      $y=0.37;
    }
    else if (($r=="9821499780")){
      $y=0.75;
    }
    else if (($r=="9821500280")){
      $y=1.5;
    }
   
      $b=($q*$y)/(7.6);
     $r=($b*480)/$d;
    echo "vous avez besoin d'un effectif egal a " ,$r, " operateurs" ;
  }
  
  }
							
?>
 </div3> <br>


      <div4>
        <a href="../production.php">lire moins</a>
        <h1>Controlle de rendement de Production</h1>
        <p> Le but de cette partie est le contrôle de taux d'efficacité de la ligne carrousel.  
          Le calculateur vous permet de déterminer le rendement à chaque instant. 
          Cela vous permet le réglage de ce facteur pour avoir le rendement optimal à la fin de journée.</p>
          <h2>     Noter bien : COFAT cherche à obtenir un rendement du linge atteint 80%.</h2>
        <a href="rendement+effectif.php">lire la suite</a>
        </div4>
      </calcul>
    </contenu>
  </intermidiare>
    
 
</body>
</html>



							
