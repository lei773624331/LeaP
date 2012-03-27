
<?php
include ('./session.php');
$try; $redirect; $idarticle; $iduser;

$try=$_GET['mavar'];
$idarticle=$_GET['article'];
$iduser=$_GET['user'];
$rubrique=$_GET['rubrique'];

if(isset($idarticle)){
$requete1="DELETE FROM `bingfront_article` WHERE `id` = ".$idarticle;
$query=mysql_query($requete1);
}

if(isset($iduser)){
$requete2="DELETE FROM `bingfront_user` WHERE `pseudo` ='".$iduser."'";
$query=mysql_query($requete2);
}
if(isset($rubrique)){
$requete3="DELETE FROM `bingfront_rubrique` WHERE `libelle` ='".$rubrique."'";
$query=mysql_query($requete3);
}

//convertir en md5
if($try==0) $redirect="./admin.php?mavar=".$_GET['log']."&demande='article'";
if($try==1) $redirect="./admin.php?mavar=".$_GET['log']."&demande='user'";
if($try==2) $redirect="./admin.php?mavar=".$_GET['log']."&demande='rubrique'";
?>
                <script language="javascript" type="text/javascript">
                  <!--
                  window.location.replace("<?PHP echo $redirect?>");
                  -->
                  </script>