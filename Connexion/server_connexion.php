<?php
//récuperer variables
$password=$_POST['password'];
$email = $_POST['email'];
$password=md5($password);
//Commencer session
session_start();
$_SESSION['email'] = $_POST['email'];


//isole nom prenom
$emailarray  = explode('@',$email);
$emailSuffix = $emailarray[0];
$emailarray1  = explode('.',$emailSuffix);
$prenom = $emailarray1[0];
$nom =$emailarray1[1];
$nom = mb_strtoupper($nom); 
$prenom = ucfirst($prenom);

$_SESSION['nom'] = $nom;
$_SESSION['prenom'] =$prenom;


//Connexion a la bdd///////////////////////////////////////////:

$db_table="utilisateur";
include("../bdd.php");
////////////////////////////////////////////////////////////////
$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);

$result = mysqli_query($link, "SELECT * FROM $db_table WHERE email = '$email'");
while ($row = mysqli_fetch_array($result)) {
$id=$row['id'];
 }
$_SESSION['id']=$id;
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



   echo "<script type='text/javascript'>alert('Bienvenue $prenom $nom');
   window.location.assign('../Accueil.php')</script>";


     
}else{
   echo "<script type='text/javascript'>alert('Adresse mail ou mot de passe incorrect.');
   location='Connexion.php'</script>";
   die();
}


// Check, if username session is NOT set then this page will jump to login page
      if (!isset($_SESSION['email'])) {
         echo "<script type='text/javascript'>alert('Nope');
         location='Connexion.php'</script>";
      }
 
// Connection close  
mysqli_close($link); 
?>
