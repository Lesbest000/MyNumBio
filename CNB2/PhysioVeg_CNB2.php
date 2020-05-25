<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Physiologie Végétale CNB2</title>
    </head>

    <?php include("../includes/headerR.php")?><br>
    <body>
        
        <?php include("../includes/Nav_matieres_CNB2.php")?> 
        <h1 class="titre">Physiologie Végétale CNB2</h1>

        <div class="contener_type_épreuve">
            <div class="bloc_type_épreuve"><a href="Quizz_PhysioVeg_CNB2.php">Quizz</a></div>
            <div class="bloc_type_épreuve"><a href="DS_PhysioVeg_CNB2.php">DS</a></div>
            <div class="bloc_type_épreuve"><a href="Partiel_PhysioVeg_CNB2.php">Partiel</a></div>
        </div>

    </body>
    <?php include("../includes/footer.php")?>
</html>