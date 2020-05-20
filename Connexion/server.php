<?php
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
//bdd

$db_host = 'devisenfdhmycnb.mysql.db';
$db_user = 'devisenfdhmycnb';
$db_pass = '1920MyNumBio';
$db_name = 'devisenfdhmycnb';
$link = mysqli_connect ($db_host,$db_user,$db_pass) or die ('Erreur : '.mysqli_error() );
mysqli_select_db($db) or die ('Erreur :'.mysqli_error());

$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];

if($password_1==$password_2){
   echo $password_2;
}
$email = $_POST['email'];
$password = $_POST['password_1'];
$password=md5($password_1);
$email = mb_strtolower($email);

$sql="INSERT INTO utilisateur(email, password) VALUES ('$email','$password')";
if($sql==false){
   echo"fail";
}else{
   echo"Vous avez été inscrit";
   header("");
   }
?>