<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="./css/erreur.css">
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

 <form action="#" method="post">


  <questionaire class="box">
   <h1> Auto diagnostic</h1> 
   
  <boite class="radio2">
 
   <h2 > Source de Panne </h2> <br>
  <ul> 
      <li> Simens S7 1200 </li>
      <li> Manque D'indication </li>
  </ul>
   
    </boite>   
<btn  >
<button  class="valider" type="submit" name="submit">Nouveau diagnostic </button>


</btn>
 
  <bouton class="retour">
 
</bouton>

</questionaire>
<detail class="box2">
<h1> Detail </h1>
<h2> Gérer les erreurs détectées par le S7-1200 lors de l'exécution d'un bloc  </h2>
<h3>Description </h3>
<h5> L'apparition d'une erreur, lors de l'exécution d'un bloc, déclenche l'ajout d'une erreur
 dans le tampon de diagnostic de la CPU mais aussi son passage en STOP en tant que réaction système définie par défaut. </h5>
<h3>Note </h3>
<h5> Les instructions "GetError" ou  "GetErrorID" ne sont pas encore présentes lorsque vous créez un nouveau projet.</h5>


<h3>Traitement des erreurs lors de l'exécution d'un bloc à l'aide de l'instruction "GetError":</h3>
<h5> Les informations d'erreurs de bloc sont enregistrées dans une variable du type de données "ErrorStruct".</h5>

<h3>
Conditions nécessaires pour que la sortie de validation "ENO" soit opérationnelle :
</h3>
<h5> La sortie de validation ENO de l'instruction "GetError" ou "GetErrorID" est uniquement mise à "1"
 uniquement si les deux conditions ci-dessous sont réunies : </h5>
 <ul> <li> 	L'entrée de validation EN est activée. </li>
      <li> 	Une information d'erreur est présente. </li></ul>
      <h5>Si l'une de ces conditions n'est pas remplie, la suite de l'exécution du programme n'est pas influencée par l'instruction "GetError".<br>
 
 Si  EN = "1" et  que les instructions "GetError" ou "GetErrorID" s'exécutent, alors : 
  </h5><br>
  <ul> <li> 		ENO = "1" signifie qu'une erreur s'est produite lors de l'exécution du bloc, et que les informations de l'erreur sont présentes.</li>
      <li> 		ENO = "0" si aucune erreur ne s'est produite lors de l'exécution du bloc</li></ul>

      <h5>Vous pouvez connecter votre programme de réaction à cette erreur sur la sortie ENO. Si une erreur est présente,
       la sortie ENO met à disposition les informations relatives à l'erreur que votre programme utilisera. Les instructions
        "GetError" et "GetErrorID" peuvent également être utilisées pour transmettre au bloc appelant un message relatif à l'état d'erreur.
         Elles doivent à cet effet être placées dans le dernier réseau du bloc appelé.</h5>

         <h3> Diagnostic des erreurs  </h3>
         
<image>
<img class="tof" src="../image/erreur.png">
<image>
  <ul> <li> Empêcher la  CPU de basculer en mode STOP </li>
  <li>Emission d'une message d'erreur </li>
  <li> Positionner l'état du contact manquant avec une valeur de remplacement. </li> <br>




<btn  class="btn2">

<a href="../auto-diag.php">Probléme resolué</a>
<a href="config.php">Page suivante</a> <br>

</btn>



<h4> <a class="ici"  href="https://support.industry.siemens.com/cs/document/42908460/comment-g%C3%A8re-t-on-les-erreurs-d%C3%A9tect%C3%A9es-par-le-s7-1200-lors-de-l'ex%C3%A9cution-d'un-bloc-?dti=0&lc=fr-WW">Cliquer ici   </a> Pour savoir plus sur l'instruction "GetError" </h4>



</body>

</html>

