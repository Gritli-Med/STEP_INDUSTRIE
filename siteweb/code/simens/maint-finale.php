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
   <br>
<box class='avant'>
<div class='title'>
<h2> recherche <h2>


<form method="POST" action=""> 
     <input type="text" name="recherche"  placeholder="Type/Cause"><br>
    
    
          
</div>


<div class='title'>
<form method="POST" action=""> 
<h2> Filtrer<h2>
    <h3 class='ligne'> Par Département </h3>
   
<select name="ref" >
                 <option value="">pas de filtrage</option>
				<option value="electrique">Electrique</option>
				<option value="mecanique">Mecanique</option>
               
                
							</select>
                            <div >
         <button id="btn-rech" type="submit" name="submit">Valider</button>
          </div>
                            </div>
 
          

</form>
</box>

<div class="titre">
<h2> Historique De Maintenance </h2>
  </div>

<div class="effectif-2">
  <table>
  <tr class="case1">
      <th> Date </th>
      <th> Identifiant Unique  </th>
      <th> Département</th>
      <th> Heures D'Intervension</th>
      <th> Dureé D'opération de Maintenance (min)</th>
      <th> Type de Panne</th>
      <th> Cause  </th>
      <th> Méthode de Résolution de Probléme  </th>
      <th> Piéces a remplacer (s'il existe)</th> 
      <th class='des'> Descrption (Remarque)</th>
    
  
   </tr> 
  
   <?php

$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'cofat2';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


 

 
 
    if (isset($_POST['submit'])){
        // Récupère la recherche
        $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
        $ref = isset($_POST['ref']) ? $_POST['ref'] : '';
        // la requete mysql
        $res = $conn->query(
        "SELECT * FROM mainte
         WHERE ( type LIKE '%$recherche%'
         OR cause LIKE '%$recherche%') AND ( dep LIKE '%$ref%')
         LIMIT 100");
       if ($res){
        
        $nbutilisateurs=mysqli_num_rows($res);
       if($nbutilisateurs>0){
       
        // affichage du résultat
        while( $row = mysqli_fetch_array($res)){
            echo '<tr>';
            echo '<th>'. $row['jours'] .'</th>';
             echo '<th>'. $row['idt'] .'</th>';
             echo '<th>'. $row['dep'] .'</th>';
             echo '<th>'. $row['heure'] .'</th>';
             echo '<th>'. $row['duree'] .'</th>';
             echo '<th>'. $row['type'] .'</th>';
             echo '<th>'. $row['cause'] .'</th>';
             echo '<th>'. $row['methodes'] .'</th>';
             echo '<th>'. $row['pieces'] .'</th>';
        
             echo '<th class="size">'. $row['des'] .'</th>';

             echo '<td><a class="edit " href="edit.php?idt='.$row['idt'].'">Modifier</a>';
    echo '<a class="sup " href="delete.php?idt='.$row['idt'].'">Suprimer</a>';
             echo '</tr>';
        }}}}
       
        
       
?>
 </table>
</div>
<div>
<a class="ret" href="home.php"> Retour </a>
  </div>


</body>
</html>


