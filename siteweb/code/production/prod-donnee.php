<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>production donneé</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" type="text/css" href="departement.css">
  <link rel="stylesheet" type="text/css" href="donneé.css">
</head>
<body class="photo">
 
<header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="home.php"><i class="fa fa-home"></i>   Acceuil</a> </li>
         <li><a class="col active"href="#"><i class="fa fa-user-o"></i>  Depatement</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="../mecanique.php">Mecanique</a></li>
              <li><a href="../electrique.php">Electrique</a></li>
              <li><a href="../production.php">Production</a></li> 
              <li><a href="../auto-diag.php">Maintenance</a></li>
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
    <box>
      <div class="boite">
        <ul>
      
        <li ><a class="ecrit"  href="../mecanique.php"></i>Mecanique  </a></li><br>
        <li><a href="../electrique.php">Electrique</a></li><br>
        <li class="active-2"><a href="../production.php">Production <i class="fa fa-arrow-circle-right"></i></a></li> <br>
        <li><a href="../auto-diag.php">Maintenance</a></li>
      </ul>
    </div>
   <div class="sortie">
    <a href="home25.html">  <i class="fa fa-reply" ></i>  Sorter </a>
     </div>
    </box>


    <contenu class="box">
      <div>
      <ul>
        <li ><a href="../production.php"></i>Calcul Et Prevésionnement</a></li>
        <li ><a class="active-3" href="#">Enregistrement des Donneés </a></li>
        <li><a href="historique.php">Historique De production</i></a></li>
      </ul>
      </div>
      <donneé id="donnee">
        <h1>Données de Prodcution </h1>
       


        <div2 class="tableau">
          <table>
            <tr class="case1 num">
              <th> Date</th>
              <form action="prod-inc.php" method="post">
              <td><input class='num' type="date" name="date" ></td>
            </tr>
            <tr class="case1">
              <th> Projet</th>
              <td><input type="text" name="projet" placeholder="Projet" ></td>
            </tr>
        
            <tr class="case1">
              <th> Réference de cable</th>
              <td id="option12" >
              <select name="ref" >
								<option value="ref:9820939380">ref:9820939380</option>
								<option value="ref:9821499980">ref:9821499980</option>
                <option value="ref:9821499780">ref:9821499780</option>
                <option value="ref:9821500280">ref:9821500280</option>
                
							</select>
              
              </td>
            </tr>
        
            <tr class="case1">
              <th> Poste</th>
              <td><input type="number" name="poste" placeholder="Poste" ></td>
            </tr>
        
            <tr class="case1">
              <th> Quantité démandé</th>
              <td><input type="number" name="demande" placeholder="Quantité a réalisé" ></td>
            </tr>
        
            <tr class="case1">
              <th> Quantité réalisé</th>
              <td><input type="number" name="realise" placeholder="Quantité produite" ></td>
            </tr>
        
            <tr class="case1">
              <th> Dureé de production (min)</th>
              <td><input type="number" name="duree" placeholder="Dureé en minutes" ></td>
            </tr>
        
            <tr class="case1">
              <th> Effectif</th>
              <td><input type="number" name="effectif" placeholder="Nombres d'operateurs" ></td>
            </tr>
        
           
           
          
         </table> 
</donneé >
         <div >
         <button id="valider" type="submit" name="submit">Valider</button>
          </div>
         </div2>
         
      </donne>
      <a href="index.php"></a>
    </contenu>
  </intermidiare>
    
 
</body>
</html>