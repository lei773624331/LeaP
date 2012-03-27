<?php
//Script de connexion � la base de donn�es et de connection utilisateur
include('./session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title> Ajouter une rubrique </title>
</head>

<body style="width:320px; height:450px; margin: 20; padding: 20; background-image: url('./res/add.png'); background-repeat: no-repeat; background-position: center; background-attachment: fixed;">

<div id="title" style="position:absolute; left:50px; top:16px;">
	<h2>Ajouter une Rubrique</h2>
</div>

<div id="content" style="position:absolute; left:40px; top:150px; width:250px;">
	<p><b>Nom de la rubrique: </b><br/>
	<form method="post">
	<input type="text" name="nom" style="width:210px; heigh:50px;"/>
	Veuillez entrez le nom de la rubrique que vous souhaitez ajouter.<br/>
	Pour quitter, cliquez hors de la fenetre simplement.<br/></p>
	<p align="center"><input type="submit" value="Créer ma rubrique"/><br/><br/>
	</form>
	<?php if (!empty($_POST['nom']))
	{
	$nom=ucfirst(strtolower($_POST['nom']));
	//on verifie d'abord que cette rubrique n'existe pas
		$requete="SELECT * FROM `bingfront_rubrique` WHERE `libelle` = '$nom'";
      $numrows = mysql_num_rows(mysql_query($requete));
        if ($numrows == 0)
		//on la cr�e alors
		{
			$requete="INSERT INTO `bingfront_rubrique` (`idRubrique` ,`libelle`)VALUES (NULL , '$nom')";
			mysql_query($requete);
			echo "<font color=red>".$nom." a été crée</font>";
		}
		else
		//sinon on lui explique de changer
			echo "<font color=red>".$nom." existe déjà </font>";
	}
	?>
	</p>
</div>


</body>
</html>
