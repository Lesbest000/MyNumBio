<?php
include("../bdd.php");
$db_table="utilisateur"; 

if(isset($_POST['submit'])){
    $reponse_2=$_POST['reponse'];  
    $password_1=$_POST['password_1'];
    $password_2=$_POST['password_2'];

    $result=mysqli_query($link,"SELECT * FROM securite WHERE email = '$email'");
    while ($row = mysqli_fetch_array($result)) {
        $question=$row['question'];
        $reponse_1=$row['reponse'];
         }
    

//Voir si les deux codes sont les mêmes

    if($password_1!=$password_2){
    echo "<script type='text/javascript'>alert('Veuillez saisir le même mot de passe.');
    location='server_mdp.php'</script>";
    die();
    }
    $password=md5($password_1);
    $sql="UPDATE `$db_table` SET `password` = '$password' WHERE `email`='$email'";
    $mdp=mysqli_query($link,$sql);

                if($mdp==true){
                        echo "<script type='text/javascript'>alert('Votre nouveau mot de passe a été enregistré.');
                        location='Connexion.php'</script>";
                }else{
                        echo "<script type='text/javascript'>alert('Votre nouveau mot de passe n'a pas été enregistré.');
                location='server_mdp.php'</script>";
                }

            
}

?>
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
            <input type="email" id="email" name="email" class="input-field" placeholder="Adresse mail" pattern="[A-Za-z0-9]{1,20}[.][A-Za-z0-9]{1,20}@student.yncrea.fr" title="Type d'adresse mail à fournir : prénom.nom@student.yncrea.fr" required>
            
            <button type="suivant" name="suivant" class="submit-btn">Suivant</button><br>
<p>&thinsp;</p>
            </form>
            
            <!--
            <form action="server_mdp.php" method="POST" id="connexion" class="input-group">
<p>&thinsp;</p>
            <div type="text" id="question" name="question">
            <?php
            if(isset($_POST['suivant'])){ 
               $email=$_POST['email']; 
                   
              $result=mysqli_query($link,"SELECT * FROM securite WHERE email = '$email'");
              while ($row = mysqli_fetch_array($result)) {
                  $question=$row['question'];
                  $reponse_1=$row['reponse'];
                   }
          
                echo $question; 

                
                
           }
              
            ?></div>
            <input type="text" id="reponse" name="reponse" class="input-field" placeholder="Veuillez saisir la réponse" required>
            <input type="password" id="password" name="password_1" class="input-field" placeholder="Nouveau mot de passe" required>
            <input type="password" id="password" name="password_2"class="input-field" placeholder="Confirmer le mot de passe" required>
            
            <button type="submit" name="submit" class="submit-btn">Enregistrer</button><br>-->
<a href="Connexion.php">Se connecter</a>
            </form>


            </div>
            
    </div>


    </body>
</html>