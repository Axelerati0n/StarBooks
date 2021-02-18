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

    <ul id="menu">

    	<li class="bouton2"><a href="#">Menu</a>

    		<ul>
          <div class="bouton2">
          <?php
        			session_start();
        			if (isset($_SESSION['login'])) {?>   <!-- si  login n'est pas null allor la persoone est connecter-->

        				<li><a class=bouton href="deco.php"><img src="<?php echo $CONFIG['root_path'] ?>img/deco.png" class="conn" align=middle>Deconnexion</a></li>
        				<li><a class=bouton href="membre.php"><img src="<?php echo $CONFIG['root_path'] ?>img/compte.png" class="conn" align=middle>Espace membre</a></li><?php
        				// si le login est admin alors il s'ajit de l'admin
        					if($_SESSION['login'] == "admin"){?>
        						<a class=bouton href="admin.php"><img src="<?php echo $CONFIG["root_path"] ?>img/admin.png" class="conn" align=middle>__Admin__</a> <?php
        					}
        			}else{?><!--  si le login  est null alors -->
        				<a class=bouton href="connexion.php"><img src="<?php echo $CONFIG["root_path"] ?>img/compte.png" class="conn" align=middle><br>Connexion</a><?php
        			}?>
    		</ul>
      </ul>
</div>

  <?php require "nav.php"; ?>


</header>
</div>
<div class="marge"></div>
