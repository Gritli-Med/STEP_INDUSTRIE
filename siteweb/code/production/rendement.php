<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Rendement</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/departement.css">
  <link rel="stylesheet" type="text/css" href="../css/rendement.css">
</head>
<body class="photo">
 
    <header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="home25.html"><i class="fa fa-home"></i>   Acceuil</a> </li>
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
      
        <li ><a class="ecrit"  href="../mecanique.html"></i>Mecanique  </a></li><br>
        <li><a href="../electrique.html">Electrique</a></li><br>
        <li class="active-2"><a href="production.html">Production <i class="fa fa-arrow-circle-right"></i></a></li> <br>
        <li><a href="../maintenance.html">Maintenance</a></li>
      </ul>
    </div>
   <div class="sortie">
    <a href="home25.html">  <i class="fa fa-reply" ></i>  Sorter </a>
     </div>
    </box>


    <contenu class="box">
      <div>
      <ul>
        <li class="active-3"><a href="#"></i>Calcul Et Prevésionnement</a></li>
        <li><a href="production-donneé.html">Enregistrement des Donneés De Production </a></li>
        <li><a href="./production/production-historique.html">Historique De production</i></a></li>
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
        <a href="rendement+effectif.html">lire la suite</a>
        <h1>Controlle de rendement de Production</h1>
        <p> Le but de cette partie est le contrôle de taux d'efficacité de la ligne carrousel.  
          Le calculateur vous permet de déterminer le rendement à chaque instant. 
          Cela vous permet le réglage de ce facteur pour avoir le rendement optimal à la fin de journée.</p>
          <h2>     Noter bien : COFAT cherche à obtenir un rendement du linge atteint 80%.</h2>
       
          <div23 class="rendement">
          <table>
            
            <tr class="case11">
                <th> Projet</th>
              <th> Réference de cable</th>
              <th> Effectif </th>
              <th> Quantité Planifié </th>
              <th> Dureé Planifié (min) </th>
              <th> Quantité Produites</th>
              <th> Dureé de production (min) </th>
              <th> Nombre des Postes </th>
              
             
            </tr>
           <tr class="case2">
           <form action="#" method="post">
             <td><input type="text" name="" ></td>
             <td><select name="ref" >
								<option value="9820939380">ref:9820939380</option>
								<option value="9821499980">ref:9821499980</option>
                <option value="9821499780">ref:9821499780</option>
                <option value="9821500280">ref:9821500280</option>
              
							</select></td>
             <td><input type="number" name="eff" ></td>
             <td><input type="number" name="q" ></td>
             <td><input type="number" name="dd" ></td>
             <td><input type="number" name="qp" ></td>
             <td><input type="number" name="dp" ></td>
             <td><input type="number" name="" ></td>
           
           </tr> 
         </table> 
         <div>
           <button class="agree" type="submit" name="submit">Valider</button>
           </div>
         </div23>
         <div88 id="res">
   <php class='back'>
         <?php


if (isset($_POST['submit'])) {
  $ref=$_POST["ref"];
$q=$_POST["q"];
$eff=$_POST["eff"];
$dd=$_POST["dd"];
$qp=$_POST["qp"];
$dp=$_POST["dp"];
  if ($ref=="9820939380"){
    $y=0.2;
   
  }
  else if (($ref=="9821499980")){
    $y=0.37;
  }
  else if (($ref=="9821499780")){
    $y=0.75;
  }
  else if (($ref=="9821500280")){
    $y=1.5;
  }
 

 $b=($y*$dd)/$dp;
 $a=((7.6*$eff)/$b);
 $a80=$a*0.8; 
$r=(($qp*$b)/(7.6*$eff))*100;
$qr=($qp/$dp)*$dd;

  echo " *  La Quantité produite dans les quanditions normale de production:   $a cables <br/>"."\n" ;
  echo " *  La Quantité produite avec un rendement minimale acceptable (80%) egal a :   $a80 cables   <br/>"."\n";
  echo "   *  votre productivité est egal a  :   $r %  <br/>"."\n";
  if($r<75){
    echo " *    conclusion ==> vous etes hors la limite de controlle veuiller chercher a augmenter l'effectif ou accéliré le rythme de production  <br/>"."\n";
  }
  else if($r<85){
    echo "   *  conclusion ==> vous etes a la limite productivité minimale acceptable <br/>"."\n";
  }
  else if($r>85){
    echo "   *  conclusion ==> vous etes dans les condition normale continué avec ce rythme de production <br/>"."\n";
  }
  echo "   *   si vous continuer avec ce rythme vous aurez a la fin de temps planifier une quantité egal a :   $qr cables  <br/>"."\n";
  
}
						
?>
</php>
</div88>
</diver>
         <div25>
        <a href="../production.html">lire moins</a>
        <div25/>
        
      </calcul>
    </contenu>
  </intermidiare>
    
 
</body>
</html>