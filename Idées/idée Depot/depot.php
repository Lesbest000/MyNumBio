<?php
session_start();
$email=$_SESSION['email'];
$timestamp = date("Y-m-d H:i:s");

//Pour trier les épreuves
$matiere="";
$type="";

//Les noms de fichiers//////IMPORTANT/////////////////////////// Le chemin des fichiers (A remplir)////////////////////////////////////
$fl_fichier="Depot";
$fl_classe="";//CNB1/2/3
$fl_matiere="";//Mathematiques...
$fl_type="";//Quiz / DS/ Partiel
$fl_annee="";//2019-2020

$nom_php="depot.php"; //ne pas oublier de changer dans forms x2

$matiere_page="mecanique";//en minuscule avec _
$type_epreuve="ds";//en minuscule avec _
$classe="cnb1";//cnb1,2,3
$annee="2019-2020";//2018-2019

//Connexion a la bdd(A remplir)

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "test"; //nom de la bdd
$db_table_s="sujet"; //nom de la table de sujets
$db_table_c="corrige"; //nom de la table de corrigés
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);

  // Initialisation de la variable
  $msg = "";

// Si click sur depot sujet////////////////////////////
if (isset($_POST['upload_s'])) {
	if (empty($_POST['matiere']) or empty($_POST['type'])  or empty($_POST['classe']) or empty($_POST['annee'])) {
		echo "<script type='text/javascript'>alert('Veuillez saisir tout les champs nécessaires');location='$nom_php'</script>";
		die();

	}else{
		$matiere=$_POST['matiere'];
		$type=$_POST['type'];
		$classe=$_POST['classe'];
		$annee=$_POST['annee'];
	}
    echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir déposer ce fichier ?')</script>";
    // Nom image 
    $file = $_FILES['file']['name'];
  	// Cherche text
	$file_text = mysqli_real_escape_string($link, $_POST['file_text']);
	


  	// Chemin fichier
    $target = "$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);



    
  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    $sql = "INSERT INTO $db_table_s (file, file_text, path,author,time,type,matiere,classe,annee) VALUES ('$file', '$file_text','$target','$email','$timestamp','$type','$matiere','$classe','$annee')";
  	// Requete
      mysqli_query($link, $sql);
      $msg= "Votre document a été déposé.";
	  echo "<script type='text/javascript'>alert('$msg')</script>";
  	}else{
        $msg= "Erreur. Veuillez réessayer s'il vous plaît.";
		echo "<script type='text/javascript'>alert('$msg')</script>";
  	}
}
//Requete pour filtrage
  $result_s = mysqli_query($link, "SELECT * FROM $db_table_s WHERE matiere = '$matiere_page' && type='$type_epreuve'&& classe='$classe'");
  
 //Si click sur depot corrigé///////////////////

if (isset($_POST['upload_c'])) {
    if (empty($_POST['matiere']) or empty($_POST['type']) or empty($_POST['classe']) or empty($_POST['annee'])) {
		echo "<script type='text/javascript'>alert('Veuillez saisir tout les champs nécessaires');location='$nom_php'</script>";
		die();

	}else{
		$matiere=$_POST['matiere'];
		$type=$_POST['type'];
		$classe=$_POST['classe'];
		$annee=$_POST['annee'];
	}   
    echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir déposer ce fichier ?')</script>";
    // Nom image 
    $file = $_FILES['file']['name'];
  	// Cherche text
  	$file_text = mysqli_real_escape_string($link, $_POST['file_text']);

  	// Chemin fichier
    $target = "$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);


    
  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    	$sql = "INSERT INTO $db_table_c (file, file_text, path,author,time,type,matiere,classe,annee) VALUES ('$file', '$file_text','$target','$email','$timestamp','$type','$matiere','$classe','$annee')";
  	// Requete
		mysqli_query($link, $sql);
		$msg= "Votre document a été déposé.";
		echo "<script type='text/javascript'>alert('$msg')</script>";
  	}else{
        $msg= "Erreur. Veuillez réessayer s'il vous plaît.";
		echo "<script type='text/javascript'>alert('$msg')</script>";
  	}
}

//Requete pour filtrage
$result_c = mysqli_query($link, "SELECT * FROM $db_table_c WHERE matiere = '$matiere_page' && type='$type_epreuve'&& classe='$classe'");
?>


<!DOCTYPE html>
<html>
<head>
<title>Dêpot <?php echo"$type $matiere"?></title>
<link rel="stylesheet" href="style_depot.css">
</head>
<body>
<?php include("../../includes/header.php")?>
    <?php echo"<h1>$fl_annee</h1>"?>
