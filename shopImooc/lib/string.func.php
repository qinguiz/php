<?php 
function buildRandomString($type=1,$length=4){
	if ($type==1) {
		$chars=join("",range(0,9)); //range(0,9)产生0-9的数组
	}elseif($type==2){
		$chars=join("",array_merge(range("a", "z"),range("A", "Z")));
	}elseif($type==3){
		$chars=join("",array_merge(range("a","z"),range("A", "Z"),range(0, 9)));
	}
	if ($length>strlen($chars)) {
		exit("字符串长度不够");
	}
	$chars=str_shuffle($chars);
	return substr($chars, 0,$length);
}
 ?>

