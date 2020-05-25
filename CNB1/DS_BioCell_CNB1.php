<?php
session_start();
?>

<!DOCTYPE html>
<html><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../Style.css" />
        <title>DS de Biologie Cellulaire</title>
    </head>

    <?php include("../includes/headerR.php")?><br>
    <body>

        <?php include("../includes/Nav_matieres_CNB1.php")?>

        <h1 class="titre">DS de Biologie Cellulaire</h1>

        <div class="contener_années">
            <div class="bloc_année"><a href="DS_bioCell_2018-2019.php">2018-2019</a></div>
            <div class="bloc_année"><a href="DS_bioCell_2019-2020.php">2019-2020</a></div>
        </div>


    </body>

    <?php include("../includes/footer.php")?>
</html>