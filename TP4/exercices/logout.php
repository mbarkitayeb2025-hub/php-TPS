<?php
session_start();
session_unset();
session_destroy();
echo "Vous êtes déconnecté.";
header("Location: login.php"); // Redirect to login after logout
exit;
?>