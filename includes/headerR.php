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
  <a href="../Connexion/deconnexion.php" style="text-align:right;color:white; font-weight:bold">Se déconnecter</a>
  <?php
echo"<br>";
echo"<p>&thinsp;</p>";
echo"<p style='text-align:center;color:white;background-color:rgb(92, 92, 238);;width:250px;padding:5px;margin:5px;border-radius:5%'>";
echo $_SESSION['email'];
echo"<br>";
echo $_SESSION['prenom']." ".$_SESSION['nom'];
echo"</p>";
echo"<p>&thinsp;</p>";
?>
    
  <div class="menu-bar">
    <ul>
      <li class="active"><a href="../Accueil.php"><i class="fa fa-home" aria-hidden="true"></i> ACCUEIL</a></li>
      <li><i class="fa fa-book" aria-hidden="true"></i> CNB1
        <div class="sub-menu1">
          <ul>
            <li><a href="../CNB1/Mathematiques_CNB1.php">Mathématiques</a></li>
            <li><a href="../CNB1/Electronique_CNB1.php">Electronique</a></li>
            <li><a href="../CNB1/Mecanique_CNB1.php">Mécanique</a></li>
            <li><a href="../CNB1/Optique_CNB1.php">Optique</a></li>
            <li><a href="../CNB1/Thermo_CNB1.php">Thermodynamique</a></li>
            <li><a href="../CNB1/Chimie_CNB1.php">Chimie</a></li>
            <li><a href="../CNB1/Biochimie_CNB1.php">Biochimie</a></li>
            <li><a href="../CNB1/BioA_CNB1.php">Biologie Animale</a></li>
            <li><a href="../CNB1/BioVeg_CNB1.php">Biologie Végétale</a></li>
            <li><a href="../CNB1/BioCell_CNB1.php">Biologie Cellulaire</a></li>
          </ul>
        <div>
    </li>
      <li><i class="fa fa-book" aria-hidden="true"></i> CNB2
      <div class="sub-menu1">
          <ul>
            <li><a href="../CNB2/Maths_CNB2.php">Mathématiques</a></li>
            <li><a href="../CNB2/Info_CNB2.php">Informatique</a></li>
            <li><a href="../CNB2/Aquisition_CNB2.php">Aquisition de données</a></li>
            <li><a href="../CNB2/Electrostat_CNB2.php">Electrostatique</a></li>
            <li><a href="../CNB2/Magnetostat_CNB2.php">Magnétostatique</a></li>
            <li><a href="../CNB2/Physique_CNB2.php">Physique et société</a></li>
            <li><a href="../CNB2/PhysioA_CNB2.php">Physiologie Animale</a></li>
            <li><a href="../CNB2/Electromag_CNB2.php">Electromagnétisme</a></li>
            <li><a href="../CNB2/PhysioVeg_CNB2.php">Physiologie Végétale</a></li>
            <li><a href="../CNB2/Microbio_CNB2.php">Microbiologie</a></li>
            <li><a href="../CNB2/Sol_CNB2.php">Science du sol</a></li>
          </ul>
        <div>
          
    </li>
      <li><a href="../Page_CNB3.php"><i class="fa fa-book" aria-hidden="true"></i> CNB3</a>
      <div class="sub-menu1">          
	<ul>
            <li><a href="../CNB3/Erreur.php">Mathématiques</a></li>
            <li><a href="../CNB3/Erreur.php">Electronique</a></li>
            <li><a href="../CNB3/Erreur.php">Mécanique</a></li>
            <li><a href="../CNB3/Erreur.php">Optique</a></li>
            <li><a href="../CNB3/Erreur.php">Chimie</a></li>
          </ul>
        <div>
    </li>
    </ul>
  </div>
   </header>
  