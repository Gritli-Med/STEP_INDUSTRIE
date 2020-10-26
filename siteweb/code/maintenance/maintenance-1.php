<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Maintenance</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/maintenance.css">
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
      
        <li ><a class="ecrit"  href="../mecanique.php"></i>Mecanique</a></li><br>
        <li><a href="../electrique.php">Electrique</a></li><br>
        <li ><a href="../production.php">Production </a></li> <br>
        <li class="active-2"><a href="../auto-diag.php">Maintenance  <i class="fa fa-arrow-circle-right"></i></a></li>
      </ul>
    </div>
   <div class="sortie">
    <a href="../home.php">  <i class="fa fa-reply" ></i>  Sorter </a>
     </div>
    </box>
   
    <contenu class="box">
      
      <div>
      <ul>
        <li>  <i  id="maint"class="fa fa-cogs" ></i> </li>
        <li><a href="../auto-diag.php"> <i class="fa fa-check-square-o" ></i>  Auto Diagnostique</i></a></li>
        <li class="active-3"><a href="#"></i> <i class="fa fa-folder-open-o" ></i>  Intervension De Maintenance</a></li>
        <li><a href="historique-mainte.php"> <i class="fa fa-database" ></i>  Historique De Maintenance </a></li>
     
      </ul>
      </div>
      <formulaire class="form">

    <div-2>
  <h1 class="form-titre"> Enregistrer Vos Données </h1>
  </div-2>

<form class="centre" action="mainte-inc.php" method="post">
        <form id="name">

    <p class="name"> Nom Prénom </p>
    <input class="first-name" type="text" name="" placeholder="Nom" >
    <input class="first-name" type="text" name="" placeholder="Prénom" >
    
    <p class="name"> Identifiant Unique </p>
    <input class="in" type="text" name="idt" placeholder="Identifiant" >
    <p class="name"> Département</p>
    <select  class="op" name="dep" >
            <option value="electrique">Mecanique</option>
            <option value="electrique">Electrique</option>
                        </select>
    <p class="name"> Jours D'Intervension</p>
    <input class="in" type="date" name="jours" >
    <p class="name"> Heures D'Intervension</p>
    <input class="in" type="time" name="heure" placeholder="" >
    <p class="name"> Dureé D'opération de Maintenance (min) </p>
    <input class="in" type="number" name="duree" placeholder="dureé" >
    <p class="name"> Type de Panne </p>
    <input class="in" type="text" name="type" placeholder="type " >
    <p class="name"> Cause  </p>
    <input class="in" type="text" name="cause" placeholder="cause" >
    <p class="name"> Méthode de Résolution de Probléme </p>
    <input class="in"  type="text" name="methodes" placeholder="méthode" >
    <p class="name"> Piéces a remplacer (s'il existe) </p>
    <input class="in" type="text" name="pieces" placeholder="piéce" >
    <p class="name"> Descrption (Remarque)  </p>
    <input class="des" type="text" name="des" placeholder="decrire le probléme en quelque ligne" >
    <p class="radio"> vous avez effectué des travaux précédents sur la carrousel</p>
   <label class="ques" name="travaux" >
    <a><input   type="radio" name="oui" placeholder="" > oui </a> 
    <a><input type="radio" name="nom" placeholder="" > non </a>
  </label><br>
  <button class="form-buton" type="submit" name="submit">Valider</button>
</form>



 </formulaire>
  
 
</body>
</html>