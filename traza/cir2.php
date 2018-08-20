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
      for($a=0;$a<=360;$a++)
     {
        $x=$xc+$r*cos($a);
        $y=$yc+$r*sin($a); 
     
          imagesetpixel( $gd, $x, $y, $rojo);
     }
     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
      
  }

?>