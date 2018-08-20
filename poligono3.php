<?php


  {
      $poligono=array();
      /*$poligono[0][0] = 250;
      $poligono[0][1] = 150;
      $poligono[1][0] = 300;
      $poligono[1][1] = 150;
      $poligono[2][0] = 300;
      $poligono[2][1] = 450;
      $poligono[3][0] = 250;
      $poligono[3][1] = 450; */
      
      $numer=$_POST["numero"];
      //echo "<br/>";
      //echo $numer;


      for($i=0;$i<$numer;$i++)
      {
      
      $poligono[$i][0] = $_POST["vertice$i"."0"];
      $poligono[$i][1] = $_POST["vertice$i"."1"]; 
      }
      //$poligono[3][0] = $_post["vertice30"];
      //$poligono[3][1] = $_post["vertice31"];
      
      $num0=count($poligono);
      $poligono[$num0][0]=$poligono[0][0];
      $poligono[$num0][1]=$poligono[0][1]; 
      $num0=$num0+1;

      error_reporting(E_ERROR | E_WARNING | E_PARSE);
      $xmin=200;
      $ymin=200;
      $xmax=450;
      $ymax=550;
      $w=1800;
      $h=900;
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      $azul=imagecolorallocate( $gd, 0, 0, 255);
      $blanco=imagecolorallocate( $gd, 255, 255, 255);
      $green=imagecolorallocate( $gd, 0, 255, 0);

      imageline($gd, $xmin, $ymin, $xmax, $ymin, $rojo);
      imageline($gd, $xmax, $ymin, $xmax, $ymax, $rojo);
      imageline($gd, $xmax, $ymax, $xmin, $ymax, $rojo);
      imageline($gd, $xmin, $ymax, $xmin, $ymin, $rojo);

      $poligono2=array();
      $poligono3=array();
      $j=0;

      imageline($gd, $xmin+900, $ymin, $xmax+900, $ymin, $blanco);
      imageline($gd, $xmax+900, $ymin, $xmax+900, $ymax, $blanco);
      imageline($gd, $xmax+900, $ymax, $xmin+900, $ymax, $blanco);
      imageline($gd, $xmin+900, $ymax, $xmin+900, $ymin, $blanco);

      for($i=0;$i<=$num0;$i++)
      {
        if($i==($num0-1))
        {
          imageline($gd, $poligono[$i][0]+900,$poligono[$i][1], $poligono[0][0]+900, $poligono[0][1], $rojo);
        }else
        {
        imageline($gd, $poligono[$i][0]+900,$poligono[$i][1], $poligono[$i+1][0]+900, $poligono[$i+1][1], $rojo);
        }
        
      }
      //echo $num0."<br/>";
      


      for($i=0;$i<$num0-1;$i++)
      {
        
        if($poligono[$i][0]>$xmin and $i==0)
        {
          $poligono2[$j][0]=$poligono[$i][0];
          $poligono2[$j][1]=$poligono[$i][1];
          $j=$j+1;
        }
        if($i==($num0-1))
        {
         $poligono2[$j][0]=$poligono2[0][0];
         $poligono2[$j][1]=$poligono2[0][1];
         $i=$i+1;
         
        }
        if($poligono[$i][0]>=$xmin and $poligono[$i+1][0]>=$xmin)
        {
          
          $poligono2[$j][0]=$poligono[$i+1][0];
          $poligono2[$j][1]=$poligono[$i+1][1];
          $j=$j+1;
          

        }elseif ($poligono[$i][0]>=$xmin and $poligono[$i+1][0]<$xmin)
        {
          $poligono2[$j][0]=$xmin;
          $poligono2[$j][1]=$poligono[$i+1][1]+($xmin-$poligono[$i+1][0])*(($poligono[$i+1][1]-$poligono[$i][1])/($poligono[$i+1][0]-$poligono[$i][0]));
          $j=$j+1;
          
        } elseif($poligono[$i][0]<$xmin and $poligono[$i+1][0]>=$xmin) 
        {
          $poligono2[$j][0]=$xmin;
          $poligono2[$j][1]=$poligono[$i+1][1]+($xmin-$poligono[$i+1][0])*(($poligono[$i+1][1]-$poligono[$i][1])/($poligono[$i+1][0]-$poligono[$i][0]));
          $j=$j+1;
          $poligono2[$j][0]=$poligono[$i+1][0];
          $poligono2[$j][1]=$poligono[$i+1][1];
          $j=$j+1;
         
        }
        

      }
      //print_r($poligono2);
     
      $num=count($poligono2);
      //echo $num;
      //echo "<br/>";
      
      /*$i=0;
        imageline($gd, $poligono2[$i][0],$poligono2[$i][1], $poligono2[$i+1][0], $poligono2[$i+1][1], $rojo);
        imageline($gd, $poligono2[$i+1][0],$poligono2[$i+1][1], $poligono2[$i+2][0], $poligono2[$i+2][1], $rojo);
        imageline($gd, $poligono2[$i+2][0],$poligono2[$i+2][1], $poligono2[$i+3][0], $poligono2[$i+3][1], $rojo);
        imageline($gd, $poligono2[$i+3][0],$poligono2[$i+3][1], $poligono2[$i+4][0], $poligono2[$i+4][1], $rojo);
        //imageline($gd, $poligono2[$i+4][0],$poligono2[$i+4][1], $poligono2[$i+5][0], $poligono2[$i+5][1], $rojo);
        //imageline($gd, $poligono2[$i+5][0],$poligono2[$i+5][1], $poligono2[$i][0], $poligono2[$i][1], $rojo); */
      
        $j=0;
        

     for($i=0;$i<$num-1;$i++)
      {
        
         if($poligono2[$i][1]<$ymax and $i==0)
        {
          $poligono3[$j][0]=$poligono2[$i][0];
          $poligono3[$j][1]=$poligono2[$i][1];
          $j=$j+1;
        }
        if($poligono2[$i][1]<=$ymax and $poligono2[$i+1][1]<=$ymax)
        {
          
          $poligono3[$j][0]=$poligono2[$i+1][0];
          $poligono3[$j][1]=$poligono2[$i+1][1];
          $j=$j+1;
          

        }elseif ($poligono2[$i][1]<=$ymax and $poligono2[$i+1][1]>$ymax)
        {
          
          $poligono3[$j][0]=$poligono2[$i+1][0]+($ymax-$poligono2[$i+1][1])*(($poligono2[$i+1][0]-$poligono2[$i][0])/($poligono2[$i+1][1]-$poligono2[$i][1]));
          $poligono3[$j][1]=$ymax;
          $j=$j+1;
          
        } elseif ($poligono2[$i][1]>$ymax and $poligono2[$i+1][1]<=$ymax) 
        {
          $poligono3[$j][0]=$poligono2[$i+1][0]+($ymax-$poligono2[$i+1][1])*(($poligono2[$i+1][0]-$poligono2[$i][0])/($poligono2[$i+1][1]-$poligono2[$i][1]));
          $poligono3[$j][1]=$ymax;
          $j=$j+1;
          $poligono3[$j][0]=$poligono2[$i+1][0];
          $poligono3[$j][1]=$poligono2[$i+1][1];
          $j=$j+1;
          
        }
        elseif($poligono2[$i][0]>$ymax and $poligono2[$i+1][0]>$ymax)
        {
          $poligono3[$j][0]=$poligono2[$i+1][0];
          $poligono3[$j][1]=$poligono2[$i+1][1];
          $j=$j+1;
          
        } 

      } 
           
        
      //print_r($poligono3);
      //echo "<br>"; 
      $num2=count($poligono3);
      //echo $num2."<br/>";
      $poligono4=array(); 

      
      $j=0;
    for($i=0;$i<$num2-1;$i++)
      {
        
        if($poligono3[$i][0]<$xmax and $i==0)
        {
          $poligono4[$j][0]=$poligono3[$i][0];
          $poligono4[$j][1]=$poligono3[$i][1];
          $j=$j+1;
        }
        if($poligono3[$i][0]<=$xmax and $poligono3[$i+1][0]<=$xmax)
        {
          
          $poligono4[$j][0]=$poligono3[$i+1][0];
          $poligono4[$j][1]=$poligono3[$i+1][1];
          $j=$j+1;
          

        }elseif ($poligono3[$i][0]<=$xmax and $poligono3[$i+1][0]>$xmax)
        {
          $poligono4[$j][0]=$xmax;
          $poligono4[$j][1]=$poligono3[$i+1][1]+($xmax-$poligono3[$i+1][0])*(($poligono3[$i+1][1]-$poligono3[$i][1])/($poligono3[$i+1][0]-$poligono3[$i][0]));
          $j=$j+1;
          
        } elseif ($poligono3[$i][0]>$xmax and $poligono3[$i+1][0]<=$xmax) 
        {
          $poligono4[$j][0]=$xmax;
          $poligono4[$j][1]=$poligono3[$i+1][1]+($xmax-$poligono3[$i+1][0])*(($poligono3[$i+1][1]-$poligono3[$i][1])/($poligono3[$i+1][0]-$poligono3[$i][0]));
          $j=$j+1;
          $poligono4[$j][0]=$poligono3[$i+1][0];
          $poligono4[$j][1]=$poligono3[$i+1][1];
          $j=$j+1;
          

        }
        

      } 
      
      
       //echo "<br/>";
      //print_r($poligono4);
      //echo "<br/>";
      $num3=count($poligono4);
      //echo $num3."<br/>"; 
      $poligono5=array(); 

        $j=0;
    for($i=0;$i<$num3-1;$i++)
      {
        
        if($poligono4[$i][1]>$ymin and $i==0)
        {
          $poligono5[$j][0]=$poligono4[$i][0];
          $poligono5[$j][1]=$poligono4[$i][1];
          $j=$j+1;
        }
        if($poligono4[$i][1]>=$ymin and $poligono4[$i+1][1]>=$ymin)
        {
          
          $poligono5[$j][0]=$poligono4[$i+1][0];
          $poligono5[$j][1]=$poligono4[$i+1][1];
          $j=$j+1;
          

        }elseif ($poligono4[$i][1]>=$ymin and $poligono4[$i+1][1]<$ymin)
        {
          $poligono5[$j][0]=$poligono4[$i+1][0]+($ymin-$poligono4[$i+1][1])*(($poligono4[$i+1][0]-$poligono4[$i][0])/($poligono4[$i+1][1]-$poligono4[$i][1]));
          $poligono5[$j][1]=$ymin;
          $j=$j+1;
          
        } elseif ($poligono4[$i][1]<$ymin and $poligono4[$i+1][1]>=$ymin) 
        {
          $poligono5[$j][0]=$poligono4[$i+1][0]+($ymin-$poligono4[$i+1][1])*(($poligono4[$i+1][0]-$poligono4[$i][0])/($poligono4[$i+1][1]-$poligono4[$i][1]));
          $poligono5[$j][1]=$ymin;
          $j=$j+1;
          $poligono5[$j][0]=$poligono4[$i+1][0];
          $poligono5[$j][1]=$poligono4[$i+1][1];
          $j=$j+1;
          
        }     

      }
      $num4=count($poligono5);
      for($i=0;$i<$num4;$i++)
      {
         if($i==$num4-1)
         {
          imageline($gd, $poligono5[$i][0],$poligono5[$i][1], $poligono5[0][0], $poligono5[0][1], $azul); 
         }else
         {
         imageline($gd, $poligono5[$i][0],$poligono5[$i][1], $poligono5[$i+1][0], $poligono5[$i+1][1], $azul);
        }
                
      }
      /*print_r($poligono2);
      echo "<br>";
      print_r($poligono3);
      echo "<br>";
      print_r($poligono4);
      echo "<br>";
      print_r($poligono5); */
      
      

     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
       echo "<button type='reset'  value='cortar'> Enviar</button> "; 
}  

?>