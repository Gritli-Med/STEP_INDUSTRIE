<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="./css/login2.css">
  <link rel="stylesheet" type="text/css" href="simens/main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
<header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class="active col" href="home.php"><i class="fa fa-home"></i>   Acceuil</a> </li>
         <li><a class="col"href="login.php"><i class="fa fa-user-o"></i>  Depatement</a>
          <div class="sub-menu-1">
            <ul>
              <li><a href="#">Mecanique</a></li>
              <li><a href="#">Electrique</a></li>
              <li><a href="#">Production</a></li> 
              <li><a href="#">Maintenance</a></li>
            </ul>
          </div>
           </li>
         <li><a class="col" href="login-simens.php"><i class="fa fa-wrench"></i> Simens s7 1200</a>
        
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
 <div class="loginbox">
     <img src="./image/avatar3.png" class="avatar">
<h1>login</h1>
<form action="login-simens-inc.php" method="post">
<p class='inv'> Nom d'utilisateur ou Mots de passe incorrect</p> <br>
<p>Nom d'utilisateur</p>
<input class="casse" type="text" name="username" placeholder="Entrer Votre Nom d'utilisateur">
<p>Mot De Passe</p>
<input class="casse" type="password" name="password" placeholder="Entrer Votre Mot De passe">
<button class="boton" type="submit" name="submit">Valider</button><br>

<a href="">      Vous avez besoin d'aide ?</a>
</form>
 </div>

 
</body>
</html>