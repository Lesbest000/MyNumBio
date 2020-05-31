<?php ///voir tout ce qui est en rapport avec les question de securite en //
//Commencer session
session_start();
$_SESSION['email'] = $_POST['email'];

//Voir si les deux codes sont les mêmes
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];

if($password_1!=$password_2){
   echo "<script type='text/javascript'>alert('Veuillez saisir le même mot de passe.');
   location='Connexion.php'</script>";
   die();
}
//Va chercher valeurs dans le form
$email = $_POST['email'];
$password = $_POST['password_1'];
$email = mb_strtolower($email);
$password=md5($password_1);

/*$question=$_POST['question'];
$reponse=$_POST['reponse'];*/

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





//Connexion a la bdd/////////////////////////////////////////////////////////

$db_table="utilisateur";
include("../bdd.php");
////////////////////////////////////////////////////////////////////////////
$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);

$result = mysqli_query($link, "SELECT * FROM $db_table WHERE email = '$email'");
while ($row = mysqli_fetch_array($result)) {
$id=$row['id'];

 }
$_SESSION['id']=$id;
////////////////////////////////////////////////////////////////////////////////////////////////////////
//Si erreur de connexion

if($link==false){
   echo"<b>Erreur de connexion à la base de données:</b>";
   echo mysqli_erno($link);
   die();
}



//Voir si mail existant sinon Inserer dans bdd
$sql_e = "SELECT * FROM `$db_table` WHERE email='$email'";
$req_e = mysqli_query($link,$sql_e);


if(mysqli_num_rows($req_e) > 0){
   echo "<script type='text/javascript'>alert('Cette adresse mail est déjà utilisée.');
   location='Connexion.php'</script>";
   die();	
 }else{
$sql="INSERT INTO `$db_table`(`email`, `password`) VALUES('$email', '$password')";
/*$sql_q = "INSERT INTO `securite`(`email`,`question`, `reponse`) VALUES('$email', '$question', '$reponse')";
$req_e = mysqli_query($link,$sql_q);*/

$inscription=mysqli_query($link,$sql);

echo "<script type='text/javascript'>alert('Vous êtes inscrit en tant que $prenom $nom');
window.location.assign('../Accueil.php')</script>";

 }


if ( $inscription == FALSE )
 {
 echo "<p>Erreur d'inscription. Vous n'avez pas pu vous inscrire.</p>" ;
 echo mysqli_errno($link) . ": " . mysqli_error($link). "\n";
 die();
 }
 

// Connection close  
mysqli_close($link); 
?>

