<?php require "header.php"?>

<div class='grilContact'>
<header>
<h1>Connexion à l'espace membre :</h1>
</header>	
	 <div class='orga'>
	 	 <div class="infos">
<form action="connexion.php" method="post">
Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<input type="submit" name="connexion" value="Connexion">
</form>

<?php

require"config.php";

// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

		$link = mysqli_connect($HOST , $user, $password, $database);

		// on teste si une entrée de la base contient ce couple login / pass
$sql = 'SELECT count(*) FROM membre WHERE login="' . $_POST['login'] . '" AND mdp="' . md5($_POST['pass']) . '"';		
$req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
		$data = mysqli_fetch_array($req);
		mysqli_free_result($req);
		mysqli_close ($link);

		//une réponse, alors c'est un membre
		if ($data[0] == 1) {
			session_start();
			$_SESSION['login'] = $_POST['login'];
			header("Location : contact.php");// header specifie http  pour enoie de donner https://www.php.net/manual/fr/function.header.php
			exit();
		}	
		// si  aucune réponse, id ou mdp incorrect
		elseif ($data[0] == 0) {
			$erreur = 'identifiant ou mot de passe incorrect.';
		}
		// sinon  un gros problème 
		else {
			$erreur = 'Problème dans BDD : plusieurs membres ont les mêmes identifiants. ';
		}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}

if (isset($erreur)) echo '<br><br>',$erreur;

echo $database;

?>
</div>
</div>
</div>
<?php require "footer.php"?>

