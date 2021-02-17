<?php require"header.php"?>
<div class="grilContact">
<header>
<h1>Gestion livre :</h1>
</header>
<form name="form" action="" method="post">
<div class='infos'>
echo "suprimer un Compte";
?><form name="form" action="" method="post">
			<p><input type="text" name="set1" placeholder="entre un mot de passe">
			<input type="submit" value="GO"></p></form><?php
			if (empty($_POST['set1'])) {$set1=NULL;
		}else {$set1 = htmlspecialchars(md5($_POST['set1']));// recuperer ce que  inscrit dans barre recherche
		}
		$sql = " DELETE FROM membre WHERE mdp='$set1';"; 
		//$sql = " DELETE FROM membre WHERE login='$text';"; // requete pour trier par ordre decroisant 


		echo "ajouter un  livre";?>
			<form name="test" action="" method="post">
				<p><input type="text" name="set2"  placeholder="Entrée un nbpage">
				<input type="text" name="set1"  placeholder="Entrée un idlangue">
				<input type="text" name="set3"  placeholder="Entrée un idEditeur">
				<input type="text" name="set4"  placeholder="Entrée un titre">
				<input type="text" name="set5"  placeholder="Entrée un ISBN">
				<input type="text" name="set6"  placeholder="Entrée un annee">
				<input type="text" name="set7"  placeholder="Entrée un idgenre">
				<input type="text" name="set12"  placeholder="Entrée un resumer">
				<input type="text" name="set8"  placeholder="Entrée un annee">
				<input type="text" name="set9"  placeholder="Entrée un idPersone">
				<input type="text" name="set10"  placeholder="Entrée un Empruntlivre">
				<input type="text" name="set11"  placeholder="Entrée un IdGenre">
				<input type="text" name="set13"  placeholder="Entrée un Idmembre">
				<input type="submit" value="GO"></p>
		</form>
		<?php	
				if (empty($_POST['set1'])) {$set1=NULL;
		}else {$set1 = htmlspecialchars($_POST['set1']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set2'])) {$set1=NULL;
		}else {$set2 = htmlspecialchars($_POST['set2']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set3'])) {$set3=NULL;
		}else {$set3 = htmlspecialchars($_POST['set3']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set4'])) {$set4=NULL;
		}else {$set4 = htmlspecialchars($_POST['set4']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set5'])) {$set5=NULL;
		}else {$set5 = htmlspecialchars($_POST['set5']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set6'])) {$set6=NULL;
		}else {$set6 = htmlspecialchars($_POST['set6']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set7'])) {$set7=NULL;
		}else {$set7 = htmlspecialchars($_POST['set7']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set8'])) {$set8=NULL;
		}else {$set8= htmlspecialchars($_POST['set8']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set9'])) {$set9=NULL;
		}else {$set9 = htmlspecialchars($_POST['set9']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set10'])) {$set10=NULL;
		}else {$set10 = htmlspecialchars($_POST['set10']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set11'])) {$set11=NULL;
		}else {$set11 = htmlspecialchars($_POST['set11']);// recuperer ce que  inscrit dans barre recherche
		}
if (empty($_POST['set12'])) {$set12=NULL;
		}else {$set12 = htmlspecialchars($_POST['set12']);// recuperer ce que  inscrit dans barre recherche
		}
		if (empty($_POST['set13'])) {$set13=NULL;
		}else {$set13= htmlspecialchars($_POST['set13']);// recuperer ce que  inscrit dans barre recherche
		}

		$sql ="INSERT INTO livre (Isbn, Titre, Annee, Nbpages, Resume, EmpruntLivre, IdPersonne, IdEditeur, IdGenre, IdLangue, idmembre) VALUES ('$set5', '$set4', '$set8', '$set1', '$set12', '$set10', '$set9', '$set3', '$set11', '$set1', '$set13')";

	echo "suprimer LIVRE";
	?><form name="form" action="" method="post">
	<p><input type="text" name="set1"  placeholder="Entrée un isbn">
			<input type="submit" value="GO"></p></form><?php
			if (empty($_POST['set1'])) {$set1=NULL;
		}else {$set1 = htmlspecialchars($_POST['set1']);// recuperer ce que  inscrit dans barre recherche
		}
	$sql = "DELETE FROM livre WHERE isbn='$set1';"; 


if (empty($_POST['tri2'])) {$tri2=NULL;
		}else {$tri2 = htmlspecialchars($_POST['tri2']);// recuperer ce que  inscrit dans barre recherche
		}

				echo " changer le mdp ";
			?><form name="form" action="" method="post">
					<p><input type="text" name="set1"  placeholder="ancien mot de passe ">
						<input type="text" name="set2"  placeholder="nouveaux mot de passe">
			<input type="submit" value="GO"></p></form><?php
			if (empty($_POST['set1'])) {$set1=NULL;
		}else {$set1 = htmlspecialchars(md5($_POST['set1']));// recuperer ce que  inscrit dans barre recherche
		}
		if (empty($_POST['set2'])) {$set2=NULL;
		}else {$set2 = htmlspecialchars(md5($_POST['set2']));// recuperer ce que  inscrit dans barre recherche
		}		
 		$sql = "UPDATE membre SET mdp ='$set2' WHERE mdp='$set1';";


				echo "changer le login";
				?><form name="form" action="" method="post">
					<p><input type="text" name="set1" placeholder="ancien login">
						<input type="text" name="set2"  placeholder="nouveaux mot de login">
			<input type="submit" value="GO"></p></form><?php
						if (empty($_POST['set1'])) {$set1=NULL;
		}else {$set1 = htmlspecialchars($_POST['set1']);// recuperer ce que  inscrit dans barre recherche
		}
		if (empty($_POST['set2'])) {$set2=NULL;
		}else {$set2 = htmlspecialchars($_POST['set2']);// recuperer ce que  inscrit dans barre recherche
		}	
			$sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";


		
	echo $sql;
require "config.php";
$link = mysqli_connect($HOST , $user, $password, $database);
if ((isset($_POST['isbn']) && !empty($_POST['isbn'])))
	$link = mysqli_connect($HOST , $user, $password, $database);
		$req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
		$data = mysqli_fetch_array($req);
		mysqli_free_result($req);
		mysqli_close ($link);	
		if ($data[0] == 1) {
 echo "CA MARCHE";
 }	else{
 	echo "champ isbn requie";
 }

       

echo"</div>";
?>
</div>
</div>
</div>
<?php require"footer.php"?>
