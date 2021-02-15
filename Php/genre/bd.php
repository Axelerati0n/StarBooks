<?php require "../header.php";
      require "../genre.php";?>
<section>

<div class="grid">
<?php

    $link = mysqli_connect("localhost", "root", "", "starbooks");
    if(!mysqli_set_charset($link,"utf8mb4")){
        printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
        exit();
    }

      $req = "SELECT * FROM livre JOIN editeur e ON e.id = livre.editeur 
      JOIN auteur a ON a.idLivre = livre.isbn JOIN personne p ON p.id = a.idPersonne JOIN genre g ON g.id = livre.genre 
      WHERE g.id=4;";
      $result = mysqli_query($link,$req);


      if($result){
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

        $isbn = $row["isbn"];
        $titre = $row["titre"];
        ?>

    <div>


    <?php echo "<a href='redirections/{$isbn}.php'>";
     echo "<div class='zoom'><img src=../../img/Livres/{$isbn}.jpg' alt='{$titre}'></div></a>"?>

        <ul class="liste">
          <li class="graouh">Titre : <?php echo $titre ?></li>

          <?php
            echo "<li>Nom : " . $row["nom"] . "</li>";
            echo "<li>Prénom : " . $row["prenom"] . "</li>";
            echo "<li>Editeur : " . $row["nomediteur"] . "</li>";
            echo "<li>Isbn : " . $row["isbn"] . "</li>";
            echo "<li>Année de publication : " . $row["annee"] . "</li>";
            echo "<li>Nombre de pages : " . $row["nbpages"] . "</li>";
            echo"</ul>";
        echo "</div>";
      }
      mysqli_free_result($result);
    }
    mysqli_close($link);



      ?>

</div>
</section>
<?php require "../footer.php";?>