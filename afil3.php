<?php


  {
      $poligono=array();
      /*$poligono[0][0] = 600;
      $poligono[0][1] = 100;
      $poligono[1][0] = 600;
      $poligono[1][1] = 300;
      $poligono[2][0] = 800;
      $poligono[2][1] = 300;
      $poligono[3][0] = 800;
      $poligono[3][1] = 100; */
       
      //$px=$_POST["px"];
      //$py=$_POST["py"];
      $ax=$_POST["ax"];
      $ay=$_POST["ay"];
      
      $numer=$_POST["numero"];
      //echo "<br/>";
      //echo $numer; */
     

      for($i=0;$i<$numer;$i++)
      {
      
      $poligono[$i][0] = $_POST["vertice$i"."0"];
      $poligono[$i][1] = $_POST["vertice$i"."1"]; 
      }
          
      
      $num0=count($poligono);
      //$poligono[$num0][0]=$poligono[0][0];
      //$poligono[$num0][1]=$poligono[0][1]; 
      //$num0=$num0+1;

      error_reporting(E_ERROR | E_WARNING | E_PARSE);
      
      $w=1800;
      $h=900;
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      $azul=imagecolorallocate( $gd, 0, 0, 255);
      $blanco=imagecolorallocate( $gd, 255, 255, 255);
      $green=imagecolorallocate( $gd, 0, 255, 0);


      imagesetpixel( $gd, $px, $py, $blanco);
      imagesetpixel( $gd, $px+1, $py, $blanco);
      imagesetpixel( $gd, $px, $py+1, $blanco);
      imagesetpixel( $gd, $px+1, $py+1, $blanco);

      /*imageline($gd, $xmin, $ymin, $xmax, $ymin, $rojo);
      imageline($gd, $xmax, $ymin, $xmax, $ymax, $rojo);
      imageline($gd, $xmax, $ymax, $xmin, $ymax, $rojo);
      imageline($gd, $xmin, $ymax, $xmin, $ymin, $rojo); */

      /*for($i=0;$i<$num0;$i++)
      {
        if($i==($num0-1))
        {
          imageline($gd, $poligono[$i][0]+900,$poligono[$i][1], $poligono[0][0]+900, $poligono[0][1], $rojo);
        }else
        {
        imageline($gd, $poligono[$i][0]+900,$poligono[$i][1], $poligono[$i+1][0]+900, $poligono[$i+1][1], $rojo);
        }
        
      }*/
      if($ax == 0)
      {
          for($i=0;$i<$num0;$i++)
        {
          $poligono2[$i][0]=$poligono[$i][0];
          $poligono2[$i][1]=$poligono[$i][1]*$ay + $poligono[$i][0] ;    
        }
      }

      else
        if ($ay == 0)
      {
           for($i=0;$i<$num0;$i++)
        {
          $poligono2[$i][0]=$poligono[$i][0]*$ax + $poligono[$i][1] ;
          $poligono2[$i][1]=$poligono[$i][1] ;    
        }
      }
           
      

      for($i=0;$i<$num0;$i++)
      {
         if($i==$num0-1)
         {
          imageline($gd, $poligono[$i][0],$poligono[$i][1], $poligono[0][0], $poligono[0][1], $green); 
         }else
         {
         imageline($gd, $poligono[$i][0],$poligono[$i][1], $poligono[$i+1][0], $poligono[$i+1][1], $green);
         }
                
      } 
      

      
      for($i=0;$i<$num0;$i++)
      {
         if($i==$num0-1)
         {
          imageline($gd, $poligono2[$i][0] ,$poligono2[$i][1], $poligono2[0][0] , $poligono2[0][1], $azul); 
         }else
         {
         imageline($gd, $poligono2[$i][0],$poligono2[$i][1], $poligono2[$i+1][0] , $poligono2[$i+1][1], $azul);
         }
                
      }
      
      /*print_r($poligono);
      echo "<br>"; 
      print_r($poligono2);
      echo "<br>";
      print_r($poligono3);
      echo "<br>";
      print_r($poligono4); */
      
      
      

     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
       echo "<button type='reset'  value='cortar'> Enviar</button> "; 
}  

?>