<?php
//Connexion a la bdd(A remplir)

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "test"; //nom de la bdd
$db_table_s="sujet"; //nom de la table de sujets
$db_table_c="corrige"; //nom de la table de corrigés
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);

?>