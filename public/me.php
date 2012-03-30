<?php
include 'header.php';
?>
<div class="post">
  <div class="post-body">
    <div class="post-inner article">
      <h2 class="postheader">About ME</h2>
      <div class="postcontent">
        <p>Enter Page content here...</p>
        <img src="./images/WP_000437.jpg" alt="an image" style="float: left; " width="424" height="238" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, tellus sit amet congue vulputate, nisi erat iaculis nibh, vitae feugiat sapien ante eget mauris. Cras elit nisl, rhoncus nec iaculis ultricies, feugiat eget sapien. Pellentesque ac felis tellus.</p>
        <p>Aenean sollicitudin imperdiet arcu, vitae dignissim est posuere id. Duis placerat justo eu nunc interdum ultrices. Phasellus elit dolor, porttitor id consectetur sit amet, posuere id magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p> Suspendisse pharetra auctor pharetra. Nunc a sollicitudin est. Curabitur ullamcorper gravida felis, sit amet scelerisque lorem iaculis sed. Donec vel neque in neque porta venenatis sed sit amet lectus. Fusce ornare elit nisl, feugiat bibendum lorem. Vivamus pretium dictum sem vel laoreet. In fringilla pharetra purus, semper vulputate ligula cursus in. Donec at nunc nec dui laoreet porta eu eu ipsum. Sed eget lacus sit amet risus elementum dictum.</p>
      </div>
      <div>
        <?php
 
    $url = 'https://twitter.com/#!/telepafiproject';
    $cache_expire = 3600; // in seconds
 
    $ts = time();
    $info_file = 'tmp-info.txt';
    $cache_file = 'tmp-'.$ts.'.xml';
 
    // current info
    $info = unserialize(@file_get_contents($info_file));
 
    if (empty($info) OR $ts > ($info['cache_ts']+$cache_expire))
    {
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        $content = curl_exec($ch);
        curl_close($ch);
 
        // if a description tag is present we're OK
        if (preg_match('/<description>/iS',$content))
        {
            file_put_contents($cache_file,$content);
 
            @unlink($info['cache_file']);
        }
 
        // known error strings: "over capacity", "rate limit exceeded"
        // else if a description tag is not present something is wrong
        else
        {
            // use current cache until errors resolve itself
            $cache_file = $info['cache_file'];
 
            $content = file_get_contents($info['cache_file']);
        }
 
        // update next cache time and cache file name
        file_put_contents($info_file,serialize(array('cache_ts'=>$ts,'cache_file'=>$cache_file)));
    }
    else
    {
        $content = file_get_contents($info['cache_file']);
    }
 
    $feed = array();
 
    $doc = new DOMDocument();
    $doc->loadXML($content);
 
    foreach ($doc->getElementsByTagName('item') as $node)
    {
        array_push($feed, array
        (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'desc' => preg_replace('/^\w+:/i','',$node->getElementsByTagName('description')->item(0)->nodeValue),
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
        ));
    }
 
    function linkify_tweet($v)
    {
        $v = ' ' . $v;
 
        $v = preg_replace('/(^|\s)@(\w+)/', '\1@<a href="http://www.twitter.com/\2">\2</a>', $v);
        $v = preg_replace('/(^|\s)#(\w+)/', '\1#<a href="http://search.twitter.com/search?q=%23\2">\2</a>', $v);
 
        $v = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t<]*)#ise", "'\\1<a href=\"\\2\" >\\2</a>'", $v);
        $v = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r<]*)#ise", "'\\1<a href=\"http://\\2\" >\\2</a>'", $v);
        $v = preg_replace("#(^|[\n ])([a-z0-9&\-_\.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $v);
 
        return trim($v);
    }
 
?>
      </div>
      <div class="cleared"></div>
    </div>
    <div class="cleared"></div>
  </div>
</div>
<?php
include 'footer.php';
?>