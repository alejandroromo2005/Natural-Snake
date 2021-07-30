<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="/proyecto/trabajo/proyecto/plantilla/public/imagenes/logo2.png" width="494px" height="310px" type="image/png"/>
    <title>Document</title>
</head>

<body class="fondo_postres_top">
<?php require 'views/header.php';?>

<div class="h_100 borde borde_pos_top"> 
    
        <h1 class="postres_fav">Postres mas comprados de la epoca</h1>
        <h2 class="postres_fav_sub">Prueba las maravillas que estan en tendencia entre nuestros clientes</h2>

        <div class="card-group">
  <div class="card">
    <img src="/proyecto/trabajo/proyecto/plantilla/public/imagenes/galleta.png" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title color-card">Postre de galletas</h5>
      <p class="card-text color-card">Un exquisito postre hecho de leche condensada, saborizado y decorado con frutos rojos. </p>
      <p class="card-text"><small class="text-muted"><a class="italica centrar_m"href="http://localhost/proyecto/trabajo/proyecto/plantilla/pedidos">Pedir aqui</a></small></p>
    </div>
  </div>
  <div class="card">
    <img src="/proyecto/trabajo/proyecto/plantilla/public/imagenes/mara.png" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title color-card">Postre de maracuya</h5>
      <p class="card-text color-card">Un postre combinando el sabor acido de la maracuya y el sabor dulce que caractetiza a los postres.>
      <p class="card-text"><small class="text-muted"><button type="button" class="btn btn-outline-dark"> <a class="italica centrar_m"href="http://localhost/proyecto/trabajo/proyecto/plantilla/pedidos">Pedir aqui</a></button></small></p>
    </div>
  </div>
  <div class="card">
    <img src="/proyecto/trabajo/proyecto/plantilla/public/imagenes/fres.jpg" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title color-card">Postre de fresa</h5>
      <p class="card-text color-card">Un postre unico que combina el dulce sabor de la fresa con el de un delicioso postre.</p>
      <p class="card-text"><small class="text-muted"><a class="italica centrar_m"href="http://localhost/proyecto/trabajo/proyecto/plantilla/pedidos">Pedir aqui</a></small></p>
    </div>
  </div>
</div>

</div> 
 
<?php require 'views/footer.php';?>

</body>
</html>
