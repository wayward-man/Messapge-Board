<?php
	$str="2008-3-5";
	$str2="2008 3 5";
	$reg="/([0-9]{4})/";
  	if(preg_match($reg, $str)){
  		echo preg_match($reg, $str);
  		echo $str;
  	}
	else{
		
		echo $str;
	}
	
?>