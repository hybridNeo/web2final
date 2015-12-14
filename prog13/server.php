<?php
$req_method = $_SERVER['REQUEST_METHOD'];
if($req_method == 'GET'){
	//read
	if(!isset($_GET['filename'])){
		echo "Provide file name\n";
	}else{
		if(file_exists($_GET['filename'])){
			echo file_get_contents($_GET['filename']);
		}else{
			echo "Create file first\n";
		}
	}
}elseif ($req_method == 'POST') {
	if(!isset($_POST['filename'])){
		echo "Provide file name\n";
	}
	if(!isset($_POST['content'])){
		echo "Provide content\n";
	}
	else{
		file_put_contents($_POST['filename'], $_POST['content']);
		echo "success";
	}
	//create
}else{
	//update
	$inp = file_get_contents('php://input');
	//echo $inp;
	$arr = explode("&",$inp);
	$content = explode("=", $arr[0])[1];
	$filename = explode("=", $arr[1])[1];
	$c = file_get_contents($filename);
	file_put_contents($filename, $c.$content);
	echo "Success";
}

?>