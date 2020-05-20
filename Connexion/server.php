<?php
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];

//Connexion a la bdd

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "test";
$db_table="utilisateur";
$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);

////////////////////////////////////////////////////////////////////////////////////////////////////////
//Si erreur de connexion

if($link==false){
   echo"Erreur de connexion:".mysqli_connect_erno();
   die();
}
//

//Integrer valeurs dans la bdd
$requete = "SELECT * FROM `utilisateur` WHERE 1";

$result=mysqli_query($link,$requete);

 if ( $result == FALSE )
 {
 echo "<p>Erreur d'exécution de la requete</p>" ;
 echo mysqli_errno($link) . ": " . mysqli_error($link). "\n";
 die();
 }
 else
 {
 echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
 }

if($row=mysqli_num_rows($result)>0){
   echo"<ul>";
   while($row=mysqli_fetch_assoc($result)){
   echo"<li>".$row["email"]."</li>\n";
   }  
   echo"</ul>\n";
}

if($password_1!=$password_2){
   echo "Vos deux mots de passe ne sont pas les mêmes.</br>";
   die();
}

//Va chercher valeurs dans le form

$email = $_POST['email'];
$password = $_POST['password_1'];
$email = mb_strtolower($email);
$password=md5($password_1);


;

"INSERT INTO utilisateur(email, pass) VALUES ('$email','$password')"
// Connection close  
mysqli_close($link); 


?>