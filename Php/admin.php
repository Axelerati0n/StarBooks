<?php require "header.php";?>
<div class="grilContact">
<header>
<h1>Gestion Compte :</h1>
</header>
<div class='infos'>

        <script
 src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<?php
$eeee= date('Y-m-d H:i:s');

                echo "Changer le mdp";
            ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1"  placeholder="Ancien mot de passe ">
                        <input type="text" name="set2"  placeholder="Nouveau mot de passe">
            <input type="submit" name="go1" value="GO"></p></form><?php
            if (isset($_POST['go1']) && $_POST['go1'] == 'GO') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2'])) && ( (isset($_POST['set1']) && !empty($_POST['set2'])))) {
                    $set1=md5($_POST['set1']);
                    $set2=md5($_POST['set2']);
                $sql = "UPDATE membre SET mdp ='$set2' WHERE mdp='$set1';"; 
                $sql2 = "SELECT idmembre FROM membre WHERE mdp='$set2'";
                echo " le mot de passe  a &eacute;t&eacute; chang&eacute<br>;";
                if (isset($sql) && !empty($sql2)) {
                $link = mysqli_connect($HOST , $user, $password, $database);
                $req = mysqli_query($link,$sql2) or exit('Erreur SQL !<br />'.$sql2.'<br />'.mysqli_error($link));
                 while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){ 
                    $es=$data['idmembre'];
                    mysqli_close ($link);}
                # Chemin vers fichier texte
                $file ="EZ.txt";
                # Ouverture en mode écriture
                $fileopen=(fopen("$file",'a'));
                # Ecriture de "Début du fichier" dansle fichier texte
                echo $data['idmembre'];
                fwrite($fileopen,$eeee. "update mdp ".$es."\r");
                # On ferme le fichier proprement
                fclose($fileopen);
                }


                }else{
                    echo "Un ou plusieurs champs sont vides";
                }
             }     

                echo "Changer le login";
                ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1" placeholder="Ancien login">
                        <input type="text" name="set2"  placeholder="Nouveau login">
            <input type="submit" name="go2" value="GO"></p></form><?php
            if (isset($_POST['go2']) && $_POST['go2'] == 'GO') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))  && (isset($_POST['set2']) && !empty($_POST['set2'])) ) { 
                    $set1=$_POST['set1'];
                    $set2=$_POST['set2'];
            $sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";
                $sql2 = "SELECT idmembre FROM membre WHERE login='$set1'";
                echo " le mot de passe  a &eacute;t&eacute; chang&eacute<br>;";
                if (isset($sql) && !empty($sql2)) {
                $link = mysqli_connect($HOST , $user, $password, $database);
                $req = mysqli_query($link,$sql2) or exit('Erreur SQL !<br />'.$sql2.'<br />'.mysqli_error($link));
                 while($data = mysqli_fetch_array($req, MYSQLI_ASSOC))
                    $es=$data['idmembre'];
                    mysqli_close ($link);
                # Chemin vers fichier texte
                $file ="EZ.txt";
                # Ouverture en mode écriture
                $fileopen=(fopen("$file",'a'));
                # Ecriture de "Début du fichier" dansle fichier texte
                echo $data['idmembre'];
                fwrite($fileopen,$eeee. "update Login ".$es."\r");
                # On ferme le fichier proprement
                fclose($fileopen);
                }

            echo "le login a bien ete chang&eacute;<br>";
        }else{
        echo "Un ou plusieurs champs sont vides";
        }
    }echo "Supprimer un compte";
            ?><form name="form" action="" method="post">
            <p><input type="text" name="set1" placeholder="Entrez un mot de passe">
            <input type="submit" name ="go3"value="GO"></p></form>

            <?php
            if (isset($_POST['go3']) && $_POST['go3'] == 'go') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))) {
                    $set1 = $_POST['set1'];
                    $sql = " DELETE FROM membre WHERE mdp='$set1';";
                    $sql2 = "SELECT idmembre FROM membre WHERE mdp='$set1'";
                echo " le mot de passe  a &eacute;t&eacute; chang&eacute<br>;";
                if (isset($sql) && !empty($sql2)) {
                $link = mysqli_connect($HOST , $user, $password, $database);
                $req = mysqli_query($link,$sql2) or exit('Erreur SQL !<br />'.$sql2.'<br />'.mysqli_error($link));
                 while($data = mysqli_fetch_array($req, MYSQLI_ASSOC))
                    $es=$data['idmembre'];
                    mysqli_close ($link);
                # Chemin vers fichier texte
                $file ="EZ.txt";
                # Ouverture en mode écriture
                $fileopen=(fopen("$file",'a'));
                # Ecriture de "Début du fichier" dansle fichier texte
                echo $data['idmembre'];
                fwrite($fileopen,$eeee. "SUPP Compte ".$es."\r");
                # On ferme le fichier proprement
                fclose($fileopen);
            }

        }else{
        echo "Un ou plusieurs champs sont vides";
        }
    }


        ?>
