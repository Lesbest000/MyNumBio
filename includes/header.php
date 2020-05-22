<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyNumBio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="Style.css">
  </head>

  <body>

  <a href="Connexion/deconnexion.php" style="text-align:right">Se déconnecter</a>
  <?php
echo"<br>";
echo $_SESSION['email'];
echo"<br>";
echo $_SESSION['prenom']." ".$_SESSION['nom'];
?>

  <header class="header-global">
  
  <a href="Accueil.php"><img src="img/zovana3.png" class="logo" alt=""></a> <hr>
    <nav id="barre-centrale"> 

      <a href="Accueil.php">ACCUEIL</a>
      <a href="Page_CNB1.php">CNB1</a>
      <a href="Page_CNB2.php">CNB2</a>
      <a href="Page_CNB3.php">CNB3</a>
    </nav>
   </header>