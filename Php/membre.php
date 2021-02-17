<?php require"header.php"?>
<?php
if (!isset($_SESSION['login'])) {
echo "string";
	exit();
}
?>
<div class='grilContact'>
	<header>
<h1>Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !</h1>
</header>
<div class='orga'>
	 	 <div class="infos">
<a href="deco.php">Déconnexion</a>
</div></div></div>
<?php require"footer.php"?>