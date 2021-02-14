<?php $page_title="secondaire";
require "header.php";
?>
<?php require "config.php";?>


  <section>
    <?php

        $link = mysqli_connect("localhost", "root", "", "StarBooks");
        if(!mysqli_set_charset($link,"utf8mb4")){
            printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
            exit();
        }
        if(isset($_GET["isbn"])){
           $get = $_GET["isbn"];




           $req = "SELECT * FROM livre JOIN editeur  ON editeur.id=livre.editeur
           JOIN auteur ON auteur.idLivre=livre.isbn JOIN personne ON personne.id=auteur.idPersonne JOIN genre ON genre.id=livre.genre WHERE isbn = $get;";;

          $result = mysqli_query($link,$req);



          if($result){
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            $isbn = $row["isbn"];
            $titre = $row["titre"];

            ?>



          <h1><?php echo $titre ?></h1>

            <div><img src=<?php echo "../img/Livres/{$isbn}.jpg"?> alt="<?php echo $isbn?>"></div>



            <ul>
              <?php
                echo "<li><strong>Nom : </strong>" . $row["nom"] . "</li>";
                echo "<li><strong>Prénom : </strong>" . $row["prenom"] . "</li>";
                echo "<li><strong>éditeur : </strong>" . $row["nomediteur"] . "</li>";
                echo "<li><strong>isbn : </strong>" . $row["isbn"] . "</li>";
                echo "<li><strong>année de publication : </strong>" . $row["annee"] . "</li>";
                echo "<li><strong>genre : </strong>" . $row["nomgenre"] . "</li>";
                echo "<li><strong>Nombre de pages : </strong>" . $row["nbpages"] . "</li>";
                echo"</ul>";
                echo"<section class=info>";



          }
          mysqli_free_result($result);
        }
        mysqli_close($link);
      }


          ?>
<?php require "footer.php";?>





   </body>
</html>
