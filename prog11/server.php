<?php
	$send = $_GET['send'];
	if($send == "true"){
		$msg = $_GET['msg'];
		$content = file_get_contents('file.txt');
		$content.= $msg.";";
		file_put_contents('file.txt', $content);
		echo "success";
	}else{
		$file_time = filemtime('file.txt');
		
		while($file_time >= filemtime('file.txt')){
			
			sleep(0.1);
			clearstatcache();
		}
		$content = file_get_contents('file.txt');
		$arr = explode(';',$content);
		echo $arr[sizeof($arr)-2];
	}
	

?>