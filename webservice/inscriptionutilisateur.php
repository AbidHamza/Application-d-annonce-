<?php


$pdo = new PDO('sqlite:../annonces.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requeteSQLInsertion = "INSERT INTO utilisateurs (email, nom, prenom, motDePasse) VALUES('". $_POST['email']."','". $_POST['nom']."','". $_POST['prenom']."','". $_POST['passe']."')";
    $stmt = $pdo->prepare($requeteSQLInsertion);

    // $stmt->debugDumpParams();
    $stmt->execute();
   //$pdo->query($requeteSQLInsertion);






?>