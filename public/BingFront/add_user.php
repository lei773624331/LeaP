<?php
//Script de connexion � la base de donn�es et de connection utilisateur
include('./session.php');

// Captcha
$nb1 = rand(1, 5);
$nb2 = rand(1, 5);
$somme = $nb1 + $nb2;
$captcha_crypted = md5($somme);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR xml:lang="en">
      <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <script type="text/javascript" src="engine.js"></script>
    <title> Ajouter un rédacteur </title>
  </head>

  <body style="width:320px; height:450px; margin: 20; padding: 20; background-image: url('./res/add.png'); background-repeat: no-repeat; background-position: center; background-attachment: fixed;">

    <div id="title" style="position:absolute; left:50px; top:16px;">
      <h2>Ajouter un rédacteur</h2>
    </div>

    <div id="content" style="position:absolute; left:40px; top:150px; width:250px;">

      <form id="form" onsubmit='return CheckForm()' action="" method='post'>
        <b>Pseudo</b> <br/>
          <input type="text" name="nom" style="width:210px; heigh:50px;"/><br/>
          <b>Mot de passe </b><br/>
          <input type="password" name="mdp" style="width:210px; heigh:50px;"/><br/>

          <div>Combien font <?php echo $nb1; ?>+<?php echo $nb2; ?>?</div>
          <div><input class="input" type="text" size="20" name="captcha" /></div>
          <div><small><i>
                (Pour vérifier qu'il ne s'agit pas d'un robot qui saisit le formulaire)
              </i></small></div>
          <div><p align="center"><input type="submit" value="Créer ce compte"/></p></div>
          <div>
            <input type="hidden" name="vcaptcha" value="<?php echo $captcha_crypted; ?>"/>
          </div>
      </form>

<?php
if (!empty($_POST['nom']) and !empty($_POST['mdp'])) {
// Traitement des données du formulaire
  $nom = ucfirst(strtolower($_POST['nom']));
  $mdp = $_POST['mdp'];
  //on verifie d'abord que cet user n'existe pas
  $requete = "SELECT * FROM `bingfront_user` WHERE `pseudo` = '$nom'";
  $numrows = mysql_num_rows(mysql_query($requete));
  if ($numrows == 0) {
  //on le cr�e alors
    $requete = "INSERT INTO `bingfront_user` (`pseudo` ,`mdp`)VALUES ('$nom', '$mdp')";
    mysql_query($requete);
    echo "<font color=red style='background:#0>" . $nom . " a été crée</font>";
  }
  else
  //sinon on lui explique de changer
    echo "<font color=red style='background:#0>" . $nom . " existe déjà </font>";
}
?>
      </p>
    </div>


  </body>
</html>
