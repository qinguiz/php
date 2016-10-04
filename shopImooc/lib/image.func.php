<?php 
require_once "string.func.php";
//通过GD库做验证码
//创建画布
$width=80;
$height=30;
$image=imagecreatetruecolor($width,$height);
$white=imagecolorallocate($image, 255, 255, 255);
$black=imagecolorallocate($image, 0, 0, 0);
//用填充矩形填充画布
imagefilledrectangle($image, 1, 1, $width-2, $height-2, $white);
$type=1;
$length=4;
$chars=buildRandomString($type,$length);
$sess_name="verify";
$_SESSION[$sess_name]=$chars;
$fontfiles=array("方正粗谭黑简体.ttf","简准圆.ttf");
for($i=0;$i<length;$i++){
	$size=mt_rand(14,18);
	$angle=mt_rand(-15,15);
	$x=5+$i*$size;
	$y=mt_rand(20,26);
	$fontfile="../fonts/".$fontfiles[mt_rand(0,count($fontfiles)-1)];
	$color=imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
	$text=substr($char, $i,1);
	imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
}


header("content-type:image/gif");
imagegif($image);
imagedestroy($image);

 ?>