<?php
	header("Content-type:text/xml");
    header("Cache-control: no-cache");
	$key = urlencode($_GET['search']);
	echo file_get_contents("http://www.bing.com/search?q=$key&format=rss");
?>