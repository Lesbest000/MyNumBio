<?php

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1>MyNumBio</h1>
    <div class="fond-accueil">
        <div class="formulaire-box">
            <div class="button-box">
<p style="text-align:center">Entrez votre adresse mail</p>
            </div>

            <form action="server_mdp.php" method="POST" id="connexion" class="input-group">
            <input type="email" id="email" name="email" class="input-field" placeholder="Adresse mail" pattern="[A-Za-z0-9]{1,20}[.][A-Za-z0-9]{1,20}@student.yncrea.fr" title="Type d'adresse mail à fournir : prénom.nom@student.yncrea.fr" required>
            
            <button type="suivant" name="suivant" class="submit-btn">Suivant</button><br>

            </form>

            </div>

    </div>


    </body>
</html>