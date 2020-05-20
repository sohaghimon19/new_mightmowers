<?php
session_start();
header('Contect-type: image/jpeg');
$lines = 200;
$width = 125;
$height = 50;
$font_size = 30;
$text = $_SESSION['captcha'] = mt_rand(11111, 99999);

$image = imagecreate($width, $height);

$r = mt_rand(200, 255);
$b = mt_rand(200, 255);
$g = mt_rand(200, 255);

imagecolorallocate($image, $r, $g, $b);

$r = mt_rand(0, 100);
$b = mt_rand(0, 100);
$g = mt_rand(0, 100);


$color = imagecolorallocate($image, $r, $g, $b);

for($i=1; $i<=$lines; $i++){
  $x1 = mt_rand(0, 150);
  $y1 = mt_rand(0, 150);
  $x2 = mt_rand(0, 150);
  $y2 = mt_rand(0, 150);
  imageline($image, $x1, $y1, $x2 ,$y2, $color);
}


imagettftext($image, $font_size, 0, 20, 40, $color, 'AGENCYB.TTF', $text);

imagejpeg($image);


