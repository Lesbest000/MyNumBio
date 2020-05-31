<!DOCTYPE html>
<html>
<?php
//Connexion a la bdd
$db_table_s="sujet"; //nom de la table de sujets
$db_table_c="corrige"; //nom de la table de corrigés
include("bdd.php");
$result_s = mysqli_query($link, "SELECT * FROM $db_table_s");
$result_c = mysqli_query($link, "SELECT * FROM $db_table_c");

echo "<table>"; 
echo "<caption>SUJET</caption>";
echo"<tr><th>ID</th><th>NOM</th><th>TEXTE</th><th>AUTEUR</th><th>TEMPS</th><th>CHEMIN</th></tr>";
while ($row = mysqli_fetch_array($result_s)) {  
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['file'] . "</td><td>" . $row['file_text'] . "</td><td>" . $row['email'] . "</td><td>" . $row['time'] . "</td><td>" . $row['path'] . "</td></tr>";  
    }
echo "<br>"; 

echo "<br>"; 

echo "<table>"; 
echo "<caption>CORRIGE</caption>";
echo"<tr><th>ID</th><th>NOM</th><th>TEXTE</th><th>AUTEUR</th><th>TEMPS</th><th>CHEMIN</th></tr>";
while ($row = mysqli_fetch_array($result_s)) {  
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['file'] . "</td><td>" . $row['file_text'] . "</td><td>" . $row['email'] . "</td><td>" . $row['time'] . "</td><td>" . $row['path'] . "</td></tr>";  
    }
echo "</table>"; 
?>
</html>


<style>
table {
  border-collapse: collapse;
  height:250px;
  margin-top:  20px; 
  display: inline-block;
  overflow: auto;
}
caption{
    background-color:black;
    color:white;
}

table,caption, th, td {
  border: 1px solid black;
  
}

th, td {
  padding: 5px;
  text-align: left;  
}
th{
    background-color:lightgrey;
}
</style>