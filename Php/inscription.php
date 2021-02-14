<?php
require"config.php";?>
<html>
<head>
<meta charset="utf-8">
<!--<link rel="stylesheet" href="<?php //echo $CONFIG['root_path'] ?>style\biblioteque.css">-->
<title>Inscription</title>
</head>

<body>
Inscription à l'espace membre :<br />
<form action="inscription.php" method="post">
Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
Confirmation du mot de passe : <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</form>
<?php
require"config.php";
	// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
		// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
		// on teste les deux mots de passe
	if ($_POST['pass'] != $_POST['pass_confirm']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		$link = mysqli_connect($HOST , $user, $password, $database);
			// cree un "compteur" pour savoir quelle id  il y a dans la base de donner  et + 1 pour id du prochain compte cree
		$sql = 'SELECT count(*) as id FROM membre WHERE 1';
		$req = mysqli_query($link,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
		$data = mysqli_fetch_array($req);
		$id = $data['id'] + 1 ;

			// on recherche si ce login est déjà utilisé par un autre membre
		$sql = 'SELECT count(*) FROM membre WHERE login="'.$_POST['login'].'"';
		$req = mysqli_query($link,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
		$data = mysqli_fetch_array($req);

			// on  incorpore les  id et mdp dans la base de donner avec  id 
		if ($data[0] == 0) {
		$sql = 'INSERT INTO membre VALUES("'.$id.'", "'.$_POST['login'].'", "'.md5($_POST['pass']).'")';
		mysqli_query($link,$sql) or exit('Erreur SQL !'.$sql.'<br />'.mysqli_error($link));
			// on demare la session  avec log in et mdp 
		session_start();
		$_SESSION['login'] = $_POST['login'];
		header('Location: membre.php');
		exit();
		}
		else {
		$erreur = 'Un membre possède déjà ce login.';
		}
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
if (isset($erreur)) echo '<br />',$erreur;
?>
</body>
</html>