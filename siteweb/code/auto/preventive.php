<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>diagnostic</title>
  <link rel="stylesheet" type="text/css" href="./css/simens.css">
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


  <questionaire id="box">
   <h1> Auto diagnostic</h1> 
   <h3> La mise en place d'un programme de maintenance de routine augmentera la longévité 
     de vos automates programmables et minimisera les risques de dysfonctionnement de votre système automatisé.
     Nous recommandons d'effectuer les procédures suivantes au moins tous les trimestres pour maintenir votre système en bon état de fonctionnement:</h3>
  <boite class="radio2">
 
  <ol> <li>Toujours faire des sauvegardes de vos programmes</li>
    <ul>
    <li> Vous devez toujours avoir à votre disposition une copie à jour de votre programme d'automate.
      Si un automate devient inutilisable et doit être remplacé,ce fichier de sauvegarde pourra être téléchargé sur le nouvel automate de remplacement.</li> 
      <a href="https://www.automation-sense.com/blog/automatisme/comment-sauvegarder-le-programme-de-votre-automate-siemens-en-toute-securite.html" > Savoir plus </a>
</ul><br>

<li>  Contrôler l'environnement d'exploitation </li>
<ul>
    <li> Vérifier les voyants d'alimentation ou de la batterie de votre automate.Si le voyant d'alimentation est éteint ou scintille ou si le voyant de la batterie est allumé ou clignote,
       cela peut être un signe préliminaire d'une batterie faible ou de problèmes d'alimentation potentiels. </li> 
       
</ul><br>
<li> Contrôler l'environnement d'exploitation </li>
<ul>
    <li> Vérifier les valeurs de comptage délivré par les capteurs  </li> 
       <li>	Vérifier la température, l'humidité et d'autres facteurs environnementaux pour vous assurer que votre automate fonctionne dans les conditions appropriées.Ne laissez pas la saleté et la poussière s’accumuler sur les composants de l’API. 
         L’unité centrale et le système d’E/S ne sont pas conçus pour résister à la poussière. <br>
        <li> Assurez-vous qu'aucun des orifices de ventilation de l'automate et des modules n'est obstrué par de la poussière ou des débris.<br></li>

<li> Assurez-vous qu'il y' ait suffisamment d'espace de dissipation de chaleur autour de l'automate.
  Si le système de dissipation de chaleur est obstrué ou si de la poussière conductrice atteint 
  les cartes électroniques,cela pourrait provoquer un court-circuit et éventuellement endommager de manière irréversible l'automate.</li> </li> </ul> <br>

  <li>Contrôler la tension d'alimentation de votre automate</li>
    <ul>
    <li> Vérifier la tension d’alimentation de votre automate afin 
      de vous assurer que la tension se situe dans la plage appropriée et qu’elle est exempte de surtensions ou de baisse de tensions.</li> 
</ul> <br>

<li>Contrôler votre connectique</li>
    <ul>
    <li> Assurez-vous que tous les câbles de communication,les fiches, les borniers et l'ensemble des 
      modules sont correctement connectés.Le système automatisé est situé dans une zone sujette à des 
      vibrations constantes a cause de couple moteur et les deplacements des blanche cela pouvent éventuellement desserrer 
      les connexions de vos borniers,effectuez des vérifications fréquemment.</li> 
</ul> <br>


      

   
</ul><br>


</ol>



<btn  class="btn2">

<a href="type-maintenance.php">Retour</a>
<a href="auto.php">Nouveau diagnostic</a> <br>

</btn>

 
  <bouton class="retour">
 
</bouton>

</questionaire>


</body>

</html>



