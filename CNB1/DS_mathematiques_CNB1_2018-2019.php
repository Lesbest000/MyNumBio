<?php

session_start();
$email=$_SESSION['email'];
$id=$_SESSION['id'];
$timestamp = date("Y-m-d H:i:s");

//Pour trier les épreuves
$matiere="";
$type="";

//Les noms de fichiers//////IMPORTANT/////////////////////////// Le chemin des fichiers (A remplir)////////////////////////////////////
$fl_fichier="Depot";
$fl_classe="CNB1";//CNB1/2/3
$fl_matiere="Mathematiques";//Mathematiques...
$fl_type="DS";//Quiz / DS/ Partiel
$fl_annee="2018-2019";//2019-2020

$nom_php="DS_mathematiques_CNB1_2018-2019.php"; //ne pas oublier de changer dans forms x2


//Connexion a la bdd
$db_table_s="sujet"; //nom de la table de sujets
$db_table_c="corrige"; //nom de la table de corrigés
include("../bdd.php");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<?php include_once("../depot_php.php")?>

<?php include("../depot_html.php")?>

<?php include("../includes/footer.php")?>