<?php
session_start();
session_unset();
//BIEN OU QUOI TABITE DANS LCOIN (REGARDER LE CODE SVP)
session_destroy();
header('Location: connexion.php');
exit();
?>
