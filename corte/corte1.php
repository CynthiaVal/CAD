<?php

 if (isset($_POST['x1']) and isset($_POST['y1'])and isset($_POST['x2']) and isset($_POST['y2'])) 
  {
      $x1=$_POST['x1'];
      $y1=$_POST['y1'];
      $x2=$_POST['x2'];
      $y2=$_POST['y2'];
      $xmin=50;
      $ymin=200;
      $xmax=850;
      $ymax=600;
      $w=1800;
      $h=900;
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
     
          imageline($gd, $xmin, $ymin, $xmax, $ymin, $rojo);
          imageline($gd, $xmax, $ymin, $xmax, $ymax, $rojo);
          imageline($gd, $xmax, $ymax, $xmin, $ymax, $rojo);
          imageline($gd, $xmin, $ymax, $xmin, $ymin, $rojo);
          imageline($gd, $x1, $y1, $x2, $y2, $rojo);

     if(($y1<$ymin) and ($y2>$ymax))
      {
      $m=($y2-$y1)/($x2-$x1);
      $y=$ymin;
      $x=(1/$m) * ($y-$y1) + $x1;

      $yy=$ymax;
      $xx=(1/$m) *($yy-$y2) + $x2;

      $x=$x+900;
      $xx=$xx+900;

      $xmin2=950;
      $ymin2=200;
      $xmax2=1750;
      $ymax2=600;
          imageline($gd, $xmin2, $ymin2, $xmax2, $ymin2, $rojo);
          imageline($gd, $xmax2, $ymin2, $xmax2, $ymax2, $rojo);
          imageline($gd, $xmax2, $ymax2, $xmin2, $ymax2, $rojo);
          imageline($gd, $xmin2, $ymax2, $xmin2, $ymin2, $rojo);
          imageline($gd, $x, $y, $xx, $yy, $rojo);
      }

      else 
      {
        if(($x1<$xmin) and ($x2>$xmax) )
        {
        $m=($y2-$y1)/($x2-$x1);
        $x=$xmin; 
        $y=$m*($x-$x1)+$y1;

        $xx=$xmax;
        $yy=$m*($xx-$x2)+$y2;

        $x=$x+900;
        $xx=$xx+900;
        $xmin2=950;
        $ymin2= 200;
        $xmax2=1750;
        $ymax2=600;
          imageline($gd, $xmin2, $ymin2, $xmax2, $ymin2, $rojo);
          imageline($gd, $xmax2, $ymin2, $xmax2, $ymax2, $rojo);
          imageline($gd, $xmax2, $ymax2, $xmin2, $ymax2, $rojo);
          imageline($gd, $xmin2, $ymax2, $xmin2, $ymin2, $rojo);
          imageline($gd, $x, $y, $xx, $yy, $rojo);
        }
        else
          if ( $y1<$ymin)
          {
            $m=($y2-$y1)/($x2-$x1);
            $y=$ymin;
            $x=(1/$m) * ($y-$y2) + $x2;
            
            if($x2>$xmax)
            {
            
            $xx=$xmax;
            $yy=$m*($xx-$x1)+$y1;
            }
            else{
              

            $xx=$xmin;
            $yy=$m*($xx-$x1)+$y1;
            
            }
            $x=$x+900;
            $xx=$xx+900;
            $xmin2=950;
            $ymin2= 200;
            $xmax2=1750;
            $ymax2=600;
            imageline($gd, $xmin2, $ymin2, $xmax2, $ymin2, $rojo);
            imageline($gd, $xmax2, $ymin2, $xmax2, $ymax2, $rojo);
            imageline($gd, $xmax2, $ymax2, $xmin2, $ymax2, $rojo);
            imageline($gd, $xmin2, $ymax2, $xmin2, $ymin2, $rojo);
            imageline($gd, $x, $y, $xx, $yy, $rojo);
          }
          else
            if($y2>$ymax)
            {
                $m=($y2-$y1)/($x2-$x1);
                $yy=$ymax;
                $xx=(1/$m) *($yy-$y2) + $x2;

              if($x1>$xmax)
              {
              
                $x=$xmax;
                $y=$m*($x-$x1)+$y1;

              }
              else
              
              {
                  
                $x=$xmin;
                $y=$m*($x-$x1)+$y1;

              }

              $x=$x+900;
                $xx=$xx+900;
                $xmin2=950;
                $ymin2=200;
                $xmax2=1750;
                $ymax2=600;
                imageline($gd, $xmin2, $ymin2, $xmax2, $ymin2, $rojo);
                imageline($gd, $xmax2, $ymin2, $xmax2, $ymax2, $rojo);
                imageline($gd, $xmax2, $ymax2, $xmin2, $ymax2, $rojo);
                imageline($gd, $xmin2, $ymax2, $xmin2, $ymin2, $rojo);
                imageline($gd, $x, $y, $xx, $yy, $rojo);
            }
      }
      


     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
  
  }  
  

  

?>