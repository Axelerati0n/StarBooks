<?php require"header.php"?>
<div class="grilContact">
<header>
<h1>Gestion Compte :</h1>
</header>
<div class='infos'>
<?php


                echo " changer le mdp ";
            ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1"  placeholder="ancien mot de passe ">
                        <input type="text" name="set2"  placeholder="nouveaux mot de passe">
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
                echo "le compte admin ne peut pas chnange de login";
            }
                }else{
                    echo "un ou plusieur champ son vide";
                }
             }     



                echo "changer le login";
                ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1" placeholder="ancien login">
                        <input type="text" name="set2"  placeholder="nouveaux mot de login">
            <input type="submit" name="go2" value="GO"></p></form><?php
            if (isset($_POST['go2']) && $_POST['go2'] == 'GO') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))  && (isset($_POST['set2']) && !empty($_POST['set2'])) ) { 
                    $set1=$_POST['set1'];
                    $set2=$_POST['set2'];
            $sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";
        }else{
        echo "un ou plusieur champ son vide";
        }
    }echo "Suprimer un compte";
            ?><form name="form" action="" method="post">
            <p><input type="text" name="set1" placeholder="entre un mot de passe">
            <input type="submit" name ="go3"value="GO"></p></form>

            <?php
            if (isset($_POST['go3']) && $_POST['go3'] == 'go') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))) {
                    $set1 = $_POST['set1'];
                    $sql = " DELETE FROM membre WHERE mdp='$set1';";

        }else{
        echo "un ou plusieur champ son vide";
    }
    }

        ?>
</div><br>

<header>
<h1>Gestion Livre :</h1>
</header>
<div class='infos'>

 
       <?php echo "ajouter un  livre";?>
            <form name="test" action="" method="post">
                <p><input type="text" name="set2"  placeholder="Entrée un nbpage">
                <input type="text" name="set1"  placeholder="Entrée un idlangue">
                <input type="text" name="set3"  placeholder="Entrée un idEditeur">
                <input type="text" name="set4"  placeholder="Entrée un titre">
                <input type="text" name="set5"  placeholder="Entrée un ISBN">
                <input type="text" name="set6"  placeholder="Entrée un annee">
                <input type="text" name="set7"  placeholder="Entrée un idgenre">
                <input type="text" name="set12"  placeholder="Entrée un resumer">
                <input type="text" name="set9"  placeholder="Entrée un idPersone">
                <input type="text" name="set10"  placeholder="Entrée un Empruntlivre">
                <input type="text" name="set13"  placeholder="Entrée un Idmembre">
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
        echo "le livre a ete ajouter";?><br><?php
    }else{
        echo "un ou plusieur champ son vide";
    }
}

    echo "suprimer LIVRE";
    ?><form name="form" action="" method="post">
    <p><input type="text" name="set1"  placeholder="Entrée un isbn">
            <input type="submit" name="go5" value="GO"></p></form><?php
            if (isset($_POST['go5']) && $_POST['go5'] == 'GO') {
                if ( (isset($_POST['set1']) && !empty($_POST['set1']))) {
                $set1=$_POST['set1'];
             $sql = "DELETE FROM livre WHERE isbn='$set1';"; 
             echo "le livre a ete suprimer";
         }else{
        echo "un ou plusieur champ son vide";
    }
     }
 ?></div><?php




        
   if (isset($sql) && !empty($sql)) {
$link = mysqli_connect($HOST , $user, $password, $database);
    $link = mysqli_connect($HOST , $user, $password, $database);
        $req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
        mysqli_close ($link); 

}
?>
</div>
</div>
</div>
<?php require"footer.php"?>
