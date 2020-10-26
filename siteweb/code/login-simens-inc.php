<?php

if (isset($_POST['submit'])) {

    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: login-simens-pass.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
            
                 if ($row['password']==$password) {
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];
                    header("Location: simens/alertes.php?success=loggedin");
                    exit();
                } else {
                    header("Location: login-simens-pass.php?error=wrongpass");
                    exit();
                }
            } else {
                header("Location: login-simens-pass.php??error=wrongpass");
                echo 'mots de passe invalide' ;
                exit();
            }
        }
    }  


}
?>