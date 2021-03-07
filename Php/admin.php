<?php require "header.php";
require "config.php"?>
<div class="grilContact">
<header>
<h1>Gestion Compte :</h1>
</header>
<div class='infos'>
<?php
                echo "Changer le mdp";
            ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1"  placeholder="Ancien mot de passe ">
                        <input type="text" name="set2"  placeholder="Nouveau mot de passe">
            <input type="submit" name="go1" value="GO"></p></form><?php
            if (isset($_POST['go1']) && $_POST['go1'] == 'GO') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2'])) && ( (isset($_POST['set1']) && !empty($_POST['set2'])))) {
                    session_start();
                    if ($_SESSION['login'] =='admin' ) {
                    $set1=md5($_POST['set1']);
                    $set2=md5($_POST['set2']);
                $sql = "UPDATE membre SET mdp ='$set2' WHERE mdp='$set1';"; 
                echo $sql;
            }else {
                echo "Le compte admin ne peut pas changer le mot de passe";
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
                <input type="text" name="set6"  placeholder="Entrez une année">
                <input type="text" name="set7"  placeholder="Entrez un idgenre">
                <input type="text" name="set12"  placeholder="Entrez un résumé">
                <input type="text" name="set9"  placeholder="Entrez un idPersonne">
                <input type="text" name="set10"  placeholder="Entrez un Empruntlivre">
                <input type="text" name="set13"  placeholder="Entrez un Idmembre">
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
        echo "Le livre a été ajouté";?><br><?php
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
        echo "Le livre a été supprimé";
    }else{
    echo "Un ou plusieurs champs sont vides";
    }
}


if (isset($sql) && !empty($sql)) {
    $link = mysqli_connect($HOST , $user, $password, $database);
    $link = mysqli_connect($HOST , $user, $password, $database);
    $req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
    mysqli_close ($link);
}

?> 

 <br>Ajouter l'image du livre

<form action="#upload" method='post' enctype="multipart/form-data">
    <input type="file"  value="p" name="file"/><br>
    <input type="submit" name="sub" value="Upload"/>
</form>
<?php 
if (isset($_POST['sub']) && $_POST['sub'] == 'Upload') {
    
        $name= $_FILES['file']['name'];
        $tmp_name= $_FILES['file']['tmp_name'];
        $position= strpos($name, ".");
        $fileextension= substr($name, $position + 1);
        $fileextension= strtolower($fileextension);
        if (isset($name)) {
            $path= '../img/Livres/';
                if (empty($name)) {
                    echo "Choisir une image";
                }else if (!empty($name)){
                    if ($fileextension !== "jpg")  {
                         echo "L'extention de l'image doit être .jpg";
                    }else if ($fileextension == "jpg")  {
                         if (move_uploaded_file($tmp_name, $path.$name)) {
                         echo 'Votre image a bien été enregistrée';
                        }
                    }
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
        }else{echo "Ce fichier n'existe pas";}
    }else{echo "Saisir un nom ";
    }
     
}

?>

</div>
</div>
</div>
<?php require "footer.php"?>
