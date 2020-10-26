
     <html>
     <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="recherche">
     <input type="text" name="recherche1">
     <input type="text" name="recherche2">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'cofat2';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
     $recherche1 = isset($_POST['recherche1']) ? $_POST['recherche1'] : '';
     $recherche2 = isset($_POST['recherche2']) ? $_POST['recherche2'] : '';
 
     // la requete mysql
     if ( $recherche1=='80'){
              $sql="SELECT * FROM ex
     WHERE b < $recherche OR
     c < $recherche
     AND
     a LIKE '%$recherche%'
     
     LIMIT 10";
     $res = $conn->query($sql);
    
if ($res){
     echo "votre resultat est";
     $nbutilisateurs=mysqli_num_rows($res);
if($nbutilisateurs>0){
 echo "hello";
     // affichage du résultat
     while( $r = mysqli_fetch_array($res)){
     echo 'Résultat de la recherche:  '.$r['a'].' <br />';
     echo 'Résultat de la recherche:  '.$r['b'].' <br />';
     echo 'Résultat de la recherche:  '.$r['c'].' <br />';
     }}}}
     if ( $recherche1=='20'){
        $sql="SELECT * FROM ex
WHERE b > $recherche 
OR
a LIKE '%$recherche%'

LIMIT 10";
$res = $conn->query($sql);

if ($res){
echo "votre resultat est";
$nbutilisateurs=mysqli_num_rows($res);
if($nbutilisateurs>0){
echo "hello";
// affichage du résultat
while( $r = mysqli_fetch_array($res)){
echo 'Résultat de la recherche:  '.$r['a'].' <br />';

}}}}
?>