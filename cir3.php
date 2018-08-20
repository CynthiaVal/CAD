<?php

 if (isset($_POST['xcentral']) and isset($_POST['ycentral'])and isset($_POST['radio'])) 
  {
      $xc=$_POST['xcentral'];
      $yc=$_POST['ycentral'];
      $r=$_POST['radio'];
      $w=500;
      $h=500;
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      $z=cos(0);
      $w=sin(0);
      for($i=1;$i<=;$i++)
     {
        $z=$z+$i;
        $w=$w+$i;
        $x=$xc+$r*$z;
        $y=$yc+$r*$w; 
     
          imagesetpixel( $gd, $x, $y, $rojo);
     }
     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
      
  }

?>