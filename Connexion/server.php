<?php
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
//bdd

$host = 'devisenfdhmycnb.mysql.db';
$user = 'devisenfdhmycnb';
$pass = '1920MyNumBio';
$db = 'devisenfdhmycnb';
$link = mysqli_connect ($host,$user,$pass) or die ('Erreur : '.mysqli_error() );
mysqli_select_db($db) or die ('Erreur :'.mysqli_error());

$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];

if($password_2==$password_2){
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