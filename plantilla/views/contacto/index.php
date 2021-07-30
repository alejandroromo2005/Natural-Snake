<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="icon"   href="/proyecto/trabajo/proyecto/plantilla/public/imagenes/logo2.png" width="494px" height="310px" type="image/png"/>
    <title>Natural snake Contactos</title>
</head>
<body>
    <!-- paso 15 -->
    <?php require 'views/header.php';?>
    <div id="contacto" class="  contacto_fon h_100 container-fluid py-3">
        <form class="px-5" action="<?php echo constant('URL'); ?>contacto/getForm" method="GET">
            <legend class="py-3"><h1>Contactame</h1></legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Benito Martínez" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="+57 123 456 7890" name="telefono">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje" required></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Enviar</button>
            </div>
        </form>
    </div>
    <div   class="" ><?php  require 'views/footer.php';?></div>
    
</body>
</html>