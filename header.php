<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyNumBio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h1>MyNumBio</h1>

  <a href="Accueil.php"><img src="img/.png" class="logo" alt=""></a> <hr>
    <nav id="barre-centrale"> 
      <a href="Accueil.php">ACCUEIL</a>
      <a href="Page_CNB1.php">CNB1</a>
      <a href="Page_CNB2.php">CNB2</a>
      <a href="Page_CNB3.php">CNB3</a>
    </nav>
    <hr>
  <div class="menu-bar">
    <ul>
      <li class="active"><a href="Accueil.php"><i class="fa fa-home" aria-hidden="true"></i> ACCUEIL</a></li>
      <li><a href="Page_CNB1.php"><i class="fa fa-book" aria-hidden="true"></i> CNB1</a>
        <div class="sub-menu1">
          <ul>
            <li><a href="CNB1/Mathématiques_CNB1.php">Mathématiques</a></li>
            <li><a href="CNB1/Electronique_CNB1.php">Electronique</a></li>
            <li><a href="CNB1/Mécanique_CNB1.php">Mécanique</a></li>
            <li><a href="CNB1/Optique_CNB1.php">Optique</a></li>
            <li><a href="CNB1/Chimie_CNB1.php">Chimie</a></li>
          </ul>
        <div>
    </li>
      <li><a href="Page_CNB2.php"><i class="fa fa-book" aria-hidden="true"></i> CNB2</a></li>
      <li><a href="Page_CNB3.php"><i class="fa fa-book" aria-hidden="true"></i> CNB3</a></li>
    </ul>
  </div>
   </header>
  