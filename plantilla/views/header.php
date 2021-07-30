<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- paso 14 -->
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <div><img width="50px" src="<?php echo constant('URL'); ?>public/imagenes/logo.png"><a class="navbar-brand" href="<?php echo constant('URL'); ?>natural_snake"> Natural Snake</a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a id= "op_0" class="nav-link" aria-current="page" href=" <?php echo constant('URL'); ?>main">Quienes somos?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catalogo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>productos_mas_comprados">producto mas comprados</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>contacto">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo constant('URL'); ?>catalogo">productos</a>
                        </li> 
                        

                        <li class="nav-item">
                            <a   class=" sesion nav-link" href="<?php echo constant('URL'); ?>pedidos">Pedidos</a>
                        </li>

                        </div>
                    
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>