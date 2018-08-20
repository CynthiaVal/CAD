<?php

 if (isset($_POST['xinicial']) and isset($_POST['yinicial'])and isset($_POST['xfinal']) and isset($_POST['yfinal']) )
  {
      $x1=$_POST['xinicial'];
      $y1=$_POST['yinicial'];
      $x2=$_POST['xfinal'];
      $y2=$_POST['yfinal'];
      $w=500;
      $h=500;
      
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      $delta_y=$y2-$y1;
      $delta_x=$x2-$x1;
      $m=$delta_y/$delta_x;
      if($m>1)
          $ac=2;
      else if($m>=0 && $m<=1)
      {
        $ac=1;
      }
      else if ($m>=(-1)&& $m<=0) 
      {
        $ac=3;
      }
      else if($m<(-1))
      {
        $ac=4;
      }
      $er=0;

      imagesetpixel( $gd, $x1, $y1, $rojo);

      switch ($ac) 
      {
        case '1':
          for($i=$x1;$i<=$x2;$i++)
          {
            if($er<0)
            {
              $x1=$x1+1;
              $er=$er+$delta_y;
            }
            else
            {
              $x1=$x1+1;
              $y1=$y1+1;
              $er=$er+($delta_y-$delta_x);
            }
            imagesetpixel( $gd, $x1, $y1, $rojo);
          }
          break;
          case '2':
            for($i=$x1;$i<=$x2;$i++)
            {
              if($er<0)
              {
                $x1=$x1+1;
                $y1=$y1+1;
                $er=$er+($delta_x-$delta_y);
              }
              else
              {
                $y1=$y1+1;
                $er=$er-$delta_x;
              }
              imagesetpixel( $gd, $x1, $y1, $rojo);
            }
            break;
            case '3':
              for($i=$x1;$i>=$x2;$i--)
              {
                if($er<0)
                {
                  $x1=$x1+1;
                $er=$er+$delta_y;
                }
                else
                {
                  $x1=$x1-1;
                  $y1=$y1+1;
                  $er=$er+($delta_y+$delta_x);
                }
                imagesetpixel( $gd, $x1, $y1, $rojo);
              }
              break;
            case '4':
              for($i=$x1;$i>=$x2;$i--)
              {
                if($er<0)
                {
                  $x1=$x1-1;
                  $y1=$y1+1;
                  $er=$er+($delta_y+$delta_x);
                }
                else
                {
                  $y1=$y1+1;
                  $er=$er+$delta_x;
                }
                imagesetpixel( $gd, $x1, $y1, $rojo);
              }
              break;
      }
  
  
     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);    
  }

?>