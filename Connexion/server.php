<?php

/*** mysql hostname ***/
$db_hostname = '10.9.113.16';

/*** mysql username ***/
$db_username = 'devisenfdhmycnb';

/*** mysql password ***/
$db_password = '1920MyNumBio';

$db_name = "devisenfdhmycnb";

$conn = mysqli_connect($db_hostname,$db_username,$db_password, 'any_database');




if($password_1 != $password_2){
    array_push($error,"Les deux mots de passe sont différents");
}

if(isset($_POST['submit'])){
    $email= mysql_real_escape_strings($_POST['email']);
    $password= mysql_real_escape_strings($_POST['password']);
}

if(count($error)==0){
    $password=md5($password_1);
    $sql="INSERT INTO inscription (email, password) VALUES ('$email','$password')";
    mysqli_query($con,$sql);
}

?>