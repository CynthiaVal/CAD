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
      $x1=$xc-$r;
      $x2=$xc+$r;

      for($i=$x1;$i<=$x2;$i++)
     {
        $y1=$yc+sqrt(pow($r,2)-pow(($i-$xc), 2));
        $y2= $yc-sqrt(pow($r,2)-pow(($i-$xc), 2));
        $y3=round($y1);
        $y4=round($y2);
     
          imagesetpixel( $gd, $i, $y3, $rojo);
          imagesetpixel( $gd, $i, $y4, $rojo);
     }
     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
      
  }

?>