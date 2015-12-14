<?php
	$id = $_GET['id'];
	$link = mysqli_connect('127.0.0.1','root','','test') or die("could not connect").mysql_error();
	$query = 'select * from books where id='.$id;
	$result = $link->query($query);
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
		echo $row["author"]." -  ".$row["name"];
	}else{
		echo "not found";
	}
?>