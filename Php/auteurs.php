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
                        <img src=<?php echo "../img/auteurs/{$nom}.jpg"?> alt=<?php echo $nom?> width="60%" height="500px" align=left></a>
                        <?php
                    echo "<p><br><strong>Nom : </strong>" . $row["nom"];
                    echo "<br><br><strong>Prénom : </strong>" . $row["prenom"] ;
                      echo "<br><br><strong>Biographie : </strong>" . $row["bio"] . "</p>";
                    ?>
                        </div>
                       <?php
                
               


              }
          mysqli_free_result($result);
        }
        mysqli_close($link);
 echo "</div>";
?>
<?php require"footer.php"?>


