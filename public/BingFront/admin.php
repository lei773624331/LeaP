<?php
//Script de connexion à la base de données et de connection utilisateur
include('./session.php');
?>    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>BingFront </title>
	<!-- Lier un fichier externe -->
    <link rel="stylesheet" href="./styleindex.css" type="text/css" media="screen" />

	<!-- Partie des effets et du moteur -->
	<script type="text/javascript" src="./engine.js"></script>
	<link rel="stylesheet" type="text/css" href="./styles.css" media="screen, print" />
</head>
<body>

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
                        <div id="slogan-text" class="art-Logo-text"> <br/><a href="./index.php">BingFront </a><br/>Page d'actualités<br/>Bonjour  <?php $nom=$_GET['mavar'];
						echo $nom;?></div>
                    </div>
                </div>
				<!-- debut de l'assembleur -->
                <div class="art-contentLayout">
				<!-- début menu -->
                    <div class="art-sidebar1">
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
                                                <p align="center" style="font-size:14px;"><b>>>ARTICLES<<</b></p>
												<ul>
												<li> <a href="javascript:imShowBox('./add_article.php?nom=<?php echo $nom; ?>',600,980,'Ecrire un article','IFRAME','');">
												Ecrire un article</a></li>
												<li><a href="./admin.php?mavar=<?php echo $nom ?>&demande=article">Lister les articles <?php
												$requete3 = "SELECT count(id) FROM bingfront_article";
												 $resul=mysql_query($requete3);
												 $q=mysql_fetch_array($resul);
												 $n=$q['count(id)'];
												 echo "(".$n.")";
												 ?></a></li>
												</ul>
												<!--contenu -->
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
                                                <p align="center" style="font-size:14px;"><b>>>RUBRIQUE<<</b></p>
												<ul>
												<li><a href="javascript:imShowBox('./add_rubrique.php',450,320,'Ajouter une rubrique','IFRAME','');">Ajouter une rubrique
												<?php
												$requete4 = "SELECT count(*) FROM bingfront_rubrique";
												$resul=mysql_query($requete4);
												$q=mysql_fetch_array($resul);
												$n=$q['count(*)'];
												echo "(".$n.")";?></a></li>
												<li><a href="./admin.php?mavar=<?php echo $nom ?>&demande=rubrique">Lister les rubriques 
												</a></li>
												</ul>
												<!--contenu -->
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
                                                <p align="center" style="font-size:14px;"><b>>>UTILISATEURS<<</b></p>
												<ul>
												<li><a href="javascript:imShowBox('./add_user.php',450,320,'Ajouter un utilisateur','IFRAME','');">Ajouter un utilisateur</a></li>
												<li><a href="./admin.php?mavar=<?php echo $nom ?>&demande=user">Lister les utilisateurs</a></li>
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
												<p align="right">
													<a href="./deconnexion.php"> Se deconnecter </a>
											</form>
											<!-- fin du script -->
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>	
                        </div>
                    </div>
                    <!-- fin du menu -->
					
	<!-- debut du corps -->
					<div class="art-content">
					                        <div class="art-Post">
                            <div class="art-Post-body">
                            <div class="cleared"></div>
							<br/>
							<?php
							//on récupère la demande
							$demande=$_GET['demande'];
							
							//si il s'agit des articles qu'on demande on affiche les articles
							if ($demande=="article") { ?>
							
							<table align="center" width="90%" style="font-size:14px" border="2">
							<tr><td width="25%"><b>Auteur</td><td width="25%"><b>Titre</td><td width="25%"><b>Rubrique</td><td width="25%"><b>Date de publication</td><td align="center"><i>?</i></td></tr>
							<?php
							$requete2="Select * from bingfront_article";
							$result=mysql_query($requete2);
							while($ligne = mysql_fetch_array($result)){
							$id=$ligne['id'];
							$titre=$ligne['titre'];
							$auteur=$ligne['auteur'];
							$publie=$ligne['publie'];
							$rubrique=$ligne['rubrique'];

							//on offre la possibilité de supprimer l'article en cours d'affichage
								?>
								<tr><td><?php echo $auteur?></td><td><?php echo $titre ?></td><td><?php echo $rubrique ?></td><td><?php echo $publie ?></td><td><img src="./res/del.jpg" onClick="if(confirm('Voulez-vous vraiment supprimer cet article?')){location.assign('./suppression.php?mavar=0&rubrique=NULL&log=<?php echo $nom?>&user=NULL&article=<?PHP echo /*convertir en MD5 cette requete*/ $id?>')} else{return false};"/> </td></tr>
								<?php
							}
							?>
							</table>
							<?php
							}
							
							/////////////////////////////////
							
							//si on demande les rubriques
							else if ($demande=="rubrique"){
							$requete6="SELECT * FROM  `bingfront_rubrique` ORDER BY  `bingfront_rubrique`.`libelle` ASC ";
							$result=mysql_query($requete6);
							$i=0;
							?>
								<H2>Rubrique</H2><br/><h4>Seul les rubrique vides peuvent être supprimer</h4>
							<table align="center" width="80%" style="font-size:14px" border="0">
							<?php
							while($ligne = mysql_fetch_array($result)){
							if ($i==0 or $i%2==0) echo "<tr	>";
							$i++;
							$librubrique=$ligne['libelle'];
								?>
							<td align="left"><b><?php echo $librubrique ?></td><td>
							<?php
								$requete7 = "SELECT * FROM bingfront_article WHERE `Rubrique` ='".$librubrique."'";
								$resultt=mysql_query($requete7);
								$nt=mysql_num_rows($resultt);
							if ($nt==0){ echo "---";?>
							<img src="./res/del.jpg" onClick="if(confirm('Voulez-vous vraiment supprimer cette rubrique?')){location.assign('./suppression.php?mavar=2&log=<?php echo $nom?>&user=NULL&article=NULL&rubrique=<?php echo $librubrique ?>')} else{return false};"/>
							</td>
							<?php }
							if ($i%4==0)echo "</tr>";
							}
							if ($i%4==0)echo "</table>"; else echo "</tr></table>";
							}


							//si on demande les utilisateurs, on les demandes
							else if ($demande=="user"){
							if (strtolower($nom)=="osin"){
							?>
							<H2>Utilisateurs</H2>
							<table align="center" width="70%" style="font-size:14px" border="1">
							<?php
							$requete5="Select pseudo from bingfront_user";
							$result=mysql_query($requete5);
							$i=0;
							while($ligne = mysql_fetch_array($result)){
							if ($i==0 or $i%4==0) echo "<tr	>";
							$i++;
							$pseudo=$ligne['pseudo'];
								?>
							<td>
							<table border=0><tr>
							<td width=80% align="left"><b><?php echo $pseudo ?></td><td align="left" width="20%"> <img src="./res/del.jpg" onClick="if(confirm('Voulez-vous vraiment supprimer ce redacteur?')){location.assign('./suppression.php?mavar=1&log=<?php echo $nom?>&user=<?php echo $pseudo ?>&article=NULL&rubrique=NULL')} else{return false};"/> </td></tr></table></td>
							<?php
							if ($i%4==0)echo "</tr>";
							}
							if ($i%4==0)echo "</table>"; else echo "</tr></table>";
							}
							else echo "<center><h2> Seul le staff peut voir les membres inscrits</h2></center>";
							}
              else{
                echo '<center><img src="./res/logoAction.png" width="200" height="200" alt"choisissez une action"/><br/>
                  <center><h2 style="width:390px;">Choisissez une action dans le menu de gauche</h2></center>';
              }
							?>
							</div>
                        		<div class="cleared"></div>
                            </div>
                    </div>
					</div>
					<!-- fin du post -->
                </div>

				<!-- fin du corps -->
                <div class="cleared"></div><div class="art-Footer">
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