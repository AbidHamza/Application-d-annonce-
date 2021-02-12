<!DOCTYPE html> 
<html lang="en-fr"> <!-- langages anglais --> 
<head>
<?php include '../les_pages/header.php' ?>
<title>Sinscrire</title>
<script type="text/javascript" src="../js/ajoututilisateur.js"></script>
</head>
<body>
	<h1 class="mt-5 pt-5" Style="text-align:center">Creation de compte</h1>

		
			<section class="mt-5 pt-2">

				<form class="col-6 offset-3" id="creationcompte" method="post" enctype="multipart/form-data">

					<div>
						<label class="label"> Votre Email</label>	
						<div>
							<div>
								<input class="form-control" type="email" name="email"> 
							</div>	
						</div>
					</div> 

					<div>
						<label> Votre nom</label>	
						<div>
							<div>
								<input class="form-control" type="text" name="nom">
							</div>	
						</div>
					</div>
					<div>
						<label> Votre prénom</label>	
						<div>
							<div>
								<input class="form-control" type="text" name="prenom">
							</div>	
						</div>
					</div>
					<div>
						<label> Votre mot de passe</label>	
						<div>
							<div>
								<input class="form-control"  type="password" name="passe">
							</div>	
						</div>
					</div>

					<div>
							
						<div>
							<div>
								<input class="col-2 btn btn-primary mt-2" type="submit" name="boutoncreation" value="créer " class="general">
							</div>	
						</div>
					</div>


	
				</form>
			
	</section>
	
		
</body>
<footer>
  <?php include '../les_pages/footer.php' ?>

  </footer>
	
</html>