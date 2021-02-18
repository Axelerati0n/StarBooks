
 <html>
   <head>
     <title>Formulaire en PHP/MySQL</title>
   </head>
   <body>
     <form method="post" action="membre.php">

       Email : <input type="email" name="email" placeholder="Entrez votre Email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br>
      Entrez la date d'emprunt <input type="date" name="date" placeholder="Année-Mois-Jour" value="<?php if (isset($_POST['date'])) echo htmlentities(trim($_POST['date'])); ?>">
                       <select name="duration" required>
                       	<?php
$sql ="SELECT Titre FROM `livre`;";
$link = mysqli_connect($HOST , $user, $password, $database);
if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
  printf(mysqli_error($link));
  exit();
}
echo "<div class='gril'>";
$req = mysqli_query($link,$sql);
if ($req) {
  while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
    $i =0;
    echo "<option value='livre".$i."'>";
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
  </body>
 </html>

 <html>
   <head>
     <title>Formulaire en PHP/MySQL</title>
   </head>
   <body>
     <form method="post" action="membre.php">

       Email : <input type="email" name="email" placeholder="Entrez votre Email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"><br>
      Entrez la date d'emprunt <input type="date" name="date" placeholder="Année-mois-jour" value="<?php if (isset($_POST['date'])) echo htmlentities(trim($_POST['date'])); ?>">
                       <select name="duration" required>
                       	<?php
$sql ="SELECT Titre FROM `livre`;";
$link = mysqli_connect($HOST , $user, $password, $database);
if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
  printf(mysqli_error($link));
  exit();
}
echo "<div class='gril'>";
$req = mysqli_query($link,$sql);
if ($req) {
  while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
    $i =0;
    echo "<option value='livre".$i."'>";
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
		echo "La commande a été prise";
  }else{
  	$erreur = 'Au moins un des champs est vide.';
}
}
if (isset($erreur)) echo '<br><br>',$erreur;
?>
  </body>
 </html>
