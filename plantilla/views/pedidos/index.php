<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link  rel="icon"   href="/proyecto/trabajo/proyecto/plantilla/public/imagenes/logo2.png" width="494px" height="310px" type="image/png"/>
    <title>Pedidos Natural Snake</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body class="inicio_fon">
  <?php require 'views/header.php';?>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
                                            <h1 class="text_al italica">Compra de nuestros maravillosos productos mas vendidos</h1>
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <?php $productos=$this->references;
      foreach ($productos as $key => $value) {
        # code...
        echo '<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
          <img src="'.$value['url'].'" width="100%" height="300px" alt="">
            <h4 class="my-0 fw-normal">'.$value['producto'].'</h4>
          </div>
          <div class="card-body bg-dark color_white"> 
            <h1 class="card-title pricing-card-title"> $'.$value['precio'].'<small class="text-muted fw-light">/pesos</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>'.$value['descripcion'].'</li>
            </ul>
            <div class="boton1"> <button type="button" class="w-100 btn btn-lg btn-primary"> <a class="color_white" href="'.constant('URL').'pedir?id='.$value['id_producto'].'">Comprar ahora</a></button>  </div>
          </div>
        </div>
      </div>';
      }
      ?>
      
      
     
      
          </div>
        </div>
      </div>
    </div>
    
     

    <h2 class="display-6 text-center mb-4">Datos extra</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Ofertas</th>
            <th style="width: 22%;">disponible</th>
            <th style="width: 22%;">Combo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Postre de galletas</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Postre de maracuya</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Postre de fresa</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sagargala</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Postre de milo</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg> </td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Flan</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Postre de limon</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Postre de fresa 2.0</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  
</div>


   <?php  require 'views/footer.php';?></div>
  </body>
</html>