</div><br>

<header>
<h1>Gestion Livre :</h1>
</header>
<div class='infos'>

 
       <?php echo "Ajouter un  livre";?>
            <form name="test" action="" method="post">
                <p><input type="text" name="set2"  placeholder="Entrez un nbpage">
                <input type="text" name="set1"  placeholder="Entrez un idlangue">
                <input type="text" name="set3"  placeholder="Entrez un idEditeur">
                <input type="text" name="set4"  placeholder="Entrez un titre">
                <input type="text" name="set5"  placeholder="Entrez un ISBN">
                <input type="text" name="set6"  placeholder="Entrez une ann&eacute;e">
                <input type="text" name="set7"  placeholder="Entrez un idgenre">
                <input type="text" name="set12"  placeholder="Entrez un r&eacute;sum&eacute;">
                <input type="text" name="set9"  placeholder="Entrez un idPersonne">
                <input type="text" name="set10"  placeholder="Entrez un Empruntlivre">
                <input type="text" name="set13"  placeholder="Entrez un Idmembre">
                <input type="submit" value="GO" name="go4"></p>
        </form>
        <?php   
            if (isset($_POST['go4']) && $_POST['go4'] == 'GO') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2'])) && ((isset($_POST['set1']) && !empty($_POST['set1']))) && ((isset($_POST['set3']) && !empty($_POST['set3']))) && ((isset($_POST['set4']) && !empty($_POST['set4']))) && ((isset($_POST['set5']) && !empty($_POST['set5']))) && ((isset($_POST['set6']) && !empty($_POST['set6']))) && ((isset($_POST['set7']) && !empty($_POST['set7'])))&& ((isset($_POST['set12']) && !empty($_POST['set12'])))&& ((isset($_POST['set9']) && !empty($_POST['set9'])))&& ((isset($_POST['set10']) && !empty($_POST['set10'])))&& ((isset($_POST['set13']) && !empty($_POST['set13']))))  {
                    $set1 = $_POST['set1'];
                    $set2 = $_POST['set2'];
                    $set3 = $_POST['set3'];
                    $set4 = $_POST['set4'];
                    $set5 = $_POST['set5'];
                    $set6 = $_POST['set6'];
                    $set7 = $_POST['set7'];
                    $set9 = $_POST['set9'];
                    $set10 = $_POST['set10'];
                    $set12 = $_POST['set12'];
                    $set13 = $_POST['set13'];
        $sql ="INSERT INTO livre (Isbn, Titre, Annee, Nbpages, Resume, EmpruntLivre, IdPersonne, IdEditeur, IdGenre, IdLangue, idmembre) VALUES ('$set5', '$set4', '$set6', '$set1', '$set12', '$set10', '$set9', '$set3', '$set7', '$set1', '$set13')";
        echo "Le livre a &eacute;t&eacute; ajout&eacute;";?><br><?php
        $sql2 = "SELECT idmembre FROM membre WHERE mdp='$set2'";
                echo " le mot de passe  a &eacute;t&eacute; chang&eacute<br>;";
                if (isset($sql) && !empty($sql2)) {
                $link = mysqli_connect($HOST , $user, $password, $database);
                $req = mysqli_query($link,$sql2) or exit('Erreur SQL !<br />'.$sql2.'<br />'.mysqli_error($link));
                 while($data = mysqli_fetch_array($req, MYSQLI_ASSOC))
                    $es=$data['idmembre'];
                    mysqli_close ($link);
                # Chemin vers fichier texte
                $file ="EZ.txt";
                # Ouverture en mode écriture
                $fileopen=(fopen("$file",'a'));
                # Ecriture de "Début du fichier" dansle fichier texte
                echo $data['idmembre'];
                fwrite($fileopen,$eeee. "ADD Livre ".$set5."\r");
                # On ferme le fichier proprement
                fclose($fileopen);
            }
    }else{
        echo "Un ou plusieurs champs sont vides";
    }
}

