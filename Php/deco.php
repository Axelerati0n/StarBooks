<?php
session_start();
session_unset();
//TRANQUILLE OU QUOI 
session_destroy();
header('Location: connexion.php');
exit();
?>
