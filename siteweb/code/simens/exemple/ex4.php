

 <form method="POST" action=""> 

 <select name="recherche" >
                 <option value="">pas de filtrage</option>
				<option value="ref:9820939380">ref:9820939380</option>
				<option value="ref:9821499980">ref:9821499980</option>
                <option value="ref:9821499780">ref:9821499780</option>
                <option value="ref:9821500280">ref:9821500280</option>
                
                            </select>
                            </select>
                            <select name="recherche2" >
                 <option value="">pas de filtrage</option>
                <option value="80"  >ref:9820939380</option>
                <option value="800">ref:9820939380</option>
				
                
                            </select>

                            <button id="valider" type="submit" name="submit">Valider</button>


                            <?php


    
    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'cofat2';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     if (isset($_POST['submit'])) {
        $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
     $recherche2 = isset($_POST['recherche2']) ? $_POST['recherche2'] : '';
     // la requete mysql

    $res = $conn->query(
        "SELECT * FROM donee
      WHERE ref LIKE '%$recherche%'
       
         
         LIMIT 100");
   if ($res){
       
   
        $nbutilisateurs=mysqli_num_rows($res);
     
   if($nbutilisateurs>0){
  
        // affichage du résultat
        while( $r = mysqli_fetch_array($res)){
            $x=$r['demande'];
         

        echo 'Résultat de la recherche:  '.$r['demande'].' <br />';
        echo 'Résultat de la recherche:  '.$r['ref'].' <br />';
        if ( $recherche2=='80'){
            if($x>80){ 
            echo 'Résultat de la recherche:  '.$r['demande'].' <br />';
        }}}}
    
    
    
    
    
    }


}

?>