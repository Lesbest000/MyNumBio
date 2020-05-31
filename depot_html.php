<!DOCTYPE html>
<html>
	<head>
<?php echo"<title>Dêpot $type $matiere </title>"?>
		<link rel="stylesheet" href="../style_depot.css">
		<link rel="stylesheet" href="../Style.css">
	</head>
	<body>
		<?php include("../includes/headerR.php")?>
		<?php include("../includes/Nav_matieres_$fl_classe.php")?>
		<?php echo"<h1 classe='titre' style='text-align:center;color:white;font-weight:bolder'>$fl_type $fl_matiere $fl_annee</h1><br>"?>
		<div>
		<?php echo"<div><a href=\"javascript:history.go(-1)\" style='color:white'>Page précedente</a><br><br></div>"?>
		<div id="depot_page">
			<div id="depot">
				<h1 style="text-align:center">Sujet</h1>	
				<div id="sujet">

					<?php

						while ($row = mysqli_fetch_array($result_s)) {

							echo "<div id='img_div'>";
							echo"<a href='../$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$row[file]' target='_blank'>".$row['file']."</a>";
							echo"<br><form method='POST'>
							<input type=hidden name=file value=".$row['file'].">
							<input type=hidden name=id value=".$row['author'].">
							<input type=submit value=Supprimer name=supprimer_s >
							</form>";
							echo "</div>";
							if($row['file_text']!=null){
							echo "<div id='txt_div'>";
							echo "<p>".$row['file_text']."</p>";
							echo "</div>";}
						}
					// supprimer doc
					if( isset( $_POST['supprimer_s'] ) ) {
						$file_id=$_POST['id'];
						if($id==$file_id){
						
						$did = $_POST['file'];	
						$chemin="../$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$did";
						unlink($chemin);					
						$result_sup =mysqli_query($link,"DELETE FROM $db_table_s WHERE file='$did'");
						
						echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir le supprimer?');
						window.location.assign('$nom_php')</script>";	
						
						if($result_sup==false){
							echo "<script type='text/javascript'>alert('Erreur de suppression')</script>";
							header("$nom_php'.php'");
						}
					}else{
						echo "<script type='text/javascript'>alert('Vous ne pouvez pas supprimer ce document')</script>";
					}		
					}

					?>

				</div>  
				
	
	<?php	echo"	<form method='POST' action=$nom_php enctype='multipart/form-data'>"?>
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
				<p>Veuillez ne pas mettre d'espaces dans le nom du fichier</p>
				</div>
				<div>
				<p style="font-weight:bold">"date_Matiere_NOM.pdf" (040520_Optique_DUPONT.pdf)</p>
				</div>
				</div>
			
				</form>
				</div>

		<div id="depot">
			<h1 style="text-align:center">Correction</h1>



			<div id="correction">

				<?php

					while ($row = mysqli_fetch_array($result_c)) {

						echo "<div id='img_div'>";
						echo"<a href='../$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$row[file]' target='_blank'>".$row['file']."</a>";
						echo"<br><form method='POST'>
						<input type=hidden name=file value=".$row['file'].">
						<input type=hidden name=id value=".$row['author'].">
						<input type=submit value=Supprimer name=supprimer_c >
						</form>";   
						echo "</div>";
						if($row['file_text']!=null){
						echo "<div id='txt_div'>";
						echo "<p>".$row['file_text']."</p>";
						echo "</div>";}
					}
					// supprimer doc
					if( isset( $_POST['supprimer_c'] ) ) {
						$file_id=$_POST['id'];
						if($id==$file_id){
						
						$did = $_POST['file'];	
						$chemin="../$fl_fichier/$fl_classe/$fl_matiere/$fl_type/$fl_annee/$did";
						unlink($chemin);					
						$result_sup =mysqli_query($link,"DELETE FROM $db_table_c WHERE file='$did'");
						
						echo "<script type='text/javascript'>alert('Êtes-vous sûr de vouloir le supprimer?');
						window.location.assign('$nom_php')</script>";	
						
						if($result_sup==false){
							echo "<script type='text/javascript'>alert('Erreur de suppression')</script>";
							header("$fl_type'_'$fl_matiere'_'$fl_annee'.php'");
						}
					}else{
						echo "<script type='text/javascript'>alert('Vous ne pouvez pas supprimer ce document')</script>";
					}		
					}
				?>
	
			</div>



			<?php echo"<form method='POST' action=$nom_php enctype='multipart/form-data'>"?>
				<input type="hidden" name="size" value="1000000">  
				<div id="deposer">
					<div>
						<input type="file" name="file" accept="application/pdf">
					</div>
				<div>
				
					<textarea id="text" cols="40" rows="4" name="file_text" placeholder="Description de l'épreuve..."></textarea>
				</div>
				<div>
					<button type="submit" name="upload_c" style="background-color:lightblue">Déposer</button>
				</div>
				<div>
				<p>Veuillez ne pas mettre d'espaces dans le nom du fichier</p>
				</div>
				<div>
				<p style="font-weight:bold">"date_Matiere_NOM.pdf" (040520_Optique_DUPONT.pdf)</p>
				</div>
				</div>
			</form>




			</div>
		</div>
	</div>	
	</div>
		</body>

</html>