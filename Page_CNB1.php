<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Style.css" />
        <title>Page CNB1</title>
    </head>

    <?php include("includes/header.php")?>
    <body>
        <h1 class="titre">Epreuves CNB1</h1>
        
        <div class="contener_centre_matières">
            <div class="bloc_gauche"><a href="CNB1/Mathematiques_CNB1.php">Mathématiques</a></div>
            <div class="bloc_gauche"><a href="CNB1/Electronique_CNB1.php">Electronique</a></div>
            <div class="bloc_gauche"><a href="CNB1/Mecanique_CNB1.php">Mécanique</a></div>
            <div class="bloc_gauche"><a href="CNB1/Optique_CNB1.php">Optique</a></div>
            <div class="bloc_gauche"><a href="CNB1/Chimie_CNB1.php">Chimie</a></div>
        </div>
    </body>

    <?php include("includes/footer.php")?>
</html>