<?php
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
    $target = "../$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);



    
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
    $target = "../$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/".basename($file);


    
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