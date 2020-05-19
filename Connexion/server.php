<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'username';

/*** mysql password ***/
$password = 'password';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    }



$con=mysqli_connect(host,username,password,dbname); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//
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