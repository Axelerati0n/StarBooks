<?php require "../header.php";
require "../genre.php";?>
	<input  name="trie" type="submit" value="" ><!-- jsais pas pk mais avec ça ça marchee-->
<div class="grilindex">
	<div class="divindex">
	<form name="form" action="" method="post"><br>
		<p>Trier par titre :</p>
	
       	<input  name="trie" type="submit" value="Décroissant">
       	<input  name="trie" type="submit" value="Croissant">
<br><br><p >Rechercher un livre, un auteur ou une année :</p>
    <input type="text" name="search" id="search" > <!-- barre de recherche-->
	<input type="submit" value="GO" >
</form><br>
</div>
</div>
</form><br>
</div>
<?php
if (empty($_POST['trie'])) {$search=NULL;
}else {$tri = htmlspecialchars($_POST['trie']);// recuperer ce que  inscrit dans barre recherche
}
if (empty($_POST['search'])) {$search=NULL;
}else {$search = htmlspecialchars($_POST['search']);// recuperer ce que  inscrit dans barre recherche
}
if (empty($tri)) {
	if (empty($search)) { // si la barre de recherceh ne contien rien 
		$sql = "SELECT titre,isbn FROM livre WHERE IdGenre=2";/* a changer le nom de la table */
   	}else {/* si la barre de recherche contien des chose  */
		$sql = " SELECT titre,isbn FROM livre JOIN editeur e ON e.id = livre.editeur JOIN auteur a ON a.idLivre = livre.isbn JOIN personne p ON p.id = a.idPersonne WHERE titre LIKE '%$search%' or prenom LIKE '%$search%' or annee LIKE '%$search%'; ";
	}
			//$sql = " SELECT isbn,titre,prenom,libelle,annee,editeur,nom FROM livre JOIN editeur e ON e.id = livre.editeur JOIN auteur a ON a.idLivre = livre.isbn JOIN personne p ON p.id = a.idPersonne JOIN genre g ON g.id = livre.genre  ORDER BY genre;"; // requete pour trier par genre a changer
}else{
	switch ($tri) {
	case 'Croissant':
		$sql ='SELECT titre,isbn FROM livre JOIN editeur e ON e.id = livre.editeur JOIN auteur a ON a.idLivre = livre.isbn JOIN personne p ON p.id = a.idPersonne ORDER BY titre ASC;';// requete pour tier par ordre  croisant des titre
		break;
	case 'Décroissant':
		$sql = ' SELECT isbn,titre FROM livre JOIN editeur e ON e.id = livre.editeur JOIN auteur a ON a.idLivre = livre.isbn JOIN personne p ON p.id = a.idPersonne ORDER BY titre DESC;';// requete pour trier par ordre decroisant 
		break;
	}
}
$link = mysqli_connect($HOST , $user, $password, $database);
if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
	printf(mysqli_error($link));
	exit();
}
echo "<div class='gril'>";
$req = mysqli_query($link,$sql);
if ($req) {
	while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
		echo "<ul>";
			 echo "<div class='ca'>";
		  		 	echo "<a href='../detail.php?isbn=" . $data['isbn'] . "'><img src='../../img/Livres/" . $data["isbn"] . ".jpg' class='img' alt=''></a><div align='center'>";
		  		 	echo "<p class='pc'>Titre : " . $data["titre"] . "</p>";
					echo "</div>";
				echo "</div>";
		echo "</ul>";
	}
}
echo "</div>";
require "../footer.php"?>
