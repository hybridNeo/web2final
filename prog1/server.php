<?php
	$contents = file_get_contents('file.txt');
	$arr = explode(',',$contents);
	if(isset($_GET['prod'])){
		if($_GET['prod'] == 'rado' ){
			$arr[0]= intval($arr[0])-1;
			
		}
		elseif ($_GET['prod'] == 'rolex') {
			
			$arr[1] = intval($arr[1])-1;
		}
		elseif($_GET['prod'] == 'wilson'){
			$arr[2]= intval($arr[2])-1;
		}else{
			$arr[3]= intval($arr[3])-1;
		}
	
		file_put_contents('file.txt', $arr[0].','.$arr[1].','.$arr[2].','.$arr[3]);
		echo  $arr[0].','.$arr[1].','.$arr[2].','.$arr[3];
	}else{
		echo $contents;
	}
	
?>