<?php

$x = 500;
$y = 500;

$gd = imagecreatetruecolor($x, $y);
 
$esquinas[0] = array('x' => 100, 'y' =>  10);
$esquinas[1] = array('x' =>   0, 'y' => 190);
$esquinas[2] = array('x' => 200, 'y' => 190);

$rojo = imagecolorallocate($gd, 255, 0, 0); 

for ($i = 0; $i < 100000; $i++) {
  imagesetpixel($gd, round($x),round($y), $rojo);
  $a = rand(0, 2);
  $x = ($x + $esquinas[$a]['x']) / 2;
  $y = ($y + $esquinas[$a]['y']) / 2;
}
 
header('Content-Type: image/png');
imagepng($gd);

?>