<?php require"header.php"?>
<div class="grilContact">
<header>
<h1>Gestion Compte :</h1>
</header>
<div class='infos'>
<?php

if (empty($_POST['tri2'])) {$tri2=NULL;
        }else {$tri2 = htmlspecialchars($_POST['tri2']);// recuperer ce que  inscrit dans barre recherche
        }

                echo " Changer le mot de passe ";
            ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1"  placeholder="Ancien mot de passe ">
                        <input type="text" name="set2"  placeholder="Nouveau mot de passe">
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
                    <p><input type="text" name="set1" placeholder="Ancien login">
                        <input type="text" name="set2"  placeholder="Nouveau login">
            <input type="submit" value="GO"></p></form><?php
                        if (empty($_POST['set1'])) {$set1=NULL;
        }else {$set1 = htmlspecialchars($_POST['set1']);// recuperer ce que  inscrit dans barre recherche
        }
        if (empty($_POST['set2'])) {$set2=NULL;
        }else {$set2 = htmlspecialchars($_POST['set2']);// recuperer ce que  inscrit dans barre recherche
        }   
            $sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";

        ?>
</div><br>

<header>
<h1>Gestion Livre :</h1>
</header>
<div class='infos'>
<form name="form" action="" method="post">


<form name="form" action="" method="post">
            

            <?php
            if (empty($_POST['set1'])) {$set1=NULL;
        }else {$set1 = htmlspecialchars(md5($_POST['set1']));// recuperer ce que  inscrit dans barre recherche
        }
        $sql = " DELETE FROM membre WHERE mdp='$set1';"; 
        //$sql = " DELETE FROM membre WHERE login='$text';"; // requete pour trier par ordre decroisant 


        echo "Ajouter un  livre";?>
            <form name="test" action="" method="post">
                <p><input type="text" name="set2"  placeholder="Entrez un nbpage">
                <input type="text" name="set1"  placeholder="Entrez un idlangue">
                <input type="text" name="set3"  placeholder="Entrez un idEditeur">
                <input type="text" name="set4"  placeholder="Entrez un titre">
                <input type="text" name="set5"  placeholder="Entrez un ISBN">
                <input type="text" name="set6"  placeholder="Entrez une année">
                <input type="text" name="set7"  placeholder="Entrez un idgenre">
                <input type="text" name="set12"  placeholder="Entrez un résumé">
                <input type="text" name="set8"  placeholder="Entrez un année">
                <input type="text" name="set9"  placeholder="Entrez un idPersonne">
                <input type="text" name="set10"  placeholder="Entrez un Empruntlivre">
                <input type="text" name="set11"  placeholder="Entrez un IdGenre">
                <input type="text" name="set13"  placeholder="Entrez un Idmembre">
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

    echo "Supprimer un Livre";
    ?><form name="form" action="" method="post">
    <p><input type="text" name="set1"  placeholder="Entrez un isbn">
            <input type="submit" value="GO"></p></form><?php
            if (empty($_POST['set1'])) {$set1=NULL;
        }else {$set1 = htmlspecialchars($_POST['set1']);// recuperer ce que  inscrit dans barre recherche
        }
    $sql = "DELETE FROM livre WHERE isbn='$set1';"; 





        
    
$link = mysqli_connect($HOST , $user, $password, $database);
if ((isset($_POST['isbn']) && !empty($_POST['isbn'])))
    $link = mysqli_connect($HOST , $user, $password, $database);
        $req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));

        mysqli_close ($link);  

?>
</div>
</div>
</div>
<?php require"footer.php"?>
