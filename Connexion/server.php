<?php
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
//bdd

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "test";
$db_table="utilisateur";
$link = mysqli_connect ($db_host,$db_user,$db_pass);
mysqli_select_db($link,$db_table);

if($link==false){
   echo"Erreur de connexion:".mysqli_connect_erno();
   die();
}

if($password_1!=$password_2){
   echo "Vos deux mots de passe ne sont pas les mêmes.</br>";
   die();
}
$email = $_POST['email'];
$password = $_POST['password_1'];
$email = mb_strtolower($email);
$password=md5($password_1);

$requete="SELECT * from utilisateur where email='$email' && pass = '$password'" ;
$result=mysqli_query($link,$requete);
if($requete==false){
   echo "Pb d'éxecution de la requete</br>";
   echo mysqli_connect_erno($link)."\n";
   die();
}

   $sql="INSERT into utilisateur(email , pass) values ('$email','$password')";
   mysqli_query($link, $sql);
   echo "c bon t'es co";
mysqli_close($link);

?>