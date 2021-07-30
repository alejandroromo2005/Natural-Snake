<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="icon"   href="/proyecto/trabajo/proyecto/plantilla/public/imagenes/logo2.png" width="494px" height="310px" type="image/png"/>
    <title>Sistema de pedidos</title> 
</head>
<body>
  <?php require 'views/header.php';?>

<div class="contacto_fon h_100">
<?php $producto = $this->producto[0];
 $id_producto = $this->id;
?>
<h1 class="text_al italica">
     <?php echo $producto['producto']?>
</h1>
<img src="<?php echo $producto['url'] ?>" class="d-block m-auto" width ='500px' height='300px'alt="">
<form action="<?php echo constant('URL')?>pedir/nombre" method="POST">

        <div class="form_1">
            <label  class="d-block text_al italica" for="nom">Nombre</label>
            <input class="d-block form_2  m-auto" type='text' id="nom" placeholder="Ana Maria" name='nombre' required>
        </div>

        <div class="form_1">
            <label class="d-block text_al italica"for="ape">Apellido</label>
            <input class="d-block form_2 m-auto" type='text' id="ape" placeholder="Gomez Gonzales" name='apellido' required>
        </div>

        <div class="form_1"> 
            <label class="d-block text_al italica" for="Email">Email</label>
            <input class="d-block form_2  m-auto" type='email' id="Email" placeholder="correo@ejemplo.com" name='email'>
        </div>

        <div class="form_1">
            <label class="d-block text_al italica" for="Numero">Numero</label>
            <input class=" form_2 d-block   m-auto" type='number' id="Numero" placeholder="+57 300 1234 567" name='numero' required>
        </div>
        
         <div class="form_1">
             <label class="d-block text_al italica" for="Direccion">Direccion</label>
            <input class="d-block  form_2 m-auto" type='text' id="Direccion" placeholder="CL 27D Sur # 27C - 51" name='direccion' required>
         </div>
        <input type="number" name='id_producto' value="<?php echo $id_producto;?>" hidden>

         <h3 class="text_al italica">
          precio a pagar   <?php echo  $producto['precio']?> 
        </h3>
         <div class="form_1"> 
           <input class="d-block m-auto btn btn-primary mb-3"type="submit">  
         </div>   
</form>

<script src="<?php echo constant('URL');?>public/js/pedir.js"></script>
</div>
<?php  require 'views/footer.php';?></div>
</body>
</html>
