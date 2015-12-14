<?php

	if(isset($_GET['usn'])){
		$usn = $_GET['usn'];
		if($usn == '123'){
			echo "<script>parent.reply('rahul;ise;9.0');</script>";
		}else{
			echo "<script>parent.reply('invalid usn');</script>";
		}
	}
?>