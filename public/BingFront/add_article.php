<?php
//Script de connexion à la base de données et de connection utilisateur
include('./session.php');
include_once("./fckeditor/fckeditor.php") ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title> Ecrire un article </title>
</head>

<body style="width:980px; height:600px; margin: 20; padding: 20; background-image: url('./res/write.png'); background-repeat: no-repeat; background-position: center; background-attachment: fixed;">

<!-- titre -->
<div id="title" style="position:absolute; left:115px; top:35px;">
	<h2>J'écris mon article</h2>
</div>

<div id="content" style="position:absolute; left:90px; top:110px; width:790px; height:400px;">

<form method="post">
<table border="0" width="100%">
<!-- tableau gauche -->
<tr><td>
<!-- Titre -->
<center><b>Article</b></center>
<table border="1"><tr><td>
<b>Titre de mon article: </b></td><td><input name="titre" type="text" <?php if (!empty($_POST['titre'])) echo "value=".$_POST['titre'];?> value=""/></td></tr>
<!-- Auteur -->
<tr><td> <b>Auteur: </b></td><td><center><b><?php $auteur=$_GET['nom']; echo $auteur;?><b></center></td></tr>
<!-- Rubrique Associée -->
<tr><td> <b>Rubrique: </b></td><td>
<SELECT NAME="rubrique">
<OPTION value="">----------------------------- </option>
<?php
$requete="SELECT `libelle` FROM `bingfront_rubrique` ORDER BY `bingfront_rubrique`.`libelle` ASC";
$result=mysql_query($requete);
while($ligne=mysql_fetch_array($result)){
$rubrique=$ligne['libelle'];
echo '<OPTION value="'.$rubrique.'">'.$rubrique.'</option>';
}?>
</SELECT></td></tr>
</table>
</td>
<!-- tableau droite -->
<td align="right">
<center><b>Introduction</b><br/></center>
<table width="60%" border="1"><tr><td align="center">
<?php
$oFCKeditor = new FCKeditor('introduction') ;
$oFCKeditor->BasePath = './fckeditor/' ;
$oFCKeditor->Config['EnterMode'] = 'br';
$oFCKeditor->ToolbarSet = "Basic";
$oFCKeditor->Height =80;
$oFCKeditor->Width =400;
if (isset($_POST['introduction']))
  $oFCKeditor->Value = $_POST['introduction'];
$oFCKeditor->Create() ;

?>
</td></tr>
</table>

</td></tr></table>

<center>
<hr width="75%">
<center><b>Contenu de votre article</b></center>
<hr width="75%">
<!-- Ici on va intégrer du contenu fckeditor -->
<table border="1" width="100%"><tr width="100%"><td>
<?php
$oFCKeditor = new FCKeditor('article') ;
$oFCKeditor->BasePath = './fckeditor/' ;
$oFCKeditor->Config['EnterMode'] = 'br';
if (isset($_POST['article']))
  $oFCKeditor->Value = $_POST['article'];
$oFCKeditor->Create() ;
?>
    <center><input type="submit" value="Submit"/>

</form>

  <?php
if (!empty($_POST['titre']) and !empty($_POST['introduction']) and !empty($_POST['article']))
{
$titre=ucfirst(strtolower($_POST['titre']));
$rubrique=$_POST['rubrique'];
$sValue = stripslashes( $_POST['introduction'] ) ;
$sValue = stripslashes( $_POST['article'] ) ;
$article = $_POST['article'];
$introduction = stripslashes($_POST['introduction']);
$intro = $_POST['introduction'];
$content= $_POST['article'];

$requete="SELECT * FROM `bingfront_rubrique` WHERE `libelle` = '$rubrique'";
$numrows = mysql_num_rows(mysql_query($requete));
if ($numrows == 0) echo "Choisissez une rubrique";
else if($numrows == 1){

if (empty($_POST['etat']))$etat=0;
else $etat=$_POST['etat'];

$requete="INSERT INTO `bingfront_article` (`id` ,`titre` ,`introduction` ,`contenu` ,`publie` ,`auteur` ,`etat` ,`rubrique`)
VALUES (NULL , '$titre', '$intro', '$content',CURRENT_TIMESTAMP , '$auteur', '$etat', '$rubrique')";
if (mysql_query($requete))
echo "<br/><span style='color=#A00;'>Article enregistrée</span>";?>
                 <script language="javascript" type="text/javascript">
                  <!--

                  window.parent.document.location.replace("./admin.php?mavar=<?PHP echo $pseudo?>&demande=''");

                  -->
                  </script>
				  <?php
}
}
else echo ("<br/>Pensez à remplir correctement tout les champs");
?>
</td></tr>
</table>
</div>
</body>
</html>