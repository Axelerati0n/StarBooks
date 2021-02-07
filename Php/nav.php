

<nav>
    <ul>
      <li><a href="index.php">Menu</a></li>
      </li>
      <li><a href="<?php echo $CONFIG['root_path'] ?>Php/auteurs.php">Auteurs</a></li>
      <li><a href="<?php echo $CONFIG['root_path'] ?>Php/compte.php">Mon compte</a></li>
      <li><a href="<?php echo $CONFIG['root_path'] ?>Php/contact.php">Nous Contacter</a></li>
      <li><?php/* A METTRE PLUS TARD DANS LA OU YA LES BGS DE LIVRES
      <form name="form" action="" method="post">
		<input type="text" name="search" id="search"> <!-- barre de recherche-->
		<p><input type="submit" value="GO">
		if (empty($_POST['search'])) {$search=NULL;
   }else {$search = htmlspecialchars($_POST['search']);// recuperer ce que  inscrit dans barre recherche
	} */?></p></li>
    </ul>
  </nav>
