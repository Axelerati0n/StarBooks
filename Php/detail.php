<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="shortcut icon" type="image/png" href="../img/logo.png">
	<title></title>
</head>
<body>


<?php require "config.php";
      require "header.php";
 $isbn = $_GET['isbn'];
 $link = mysqli_connect($HOST, $user, $password, $database);
 if(!$link){
	exit;
   }
if(!mysqli_set_charset($link,"utf8mb4")){
	printf(mysqli_error($link));
	exit();
}
$sql = " SELECT titre,prenom,nom,libelle,annee,nbpages,isbn FROM livre JOIN editeur e ON e.id=livre.editeur JOIN auteur a ON a.idLivre=livre.isbn JOIN personne p ON p.id=livre.editeur WHERE isbn = '$isbn';";
$req = mysqli_query($link,$sql);
if ($req) {
		while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
			echo "<a href='" . $CONFIG['root_path'] . "bibliotheque.php'><div><img src='" . $CONFIG['root_path'] . "img\Image1.jpg' id='logo'></a>";
			echo "<h1 class='Titre'><font color='white'>" . $data['titre'] . "</h1></div>";
			echo "<ul>";
				echo "<div class='caL'>";
					echo "<div><img src='" . $CONFIG['root_path'] . "img/Livres/" . $data["isbn"] . ".jpg'  alt='' class='img'><div align='center'>";
						echo "<p class='pc'>Titre : " . $data["titre"] . "</p>";
			  			echo "<p class='pc'>Auteur : " . $data["prenom"] . " " . $data["nom"] . "</p>";
			    		echo "<p class='pc'>Editeur : " . $data["libelle"] . "</p>";
			    		echo "<p class='pc'>Date de parution: " . $data["annee"] . "</p>";
						echo "<p class='pc'>Isbn : " . $data["isbn"] . "</p>";
						echo "<p class='pc'>Nombre de page : " . $data["nbpages"] . "</p>";
						//echo "<p class='pc'> " . $data["resume"] . "</p>";
					echo "</div></div>";
				echo "</div>";	
			echo "</ul>";
			echo "</div>";	
		}
		}
 ?>
</div>
<?php require"footer.php"?>

</body>
</html>