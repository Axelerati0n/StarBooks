<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="shortcut icon" type="image/png" href="../img/logo.png">
  <?php require "Config.php"?>
  <title>StarBooks</title>
</head>


<body>
<div class=navigation>

		
<header>

  <a class=bouton href="#"><img src="../img/panier.png" widht="20" height="20" align=middle>Mon panier</a>
  <div class=logo>
  <img src="../img/logo" alt="logo StarBooks" align=left>
  <?php
			session_start();
			if (isset($_SESSION['login'])) {?>   <!-- si  login n'est pas null allor la persoone est connecter-->
				<a class=bouton href="#"><img src="../img/panier.png" widht="20" height="20" align=middle>Mon panier</a>
				<a class=bouton href="deco.php"><img src="../img/compte.png" widht="20" height="20" align=middle>DEconnection</a><?php
				
				// si le login est admin alors il s'ajit de l'admin
					if($_SESSION['login'] == "admin"){?>
						<a class=bouton href="admin.php"><img src="../img/compte.png" widht="20" height="20" align=middle>ADMIN</a> <?php
					}
			}else{?><!--  si le login  est null alors --> 
				<a class=bouton href="connexion.php"><img src="../img/compte.png" widht="20" height="20" align=middle>Connexion</a><?php
			}?>
  
</div>

  <?php require "nav.php"; ?>

</header>
</div>
<div class="marge"></div>
