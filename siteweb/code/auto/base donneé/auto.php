<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="basse.css">
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
    <suite class="boite-op">
     
    <h2 class="titre"> Contacter un Technicien </h2>
 <form action="auto-inc.php" method="post">
<div class="action-2">

<div class="case">

<p class="name">  </p>
    <input class="in" type="text" name="idt" placeholder="Identifiant Unique " >
 <p class="name"> </p>
    <input class="in" type="date" name="jours" >
    <p class="name"> </p>
    <input class="in" type="time" name="heure" placeholder="" >
   
    <p class="name">  </p>
    <input class="in" type="text" name="type" placeholder="type de panne" >
    </div>
    <p class="name-2">    </p>
    <input class="des" type="text" name="des" placeholder="Message : Descrption" >
   
</div>
<button  type="submit" name="submit">Envoyer</button>
</form>
</suite>

</body>

</html>

