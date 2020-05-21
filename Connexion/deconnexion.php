<?php

// Initialiser session
session_start();


unset($_SESSION['email']);

session_destroy();

// Retour sur la page de connexion
echo "<script> location='Connexion.php'</script>";


?>



?>