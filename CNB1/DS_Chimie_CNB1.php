<?php
session_start();
?>

<!DOCTYPE html>
<html><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>DS de Chimie</title>
    </head>

    <?php include("../includes/headerR.php")?>
    <body>

        <div class="contener_gauche">
            <div class="bloc_gauche"><a href="Mathematiques_CNB1.php">Mathématiques</a></div>
            <div class="bloc_gauche"><a href="Electronique_CNB1.php">Electronique</a></div>
            <div class="bloc_gauche"><a href="Mecanique_CNB1.php">Mécanique</a></div>
            <div class="bloc_gauche"><a href="Optique_CNB1.php">Optique</a></div>
            <div class="bloc_gauche_actuel"><a href="Chimie_CNB1.php">Chimie</a></div>
        </div>

        <h1 class="titre">DS de Chimie</h1>

        <div class="contener_centre_matières">
            <div class="bloc_année"><a href="2018-2019.php">2018-2019</a></div>
            <div class="bloc_année"><a href="2019-2020.php">2019-2020</a></div>
        </div>


    </body>

    <?php include("../includes/footer.php")?>
</html>