<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Mécanique CNB1</title>
    </head>

    <?php include("../includes/headerR.php")?>
    <body>
        
        <?php include("../includes/Nav_matieres_CNB1.php")?>

        <h1 class="titre">Mécanique CNB1</h1>

        <div class="contener_type_épreuve">
            <div class="bloc_type_épreuve"><a href="Quizz_Mecanique_CNB1.php">Quizz</a></div>
            <div class="bloc_type_épreuve"><a href="DS_Mecanique_CNB1.php">DS</a></div>
            <div class="bloc_type_épreuve"><a href="Partiel_Mecanique_CNB1.php">Partiel</a></div>
        </div>
    </body>
    <?php include("../includes/footer.php")?>
</html>