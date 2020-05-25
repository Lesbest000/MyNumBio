<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MyNumBio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style.css">
  </head>

  <body>
<h1>MyNumBio</h1> <br>
<header class="header-global">
  <a href="Connexion/deconnexion.php" style="text-align:right">Se déconnecter</a>
  <?php
echo"<br>";
echo $_SESSION['email'];
echo"<br>";
echo $_SESSION['prenom']." ".$_SESSION['nom'];
?>
    
  <div class="menu-bar">
    <ul>
      <li class="active"><a href="Accueil.php"><i class="fa fa-home" aria-hidden="true"></i> ACCUEIL</a></li>
      <li><a href="Page_CNB1.php"><i class="fa fa-book" aria-hidden="true"></i> CNB1</a>
        <div class="sub-menu1">
          <ul>
            <li><a href="CNB1/Mathematiques_CNB1.php">Mathématiques</a></li>
            <li><a href="CNB1/Electronique_CNB1.php">Electronique</a></li>
            <li><a href="CNB1/Mecanique_CNB1.php">Mécanique</a></li>
            <li><a href="CNB1/Optique_CNB1.php">Optique</a></li>
            <li><a href="CNB1/Chimie_CNB1.php">Chimie</a></li>
          </ul>
        <div>
    </li>
      <li><a href="Page_CNB2.php"><i class="fa fa-book" aria-hidden="true"></i> CNB2</a>
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
      <li><a href="Page_CNB3.php"><i class="fa fa-book" aria-hidden="true"></i> CNB3</a>
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
    </ul>
  </div>
   </header>
  