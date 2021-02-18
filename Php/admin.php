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

                echo " Changer le mdp ";
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


                echo "Changer le login";
                ?><form name="form" action="" method="post">
                    <p><input type="text" name="set1" placeholder="Ancien login">
                        <input type="text" name="set2"  placeholder="Nouveau login">
            <input type="submit" value="GO"></p></form><?php
            if (isset($_POST['go']) && $_POST['go'] == 'go') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2']))) { 
            $sql="UPDATE membre SET  login='$set2' WHERE login='$set1';";
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
<form name="form" action="" method="post">


<form name="form" action="" method="post">
            

            <?php
            if (isset($_POST['go']) && $_POST['go'] == 'go') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2']))) {
                    $sql = " DELETE FROM membre WHERE mdp='$set1';"; 
        }else{
        echo "Un ou plusieurs champs sont vides";
        }
    }
        
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

                <input type="text" name="set9"  placeholder="Entrez un idPersone">
                <input type="text" name="set10"  placeholder="Entrez un Empruntlivre">

                <input type="text" name="set13"  placeholder="Entrez un Idmembre">
                <input type="submit" value="GO1" name=""></p>
        </form>
        <?php   
            if (isset($_POST['go']) && $_POST['go'] == 'go') {
                if ( (isset($_POST['set2']) && !empty($_POST['set2'])) && ((isset($_POST['set1']) && !empty($_POST['set1']))) && ((isset($_POST['set3']) && !empty($_POST['set3']))) && ((isset($_POST['set4']) && !empty($_POST['set4']))) && ((isset($_POST['set5']) && !empty($_POST['set5']))) && ((isset($_POST['set6']) && !empty($_POST['set6']))) && ((isset($_POST['set7']) && !empty($_POST['set7'])))&& ((isset($_POST['set12']) && !empty($_POST['set12'])))&& ((isset($_POST['set9']) && !empty($_POST['set9'])))&& ((isset($_POST['set10']) && !empty($_POST['set10'])))&& ((isset($_POST['set13']) && !empty($_POST['set13']))))  {
        $sql ="INSERT INTO livre (Isbn, Titre, Annee, Nbpages, Resume, EmpruntLivre, IdPersonne, IdEditeur, IdGenre, IdLangue, idmembre) VALUES ('$set5', '$set4', '$set6', '$set1', '$set12', '$set10', '$set9', '$set3', '$set7', '$set1', '$set13')";
    }else{
        echo "Un ou plusieurs champs sont vides";
    }
}

    echo "Supprimer un livre";
    ?><form name="form" action="" method="post">
    <p><input type="text" name="set1"  placeholder="Entrez un isbn">
            <input type="submit" value="GO"></p></form><?php
            if (empty($_POST['set1'])) {$set1=NULL;
        }else {$set1 = htmlspecialchars($_POST['set1']);// recuperer ce que  inscrit dans barre recherche
        }
    $sql = "DELETE FROM livre WHERE isbn='$set1';"; 





        
    
$link = mysqli_connect($HOST , $user, $password, $database);
    $link = mysqli_connect($HOST , $user, $password, $database);
        $req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($link));
        mysqli_close ($link);  

?>
</div>
</div>
</div>
<?php require"footer.php"?>
