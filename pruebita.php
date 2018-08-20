<!DOCTYPE html>
<html>
  <head>
    <title>Obtener coordenadas x y en canvas</title>
    <meta charset="utf-8" />
    <style type="text/css">
 
      #canvas_1{
      background-color: #9F009F;
      }
 
    </style>
 
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", iniciar, false);
      function iniciar(){
        var canvas = document.getElementById("canvas_1");
        canvas.addEventListener("mousedown", ObtenerCoords, false);
      }
 
      function ObtenerCoords(event){
        var x = new Number();
        var y = new Number();
        var canvas = document.getElementById("canvas_1");
 
        if (event.x != undefined && event.y != undefined){
          x = event.x;
          y = event.y;
        }
        //else{// Firefox
         // x = event.clientX + document.body.scrollLeft +
             // document.documentElement.scrollLeft;
         // y = event.clientY + document.body.scrollTop +
            //  document.documentElement.scrollTop;
        //}
 
        x -= canvas.offsetLeft;
        y -= canvas.offsetTop;
 
        alert("x: " + x + "  y: " + y);
      }
 
    </script>
  </head>
 
  <body>
    <canvas id="canvas_1" width="500" height="300"></canvas>
  </body>
</html>