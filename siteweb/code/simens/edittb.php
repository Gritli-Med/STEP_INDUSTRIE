<?php
    require 'datas.php';
 
    $ref = null;
    if ( !empty($_GET['idt'])) {
        $ref = $_REQUEST['idt'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $type= $_POST['type'];
        $cause= $_POST['cause'];
      
        $methodes= $_POST['methodes'];
        $idt = $_POST['idt'];
     
       
        $des = $_POST['des'];
   
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mainte set type = ?, cause =?, methodes =?,  des =? WHERE idt = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($type,$cause,$methodes,$des,$idt));
		Database::disconnect();
		header("Location: maint-finale.php");
    }
?>
 