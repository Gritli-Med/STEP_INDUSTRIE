<?php

if (isset($_POST['submit'])) {
     
        
        
    //Add database connection
    require 'database.php';

    $idt = $_POST['idt'];
    $jours= $_POST['jours'];
    $heure= $_POST['heure'];
    $type = $_POST['type'];
    $des = $_POST['des'];
    
   
        

    if (!mysqli_stmt_prepare($conn)) {
        $sql = "INSERT INTO contact (idt,jours,heure,type,des) VALUES ( ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: register.php?error=sqlerror");
            exit();
        } else {
          

            mysqli_stmt_bind_param($stmt, "sssss", $idt,$jours,$heure,$type,$des);
            mysqli_stmt_execute($stmt);
                header("Location: auto-2.php");
                exit();
        }
    }
}
    

                      
?>