echo "<br>Supprimer un Livre";
?><form name="form" action="" method="post">
    <p><input type="text" name="set1"  placeholder="Entrez un isbn">
    <input type="submit" name="go5" value="GO"></p>
</form><?php
if (isset($_POST['go5']) && $_POST['go5'] == 'GO') {
    if ( (isset($_POST['set1']) && !empty($_POST['set1']))) {
        $set1=$_POST['set1'];
        $sql = "DELETE FROM livre WHERE isbn='$set1';"; 
        echo "Le livre a &eacute;t&eacute; supprim&eacute;";
        # Chemin vers fichier texte
        $file ="EZ.txt";
        # Ouverture en mode écriture
        $fileopen=(fopen("$file",'a'));
        # Ecriture de "Début du fichier" dansle fichier texte
        echo $data['idmembre'];
        fwrite($fileopen,$eeee. "SUPR Livre ".$set1."\r");
        # On ferme le fichier proprement
        fclose($fileopen);
    }else{
    echo "Un ou plusieurs champs sont vides";
    }
}



?> 

 <br>Ajouter l'image du livre

<form action="#upload" method='post' enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php 
if (isset($_POST['submit']) && $_POST['submit'] == 'Upload Image') {
$target_dir = "../img/Livres/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file  has been uploaded.";
                 # Chemin vers fichier texte
            $file ="EZ.txt";
            # Ouverture en mode écriture
            $fileopen=(fopen("$file",'a'));
             # Ecriture de "Début du fichier" dansle fichier texte
            echo $data['idmembre'];
            fwrite($fileopen,$eeee. "ADD IMG ".$target_file."\r");
            # On ferme le fichier proprement
            fclose($fileopen);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

?><div class='infos'>
Supprimer une image

<form name="form" action="" method="post">
    <p><input type="text" name="rm"  placeholder="Entrez un isbn">
    <input type="submit" name="gr" value="suprimer"></p>
</form>
<?php
if (isset($_POST['gr']) && $_POST['gr'] == 'suprimer') {
    if (isset($_POST['rm']) &&  !empty($_POST['rm'])) {
        if (file_exists("../img/Livres/".$_POST['rm'].".jpg")){
            unlink ("../img/Livres/".$_POST['rm'].".jpg");
             # Chemin vers fichier texte
            $file ="EZ.txt";
            # Ouverture en mode écriture
            $fileopen=(fopen("$file",'a'));
             # Ecriture de "Début du fichier" dansle fichier texte
            fwrite($fileopen,$eeee. "suPR IMG ".$_POST['rm']."\r");
            # On ferme le fichier proprement
            fclose($fileopen);
        }else{echo "Ce fichier n'existe pas";}
    }else{echo "Saisir un nom ";
    }
     
}
if (isset($sql) && !empty($sql)) {
    $link = mysqli_connect($HOST , $user, $password, $database);
    $req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
    mysqli_close ($link);
}
?>

</div>
</div>
</div>
<?php require "footer.php"?>
