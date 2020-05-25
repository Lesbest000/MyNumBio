<?php
session_start();
?>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Chimie CNB1</title>
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
        <h1 class="titre">Chimie CNB1</h1>
        <div class="contener_type_épreuve">
            <div class="bloc_type_épreuve"><a href="Chimie_CNB1/Quizz_Chimie_CNB1.php">Quizz</a></div>
            <div class="bloc_type_épreuve"><a href="Chimie_CNB1/DS_Chimie_CNB1.php">DS</a></div>
            <div class="bloc_type_épreuve"><a href="Chimie_CNB1/Partiel_Chimie_CNB1.php">Partiel</a></div>
        </div>
    </body>

    <?php include("../includes/footer.php")?>
</html>