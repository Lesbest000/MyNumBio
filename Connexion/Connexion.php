
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
                <div id="btn"></div>
                <button type="button" class="slide-btn"onclick="connexion()">Connexion</button>
                <button type="button" class="slide-btn"onclick="inscription()">Inscription</button>
            </div>
            <form action="server_connexion.php" method="POST" id="connexion" class="input-group">
            <input type="email" id="email" name="email" class="input-field" placeholder="Adresse mail" pattern="[A-Za-z0-9]{1,20}[.][A-Za-z0-9]{1,20}@student.yncrea.fr" title="Type d'adresse mail à fournir : prénom.nom@student.yncrea.fr" required>
            <input type="password" id="password" name="password"class="input-field" placeholder="Mot de passe" required>
            
            <button type="submit" class="submit-btn">Se Connecter</button><br>
            <a href="server_mdp.php">Mot de passe oublié ?</a>
            </form>
            <form action="server_inscription.php" method="POST" id="inscription" class="input-group">
                    <input type="email" id="email" name="email" class="input-field" placeholder="Adresse mail" pattern="[A-Za-z0-9]{1,20}[.][A-Za-z0-9]{1,20}@student.yncrea.fr" title="Type d'adresse mail à fournir : prénom.nom@student.yncrea.fr" required>
                    <input type="password" id="password" name="password_1" class="input-field" placeholder="Mot de passe" required>
                    <input type="password" id="password" name="password_2" class="input-field" placeholder="Confirmer le mot de passe" required>
                    
                    <select name="question" style="width:300px">
	            <option value="">-- Veuillez choisir votre question de sécurité --</option>
	            <option value="Animal">Quel est le nom de votre premier animal de compagnie ?</option>
	            <option value="Rue">Quel est le nom de la rue dans laquelle vous avez grandi ?</option>
	            <option value="Surnom">Quel était votre surnom d'enfance ?</option>
                <option value="Ecole">Quel était le nom de votre école primaire ?</option>
                <option value="Anniversaire">Quel est votre date d'anniversaire ?</option>

	          </select>
                <input type="reponse" id="reponse" name="reponse" class="input-field" placeholder="Réponse à la question" required>
                    <p>&thinsp;</p>
                    <p>&thinsp;</p>
                    <button type="submit" name="submit" class="submit-btn">S'inscrire</button>
            </form>

            </div>

    </div>

        <script>
            var x= document.getElementById("connexion");
            var y= document.getElementById("inscription");
            var z= document.getElementById("btn");

            function inscription(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="130px";
            }
            function connexion(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
        </script>
    </body>
</html>