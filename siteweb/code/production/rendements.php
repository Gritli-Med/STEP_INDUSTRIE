<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Effectif</title>
  <link rel="stylesheet" type="text/css" href="calcul2.css">
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
    <intermidiare>

<div class="titre">
<h2> Entreé Vos Donneés </h2>
  </div>

  <div class="rendement">
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
<div>
 <form action="effectif.php" method="post">
 <button class="ok" type="submit" name="submit">Valider</button>
 </div>
  
 <intermidiare>
 <php class='back'>
         <?php


if (isset($_POST['submit'])) {
  $ref=$_POST["ref"];
$q=$_POST["q"];
$eff=$_POST["eff"];
$dd=$_POST["dd"];
$qp=$_POST["qp"];
$dp=$_POST["dp"];

 $a =($q*$dp)/$dd;
 $a80=$a*0.8;
$h=(25*60*7.6)/$a;
$r=(($qp*$h)/($eff*456))*100;
$qr=($qp*$dd)/$dp;

  echo " <p> * La Quantité produite dans les quanditions normale de production: "  . number_format($a,3)." cables <br/>"."\n" ;
  echo " *  La Quantité produite avec un rendement minimale acceptable (80%) egal a :   "  . number_format($a80,3) ."  cables   <br/>"."\n";
  echo "   *  votre productivité est egal a  :  "  . number_format($r,3) ." %  <br/>"."\n";
  if($r<75){
    echo " *    conclusion ==> vous etes hors la limite de controlle veuiller chercher a augmenter l'effectif ou accéliré le rythme de production  <br/>"."\n";
  }
  else if($r<85){
    echo "   *  conclusion ==> vous etes a la limite productivité minimale acceptable <br/>"."\n";
  }
  else if($r>85){
    echo "   *  conclusion ==> vous etes dans les condition normale continué avec ce rythme de production <br/>"."\n";
  }
  echo "   *   si vous continuer avec ce rythme vous aurez a la fin de temps planifier une quantité egal a :" . number_format($qr,3). "cables </p> <br/>"."\n";
  
}
?>
<div> 
  <a class='ret' href="../production.php"> Retour </a>
</div>

</body>
</html>



							
