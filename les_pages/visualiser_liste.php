<html>
<head>
<title>visualiser les annonces </title>
<?php include '../les_pages/header.php'?>
</head>
<body>

<h1 class="mt-5" style="text-align:center"> Les Meilleurs prix! </h1> 

<?php
include '../webservice/bdd.php';
$res=lecture();



foreach ($res as $ligne){
    echo   '<div class="annonces container mt-5">
                <h4 class="offset-1">' . $ligne['titre'] . '</h4>
                <div class="row mt-3 mb-3">
                   <div class="col-4 offset-1 border">
                        <div class="image_annonce">
                        <a target="_blank" href="'.$ligne['photo'].'"><img style="width:100%;height:100%" src="' .$ligne['photo'] .'" /></a>
                        </div>
                     </div>
                    <div class="col-6 border">
                        <div classe="caracteristiques">
                        <b> Description:</b>.'.$ligne['description'].' <br/> 
                        <b> Categorie:</b> '.$ligne['categorie'].'<br/>
                        <b> pseudo:</b> '.$ligne['pseudo'].'<br/>
                        <b> prix:</b> '.$ligne['prix'].'<br/>
                        <b> coordonnées:</b> <br/> Latitude:'.$ligne['rdv_lat'].' <br/> Longitude:'.$ligne['rdv_lon'].' <br/>
                        <b> date:</b> '.$ligne['date'].'<br/>
                        </div>
                    </div>
                </div>

           </div>';

}
 
?> 


</body>
<footer>
  <?php include '../les_pages/footer.php' ?>

  </footer>
</html>