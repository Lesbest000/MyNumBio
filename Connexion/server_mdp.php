

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h1>MyNumBio</h1>
    <div class="fond-accueil">
        <div class="formulaire-box">
            <div class="button-box">

<p style="text-align:center">Votre nouveau mot de passe</p>
            </div>
            <form action="server_mdp.php" method="POST" id="connexion" class="input-group">
            <input type="password" id="password" name="password_1" class="input-field" placeholder="Nouveau mot de passe" required>
            <input type="password" id="password" name="password_2"class="input-field" placeholder="Confirmer le mot de passe" required>
            
            <button type="submit" class="submit-btn">Enregistrer</button><br>

            </form>


            </div>

    </div>

    </body>
</html>
<?php

//Voir si les deux codes sont les mêmes
if(isset($_POST['submit'])){
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];


if($password_1!=$password_2){
   echo "<script type='text/javascript'>alert('Veuillez saisir le même mot de passe.');
   location='server_mdp.php'</script>";
   die();
}else{
$password=md5($password_1);
}
}
?>