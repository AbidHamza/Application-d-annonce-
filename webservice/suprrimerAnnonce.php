<?php



$pdo = new PDO('sqlite:../annonces.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $maRequete = "DELETE  from annonces where annonces.id ='".$_POST['idd']."'";
    
    $stmt = $pdo->prepare($maRequete);
    // $stmt->debugDumpParams();
    $stmt->execute();
   //$pdo->query($requeteSQLInsertion);





