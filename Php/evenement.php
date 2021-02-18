<?php require "header.php"?>
<section class="blocq">
       <?php
       $date = date("d-m-Y");
       /*if(($date>05-01-21 && $date<14-02-21) || ($date>18-04-21 && $date<23-06-21) || ($date>20-07-21 && $date<26-11-21) || ($date>09-12-21 && $date<20-12-21) || ($date>21-12-21 && $date<05-01-22)){
       echo "Nous sommes le " . $date . ". Il n'y a donc pas d'événement aujourd'hui, repassez plus tard"; 
       }
       elseif($date>03/04/21 && $date<18/04/21){
        echo "C'est les vacances de Pâques !!! Devenez membre et profitez des soldes sur une grande partie des livres"; 
       }
       elseif($date>23/06/21 && $date<20/07/21){
        echo "C'est les grandes soldes !!! Devenez membre et profitez des soldes sur une grande partie des livres"; 
       }
       elseif($date>26/11/21 && $date<09/12/21){
        echo "C'est les semaine du Black Friday !!! Devenez membre et profitez des soldes sur une grande partie des livres"; 
       }
       elseif($date>09/12/21 && $date<05/01/22){
        echo "C'est les semaine du Black Friday !!! Devenez membre et profitez des soldes sur une grande partie des livres"; 
       }
       else{
        echo "Nous sommes le " . $date . ". Il n'y a donc pas d'événement aujourd'hui, repassez plus tard"; 
       }*/
       echo "<p class='eve'>Nous sommes le " . $date . ". Il n'y a donc pas d'événement aujourd'hui, repassez plus tard s'il vous plaît.";
     ?>
</section>
<?php require "footer.php"?>