<?php

if (isset($_POST['submit'])) {
     
        
        
    //Add database connection
    require 'database.php';

    $idt = $_POST['idt'];
    $dep= $_POST['dep'];
    $jours= $_POST['jours'];
    $heure= $_POST['heure'];   
    $duree= $_POST['duree'];
    $type= $_POST['type'];   
    $cause= $_POST['cause'];
    $methodes= $_POST['methodes'];
    $pieces= $_POST['pieces'];
    $des= $_POST['des'];

    if (!mysqli_stmt_prepare($conn)) {
        $sql = "INSERT INTO mainte (idt,dep,jours,heure,duree,type,cause,methodes,pieces,des) VALUES (?, ?, ? , ?, ?, ?, ?, ?, ? , ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: register.php?error=sqlerror");
            exit();
        } else {
          

            mysqli_stmt_bind_param($stmt, "ssssssssss",$idt,$dep,$jours,$heure,$duree,$type,$cause,$methodes,$pieces,$des);
            mysqli_stmt_execute($stmt);
                header("Location: historique-mainte.php");
                exit();
        }
    }
}
    

                      
?>