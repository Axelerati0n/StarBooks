
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = $_POST['client_name'];
   $mail = $_POST['client_mail'];
   if(empty($name)){
     echo"Vous n'avez pas renseigné votre nom.";
   }else{
     echo "Bonjour $name !
     Merci d'avoir répondu à ce petit formulaire !";
   }
 }
 ?>
