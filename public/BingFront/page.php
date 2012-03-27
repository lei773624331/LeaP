<?php
//Script de connexion à la base de données et de connection utilisateur
include('./session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>BingFront </title>
	<!-- Lier un fichier externe -->
    <link rel="stylesheet" href="styleindex.css" type="text/css" media="screen" />
    <script type="text/javascript" src="./engine.js"></script>
</head>
<!-- import du script de connexion à la base de données! -->
<body id="bodyimg">

<!-- conception corps de document -->
<div id="art-page-background-glare">
        <div id="art-page-background-glare-image"></div>
    </div>
    <div id="art-main">
	<!-- conception corps de page -->
        <div class="art-Sheet">
		<!-- conception bord de page -->
            <div class="art-Sheet-tl"></div>
            <div class="art-Sheet-tr"></div>
            <div class="art-Sheet-bl"></div>
            <div class="art-Sheet-br"></div>
            <div class="art-Sheet-tc"></div>
            <div class="art-Sheet-bc"></div>
            <div class="art-Sheet-cl"></div>
            <div class="art-Sheet-cr"></div>
            <div class="art-Sheet-cc"></div>
            <div class="art-Sheet-body">
                <!-- debut de l'entête -->
				<div class="art-Header">
                    <div class="art-Header-png"></div>
                    <div class="art-Header-jpeg"></div>
                    <div class="art-Logo">
					<?php
					//on récupère l'articke et la catégorie courante
					$article=$_GET['article'];
					$requete="SELECT * FROM `bingfront_article` WHERE `id` =$article";
					$result=mysql_query($requete);
					$ligne=mysql_fetch_array($result);
					$rubrique=$ligne['rubrique'];
					?>
                        <div id="slogan-text" class="art-Logo-text"> <br/><a href="./index.php">BingFront </a><br/><?php echo $rubrique?></div>
                    </div>
                </div>
				<!-- debut de l'assembleur -->
                <div class="art-contentLayout">
				<!-- début menu -->
                    <div class="art-sidebar1">
					<div id="menuimg">
					<!-- formulaire de recherche -->
                        <div class="art-Block">
                            <div class="art-Block-tl"></div>
                            <div class="art-Block-tr"></div>
                            <div class="art-Block-bl"></div>
                            <div class="art-Block-br"></div>
                            <div class="art-Block-tc"></div>
                            <div class="art-Block-bc"></div>
                            <div class="art-Block-cl"></div>
                            <div class="art-Block-cr"></div>
                            <div class="art-Block-cc"></div>
                            <div class="art-Block-body">
                                        <div class="art-BlockContent">
                                            <div class="art-BlockContent-body">
                                                <form method="get" name="searchform" action="#">
                                                <input type="text" value="" name="s" style="width: 95%;" /><span class="art-button-wrapper">
                                                	<span class="l"> </span>
                                                	<span class="r"> </span>
                                                	<input class="art-button" type="submit" name="search" value="Search"/>
                                                </span>
                                                </form>
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div>
						<!-- Nouveau block de menu -->
                        <div class="art-Block">
                            <div class="art-Block-tl"></div>
                            <div class="art-Block-tr"></div>
                            <div class="art-Block-bl"></div>
                            <div class="art-Block-br"></div>
                            <div class="art-Block-tc"></div>
                            <div class="art-Block-bc"></div>
                            <div class="art-Block-cl"></div>
                            <div class="art-Block-cr"></div>
                            <div class="art-Block-cc"></div>
                            <div class="art-Block-body">
                                        <div class="art-BlockContent">
														<!-- Les catégories -->
                                            <div class="art-BlockContent-body">
                                                <p><b>Rubrique</b></p>
												<ul>
												<li><b><a href="./index.php">Accueil</a></b></li>
												<?php
												//On récupère les catégories de la base de données
												//On récupère le nom de l'agence
					$requete = "SELECT libelle FROM `bingfront_rubrique` ORDER BY `bingfront_rubrique`.`libelle` ASC";
					$result=mysql_query($requete);
												while($ligne=mysql_fetch_array($result)){
												$rubrique=$ligne['libelle'];?>
                                                 <li><a href="./index.php?rubrique='<?php echo $rubrique?>'" title="All News"><?php echo $rubrique?></a>
												 <?php
												 $requete2 = "SELECT count(id) FROM bingfront_article WHERE `rubrique` = '$rubrique'";
												 $resul=mysql_query($requete2);
												 $q=mysql_fetch_array($resul);
												 $n=$q['count(id)'];
												 echo "(".$n.")"; ?> </li>
												 <?php
												 }
												 ?>
                                                </ul>
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div>
						<!-- Cette partie concerne la connection en tant que rédacteur -->
							<div class="art-Block">
                            <div class="art-Block-tl"></div>
                            <div class="art-Block-tr"></div>
                            <div class="art-Block-bl"></div>
                            <div class="art-Block-br"></div>
                            <div class="art-Block-tc"></div>
                            <div class="art-Block-bc"></div>
                            <div class="art-Block-cl"></div>
                            <div class="art-Block-cr"></div>
                            <div class="art-Block-cc"></div>
                            <div class="art-Block-body">
                                        <div class="art-BlockContent">
										<!-- Connexion -->
                                            <div class="art-BlockContent-body">
											<!-- script de connexion -->
											<form method="post">
                                                <p><b> Partie administration</b></p>
												<table width="80%">
												<tr><td align="left">User</td><td align="right"> <input style="width:90px;" type="text" name="pseudo_saisi" <?php if (!empty($_POST['pseudo_saisi'])) { echo "value=".$_POST['pseudo_saisi'];} ?> /></td></tr>
												<tr><td align="left">Pass</td><td align="right"> <input style="width:90px;" type="password" name="password_saisi" <?php if (!empty($_POST['password_saisi'])) { echo "value=".$_POST['password_saisi'];} ?> />
												<tr><td></td><td><INPUT TYPE="submit" VALUE="Se Connecter"/></td></tr>
												</td></tr>
												</table>
											</form>
											<!-- fin du script -->
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div>
                    </div>
					</div>
                    <!-- fin du menu -->
					<!-- debut du corps -->
					<div class="art-content">

					<!-- debut du post -->
					<?php
					$requete="SELECT * FROM `bingfront_article` WHERE `id` =$article";
					$result=mysql_query($requete);
					$ligne=mysql_fetch_array($result);
					?>

                        <div class="art-Post">
                            <div class="art-Post-body">
                        <div class="art-Post-inner art-article">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
											<?php
											echo $ligne['titre'];?></h2><br/><br/>
											<?php echo $ligne['introduction'];?>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
											<?php echo $ligne['publie'];?> | Auteur: <?php echo $ligne['auteur'];?>
											</div>
                                        </div>
                                        <div class="art-PostContent">
										<div id="articleimg">
										<?php echo $ligne['contenu'];?>
										</div>
										</div>
                                        <div class="cleared"></div>
                                        <!--get commentaires -->
                                        <?php
                                        $requete="SELECT * FROM `bingfront_commentaire` WHERE `article_id` =$article";
                        				$result=mysql_query($requete);
                    					$ligne=mysql_fetch_array($result);?>
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
											<?php echo $ligne['content'];?>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
											<?php echo $ligne['created_at'];?> | Auteur: <?php echo $ligne['auteur'];?>
											</div>
                                        </div>
                                        <!-- get links -->
                                        <div class="art-PostMetadataFooter">
                                            <div class="art-PostFooterIcons art-metadata-icons">
                                                Category: <a href="./index.php?rubrique='<?php echo $ligne['rubrique'];?>'" title="Category"> <?php echo $ligne['rubrique'];?></a>
                                            </div>
                                        </div>
                        </div>
                        		<div class="cleared"></div>
                            </div>
                    </div>
					<!-- fin du post -->
                    </div>
                </div>
				<!-- fin du corps -->
                <div class="cleared"></div><div class="art-Footer">
				<!-- debut marque -->
        <div class="art-Footer-inner">
          <div class="art-Footer-text">
            <p><a href="mailto:contact@essozi.com">Contactez-moi</a> | Projet Enews |
              | Osin<br />
              2010 --- <a href="essozi.com">www.essozi.com</a>.</p>
          </div>
        </div>
        <div class="art-Footer-background"></div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer"></p>
    </div>
<div id="imShowBoxBG" style="display: none;" onclick="imShowBoxHide()"></div>
<div id="imShowBoxContainer" style="display: none;" onclick="imShowBoxHide()"><div id="imShowBox" style="height: 200px; width: 200px;"></div></div>
</body>
</html>
