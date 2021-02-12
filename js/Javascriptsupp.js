// on attend que la page soit chargée
document.addEventListener('DOMContentLoaded', function() {

///////////////////: formulaire supr annonce

	
	// on écoute la validation du formulaire de supreesion
	var formSupr1 = document.querySelector('#formSupr');
	formSupr1.addEventListener('submit', function(aa) {


		

		// on récupère les données du formulaire (pratique !)
		var donneesformSupr = new FormData(formSupr1);
		// on les envoie en POST au webservice d'ajout
		var requeteEnvoi2 = new XMLHttpRequest();
		requeteEnvoi2.open("POST", "../webservice/suprrimerAnnonce.php");
		requeteEnvoi2.send(donneesformSupr);
		// on inhibe l'action par défaut du formulaire (recharger la page)
		aa.preventDefault();
		
		
	});







});

