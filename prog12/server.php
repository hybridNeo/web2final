<?php
	$country = $_GET['country'];
	$raw_content = file_get_contents('file.txt');

	$raw_players = explode("\n",$raw_content);
	$players = array();
	for($i=0; $i < sizeof($raw_players); $i++){
		$raw_stats = explode(":",$raw_players[$i]);
		$temp = array("name"=>$raw_stats[0],"country"=> $raw_stats[1],"matches"=>$raw_stats[2],"runs"=>$raw_stats[3],"hundreds"=>$raw_stats[4]);
		if($raw_stats[1] == $country)
			array_push($players, $temp);
	}
	echo json_encode($players);
?>