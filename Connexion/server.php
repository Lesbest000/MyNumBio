<?php


//Va chercher valeurs dans le form
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];

$email = $_POST['email'];
$password = $_POST['password_1'];
$email = mb_strtolower($email);
$password=md5($password_1);
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


if($password_1!=$password_2){
   echo "Vos deux mots de passe ne sont pas les mêmes.</br>";
   die();
}



//Inserer dans bdd
$sql_e = "SELECT * FROM `utilisateur` WHERE email='$email'";
$res_e = mysqli_query($link,$sql_e);


if(mysqli_num_rows($res_e) > 0){
   echo "Cette adresse mail est utilisée"; 
   die();	
 }else{
$sql="INSERT INTO `utilisateur`(`email`, `password`) VALUES('$email', '$password')";  
$inscription=mysqli_query($link,$sql);

if ( $inscription == FALSE )
 {
 echo "<p>Erreur d'inscription. Vous n'avez pas pu vous inscrire</p>" ;
 echo mysqli_errno($link) . ": " . mysqli_error($link). "\n";
 die();
 }
 }

// Connection close  
mysqli_close($link); 


?>