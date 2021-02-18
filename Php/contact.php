<?php require"header.php"?>
<div class='grilContact'>


<?php



/* Si le formulaire est envoyé alors on fait les traitements */
if (isset($_POST['envoye']))
{
    /* Récupération des valeurs des champs du formulaire */
    if (get_magic_quotes_gpc())
    {
      $name   = stripslashes(trim($_POST['client_name']));
      $mail = stripslashes(trim($_POST['client_mail']));
      $sujet    = stripslashes(trim($_POST['sujet']));
      $message    = stripslashes(trim($_POST['message']));
    }
    else
    {
      $name   = trim($_POST['client_name']);
      $mail = trim($_POST['client_mail']);
      $sujet    = trim($_POST['sujet']);
      $message    = trim($_POST['message']);
    }

    /* Expression régulière permettant de vérifier si le
    * format d'une adresse e-mail est correct */
    $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';

    /* Expression régulière permettant de vérifier qu'aucun
    * en-tête n'est inséré dans nos champs */
    $regex_head = '/[\n\r]/';

    /* Si le formulaire n'est pas posté de notre site on renvoie
    * vers la page d'accueil */
    if($_SERVER['HTTP_REFERER'] != 'http://www.monsite.com/send_email.php')
    {
      header('Location: http://www.monsite.com/');
    }
    /* On vérifie que tous les champs sont remplis */
    elseif (empty($name)
           || empty($mail)
           || empty($sujet)
           || empty($message))
    {
      $alert = 'Tous les champs doivent être renseignés';
    }
    /* On vérifie que le format de l'e-mail est correct */
    elseif (!preg_match($regex_mail, $expediteur))
    {
      $alert = 'L\'adresse '.$mail.' n\'est pas valide';
    }
    /* On vérifie qu'il n'y a aucun header dans les champs */
    elseif (preg_match($regex_head, $mail)
            || preg_match($regex_head, $name)
            || preg_match($regex_head, $sujet))
    {
        $alert = 'En-têtes interdites dans les champs du formulaire';
    }
    /* Si aucun problème et aucun cookie créé, on construit le message et on envoie l'e-mail */
    elseif (!isset($_COOKIE['sent']))
    {
        /* Destinataire (votre adresse e-mail) */
        $to = 'moi@domaine.com';

        /* Construction du message */
        $msg  = 'Bonjour,'."\r\n\r\n";
        $msg .= 'Ce mail a été envoyé depuis monsite.com par '.$name."\r\n\r\n";
        $msg .= 'Voici le message qui vous est adressé :'."\r\n";
        $msg .= '***************************'."\r\n";
        $msg .= $message."\r\n";
        $msg .= '***************************'."\r\n";

        /* En-têtes de l'e-mail */
        $headers = 'From: '.$name.' <'.$mail.'>'."\r\n\r\n";

        /* Envoi de l'e-mail */
        if (mail($to, $sujet, $msg, $headers))
        {
            $alert = 'E-mail envoyé avec succès';

            /* On créé un cookie de courte durée (ici 120 secondes) pour éviter de
            * renvoyer un mail en rafraichissant la page */
            setcookie("sent", "1", time() + 120);

            /* On détruit la variable $_POST */
            unset($_POST);
        }
        else
        {
            $alert = 'Erreur d\'envoi de l\'e-mail';
        }

    }
    /* Cas où le cookie est créé et que la page est rafraichie, on détruit la variable $_POST */
    else
    {
        unset($_POST);
    }
}
?>

    <meta charset="utf-8">
      <link rel="stylesheet" href="..\style\biblioteque.css">

   <div>
  <header>
    <h1 align="center">Nous contacter</h1>
  </header>
    <form method="post" action="receive.php">
      <div class='orga'>
          <div class="infos">
          <legend class="style"><font color="white">Informations sur le client :</font></legend><br>
        
          <label for="name"><font color=" white">Nom :</font></label>
          <input type="text" id="name" name="client_name" autofocus required><br>
          <label for="mail"><font color=" white">Courriel :</font></label>
           <input type="email" id="mail" required name="client_mail"><br>
   </div>

 </div>
        <div class="infos">
        <label for="duration"><font color=" white" class="style">Votre livre préférée:</font></label><br>
        <select name="duration" required>
<?php require "config.php";
$sql ="SELECT Titre FROM `livre`;";
$link = mysqli_connect($HOST , $user, $password, $database);
if(!mysqli_set_charset($link,"utf8mb4")){//encodage  en utf8mb4
  printf(mysqli_error($link));
  exit();
}
echo "<div class='gril'>";
$req = mysqli_query($link,$sql);
if ($req) {
  while($data = mysqli_fetch_array($req, MYSQLI_ASSOC)){
    $i =0;
    echo "<option value='livre".$i."'>";
            echo  $data["Titre"];
          echo "</option>";
          $i++;
  }
}?>
        </select><br><br>
        <label for="addreq"><font color=" white">Vos avis :</font></label><br>
        <textarea id="addreq"name="client_addreq" placeholder="Votre message"></textarea><br><br>
        <button type="reset">Tout effacer</button>
        <button type="submit">Valider</button>
      </div>
      <br>
   <div class="infos">
   <img src="../img/devigual.jpg" class="logodev" align="center">
 </div><br>
</div>
</form>
</div>
<?php require"footer.php"?>