<div id="depot_page">
	<div id="depot">
		<h1 style="text-align:center">Sujet</h1>	
			<div id="sujet">

				<?php

					while ($row = mysqli_fetch_array($result_s)) {

						echo "<div id='img_div'>";
						echo"<a href='$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$row[file]' target='_blank'>".$row['file']."</a>";  
						echo "</div>";
						echo "<div id='txt_div'>";
						echo "<p>".$row['file_text']."</p>";
						echo "</div>";
					}
				?>

			</div>  
		<form method="POST" action=depot.php enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
	<div id="deposer">
		<div>
			<input type="file" name="file" accept="application/pdf">	
		</div>
		<div>
			<label>(*)</label>
			<select name="matiere">
				<option value="">-- Veuillez sélectionner la matière --</option>
				<option value="mathematiques">Mathématiques</option>
				<option value="mecanique">Mécanique</option>
				<option value="optique">Optique</option>
				<option value="chimie">Chimie</option>
				<option value="biochimie">Biochimie</option>
				<option value="biologie_cellulaire">Biologie Cellulaire</option>
				<option value="biologie_animale">Biologie Animale</option>
				<option value="thermodynamique">Thermodynamique</option>
				<option value="physiologie_animale">Physiologie Animale</option>
			</select> 
				<label>(*)</label>
			<select name="type">
				<option value="">-- Type de l'épreuve--</option>
				<option value="quiz">Quiz</option>
				<option value="ds">DS</option>
				<option value="partiel">Partiel</option>
			</select>
				<label>(*)</label>
			<select name="classe">
				<option value="">-- Classe--</option>
				<option value="cnb1">CNB1</option>
				<option value="cnb2">CNB2</option>
				<option value="cnb3">CNB3</option>
			</select> 
			<label>(*)</label>
			<select name="annee">
				<option value="">-- Année--</option>
				<option value="2018-2019">2018-2019</option>
				<option value="2019-2020">2019-2020</option>
				<option value="2020-2021">2020-2021</option>
				<option value="2021-2022">2021-2022</option>
			</select> 
		</div>
		<div>
			<textarea text-align="center"id="text" cols="40" rows="4" name="file_text" placeholder="Décrivez l'épreuve..."></textarea>
		</div>
  		<div>
  			<button type="submit" name="upload_s" style="background-color:lightblue">Déposer</button> 
		</div> 
		 <div>
	  		<p>Nomenclature:"date_épreuve_Matiere.pdf" ex:040520_quiz_Optique</p>
		</div>
	</div>
</div>
</form>
<div id="depot">
	<h1 style="text-align:center">Correction</h1>
		<div id="correction">

			<?php

				while ($row = mysqli_fetch_array($result_c)) {

					echo "<div id='img_div'>";
					echo"<a href='$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$row[file]' target='_blank'>".$row['file']."</a>";  
					echo "</div>";
					echo "<div id='txt_div'>";
					echo "<p>".$row['file_text']."</p>";
					echo "</div>";
				}
			?>
  
		</div>
	<form method="POST" action=depot.php enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">  
		<div id="deposer">
  			<div>
  				<input type="file" name="file" accept="application/pdf">
			</div>
			<div>
				<label>(*)</label>
			<select name="matiere">
				<option value="">-- Veuillez sélectionner la matière --</option>
				<option value="mathematiques">Mathématiques</option>
				<option value="mecanique">Mécanique</option>
				<option value="optique">Optique</option>
				<option value="chimie">Chimie</option>
				<option value="biochimie">Biochimie</option>
				<option value="biologie_cellulaire">Biologie Cellulaire</option>
				<option value="biologie_animale">Biologie Animale</option>
				<option value="thermodynamique">Thermodynamique</option>
				<option value="physiologie_animale">Physiologie Animale</option>
			</select> 
				<label>(*)</label>
			<select name="type">
				<option value="">-- Type de l'épreuve--</option>
				<option value="quiz">Quiz</option>
				<option value="ds">DS</option>
				<option value="partiel">Partiel</option>
			</select> 	  
				<label>(*)</label>
			<select name="classe">
				<option value="">-- Classe--</option>
				<option value="cnb1">CNB1</option>
				<option value="cnb2">CNB2</option>
				<option value="cnb3">CNB3</option>
			</select>  
			<label>(*)</label>
			<select name="annee">
				<option value="">-- Année--</option>
				<option value="2018-2019">2018-2019</option>
				<option value="2019-2020">2019-2020</option>
				<option value="2020-2021">2020-2021</option>
				<option value="2021-2022">2021-2022</option>
			</select> 
			</div>
  		<div>
		<div>
      		<textarea id="text" cols="40" rows="4" name="file_text" placeholder="Description de l'épreuve..."></textarea>
  		</div>
  		<div>
  			<button type="submit" name="upload_c" style="background-color:lightblue">Déposer</button>
	  	</div>
	  	<div>
	  		<p>Nomenclature:"date_exercice_Matiere.pdf" ex:040520_1,2_Optique</p>
		</div>
</div>
</form>

</div>
</body>

</html>
<?php include("../../includes/footer.php")?>