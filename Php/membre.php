<?php require"header.php"?>
<div class='grilContact'>
  <header>
    <h1 align="center">Mon compte</h1>
  </header><br>
          <div class="infos">

     <form method="post" action="membre.php">

       Email : <input type="email" name="email" placeholder="Entrez votre Email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br>
      Entrez la date d'emprunt <input type="date" name="date" placeholder="Année-mois-jour" value="<?php if (isset($_POST['date'])) echo htmlentities(trim($_POST['date'])); ?>">
                       <select name="duration" required>
                       	<?php
$sql ="SELECT Titre,isbn FROM `livre`;";
$link = mysqli_connect($HOST , $user, $password, $database);
if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
  printf(mysqli_error($link));
  exit();
}
echo "<div class='gril'>";
$req = mysqli_query($link,$sql);
if ($req) {
  while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){

    $isbn = $data["isbn"];
    echo "<option value='$isbn'>";

            echo  $data["Titre"];
          echo "</option>";
          $i++;
  }
}?>

        </select><br>
       <input type="submit" name="submit" value="submit">
     </form>
     <?php if (isset($erreur)) echo '<br><br>',$erreur;?>

 <?php

require "config.php";

  // Vérifie qu'il provient d'un formulaire
    $_POST['login']= $_SESSION['login'];
    if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['email']) && !empty($_POST['email']))) { // req   update non   date  where  nom liv
		$login=$_POST['login'];
		$date=$_POST['date'];
		$isbn = $_POST['duration'];
		$link = mysqli_connect($HOST , $user, $password, $database);

		$sql = "INSERT INTO Reservation (login,Date,LivreIsbn) VALUES ('$login','$date','$isbn')";
		$req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
		mysqli_close ($link);
		echo "Votre r&eacuteservation a bien &eacutet&eacute prise en compte
";
  }else{
  	$erreur = 'Au moins un des champs est vide.';
}
}
if (isset($erreur)) echo '<br><br>',$erreur;
?>
</div><br>
</div>
<?php
$link = mysqli_connect($HOST , $user, $password, $database);
if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
	printf(mysqli_error($link));
	exit();
}
echo "Vos Reservations : ";
echo "<div class='gril'>";

$sql = "SELECT Titre,Isbn FROM reservation JOIN livre ON Livre.isbn = reservation.livreisbn ";
$req = mysqli_query($link,$sql);
if ($req) {
	while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
		echo "<ul>";
			 echo "<div class='ca'>";
		  		 	echo "<a href='detail.php?isbn=" . $data['Isbn'] . "'><img src='../img/Livres/" . $data["Isbn"] . ".jpg' class='img' alt=''></a><div align='center'>";
		  		 	echo "<p class='pc'>Titre : " . $data["Titre"] . "</p>";
					echo "</div>";
				echo "</div>";
		echo "</ul>";
	}
}
echo "</div>";

?>
<?php require"footer.php"?>
