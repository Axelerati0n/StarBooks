<!DOCTYPE html>
<html lang="fr">
<head>
  <?php require "Config.php"?>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo $CONFIG["root_path"] ?>Css/style.css">
  <link rel="shortcut icon" type="image/png" href="<?php echo $CONFIG["root_path"] ?>img/logo.png">
  <title>StarBooks</title>
</head>


<body>
<div class=navigation>

		
<header>

  <a class=bouton href="#"><img src="<?php echo $CONFIG["root_path"] ?>img/panier.png" widht="20" height="20" align=middle>Mon panier</a>
  <div class=logo>
  <img src="<?php echo $CONFIG["root_path"] ?>img/logo" alt="logo StarBooks" align=left>
  <?php
			session_start();
			if (isset($_SESSION['login'])) {?>   <!-- si  login n'est pas null allor la persoone est connecter-->
				<a class=bouton href="#"><img src="<?php echo $CONFIG["root_path"] ?>img/panier.png" widht="20" height="20" align=middle>Mon panier</a>
				<a class=bouton href="deco.php"><img src="<?php echo $CONFIG["root_path"] ?>img/compte.png" widht="20" height="20" align=middle>DEconnection</a><?php
				
				// si le login est admin alors il s'ajit de l'admin
					if($_SESSION['login'] == "admin"){?>
						<a class=bouton href="admin.php"><img src="<?php echo $CONFIG["root_path"] ?>img/compte.png" widht="20" height="20" align=middle>ADMIN</a> <?php
					}
			}else{?><!--  si le login  est null alors --> 
				<a class=bouton href="connexion.php"><img src="<?php echo $CONFIG["root_path"] ?>img/compte.png" widht="20" height="20" align=middle>Connexion</a><?php
			}?>
  
</div>

  <?php require "nav.php"; ?>

</header>
</div>
<div class="marge"></div>
