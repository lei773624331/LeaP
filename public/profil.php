<?php
include 'header.php';
if (isset($_POST["fname"])){
$result = mysql_query("SELECT * 
                        FROM  `users` 
                        WHERE  `nickname` LIKE  '%".$_POST["fname"]."%'");
while($row = mysql_fetch_array($result))
  {
  ?> <h2>Welcome <?=$row['nickname'] ?></h2>
  <?php }
}
include 'footer.php';
?>