<?php
session_start();
$email=$_SESSION['email'];
$id=$_SESSION['id'];
$timestamp = date("Y-m-d H:i:s");

//Pour trier les épreuves
$matiere="";
$type="";

//Les noms de fichiers//////IMPORTANT/////////////////////////// Le chemin des fichiers (A remplir)////////////////////////////////////
$fl_fichier="Depot";
$fl_classe="CNB1";//CNB1/2/3
$fl_matiere="Mathematiques";//Mathematiques...
$fl_type="DS";//Quiz / DS/ Partiel
$fl_annee="2019-2020";//2019-2020

$nom_php="depot.php"; //ne pas oublier de changer dans forms x2


//Connexion a la bdd
include("bdd.php");
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


  // Initialisation de la variable
  $msg = "";

// Si click sur depot sujet////////////////////////////
if (isset($_POST['upload_s'])) {
		$matiere=$fl_matiere;
		$type=$fl_type;
		$classe=$fl_classe;
		$annee=$fl_annee;
	
    echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir déposer ce fichier ?')</script>";
    // Nom image 
    $file = $_FILES['file']['name'];
  	// Cherche text
	$file_text = mysqli_real_escape_string($link, $_POST['file_text']);
	


  	// Chemin fichier
    $target = "$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);



    
  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    $sql = "INSERT INTO $db_table_s (file, file_text, path,author,time,type,matiere,classe,annee) VALUES ('$file', '$file_text','$target','$id','$timestamp','$fl_type','$fl_matiere','$fl_classe','$fl_annee')";
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
  $result_s = mysqli_query($link, "SELECT * FROM $db_table_s WHERE matiere = '$fl_matiere' && type='$fl_type'&& classe='$fl_classe'");
  
 //Si click sur depot corrigé///////////////////

if (isset($_POST['upload_c'])) {
	$matiere=$fl_matiere;
	$type=$fl_type;
	$classe=$fl_classe;
	$annee=$fl_annee;

    echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir déposer ce fichier ?')</script>";
    // Nom image 
    $file = $_FILES['file']['name'];
  	// Cherche text
  	$file_text = mysqli_real_escape_string($link, $_POST['file_text']);

  	// Chemin fichier
    $target = "$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);


    
  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    	$sql = "INSERT INTO $db_table_c (file, file_text, path,author,time,type,matiere,classe,annee) VALUES ('$file', '$file_text','$target','$id','$timestamp','$fl_type','$fl_matiere','$fl_classe','$fl_annee')";
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
$result_c = mysqli_query($link, "SELECT * FROM $db_table_c WHERE matiere = '$fl_matiere' && type='$fl_type'&& classe='$fl_classe'");
?>


<!DOCTYPE html>
<html>
<head>
<title>Dêpot <?php echo"$type $matiere"?></title>
<link rel="stylesheet" href="style_depot.css">
<link rel="stylesheet" href="../../Style.css">
</head>
<body>
<?php include("../../includes/header.php")?>
    <?php echo"<h1>$fl_type $fl_matiere $fl_annee</h1><br>"?>
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
					echo"<a href='$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$row[file]' target='_blank'>".$row['file']."</a>";echo"<br><form method='POST'>
					<input type=hidden name=file value=".$row['file'].">
					<input type=hidden name=id value=".$row['author'].">
					<input type=submit value=Supprimer name=supprimer >
					</form>";   
					echo "</div>";
					echo "<div id='txt_div'>";
					echo "<p>".$row['file_text']."</p>";
					echo "</div>";
				}
				// supprimer record
				if( isset( $_POST['supprimer'] ) ) {
					$file_id=$_POST['id'];
					if($id==$file_id){

					$did = $_POST['file'];						
					$result_sup =mysqli_query($link,"DELETE FROM corrige WHERE file='$did'");
					echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir le supprimer?')</script>";	
					if($result_sup==false){
						echo "<script type='text/javascript'>alert('Erreur de suppression')</script>";
					}	
				}else{
					echo "<script type='text/javascript'>alert('Vous ne pouvez pas supprimer ce document')</script>";
				}		
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