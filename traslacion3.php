<?php


  {
      $poligono=array();
      
      $h2=$_POST["h"];
      $v=$_POST["v"];
      
      $numer=$_POST["numero"];
      
     

      for($i=0;$i<$numer;$i++)
      {
      
      $poligono[$i][0] = $_POST["vertice$i"."0"];
      $poligono[$i][1] = $_POST["vertice$i"."1"]; 
      }
          
      
      $num0=count($poligono);
     // $poligono[$num0][0]=$poligono[0][0];
      //$poligono[$num0][1]=$poligono[0][1]; 
     // $num0=$num0+1;

      error_reporting(E_ERROR | E_WARNING | E_PARSE);
      
      $w=1800;
      $h=900;
      $gd=imagecreatetruecolor($w, $h);
      $rojo=imagecolorallocate( $gd, 205, 0, 0);
      $azul=imagecolorallocate( $gd, 0, 0, 255);
      $blanco=imagecolorallocate( $gd, 255, 255, 255);
      $green=imagecolorallocate( $gd, 0, 255, 0);


      
      
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
          imageline($gd, $poligono[$i][0]+$h2,$poligono[$i][1]+$v, $poligono[0][0]+$h2, $poligono[0][1]+$v, $azul); 
         }else
         {
         imageline($gd, $poligono[$i][0]+$h2,$poligono[$i][1]+$v, $poligono[$i+1][0]+$h2, $poligono[$i+1][1]+$v, $azul);
         }
                
      }
      
        
      
      

     header('Content-Type: image/png');
      imagepng($gd);
      imagedestroy($gd);
       echo "<button type='reset'  value='cortar'> Enviar</button> "; 
}  

?>