<?php

if (isset($_POST['submit'])) {
     
        
        
    //Add database connection
    require 'database.php';

    $date = $_POST['date'];
    $projet= $_POST['projet'];
    $ref= $_POST['ref'];
    $poste = $_POST['poste'];
    $demande = $_POST['demande'];
    $realise = $_POST['realise'];
    $duree = $_POST['duree'];
    $effectif = $_POST['effectif'];
   
        

    if (!mysqli_stmt_prepare($conn)) {
        $sql = "INSERT INTO donee (date,projet,ref,poste,demande,realise,duree,effectif) VALUES (?, ?, ? , ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: register.php?error=sqlerror");
            exit();
        } else {
          

            mysqli_stmt_bind_param($stmt, "ssssssss", $date, $projet, $ref,$poste,$demande,$realise,$duree,$effectif);
            mysqli_stmt_execute($stmt);
                header("Location: historique.php");
                exit();
        }
    }
}
    

                      
?>
