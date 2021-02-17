<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require "config.php";?>
suprimer un livre
<form name="form" action="" method="post">
       	<input  name="trie" type="submit" value="supCo">
       	<input  name="trie" type="submit" value="supLI">
       	<input  name="trie" type="submit" value="modifCO">
       	<input  name="trie" type="submit" value="modifLI">
</form>
<?php	
if (empty($_POST['trie'])) {$tri=NULL;
}else {$tri = htmlspecialchars($_POST['trie']);// recuperer ce que  inscrit dans barre recherche
}
switch ($tri) {
	case 'modifCO';//mod CO
		echo "modifCO";?>
		<form name="form" action="" method="post">
			<input  name="tri2" type="submit" value="login">
       		<input  name="tri2" type="submit" value="mdp">
       	</form><?php
       	if (empty($_POST['tri2'])) {$tri2=NULL;
		}else {$tri2 = htmlspecialchars($_POST['tri2']);// recuperer ce que  inscrit dans barre recherche
		}

		
		?><form name="form" action="" method="post">
			<p><input type="text" name="search" id="search" placeholder="Entrée un login">
			<input type="submit" value="GO"></p>
		</form><?php
	break;
	case 'supCo':// sup compte
		echo "supco";
		?><form name="form" action="" method="post">
 			<p><input type="text" name="search" id="search" placeholder="Entrée un Login">
			<input type="submit" value="GO"></p>
		</form><?php

		//$sql = " DELETE FROM membre WHERE login='$text';"; // requete pour trier par ordre decroisant 
	break;
	case 'modifLI';//modLI
		echo "modifLI";?>
		<form name="form" action="" method="post">
	   		<input  name="tri2" type="submit" value="nbpage">
       		<input  name="tri2" type="submit" value="idlangue">
       		<input  name="tri2" type="submit" value="idEditeur">
       		<input  name="tri2" type="submit" value="titre">
       		<input  name="tri2" type="submit" value="isbn">
       	</form><?php
       	
		
				?><form name="form" action="" method="post">
			<p><input type="text" name="search" id="search" placeholder="Entrée un ISBN">
			<input type="submit" value="GO"></p>
		</form><?php
	break;
	case 'supLI'://sup livre
	echo "supLI";
	?><form name="form" action="" method="post">
		<p><input type="text" name="search" id="search" placeholder="Entrée un ISBN">
		<input type="submit" value="GO"></p>
	</form><?php
	//$sql = "DELETE FROM livre WHERE isbn='$text';"; // requete pour tier par ordre  croisant des titre
	break;
}
if (empty($_POST['tri2'])) {$tri2=NULL;
		}else {$tri2 = htmlspecialchars($_POST['tri2']);// recuperer ce que  inscrit dans barre recherche
		}
switch ($tri2) {
				case 'mdp':
				echo "mdp";
				?><p><input type="text" name="search" id="search" placeholder="Entrée un mot de passe ">
			<input type="submit" value="GO"></p><?php
				break;
			case 'login':
				echo $tri2;
				?><p><input type="text" name="search" id="search" placeholder="Entrée un login">
			<input type="submit" value="GO"></p><?php
				break;
			case 'isbn':
				echo "isbn";
			//$sql ="UPDATE livre SET isbn = '$search',  WHERE CustomerID = 1;";
				break;
			case 'idlangue':
				echo "idlangue";
				?><p><input type="text" name="search" id="search" placeholder="Entrée un idlangue">
			<input type="submit" value="GO"></p><?php
				break;
			case 'idEditeur':
				echo "idEditeur";
				?><p><input type="text" name="search" id="search" placeholder="Entrée un idEditeur">
			<input type="submit" value="GO"></p><?php
				break;
			case 'annee':
				echo "annee";
				?><p><input type="text" name="search" id="search" placeholder="Entrée un annee">
			<input type="submit" value="GO"></p><?php
				break;
			case 'titre':
				echo "titre";
				?><p><input type="text" name="search" id="search" placeholder="Entrée un titre">
			<input type="submit" value="GO"></p><?php
				break;
			case 'nbpage':
				echo "nbpage";
				?><p><input type="text" name="search" id="search" placeholder="Entrée un nbpage">
			<input type="submit" value="GO"></p><?php
				break;
		}
 $sql =" SELECT * FROM livre";
	$link = mysqli_connect($HOST , $user, $password, $database);
		$req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		$data = mysqli_fetch_array($req);
		mysqli_free_result($req);
		mysqli_close ($link);	

https://www.topachat.com/pages/configomatic.php?c=i%2F%2FAasq7m%2Bq%2FigvGPg1JXVoTZc2iKxsva7HZDETMT%2BE%3D

		if ($data[0] == 1) {
 echo "le livre a bien ete suprimer";
 }	
?>
</body>
</html>
