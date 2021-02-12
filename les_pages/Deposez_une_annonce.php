<!DOCTYPE html> 
<html lang="en-fr"> <!-- langages anglais --> 
<head>
<?php include '../les_pages/header.php' ?>
<title>Sinscrire</title>
<script type="text/javascript" src="../js/ajoutannonce.js"></script>
</head>
<body>

			<section id="section2">
				<header class="entetesec2">
					<h1 class="titre1" Style="text-align:center">Déposer une annonce</h1>	
				</header>
				
				<form class="col-6 offset-3" method="post" id="formulaire"   enctype="multipart/form-data">
					</br>
					<div>
						<label class="label">Titre</label>
						<div>
							<div>
								<input class="form-control" type="text" class="zztitre" name="titre" id="titre">
							</div>	
						</div>
					</div>
					</br>
					
					<div>
						<label class="label">Description</label>
						<div>
							<div>
								<textarea class="form-control" rows="10" name="description" id="description" class="#" maxlength="4000"></textarea>
							</div>	
						</div>
					</div>
					</br>
				
					<div class="#">
						<label class="label" >Catégorie *</label>
						<div class="#">
							<select class="form-control" name="categorie"class="zztitre" id="categorie">
								<option value="0">«Choisissez une catégorie»</option>
								<option value="Offres d'emploi" id="cat1">Offres d'emploi</option>
								<option value="voitures" id="cat2">Voitures</option>
								<option value="Motos3" id="cat3">Motos</option>
							</select>
						</div>
					</div>	
					</br>
					
					<div>
						<label class="label">Votre nom</label>
						<div>
							<div>
								<input class="form-control"  type="text" class="zztitre" name="nom" id="nom">
							</div>	
						</div>
					</div>
					</br>
					<div>
						<label class="label">Prix</label>
						<div>
							<div>
								<input class="form-control" type="text" class="zztitre" name="prix" id="prix">
							</div>	
						</div>
					</div>
					</br>
					
					<div>
						<label class="label">Photo</label>
						<div>
							<div>
							     </br>
								<input  class="form-control" type="text" class="zztitre" name="photo" id="photo">
							</div>	
						</div>
					</div>
					</br>
					<div>
						<label class="label">rdv_lat</label>
						<div>
							<div>
								<input  class="form-control" type="text" class="zztitre" name="rdv_lat" id="rdv_lat">
							</div>	
						</div>
					</div>
					</br>
					<div>
						<label class="label">rdv_lon</label>
						<div>
							<div>
								<input class="form-control" type="text" class="zztitre" name="rdv_lon" id="rdv_lon">
							</div>	
						</div>
					</div>
					<div class="grid-1-4 line toDisable pbs">
						<button class="btn btn-primary mt-1" name="valider"> Déposer</button>
					</div>		
				</form>
			</section>	
	</body>

<footer>
  <?php include '../les_pages/footer.php' ?>

  </footer>
</html>

