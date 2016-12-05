<?php 
//date format
function formatDate($date){
	$date=date("F j, Y, g:i a",strtotime($date));
	return $date;
}

//url format
function urlFormat($str){
	//strip out all whitespace
	$str=preg_replace('/\s*/','',$str);
	//convert the string to lower cases
	$str=strtolower($str);
	//url encode
	$str=urlencode($str);
	return $str;
}


//add class name active if property is active
function is_active($category){
	
}
?>