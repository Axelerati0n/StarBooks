<?php $page_title="secondaire";
require "header.php";
?>


  <section>
    <?php
         echo "<div class='block'>";

        $link = mysqli_connect("localhost", "root", "", "starbooks2");
        if(!mysqli_set_charset($link,"utf8mb4")){
            printf("erreur lors du chargement du jeu de caractere utf8mb4 : %s\n", mysqli_error($link));
            exit();
        }





           $req = "SELECT DISTINCT nom,prenom,bio FROM livre JOIN personne ON livre.IdPersonne=personne.IdPersonne ";

          $result = mysqli_query($link,$req);



          if($result){
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

            $nom = $row["nom"];

                    ?>
                        <div class='pp'>
                          <a href='#'><img src=<?php echo "../img/auteurs/{$nom}.jpg"?> alt=<?php echo $nom?> width="100%" height="100%" align=left></a>
                        <?php
                        echo"<div class='infos'>";
                        echo "<li><strong>Nom : </strong>" . $row["nom"] . "</li>";
                        echo "<li><strong>Prénom : </strong>" . $row["prenom"] . "</li>";
                        echo"</div>";
                        echo"<br>";
                        echo"</div>";
                         echo"<header>";
                        echo"<h3>"."Résumé"."</h3>";
                        echo"</header>";
                        echo"<div class='infos'>";
                        echo "<li>" . $row["bio"] . "</li>";
                        echo"</div>";
                    ?>

                          </ul>
                        </div>
                        </div>
                       <?php




              }
          mysqli_free_result($result);
        }
        mysqli_close($link);
 echo "</div>";
?>
<?php require"footer.php"?>
