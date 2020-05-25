<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Biochimie CNB1</title>
    </head>

    <?php include("../includes/headerR.php")?><br>
    <body>
        
        <?php include("../includes/Nav_matieres_CNB1.php")?>

        <h1 class="titre">Biochimie CNB1</h1>

        <div class="contener_type_épreuve">
            <div class="bloc_type_épreuve"><a href="Quizz_Bioch_CNB1.php">Quizz</a></div>
            <div class="bloc_type_épreuve"><a href="DS_Bioch_CNB1.php">DS</a></div>
            <div class="bloc_type_épreuve"><a href="Partiel_Bioch_CNB1.php">Partiel</a></div>
        </div>

    </body>
    <?php include("../includes/footer.php")?>
</html>