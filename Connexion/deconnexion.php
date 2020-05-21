<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['email']);
// Delete all session variables
// session_destroy();

// Jump to login page
echo "<script> location='Connexion.php'</script>";


?>



?>