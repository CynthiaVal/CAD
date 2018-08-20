<?php

 if (isset($_POST['xinicial']) and isset($_POST['yinicial'])and isset($_POST['xfinal']) and isset($_POST['yfinal']) )
  {
      $x1=$_POST['xinicial'];
      $y1=$_POST['yinicial'];
      $x2=$_POST['xfinal'];
      $y2=$_POST['yfinal'];
      $w=500;
      $h=500;
      $m=($y2-$y1)/($x2-$x1);
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      if (abs($m)<=1) 
      {
       for($i=$x1;$i<=$x2;$i++)
       {
        $x1=$x1+1;
        $y1=$y1+$m;
        $y3=round($y1);
        imagesetpixel( $gd, $x1, $y3, $rojo);
       }
      }
       else 
       {
          if (abs($m)>1) 
          {
            for ($i=$y1; $i <=$y2 ; $i++) 
            { 
              $y1=$y1+1; 
              $x1=$x1+1/$m;
              $x3=round($x1);
              imagesetpixel( $gd, $x3, $y1, $rojo);
            }
          }
        }
  
     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);    
  }

?>