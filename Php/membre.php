<?php
session_start();
if (!isset($_SESSION['login'])) {
echo "string";
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
	<a href="index.php">i</a>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deco.php">Déconnexion</a>
</body>
</html>