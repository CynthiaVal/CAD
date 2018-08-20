<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diseño asistido por computadora</title>

    <style type="text/css">
        #canvas{
            border: 1px solid black;
        }
    </style>
    <?php

    ?>
    <script type='text/javascript'>
        window.addEventListener('load',inicial,false);
        var canvas=null, ctx=null;
        
        function inicial(){
            canvas=document.getElementById('canvas');
            //canvas.style.backgroundColor= '#000';
            ctx = canvas.getContext('2d');
            dibujar(ctx);

        }
        function dibujar(ctx){
            
            ctx.fillStyle="#000";
            ctx.fillRect(400,250,100,100);
          
        
        }

        function showCoords(event){

        
            var x = event.clientX;
            var y = event.clientY;
            var coords = "X coords: " + x + ", Y coords: " + y;
            document.getElementById("demo").innerHTML = coords; 
            x=x-400;
           y=y-200;
            ctx.fillStyle="#000";
            ctx.fillRect(x,y,100,100);

              
        
        function mover(){
            var ver;
            var hor;
            var h;
            var v;
            hor=prompt('Movimiento horizontal (x):','');
            ver=prompt('Movimiento vertical (y):','');
           
            v=ver;
            h=hor;
            ctx.fillStyle="#000";
            ctx.fillRect(h,v,100,100);
        }

    </script>




    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">


</head>

<body id="page-top">

    <section class="bg-primary" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">TRANSFORMACIONES GEOMÉTRICAS BIDIMENCIONALES </h2>
                    <hr class="light">
                    <i class="fa fa-4x fa-laptop wow bounceIn " data-wow-delay=".3s"></i>
                </div>
            </div>
        </div>
    </section>
  
<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Traslación</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 text-center">
                  
                   <canvas id='canvas' width='900' height='600' onClick="showCoords(event)"  >Actualice su navegador </canvas>
                </div>
               
                
            </div>
            
        </div>
    </section>
                 <div class="col-lg-12 col-md-6 text-center">
                    <div class="service-box">
                        <input name="button" type="button" onclick="mover();" value="trasladar" class="btn btn-primary btn-block btn-md" role="button" />
                        
                        
                    </div>
                </div>

    <p id="demo"></p>
    <br>
    <br>
    <br>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
