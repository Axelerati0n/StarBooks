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
  <div class=logo>
  <p><img src="<?php echo $CONFIG["root_path"] ?>img/logo" alt="logo StarBooks" align=left class="logoo"><p>
  <?php
			session_start();
			if (isset($_SESSION['login'])) {?>   <!-- si  login n'est pas null allor la persoone est connecter-->
				<a class=bouton href="#"><img src="<?php echo $CONFIG['root_path'] ?>img/panier.png" class="conn"  align=middle>Mes réservations</a>
				<a class=bouton href="deco.php"><img src="<?php echo $CONFIG['root_path'] ?>img/compte.png" class="conn"  align=middle>Deconnexion</a>
				<a class=bouton href="membre.php"><img src="<?php echo $CONFIG['root_path'] ?>img/compte.png"class="conn"  align=middle>Espace membre</a><?php
				// si le login est admin alors il s'ajit de l'admin
					if($_SESSION['login'] == "admin"){?>
						<a class=bouton href="admin.php"><img src="<?php echo $CONFIG["root_path"] ?>img/compte.png" class="conn" align=middle>Admin</a> <?php
					}
			}else{?><!--  si le login  est null alors --> 
				<a class=bouton href="connexion.php"><img src="<?php echo $CONFIG["root_path"] ?>img/compte.png" class="conn"  align=middle>Connexion</a><?php
			}?>
  
</div>
  <?php require "nav.php"; ?>
</header>
</div>
<div class="marge"></div>