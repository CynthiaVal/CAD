<?php

 if (isset($_POST['xinicial']) and isset($_POST['ordenada'])and isset($_POST['pendiente'])) 
  {
      $x=$_POST['xinicial'];
      $b=$_POST['ordenada'];
      $m=$_POST['pendiente'];
      $w=500;
      $h=500;
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      for($i=1;$i<=150;$i++)
     {
        $x=$x+1;
        $y=$m * $x + $b; 
     
          imagesetpixel( $gd, $x, $y, $rojo);
     }
     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
      
  }

?>