<?php
// web service pour lire la bd et envoyer les données en format Json 


// on prévient le client qu'on va lui envoyer du JSON
header('Content-type: application/json');

// lecture des infos existantes
//$infos = file_get_contents('storage.json');

//$dsn = "mysql:host=localhost;dbname=base2018;charset=utf8";
//$pdo = new PDO($dsn, 'root', '');

$pdo = new PDO('sqlite:../annonces.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM annonces");
$infos = $sql->fetchAll();

$infos = json_encode($infos);

// on dit au client que tout s'est bien passé (code HTTP "ok")
http_response_code(200);

// on envoie le résultat sur la sortie; puisqu'on a lu du JSON dans le fichier on peut l'envoyer tel quel
echo $infos;

