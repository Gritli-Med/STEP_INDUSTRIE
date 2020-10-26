<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Effectif</title>
  <link rel="stylesheet" type="text/css" href="calcul.css">
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
         <li><a class="col" href="../login-simens.php"><i class="fa fa-wrench"></i> Simens s7 1200</a>
        
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

<div class="titre">
<h2> Entrer Vos Donneés </h2>
  </div>

<div class="effectif">
  <table>
  <tr class="case1">
      <th> Réference de cable</th>
      <th> Quantité Planifié</th>
      <th> Dureé de production (min) </th>
      <th> Nombre des Postes </th>
     
    </tr>
    <tr >
   <form action="#" method="post">
     <td><select class="case"  name="ref" >
								<option value="9820939380">ref:9820939380</option>
								<option value="9821499980">ref:9821499980</option>
                <option value="9821499780">ref:9821499780</option>
                <option value="9821500280">ref:9821500280</option>
              
							</select></td>
     <td><input  class="num" type="number" name="num2" ></td>
     <td><input class="num" type="number" name="num3" ></td>
     <td><input class="num" type="number" name="num4" ></td>
   
   </tr> 
</table>
</div>
<div>
 <form action="effectif.php" method="post">
 <button class="ok" type="submit" name="submit">Valider</button>
 </div>
  
 <intermidiare>
 <?php


if (isset($_POST['submit'])) {
  $r=$_POST["ref"];
$q=$_POST["num2"];
$d=$_POST["num3"];
$po=$_POST["num4"];

  if ($po%2==1)
  {echo " <p> Vérifier le nombre des postes </p>";
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
    echo " <p> vous avez besoin d'un effectif egal a "  . number_format($r,2) . " operateurs </p> ";
  }
  
  }
							
?>

<div> 
  <a class='ret' href="../production.php"> Retour </a>
</div>
</body>
</html>



							
