<?php
   
$pdo = new PDO('sqlite:../annonces.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requeteSQLInsertion = "INSERT INTO annonces (titre, description, categorie, pseudo, prix, photo, rdv_lat, rdv_lon) VALUES
        ('". $_POST['titre']."', '". $_POST['description']."', '". $_POST['categorie']."', '". $_POST['nom']."','". $_POST['prix']."', '". $_POST['photo']."' , '". $_POST['rdv_lat']."' , '". $_POST['rdv_lon']."' )";
    $stmt = $pdo->prepare($requeteSQLInsertion);
    // $stmt->debugDumpParams();
    $stmt->execute();
   //$pdo->query($requeteSQLInsertion);

?>

