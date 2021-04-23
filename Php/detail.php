<?php $page_title="secondaire";
require "header.php";
?>

<div class='grildetail'>

    <?php

        $link = mysqli_connect($HOST , $user, $password, $database);
        if(!mysqli_set_charset($link,"utf8mb4")){
            printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
            exit();
        }
        if(isset($_GET["isbn"])){
           $get = $_GET["isbn"];




           $req = "SELECT titre,isbn,nom,prenom,nomgenre,nomediteur,Annee,Resume,Nbpages FROM livre JOIN editeur ON livre.IdEditeur=editeur.IdEditeur JOIN personne ON livre.IdPersonne=personne.IdPersonne JOIN genre ON livre.IdGenre=genre.IdGenre WHERE isbn = $get;
";

          $result = mysqli_query($link,$req);



          if($result){
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            $isbn = $row["isbn"];
            $titre = $row["titre"];

            ?>





<div class="detail">
             <img class="imgdetail" src=<?php echo "../img/Livres/{$isbn}.jpg"?> alt=<?php echo $isbn?> >

<header>
<h3><?php echo $titre ?></h3>
</header><br>

            <ul>
              <?php
                echo"<div class='infos'>";
                echo "<li><strong>Nom : </strong>" . $row["nom"] . "</li>";
                echo "<li><strong>Prénom : </strong>" . $row["prenom"] . "</li>";
                echo "<li><strong>Éditeur : </strong>" . $row["nomediteur"] . "</li>";
                echo "<li><strong>Isbn : </strong>" . $row["isbn"] . "</li>";
                echo "<li><strong>Année de publication : </strong>" . $row["Annee"] . "</li>";
                echo "<li><strong>Genre : </strong>" . $row["nomgenre"] . "</li>";
                echo "<li><strong>Nombre de pages : </strong>" . $row["Nbpages"] . "</li>";
                echo"</div>";
                echo"<br>";
                 echo"<header>";
                echo"<h3>"."Résumé"."</h3>";
                echo"</header>";
                echo"<div class='infos'>";
                echo "<li>" . $row["Resume"] . "</li>";
                echo"</div>";




          }
          mysqli_free_result($result);
        }
        mysqli_close($link);
      }

          ?>

        </ul>

      </div>

<?php require "footer.php";?>
