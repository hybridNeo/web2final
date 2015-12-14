<?php
	header("Content-type:text/xml");
	echo file_get_contents("http://www.espncricinfo.com/rss/content/story/feeds/0.xml");
?>