
<form method="POST" action=""> 
    <h3 class='ligne'> Par Référence </h3>
<select name="ref" >
                 <option value="">pas de filtrage</option>
				<option value="ref:9820939380">ref:9820939380</option>
				<option value="ref:9821499980">ref:9821499980</option>
                <option value="ref:9821499780">ref:9821499780</option>
                <option value="ref:9821500280">ref:9821500280</option>
                
							</select>



  <h3> Par effectif</h3>
  <select name="eff" >
                               <option value="0">pas de filtrage</option>
								<option value="nml">Normale</option>
								<option value="sous">sous</option>
                <option value="sur">sur</option>
               
                
                            </select>
                            <div >
                            <input type="SUBMIT" value="Search!"> 
          </div>
</div>


<?php
  $db_server = 'localhost'; // Adresse du serveur MySQL
  $db_name = 'cofat2';            // Nom de la base de données
  $db_user_login = 'root';  // Nom de l'utilisateur
  $db_user_pass = '';       // Mot de passe de l'utilisateur

  // Ouvre une connexion au serveur MySQL
  $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


   // Récupère la recherche
   if (isset($_POST['submit'])) {
$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'cofat2';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


 // Récupère la recherche
 $ref = isset($_POST['ref']) ? $_POST['ref'] : '';

 $eff = isset($_POST['eff']) ? $_POST['eff'] : '';

    if($eff=='0'){
 $res = $conn->query(
    "SELECT ref FROM donee
     WHERE ref LIKE '%$ref%'
   
     
     LIMIT 10");
if ($res){

    $nbutilisateurs=mysqli_num_rows($res);
if($nbutilisateurs>0){

    // affichage du résultat
    while( $r = mysqli_fetch_array($res)){
    echo 'Résultat de la recherche:  '.$r['ref'].' <br />';
   
    }}} }
    if($eff=='nml')
    $res = $conn->query(
       "SELECT ref FROM donee
        WHERE ref LIKE '%$ref%'
        AND effectif = 25 
      
        
        LIMIT 10");
   if ($res){
   
       $nbutilisateurs=mysqli_num_rows($res);
   if($nbutilisateurs>0){
   
       // affichage du résultat
       while( $r = mysqli_fetch_array($res)){
       echo 'Résultat de la recherche:  '.$r['ref'].' <br />';
      
       }}}
   
       if($eff=='sous')
       $res = $conn->query(
          "SELECT ref FROM donee
           WHERE ref LIKE '%$ref%'
           AND effectif < 25 
         
           
           LIMIT 10");
      if ($res){
      
          $nbutilisateurs=mysqli_num_rows($res);
      if($nbutilisateurs>0){
      
          // affichage du résultat
          while( $r = mysqli_fetch_array($res)){
          echo 'Résultat de la recherche:  '.$r['ref'].' <br />';
         
          }}}

          if($eff=='sur')
          $res = $conn->query(
             "SELECT ref FROM donee
              WHERE ref LIKE '%$ref%'
              AND effectif > 25 
            
              
              LIMIT 10");
         if ($res){
         
             $nbutilisateurs=mysqli_num_rows($res);
         if($nbutilisateurs>0){
         
             // affichage du résultat
             while( $r = mysqli_fetch_array($res)){
             echo 'Résultat de la recherche:  '.$r['ref'].' <br />';
            
             }}}

   }
   

   ?>