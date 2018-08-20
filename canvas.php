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
        function dibujar(ctx, x , y){
            
            //ctx.fillStyle="rgb(255, 253, 253)";
            //ctx.fillRect(130,100,650,400)
            ctx.strokeRect(130,100,650,400);
            ctx.strokeStyle="#000";
            

            ctx.moveTo(100,100);
            ctx.lineTo(x,y);
            ctx.strokeStyle="#f00";
            ctx.stroke(); 
        
        }

        function showCoords(event){

            var x = event.clientX;
            var y = event.clientY;
            var coords = "X coords: " + x + ", Y coords: " + y;
            document.getElementById("demo").innerHTML = coords; 
              ctx.moveTo(100,100);
            ctx.lineTo(x,y);
            ctx.strokeStyle="#f00";
            ctx.stroke(); 
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
                    <h2 class="section-heading">DISEÑO ASISTIDO POR COMPUTADORA </h2>
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
                    <h2 class="section-heading">Métodos</h2>
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

    <p id="demo"></p>
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
