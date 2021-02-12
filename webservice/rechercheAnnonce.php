

<?php

// CORRECTION TP 6 EXERCICE 4

// on prévient le client qu'on va lui envoyer du JSON
header('Content-type: application/json');

// lecture des infos existantes
//$infos = file_get_contents('storage.json');

//$dsn = "mysql:host=localhost;dbname=base2018;charset=utf8";
//$pdo = new PDO($dsn, 'root', '');
 $pdo = new PDO('sqlite:../annonces.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$prixmin=intval($_GET['prixmin']) ;
$prixmax=intval($_GET['prixmax']) ;

$sql = $pdo->query("SELECT * FROM annonces where prix>=$prixmin and prix<=$prixmax and  categorie like '%".$_GET['rech']."%'") ; 
//categorie='voitures'") ;   //"categorie as like '%".$_POST['rech']."%'");"*/
$annonces = $sql->fetchAll();

$infos = json_encode($annonces);

// on dit au client que tout s'est bien passé (code HTTP "ok")
http_response_code(200); 
// on envoie le résultat sur la sortie; puisqu'on a lu du JSON dans le fichier on peut l'envoyer tel quel
echo $infos;

