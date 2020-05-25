<?php
session_start();
?>
<!DOCTYPE html>
<html>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>Mathématiques CNB1</title>
    </head>

    <?php include("../includes/headerR.php")?><br>
    <body>
        
        <?php include("../includes/Nav_matieres_CNB1.php")?>

        <h1 class="titre">Mathématiques CNB1</h1>

        <div class="contener_type_épreuve">
            <div class="bloc_type_épreuve"><a href="Quizz_Mathematiques_CNB1.php">Quizz</a></div>
            <div class="bloc_type_épreuve"><a href="DS_Mathematiques_CNB1.php">DS</a></div>
            <div class="bloc_type_épreuve"><a href="Partiel_Mathematiques_CNB1.php">Partiel</a></div>
        </div>
    </body>
    <?php include("../includes/footer.php")?>
</html>