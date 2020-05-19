<?php
$db=mysql_connect('localhost','root','','inscription');

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
    mysqli_query($db,$sql);
}

?>