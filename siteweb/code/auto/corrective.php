<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="./css/simens1.css">
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


  <questionaire id="box">
   <h1> Auto diagnostic</h1> 
   <h3> Tout d'abord,il est important de savoir qu'il existe deux types de pannes
    <ul ><li >
    les pannes logicielles et les pannes matérielles.
Les pannes logicielles sont les pannes liées par exemple au système d'exploitation de 
    l'automate (firmware),à des erreurs durant la programmation ou pendant le chargement du programme dans l'automate.</li>
    <li>Les pannes matérielles sont des pannes physiques  (carte brûlée ou pas correctement enfichée etc..).</li> </ul>

Ci dessous,quelques pannes/problèmes que l'on peut rencontrer sur les automates Siemens : </h3>
  <boite class="radio2">
 
   <h2 >  type de maintenance </h2> <br>
   
       <input type="radio"  name="dep" value="1" > 
     <label >Problème d’exécution de programme </label> <br>

    <input type="radio" name="dep" value="2">
    <label >Indication lumineux</label> <br>
    <input type="radio" name="dep" value="3">
    <label >Carte électronique</label> <br>
    
    <input type="radio" name="dep" value="4">
    <label >Diagnostic en ligne</label> <br>
    
    <input type="radio" name="dep" value="5">
    <label >Autres Problémes</label> <br>
    </boite>   

<button class="valider" type="submit" name="submit">Valider</button>


 
  <bouton class="retour">
 
</bouton>

</questionaire>

<bottom>
      <div>
        <img class="image" src="./image/66.png">
        <h3>BUREAUX ET USINE : KM 10, ROUTE DE FOUCHANA. SIDI HASSINE. 1095 TUNIS- TUNISIE</h3>
        <img class="logo" src="./image/logo.png">
      </div>
    </bottom>
</body>

</html>


<?php
if (isset($_POST['submit']))
{ 
  $x=$_POST['dep'];
  if (empty($x)) {
  header("Location: ../index.php?error=emptyfields");
  exit();}
  
  
  if($x=="1"){
    header("Location:geterreur.php");
   }
  if($x=="2"){
    header("Location: indicateur.php");

  }
  if($x=="3"){
    header("Location:carte.php");
   }
  if($x=="4"){
    header("Location: diag.php");

  }
  if($x=="5"){
    header("Location: prof.php");

  }

}

?>