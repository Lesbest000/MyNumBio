
<?php
session_start();
?>

<!DOCTYPE html>
<html>
   
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Style.css" />
        <title>Accueil MyNumBio</title>
    </head>

    <?php include("includes/header.php")?>
    <body>
        <p>&nbsp;</p>
        <h1 class="titre">Bonjour et bienvenue aux CNB!</h1><br>
        <p>&nbsp;</p>
        <div class="image-accueil">
        <marquee align="center" height="300" scrollamount="10">
        <p>
        <img border="0" src="img/isen.jpg" width="550" height="300" alt="erreur d'image" hspace="0">
        <img border="0" src="img/atrium.jpg" width="400" height="300" alt="erreur d'image" hspace="0">
        <img border="0" src="img/NumBio.jpg" width="620" height="300" alt="erreur d'image" hspace="0">
        <img border="0" src="img/plaquette_isen.jpg" width="530" height="300" alt="erreur d'image" hspace="0">
        </p></marquee>
        </div>
        <p>&nbsp;</p>
        <br> <br>
    </body>

    <?php include("includes/footer.php")?>
</html>