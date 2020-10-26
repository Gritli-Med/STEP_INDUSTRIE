<?php
    require 'datas.php';
    $ref = null;
    if ( !empty($_GET['idt'])) {
        $ref = $_REQUEST['idt'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM mainte where idt= ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($ref));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="mainte-historique.css">
</head>

<body class="photo">
 
    <header>
      <titre id="titre">
        <h1><i class="fa fa-university" ></i></i>  COFAT</h1>
      </titre>

     <div class="menu-bar">
      
     <ul>
         <li><a class=" col" href="#"><i class="fa fa-home"></i>   Acceuil</a> </li>
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
         <li><a class="col active" href="#"><i class="fa fa-wrench"></i> Simens s7 1200</a>
        
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

<body id="bod" >
<div class="don">
  <h2> Modifiér Vous donneés </h2>
<form class="form-horizontal" action="edittb.php?id=<?php echo $ref?>" method="post">
<p> Identifiant Unique  </p>
<input name="idt" type="text"  placeholder="" value="<?php echo $data['idt'];?>" readonly>
<p> Département </p>
<input name="dep" type="text"  placeholder="" value="<?php echo $data['dep'];?>" readonly>
<p>Jours D'Intervension</p>
<input name="jours"  type="text"  placeholder="" value="<?php echo $data['jours'];?>" readonly>
<p> Dureé D'opération de Maintenance (min) </p>
<input name="duree" type="text"  placeholder="" value="<?php echo $data['duree'];?>" readonly>
<p>Type de Panne </p>
<input name="type" type="text"  placeholder="" value="<?php echo $data['type'];?>" required>
<p> Cause </p>
<input name="methodes" type="text"  placeholder="" value="<?php echo $data['methodes'];?>" required>
<p> Méthode de Résolution de Probléme </p>
<input name="cause" type="text"  placeholder="" value="<?php echo $data['cause'];?>" required>
<p> Piéces a remplacer (s'il existe) </p>
<input name="pieces" type="text"  placeholder="" value="<?php echo $data['pieces'];?>" readonly>
<p>Descrption (Remarque)  </p>
<input name="des" type="text"  placeholder="" value="<?php echo $data['des'];?>" required> <br>
<button type="submit" class="bout">Mis a jours des donneés</button>
  </div>
  </body>
  </html>