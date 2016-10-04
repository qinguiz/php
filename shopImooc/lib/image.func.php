<?php 
require_once "string.func.php";
function verifyImage($type=1,$length=4,$sess_name="verify"){
//通过GD库做验证码
//创建画布
$width=80;
$height=30;
$image=imagecreatetruecolor($width,$height);
$white=imagecolorallocate($image,255,255,255);
$black=imagecolorallocate($image,0,0,0);
//用填充矩形填充画布
imagefilledrectangle($image,1,1,$width-2,$height-2,$white);
$chars=buildRandomString($type,$length);
// $sess_name="verify";
$_SESSION[$sess_name]=$chars;
$fontfiles=array("fz.ttf","zy.ttf");
for($i=0;$i<$length;$i++){
	$size=mt_rand(14,18);
	$angle=mt_rand(-15,15);
	$x=5+$i*$size;
	$y=mt_rand(20,26);
	$fontfile="../fonts/".$fontfiles[mt_rand(0,count($fontfiles)-1)];
	$color=imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	$text=substr($chars,$i,1);
	imagettftext($image,$size,$angle,$x,$y,$color,$fontfile,$text);
}
// $pixel = 50;
// if ($pixel) {
// 	for($i=0;$i<50;$++){
// 		imagesetpixel($image, mt_rand(0,$width-1), mt_rand(0,$height-1), $black);
// 	}
// }
// $line = 10;
// if ($line) {
// 	for($i = 1;$i<$line;$i++){
// 		$color = imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(50,90));
// 		imageline($image, mt_rand(0,$width-1), mt_rand(0,$height-1), x2, y2, color)
// 	}
// }
ob_clean();
header("content-type:image/gif");
imagegif($image);
imagedestroy($image);
}
verifyImage();
 ?>