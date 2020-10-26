<?php
    require 'datas.php';
    $ref = 0;
     
    if ( !empty($_GET['idt'])) {
        $ref = $_REQUEST['idt'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ref = $_POST['ref'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM mainte  WHERE idt = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ref));
        Database::disconnect();
        header("Location: maint-finale.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="mainte-historique.css">
	<title>Delete </title>
</head>
 
<body>
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

    <div class="supprimer" >
     
		<div>
			<div >
				<h3 >Suppression définitive des fichiers</h3>
			</div>

			<form class="form-horizontal" action="delete.php" method="post">
				<input type="hidden" name="ref" value="<?php echo $ref;?>"/>
				<p >voulez vous supprimer ce fichier de façon permanente?</p>
				<div >
					<button type="submit" class="btnn">Yes</button>
					<a class="btnn" href="maint-finale.php">No</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>