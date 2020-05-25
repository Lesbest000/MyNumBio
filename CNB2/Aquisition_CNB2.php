<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Aquisition de données CNB2</title>
    </head>

    <?php include("../includes/headerR.php")?><br>
    <body>
        
        <?php include("../includes/Nav_matieres_CNB2.php")?> 
        <h1 class="titre">Aquisition de données CNB2</h1>

        <div class="contener_type_épreuve">
            <div class="bloc_type_épreuve"><a href="Quizz_aquisition_CNB2.php">Quizz</a></div>
            <div class="bloc_type_épreuve"><a href="DS_aquisition_CNB2.php">DS</a></div>
            <div class="bloc_type_épreuve"><a href="Partiel_aquisition_CNB2.php">Partiel</a></div>
        </div>

    </body>
    <?php include("../includes/footer.php")?>
</html>