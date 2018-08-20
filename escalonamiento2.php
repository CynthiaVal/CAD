<?php
 

  function head()
  {
    echo
      "<!DOCTYPE html>
        <html lang='en'>
        <head>
          <meta charset='utf-8'>
          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <meta name='description' content=''>
         <meta name='author' content=''>

         <title>Escalonamiento</title>
          <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
          <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'      rel='stylesheet' type='text/css'>
          <link rel='stylesheet' href='font-awesome/css/font-awesome.min.css' type='text/css'>
          <link rel='stylesheet' href='css/animate.min.css' type='text/css'>
         <link rel='stylesheet' href='css/creative.css' type='text/css'>
        </head>";
      }
  function body1()
  {
    echo "<body id='page-top'>

    <section class='bg-primary'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 text-center'>
                    <h2 class='section-heading'>ESCALONAMIENTO</h2>
                </div>
            </div>
        </div>
    </section>
  

    <section id='services'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Escalonamiento de Polígonos</h2>
                    <hr class='primary'>
                </div>
            </div>
        </div>";
  }
  function body2()
  {
    echo "
     
    </div>
        </div> 
        </section>";
  }

  

  function fin()
  {
    echo
    "
     <!--<a href='salir.php'>Salir</a>-->
    <!-- Bootstrap Core JavaScript -->
    <script src=js/bootstrap.min.js'></script>

    <!-- Plugin JavaScript -->
    <script src='js/jquery.easing.min.js'></script>
    <script src='js/jquery.fittext.js'></script>
    <script src='js/wow.min.js'></script>

    <!-- Custom Theme JavaScript -->
    <script src='js/creative.js'></script>
    </body>

    </html>";
 
  }
  head();
  body1();
  echo "
  <div class='container'>
          <div class='row'>
            <div class='col-sm-6' >
              <form action='escalonamiento3.php' method='post' >";
              $num=$_POST["vertices"];
              for($i=0;$i<$num;$i++)
              {
                echo 
                "<div class='form-group'>                
                  <label for='vertice".$i."0'>Punto X[".($i+1)."] </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='vertice".$i."0' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>

                <div class='form-group'>
                  <label for='vertice".$i."1'>Punto Y[".($i+1)."] </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='vertice".$i."1' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div> ";
              }
              echo "<div class='form-group'>
                  <label for='px'>Punto Fijo PX </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='px' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div> ";

                echo "<div class='form-group'>
                  <label for='py'>Punto Fijo PY </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='py' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div> ";

                echo "<div class='form-group'>
                  <label for='ex'>Factor en (Ex):  </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='ex' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div> 

                <div class='form-group'>
                  <label for='ey'>Factor en (Ey):  </label>
                    <div class='input-group'>
                      <span class='input-group-addon' id='basic-addon1'><span class='glyphicon glyphicon-star'></span></span>
                      <input type='text' name='ey' class='form-control'  aria-describedby='basic-addon1'>
                    </div>
                </div>";
                
                
              
                          
                 
               echo 
               "<input type='hidden' value='".$num."' name='numero' />  
               <button type='submit' class='btn btn-primary btn-block btn-md' value='enviar'> Enviar</button>
              </form>

            </div>
      
           <div class='col-sm-6'>
           <h4 class='section-heading'> RESULTADO </h4>";

  echo "
  <br>
  <br>";


  
  echo "<a href='index.php' class='btn btn-primary btn-block btn-md' role='button'> REGRESAR AL INICIO </a>";
        
  body2();
  fin();
  
 

?>