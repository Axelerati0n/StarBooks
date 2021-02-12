<?php
session_start();
if (!isset($_SESSION['login'])) {
	header ('Location: connexion.php');
	exit();
}
?>

<html>
<head>
	<meta charset="utf-8">
<title>Espace membre</title>
<!--<link rel="stylesheet" href="<?php //echo $CONFIG['root_path'] ?>style\biblioteque.css">-->
</head>

<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deco.php">Déconnexion</a>
<img src="voiture.jpg">
</body>
</html>