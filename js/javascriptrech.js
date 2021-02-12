// on attend que la page soit chargée
document.addEventListener('DOMContentLoaded', function() {

	// on cible une fois pour toutes le <div> dans lequel afficher les infos
	var divInfos = document.querySelector('#dynamiquerech');


	// on prépare une fonction qui interroge le service
	function lireInfos() {
		var requete = new XMLHttpRequest();
		// on détermine ce qui doit se passer quand on recevra la réponse du service
		requete.addEventListener("load", function() {
			// on décode le format JSON pour obtenir un objet Javascript
			var infos = JSON.parse(this.responseText);
			console.log("eeee",infos);

			//alert(infos);
			// on boucle sur les infor reçues
			var infosStructurees = '';
			for (var i=0; i < infos.length; i++) {
				// on ajoute une info structurée
				// infosStructurees +='<div class="dynamique"> <label>'  + infos[i].prix +'<img  src="'+infos[i].photo +'"/ >'+ '</label></div>';

				infosStructurees += '<div style="margin-left:100px;margin-right:100px;margin-top :20px;width:auto;border:solid 2px black">'
										+'<div style="height:150px;width:150px">'
											+'<img style="height:150px;width:150px" src='+infos[i].photo+' > '
				 				 		+'</div>'
								 		+'<div style="height:20px;width:auto;margin-left:154px;margin-top:-150px;margin-bottom:5px">Prix tt:'+ infos[i].prix+ '</div>'
										+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Identifiant de produittt:'+ infos[i].id+'</div>'
										+ '<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Lien:<a href='+infos[i].photo+'></a></div>'
										+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Nom de vendeur:'+ infos[i].pseudo +'</div>'
										+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Catégorie:'+ infos[i].categorie+ '</div>'
										+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">lat:'+ infos[i].rdv_lat+ '</div>'
										+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">id:'+ infos[i].id+ '</div>'
										
									+'</div>'
									;
							}
			// on écrit tout dans le <div>
			divInfos.innerHTML = infosStructurees;
		});
		// on envoie la requête à l'URL du webservice
		requete.open("GET", "../webservice/get_infos.php");
		requete.send();
	}






		var mon_bout= document.getElementById("listedynamique");



	 if (mon_bout) {
	 	mon_bout.onclick=function(){
	 		divInfos.innerHTML = 'chargement de la page...';
	 	setTimeout(lireInfos, 1000);
	 		
	 	}
	 }

	// on appelle cette fonction toutes les 5 secondes,
	// mais en fait 5 secondes c'est long alors on va plutôt faire 1 seconde :)
	//setInterval(lireInfos, 100000);
	// et on l'appelle une fois au début
	//	lireInfos();


//criter categorie recherche 
	function lireInfos2(critere,prixmin,prixmax) {
			var requete = new XMLHttpRequest();
			// on détermine ce qui doit se passer quand on recevra la réponse du service
			requete.addEventListener("load", function() {
				// on décode le format JSON pour obtenir un objet Javascript
				console.log(this.responseText);
				var infos = JSON.parse(this.responseText);
				//alert(infos);
				// on boucle sur les infor reçues
				var infosStructurees = '';
				if(infos.length==0){
					infosStructurees="<p>cet article n'existe pas <p>";

				}
				else {
					for (var i=0; i < infos.length; i++) {
					// on ajoute une info structurée
					// infosStructurees +='<div class="dynamique"> <label>'  + infos[i].prix +'<img  src="'+infos[i].photo +'"/ >'+ '</label></div>';

					infosStructurees += '<div style="background-color:White; margin-left:100px;margin-right:100px;margin-top :20px;height:154px;width:auto;border:solid 2px black">'
											+'<div style="height:150px;width:150px">'
												+'<img style="height:150px;width:150px" src='+infos[i].photo+' > '
					 				 		+'</div>'
									 		+'<div style="height:20px;width:auto;margin-left:154px;margin-top:-150px;margin-bottom:5px">Prix tt:'+ infos[i].prix+ '</div>'
											+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Identifiant de produittt:'+ infos[i].id+'</div>'
											+ '<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Lien:<a href='+infos[i].photo+'></a></div>'
											+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Nom de vendeur:'+ infos[i].pseudo +'</div>'
											+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">Catégorie:'+ infos[i].categorie+ '</div>'
											+'<div style="height:20px;width:auto;margin-left:154px;margin-bottom:5px">lat:'+ infos[i].rdv_lat+ '</div>'
										+'</div>';
								}
				}
				// on écrit tout dans le <div>
				divInfos.innerHTML = infosStructurees;
			});
			// on envoie la requête à l'URL du webservice
			requete.open("GET", "../webservice/rechercheAnnonce.php/?rech="+critere+"&prixmin="+prixmin+"&prixmax="+prixmax);
			requete.send();
		}

	// on écoute la validation du formulaire
	var formulaire = document.querySelector('#formRecherche');
	formulaire.addEventListener('submit', function(e) {
		// on récupère les données du formulaire (pratique !)
		var donneesFormulaire = new FormData(formulaire);
		
		// on les envoie en POST au webservice d'ajout
		//var requeteEnvoi = new XMLHttpRequest();
		//requeteEnvoi.open("GET", "../webservice/rechercheAnnonce.php");
		//requeteEnvoi.send(donneesFormulaire);
		// on inhibe l'action par défaut du formulaire (recharger la page)
		//.preventDefault();
		var critere=document.querySelector("#rech").value;
		var prixmin=document.querySelector("#prixmin").value;
		var prixmax=document.querySelector("#prixmax").value;
		console.log(critere,prixmin);
		//alert(donneesFormulaire);*/
		e.preventDefault();
		
		lireInfos2(critere,prixmin,prixmax);
	});
});

