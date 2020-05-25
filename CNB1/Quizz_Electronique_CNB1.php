<?php
session_start();
?>

<!DOCTYPE html>
<html><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Quizz d'Electronique</title>
    </head>

    <?php include("../includes/headerR.php")?>
    <body>
        <div class="contener_gauche">
            <div class="bloc_gauche"><a href="Mathematiques_CNB1.php">Mathématiques</a></div>
            <div class="bloc_gauche_actuel"><a href="Electronique_CNB1.php">Electronique</a></div>
            <div class="bloc_gauche"><a href="Mecanique_CNB1.php">Mécanique</a></div>
            <div class="bloc_gauche"><a href="Optique_CNB1.php">Optique</a></div>
            <div class="bloc_gauche"><a href="Chimie_CNB1.php">Chimie</a></div>
        </div>
        
        <h1 class="titre">Quizz d'Electronique</h1>
        
        </body>

    <?php include("../includes/footer.php")?>
</html>