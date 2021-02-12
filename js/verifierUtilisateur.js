// on attend que la page soit chargée
document.addEventListener('DOMContentLoaded', function() {

	
	// on écoute la validation du formulaire
	var formulaire = document.querySelector('#seconnecter');
	formulaire.addEventListener('submit', function(e) {
		// on récupère les données du formulaire (pratique !)
		var donneesFormulaire = new FormData(formulaire);
		// on les envoie en POST au webservice d'ajout
		var requeteEnvoi = new XMLHttpRequest();
		requeteEnvoi.open("POST", "../webservice/verificationUtilisateur.php");
		requeteEnvoi.send(donneesFormulaire);
		//alert(donneesFormulaire);
		// on inhibe l'action par défaut du formulaire (recharger la page)
		//e.preventDefault();
		/*
		var titre=document.querySelector("#titre");
		// effacer tous les donnes de formulaire
		titre.value ="";
		var description=document.querySelector("#description");
		// effacer tous les donnes de formulaire
		description.value ="";
		var categorie=document.querySelector("#categorie");
		// effacer tous les donnes de formulaire
		categorie.value ="";
		var nom=document.querySelector("#nom");
		// effacer tous les donnes de formulaire
		nom.value ="";
		var prix=document.querySelector("#prix");
		// effacer tous les donnes de formulaire
		prix.value ="";
		var photo=document.querySelector("#photo");
		// effacer tous les donnes de formulaire
		photo.value ="";
		var rdv_lat=document.querySelector("#rdv_lat");
		// effacer tous les donnes de formulaire
		rdv_lat .value ="";
		var rdv_lon=document.querySelector("#rdv_lon"); 
		// effacer tous les donnes de formulaire
		rdv_lon .value ="";*/
	});








});

