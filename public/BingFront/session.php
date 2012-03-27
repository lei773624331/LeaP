<?php
if (session_unset())
session_start();
mysql_connect('localhost','root','');
mysql_select_db('bingfront');

//On stock les variables saisie par l'internaute tel que le pseudo et le mdp (si seulement il les a saisi)
if (isset($_POST['pseudo_saisi']) and isset($_POST['password_saisi']))
{
$pseudo = $_POST['pseudo_saisi'];
$mdp = $_POST['password_saisi'];

// on cherche si dans membre il y'a un tel pseudo
$requete = "SELECT * FROM bingfront_user WHERE `pseudo` ='$pseudo'";
// on stocke le resultat de cette requete et on test si la requete renvoie un resultat
$resul=mysql_query($requete);
//on choisi le premier (et le seul d'ailleur) de résultat ou le pseudo de la base correspond bien � celui saisi
$numrows = mysql_num_rows($resul);
   if($numrows == 1)
   {
   
// puisque le pseudo existe, voici la requete maintenant pour le mdp
	$requete = "SELECT mdp FROM bingfront_user WHERE `pseudo`='$pseudo'";
	$resul=mysql_query($requete);

//il faut parcourir la table user puisqu'ici le champs pseudo n'est pas un champs primaire
	$q=mysql_fetch_array($resul);

//on regarde si ya un mot de passe
	$mdpbase = $q['mdp'];

		if ($mdp==$mdpbase)
		{
// si tout est ok, on stocke une session (par défaut les session sont configurer pour 10 min) et on le redirige vers la partie administrateur

                 $_SESSION['pseudo'] = $_POST['pseudo_saisi'];
                 $_SESSION['password'] = $_POST['password_saisi'];
                 ?>
                 <script language="javascript" type="text/javascript">
                  <!--
                  window.location.replace("./admin.php?mavar=<?PHP echo $pseudo?>&demande=''");
                  -->
                  </script>
<?PHP
//sinon... ben.... qu'il se fasse chier tient!
		}
		else ?>
   <script language="javascript" type="text/javascript">
                  <!--
                  alert("mauvais mot de passe");
                  -->
   </script>
   <?php
   }
   else?>
   <script language="javascript" type="text/javascript">
                  <!--
                  alert("Error : ");
                  -->
   </script>
<?php echo "<h1>".$numrows."</h1"; ?>
   <?php
}
?>