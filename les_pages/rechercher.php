<html>
<?php include '../les_pages/header.php' ?>
<head>
<title>visualiser les annonces </title>
<script type="text/javascript" src="../js/javascriptrech.js"></script>
<script type="text/javascript" src="../js/Javascriptsupp.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body >

	
<header> <h1 style="text-align:center"> Que doit-je acheter	? </h1> </header>
<div class="container-fluid" style="min-height: 30vh">
	<div class="row">
		<div class="col-10 offset-2">
			<form class="form-inline" method="get" id="formRecherche">
			
				<div><label>categorie</label>
				<input type="text" name="rech" id="rech"></div>
		

				<div>
					<label>prix min </label>
			
					<input type="number" name="prixmin" id="prixmin" value="400">
				</div>
			
				<div>
					<label>prix max </label>
			
					<input type="number" name="prixmax" id="prixmax" value="10000">
			
				</div>
			<div>

				<input class="mt-4" type='submit' name="rechercher" value="Rechercher">

			</div>
			
			</form >
		</div>	

		
	</div>

	<div class="row">
		<div class="col-4 offset-2">
			<button class="btn btn-primary " id="listedynamique" > Afficher liste dynamique </button>
		</div>

		<div class="col-4 ">
			<form class="form-inline" method="post" id="formSupr"   enctype="multipart/form-data">
			<input class="form-control" type="integer" name="idd"> 
			<input  class="btn btn-primary ml-2" name="supprimer" type='submit' value='supprimer'> 
		</form >
	</div>
</div>
</div>




<?php
echo '
    <div id="dynamiquerech" style="margin-left:20px;font-weight: bold">
    
    </div>';

 
?> 





        




</body>

<footer>
<?php include '../les_pages/footer.php' ?>
</footer>

</html>
