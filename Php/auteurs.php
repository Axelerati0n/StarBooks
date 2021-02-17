<?php $page_title="secondaire";
require "header.php";
?>


  <section>
    <?php

        $link = mysqli_connect("localhost", "root", "", "starbooks2");
        if(!mysqli_set_charset($link,"utf8mb4")){
            printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
            exit();
        }





           $req = "SELECT DISTINCT nom,prenom FROM livre JOIN personne ON livre.IdPersonne=personne.IdPersonne ";

          $result = mysqli_query($link,$req);



          if($result){
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            $nom = $row["nom"];

              /*echo "<section class=info>";
                echo "<li class='prenom'><strong>Nom : </strong>" . $row["nom"] . "</li>";
                echo "<li class='prenom'><strong>Prénom : </strong>" . $row["prenom"] . "</li>";
                echo "</ul>";
                echo "</section>";*/
                echo "<div class='block'>";?>

                        <div class='pp'><a href='#'><img src=<?php echo "../img/auteurs/{$nom}.jpg"?> alt="<?php echo $nom?>" width="250px" height="400px" align=left></a></div>
                        <?php
                    echo "<p class='pres'><strong>Nom : </strong>" . $row["nom"];
                    echo "<br><br><strong>Prénom : </strong>" . $row["prenom"] . "</p>";
                
                echo "</div>";


              }
          mysqli_free_result($result);
        }
        mysqli_close($link);

?>
<!--footer -->



