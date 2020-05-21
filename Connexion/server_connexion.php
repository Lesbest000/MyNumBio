<?php
//récuperer variables

$password=$_POST['password'];
$email = $_POST['email'];
$password=md5($password);

//Connexion a la bdd

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "test";
$db_table="utilisateur";

$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);


//Si erreur de connexion

if($link==false){
   echo"<b>Erreur de connexion à la base de données:</b>";
   echo mysqli_erno($link);
   die();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////
//Voir si mail et mdp existant sinon Inserer dans bdd

$sql = "SELECT * FROM `$db_table` WHERE email='$email' and password='$password'";
$result = mysqli_query($link,$sql);

if($result==false){
   echo"<b>Erreur de connexion à la base de données:</b>";
   die();
}

$row=mysqli_fetch_array($result);

if($row['email']== $email && $row['password'] == $password){
  
   echo "<script type='text/javascript'>alert('Vous êtes maintenant connecté en tant que $email');
   window.location.assign('../Accueil.php')</script>";

   session_start();

}else{
   echo "<script type='text/javascript'>alert('Adresse mail ou mot de passe incorrect.');
   location='Connexion.php'</script>";
}

 
// Connection close  
mysqli_close($link); 
?>
