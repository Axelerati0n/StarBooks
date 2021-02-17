<?php require"header.php"?>
<?php

 <html>
   <head>
     <title>Formulaire en PHP/MySQL</title>
   </head>
   <body>
     <form method="post" action="membre.php">

       Email : <input type="email" name="email" placeholder="Entrer votre Email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br>
      Entrer la date d'umpreint <input type="date" name="date" placeholder="annee-moi-jour" value="<?php if (isset($_POST['date'])) echo htmlentities(trim($_POST['date'])); ?>">
                       <select name="duration" required>
        	<option value="livre1">Percy Jackson:Le voleur de foudre</option>
        	<option value="livre2">Percy Jackson:La merdes monstres</option>
        	<option value="livre3">La mal&eacute;diction d'Oedipe</option>
          <option value="livre4">Achille,la naissance d'un h&eacute;ro</option>
          <option value="livre5">D&eacute;dale et Icare</option>
          <option value="livre6">Les 12 travaux d'Hercule</option>
          <option value="livre7">L'enl&egrave;vement de Pers&eacute;phone</option>
          <option value="livre8">Jason et la Toison d'or</option>
          <option value="livre9">L'Odyss&eacute;e</option>
          <option value="livre10">L'Illiade,la pomme de la discorde</option>
        </select><br>
       <input type="submit" name="submit" value="submit">
     </form>
     <?php if (isset($erreur)) echo '<br><br>',$erreur;?>
 
 <?php

require "config.php";
session_start();	
  // Vérifie qu'il provient d'un formulaire
    $_POST['login']= $_SESSION['login'];
    if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['email']) && !empty($_POST['email']))) { // req   update non   date  where  nom liv
		$login=$_POST['login'];
		$date=$_POST['date'];
		$isbn = $_POST['duration'];
		$link = mysqli_connect($HOST , $user, $password, $database);

		$sql = "INSERT INTO Reservation (login,Date,LivreIsbn) VALUES ('login','$date','$isbn')";
		$req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
		mysqli_close ($link);
		echo "la commande a ete prise";
  }else{
  	$erreur = 'Au moins un des champs est vide.';
}
}
if (isset($erreur)) echo '<br /><br />',$erreur;
?>

	 	 <div class="infos">
<a href="deco.php">Déconnexion</a>
</div></div></div>
<?php require"footer.php"?>
