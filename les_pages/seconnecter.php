<!DOCTYPE html> 
<html lang="en-fr"> <!-- langages anglais --> 
<head>
<?php include '../les_pages/header.php' ?>
<title>rechercher</title>
<script type="text/javascript" src="../js/verifierUtilisateur.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6 offset-3">
				
				<header class="tetesec33">
				<h1 class="titre1">Connectez-vous</h1>	
				</header>
				<form id="seconnecter"  method="POST" enctype="multipart/form-data">
					<div class="">
						<label class="crelabel"> Votre Email</label>
						<div>
							<input class="form-control" type="email" name="email" class="general">
						</div>
					</div>

					</br>

					<div class="#">
						<label class="crelabel"> Votre mot de passe</label>
						<div>
							<input class="form-control" type="password" name="passe" class="general">
						</div>
					</div>

					

					<div class="#">
						
						<div>
							<input class="btn btn-primary mt-4" type="submit" name="boutoncreation" value="se connecter" class="general">
						</div>
					</div>
					</br></br>
				</form>
			</div>
		</div>
	</div>
</body>
<footer>
  <?php include '../les_pages/footer.php' ?>

  </footer>
</html>
