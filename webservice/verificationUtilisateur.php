<?php

$pdo = new PDO('sqlite:../annonces.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




	$maRequete = "select * from utilisateurs where email='".$_POST['email']."' and motDePasse='".$_POST['passe']."'"   ;
	
    // $stmt = $pdo->prepare($maRequete);
    // $stmt->debugDumpParams();
    //$stmt->execute();

   $resultat = $pdo->query($maRequete);

	
if ($resultat) {
		$tableau = $resultat->fetchAll(PDO::FETCH_ASSOC);	
		
	}
	if(count($tableau) ==1)
	{
		//echo "bienvenue a votre compte ici il faut rediregir l internaute vers son profil";
		//include('deposerAnnonce.php');
		//header("Location: ../les_pages/rechercher.php");
		echo json_encode($tableau);
		
		



	}
	else
	{
		echo "pas de compte à ce nom d utilisateur"." "."ici il faut redireger l internaute a  la page de creation de compte ";

		//include('seConecter.php');
	}






