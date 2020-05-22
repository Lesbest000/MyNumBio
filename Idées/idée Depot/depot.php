<?php
session_start();
$email=$_SESSION['email'];
$timestamp = date("Y-m-d H:i:s");

//Les noms de fichiers//////IMPORTANT/////////////////////////// Le chemin des fichiers
$fl_fichier="Depot";
$fl_classe="";//CNB1/2/3
$fl_matiere="";//Mathematiques...
$fl_type="";//Quiz / DS/ Partiel
$fl_annee="";//2019-2020

//Connexion a la bdd

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "test"; //nom de la bdd
$db_table_s="sujet"; //nom de la table de sujets
$db_table_c="corrige"; //nom de la table de corrigés

$link = mysqli_connect ($db_host,$db_user,$db_pass,$db_name);

  // Initialisation de la variable
  $msg = "";

  // Si click ...
  if (isset($_POST['upload_s'])) {
      
    echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir déposer ce fichier ?')</script>";
    // Nom image 
    $file = $_FILES['file']['name'];
  	// Cherche text
  	$file_text = mysqli_real_escape_string($link, $_POST['file_text']);

  	// Chemin fichier
      $target = "$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);



    
  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    $sql = "INSERT INTO $db_table_s (file, file_text, path,author,time) VALUES ('$file', '$file_text','$target','$email','$timestamp')";
  	// Requete
      mysqli_query($link, $sql);
      $msg= "Votre document a été déposé.";
	  echo "<script type='text/javascript'>alert('$msg')</script>";
  	}else{
        $msg= "Erreur. Veuillez réessayer s'il vous plaît.";
		echo "<script type='text/javascript'>alert('$msg')</script>";
  	}
  }
  $result_s = mysqli_query($link, "SELECT * FROM $db_table_s ORDER BY 'time'");
  if (isset($_POST['upload_c'])) {
      
    echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir déposer ce fichier ?')</script>";
    // Nom image 
    $file = $_FILES['file']['name'];
  	// Cherche text
  	$file_text = mysqli_real_escape_string($link, $_POST['file_text']);

  	// Chemin fichier
      $target = "$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);



    
  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
    $sql = "INSERT INTO $db_table_c (file, file_text, path,author,time) VALUES ('$file', '$file_text','$target','$email','$timestamp')";
  	// Requete
      mysqli_query($link, $sql);
      $msg= "Votre document a été déposé.";
	  echo "<script type='text/javascript'>alert('$msg')</script>";
  	}else{
        $msg= "Erreur. Veuillez réessayer s'il vous plaît.";
		echo "<script type='text/javascript'>alert('$msg')</script>";
  	}
  }
  $result_c = mysqli_query($link, "SELECT * FROM $db_table_c ORDER BY 'time'");
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
<form method="POST" action="depot.php" enctype="multipart/form-data">
	  <input type="hidden" name="size" value="1000000">
	  <div id="deposer">
  	<div>
  	  <input type="file" name="file" accept="application/pdf">	
  	</div>
	 
  	<div>
      <textarea 
	  text-align="center"
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="file_text" 
      	placeholder="Décrivez l'épreuve..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload_s" style="background-color:lightblue">Déposer</button> 
		 </div> 
		 <p>Veuillez nommer le fichier de la manière suivante: "040520_Suj_Partiel_Optique.pdf"</p>
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
<form method="POST" action="depot.php" enctype="multipart/form-data">
	  <input type="hidden" name="size" value="1000000">  
	<div id="deposer">
  	<div>
  	  <input type="file" name="file" accept="application/pdf">
  	</div>
	  
	
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="file_text" 
      	placeholder="Description de l'épreuve..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload_c" style="background-color:lightblue">Déposer</button>
  	</div>
	  <p>Veuillez nommer le fichier de la manière suivante: "040520_corr_ex1,2_DS_Matiere.pdf"</p>
	  </div>
	  </div>
  </form>
</div>
</body>
<?php include("../../includes/footer.php")?>
</html>
