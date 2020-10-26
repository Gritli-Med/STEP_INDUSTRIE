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
      <li> Message D'erreur </li>
  </ul>
   
    </boite>   
<btn  >
<button  class="valider" type="submit" name="auto">Nouveau diagnostic </button>


</btn>
 
  <bouton class="retour">
 
</bouton>

</questionaire>
<detail class="box2">
 <form action="#" method="post">


  <questionaire id="box">
   <h1> Auto diagnostic</h1> 
   <h3> Au début de chaque message d’erreur vous trouver un indice. Veuillez déterminer le type d’indice
 </h3>
  <boite class="radio2">
 
   <h2 >Type D'indince </h2> <br>
   
       <input type="radio"  name="dep" value="1" > 
     <label >Indice1</label> <br>

    <input type="radio" name="dep" value="2">
    <label >Indice2</label> <br>

<btn  class="btn">
<button  type="submit" name="retour">Retour</button>

<button type="submit" name="detail">Page suivante</button>
</btn>


</detail>


</body>

</html>


<?php
if (isset($_POST['detail']))
{ 
  $x=$_POST['dep'];
  if (empty($x)) {
  header("Location: ../index.php?error=emptyfields");
  exit();}
  
  
  if($x=="1"){
    header("Location:manque-ind2-oui1.php");
   }
  if($x=="2"){
    header("Location:manque-ind2-oui2.php");

  }
 

}
if (isset($_POST['auto'])){
    header("Location:auto.php");
}
if (isset($_POST['retour'])){
    header("Location:manque-ind.php");
}

?>