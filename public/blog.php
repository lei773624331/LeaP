<?php
include 'header.php';
$result = mysql_query("SELECT * FROM  `articles` ");
while($row = mysql_fetch_array($result)){?>
<div class="post">
  <div class="post-body">
    <div class="post-inner article">
      <h2 class="postheader"><?=$row['title']?></h2>
      <div class="postcontent">
        <?=$row['content']?>
      </div>
      <div class="cleared"></div>
    </div>
    <div class="cleared"></div>
  </div>
</div>
<?php }
include 'footer.php';
?>