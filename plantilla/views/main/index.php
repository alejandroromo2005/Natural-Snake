<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php constant('URL') ?>public/js/main.js"></script>
    <link  rel="icon"   href="/proyecto/trabajo/proyecto/plantilla/public/imagenes/logo2.png" width="494px" height="310px" type="image/png"/>
    <title>Document</title>
</head>
<body class=inicio_fon>
    <!-- paso 15 -->
    <?php require 'views/header.php';?>

           <div id="main" class= "h_100">
           <h2 class="inicio">Quienes somos?</h2>
           <br>
           <h4 class="mensaje_prin">Somos una empresa dedicada a la realización y venta directa de postres.Natural Snake cuenta con diversos sabores, donde nuestros clientes podrán encontrar el postre indicado para cada ocasión.Nuestra empresa ofrece la entrega de sus productos en la puerta de su casa y con varias alternativas de pago para la comodidad de nuestros clientes. </h4>
           <h2 class="imagenes_prin">Mas de nuestros servicios</h2>

           <div class="postres_top1">
      
            <div class="boton1" >  <div class="filtro">   </div> <img src="/proyecto/trabajo/proyecto/plantilla/public/imagenes/choco.jpg" alt=""><a class="men_1" href="http://localhost/proyecto/trabajo/proyecto/plantilla/contacto"> <h3>Contactos</h3></a></div>

             <div class="boton1" >  <div class="filtro">   </div> <img src="/proyecto/trabajo/proyecto/plantilla/public/imagenes/fresa.jpg" alt=""><a class="men_1" href="http://localhost/proyecto/trabajo/proyecto/plantilla/productos_mas_comprados"> <h3>productos mas comprados</h3></a></div>

             <div class="boton1" >  <div class="filtro">   </div> <img src="/proyecto/trabajo/proyecto/plantilla/public/imagenes/leche.jpg" alt=""><a class="men_1" href="http://localhost/proyecto/trabajo/proyecto/plantilla/pedidos">  <h2 class="men_boton">Pedidos</h2></a></div>

           </div>
         
          </div>

          
   
          <?php require 'views/footer.php';?>
</body>
</html>