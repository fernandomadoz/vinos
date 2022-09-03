<!DOCTYPE html>
<!-- 
Template Name: Living Boutique HTML
Version: 1.0.0
Author: Webstrot
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180156114-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-180156114-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('titulo')  </title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="<?php echo ENV('PATH_PUBLIC') ?>image/png" sizes="16x16" href="images/favicon.png">
    <!-- font-awesome -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/fonts.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ENV('PATH_PUBLIC') ?>css/owl.carousel.css"/>
    <link rel="stylesheet" href="<?php echo ENV('PATH_PUBLIC') ?>css/owl.theme.default.css" />
    <!-- Animation Css -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/animate.css" rel="stylesheet">
  <!-- Magnific popup css -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/magnific-popup.css"  rel="stylesheet">
  <!-- Product Css -->
   <link href="<?php echo ENV('PATH_PUBLIC') ?>css/jquery-ui.min.css" rel="stylesheet">
    <!-- Flaticon Css -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/organic_flaticon.css" rel="stylesheet"> 
    <!-- Style CSS -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/shop_organic.css" rel="stylesheet">
    <link href="<?php echo ENV('PATH_PUBLIC') ?>fonts/wine/font/flaticon.css" rel="stylesheet" type="text/css">

    <!-- vue.js -->
    <script src="<?php echo env('PATH_PUBLIC')?>js/vue/vue.js"></script>
    <script src="<?php echo env('PATH_PUBLIC')?>js/vee-validate/dist/vee-validate.js"></script>
    <script src="<?php echo env('PATH_PUBLIC')?>js/vee-validate/dist/locale/es.js"></script>
    <script type="text/javascript" src="<?php echo env('PATH_PUBLIC')?>js/vue-form-generator/vfg.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo env('PATH_PUBLIC')?>js/vue-form-generator/vfg.css">
    <script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>    

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '313910806552873');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=313910806552873&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>

  <div id="app-fe">
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

                <!-- header start -->
                <div class="header">
                  <div class="" style="padding: 10px">
                    <div class="container">
                      <div id="left_top_links" class="pull-left">
                        <ul class="list-inline visible-xs">
                         <!-- Cart Option -->
                          <li class="dropdown shopping_cart">
                            <ul class="">
                              <!-- Cart Option -->
                              <li class="dropdown shopping_cart">
                                  <a href="<?php echo ENV('PATH_PUBLIC') ?>cart-list" >
                                    <div class="shopping_cart_1">
                                      <i class="flaticon-shopping-basket"></i>
                                      <span class="cart_badge">@{{ carro_cant }}</span>
                                    </div>
                                    <div class="shopping_cart_text">
                                      <p style="font-size: 19px; ">Mi Carro: $ @{{ carro_importe }}</p>
                                    </div>  
                                  </a>
                              </li>
                            </ul>
                        </li>
                        <!-- /.Cart Option -->
                        </ul>
                      </div>
                <!-- End .left_top_links -->

            </div>
            <!-- End .container -->
        </div>
        <!-- End .header_top -->

        <!-- section-4 logo start-->
        <div class="shop_logo_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="header_search_box">
              <form class="header_search_form" action="<?php echo ENV('PATH_PUBLIC') ?>search" method="post">
                <input name="criterio" type="text" placeholder="Buscar">
                {{ csrf_field() }}
                <button>
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-4 hidden-sm hidden-xs">
            <div class="logo_wrapper">
                            <a href="<?php echo ENV('PATH_PUBLIC') ?>">
                <img src="<?php echo ENV('PATH_PUBLIC') ?>images/logoLB.png" alt="logo_img" />
              </a>
                        </div>
          </div>  
                    <div class="col-md-4 col-sm-6 hidden-xs">
            <div class="header_right pull-right">
              <ul class="list-inline">
                <!-- Cart Option -->
                <li class="dropdown shopping_cart">
                    <a href="<?php echo ENV('PATH_PUBLIC') ?>cart-list" >
                      <div class="shopping_cart_1">
                        <i class="flaticon-shopping-basket"></i>
                        <span class="cart_badge">@{{ carro_cant }}</span>
                      </div>
                      <div class="shopping_cart_text">
                        Mi Carro
                        <div class="doller">@{{ carro_importe }}</div>
                      </div>  
                    </a>
                </li>
              </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section-4 logo end-->

        <div class="main_menu_wrapper hidden-xs hidden-sm">
            <nav class="navbar mega-menu navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="<?php echo env('PATH_PUBLIC')?>">
                                  Home
                                </a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Tintos
                                <span class="angle_down">
                                  <i class="fa fa-angle-down"></i>
                                </span>
                              </a>
                              <ul class="dropdown-menu">
                                  <li>
                                    <a href="<?php echo env('PATH_PUBLIC')?>varietal/1">
                                      <i class="fa fa-minus"></i>
                                      Varietales
                                    </a>
                                  </li>
                                  <li>
                                    <a href="<?php echo env('PATH_PUBLIC')?>varietal/2">
                                      <i class="fa fa-minus"></i>
                                      Blends
                                    </a>
                                  </li>
                                  <li>
                                    <a href="<?php echo env('PATH_PUBLIC')?>varietal/3">
                                      <i class="fa fa-minus"></i>
                                      Naturales
                                    </a>
                                  </li>
                                  <li>
                              </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                  Blancos
                                  <span class="angle_down">
                                    <i class="fa fa-angle-down"></i>
                                  </span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a href="<?php echo env('PATH_PUBLIC')?>varietal/4">
                                      <i class="fa fa-minus"></i>
                                      Varietales
                                    </a>
                                  </li>
                                  <li>
                                    <a href="<?php echo env('PATH_PUBLIC')?>varietal/5">
                                      <i class="fa fa-minus"></i>
                                      Blends
                                    </a>
                                  </li>
                                  <li>
                                       <a href="<?php echo env('PATH_PUBLIC')?>varietal/6">
                                        <i class="fa fa-minus"></i>
                                        Naturales
                                      </a>
                                  </li>
                                </ul>
                            </li>
                            <li>
                              <a href="<?php echo env('PATH_PUBLIC')?>varietal/7">
                                Espumantes
                              </a>
                            </li>
                            <li>
                              <a href="<?php echo env('PATH_PUBLIC')?>seccion/4">
                                Oliva
                              </a>
                            </li>
              
                            <li class="dropdown m-menu-fw">
                              <a href="#" data-toggle="dropdown" class="dropdown-toggle"> 
                                Populares
                                <span class="angle_down">
                                  <i class="fa fa-angle-down"></i>
                                </span>
                              </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-lg-3 col-md-4">
                                                <li class="dropdown-header">RECIEN LLEGADOS</li>

                                                <?php foreach ($varshome['RecienLlegados'] as $Producto) { ?>
                                                <li>
                                                   <div class="product_wrapper m-20">
                                                    <div class="product_image">
                                                      <figure>
                                                        <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Producto->file_imagen_principal ?>" alt="<?php echo $Producto->titulo_del_producto ?>">
                                                      </figure>
                                                    </div>
                                                    <div class="product_text">
                                                      <h5>
                                                        <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Producto->id ?>">
                                                          <?php echo $Producto->titulo_del_producto ?>
                                                        </a>
                                                      </h5>
                                                      <div class="product_rating">
                                                        <?php 
                                                        for ($i=1; $i<=5; $i++) { 
                                                          
                                                          if ($Producto->cantidad_de_estrellas >= $i) {
                                                            $o = '';
                                                          }
                                                          else {
                                                            $o = '-o';  
                                                          }
                                                          echo '<i class="fa fa-star'.$o.'"></i>';
                                                        }
                                                        ?>

                                                      </div>
                                                      <div class="product_price"> $<?php echo number_format($Producto->moneda_importe, 2, ',', '.') ?>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                            <ul class="col-lg-3 col-md-4">
                                                <li class="dropdown-header">MAS VENDIDOS</li>

                                                <?php foreach ($varshome['MasVendidos_3'] as $Producto) { ?>
                                                <li>
                                                   <div class="product_wrapper m-20">
                                                    <div class="product_image">
                                                      <figure>
                                                        <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Producto->file_imagen_principal ?>" alt="<?php echo $Producto->titulo_del_producto ?>">
                                                      </figure>
                                                    </div>
                                                    <div class="product_text">
                                                      <h5>
                                                        <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Producto->id ?>">
                                                          <?php echo $Producto->titulo_del_producto ?>
                                                        </a>
                                                      </h5>
                                                      <div class="product_rating">
                                                        <?php 
                                                        for ($i=1; $i<=5; $i++) { 
                                                          
                                                          if ($Producto->cantidad_de_estrellas >= $i) {
                                                            $o = '';
                                                          }
                                                          else {
                                                            $o = '-o';  
                                                          }
                                                          echo '<i class="fa fa-star'.$o.'"></i>';
                                                        }
                                                        ?>

                                                      </div>
                                                      <div class="product_price"> $<?php echo number_format($Producto->moneda_importe, 2, ',', '.') ?>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </li>
                                                <?php } ?>

                                            </ul>
                                            <?php if ($varshome['Popular']->count() > 0) { ?>
                                              <?php $Popular = $varshome['Popular'][0]; ?>
                                            <ul class="col-lg-3 hidden-md">
                                              <li class="dropdown-header"><?php echo $Popular->porcentaje_de_descuento ?>% OFF</li>
                                              <li>
                                               <div class="header_about_wrapper">
                                                <p>
                                                  <?php echo substr($Popular->descripcion_producto, 0, 300) ?>...
                                                </p>
                                                <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Popular->id ?>" class="btn1">Ver Mas</a>                          
                                                </div>
                                              </li>
                                            </ul>
                                            <ul class="col-lg-3 col-md-4">
                                              <li>
                                                <div class="header_img fade-out-in">
                                                  <a href="#" class="header_img_link">
                                                    <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Popular->file_imagen_principal ?>" alt="<?php echo $Popular->titulo_del_producto ?>">
                                                  </a>
                                                </div>
                                              </li>
                                            </ul>                                              
                                            <?php } ?>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                              <a href="<?php echo ENV('PATH_PUBLIC') ?>blog">
                                Blog
                              </a>
                            </li>
              
                            <li>
                                <a href="<?php echo ENV('PATH_PUBLIC') ?>contacto">
                                  Contacto
                                </a>
                            </li>
                          </ul>
                        </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
        <div class="mobail_menu_main visible-xs visible-sm">
          <div class="navbar-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <a class="navbar-brand" href="<?php echo ENV('PATH_PUBLIC') ?>"><img src="<?php echo ENV('PATH_PUBLIC') ?>images/logoLB-blanco.png" alt=""></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <button type="button" class="navbar-toggle collapsed" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
          </div>
          <div id="sidebar">
            <a class="sidebar_logo" href="<?php echo ENV('PATH_PUBLIC') ?>"><img src="<?php echo ENV('PATH_PUBLIC') ?>images/logoLB.png" alt=""></a>
            <div id="toggle_close">&times;</div>
            <div id='cssmenu'>
              <ul>
                <li><a href="<?php echo ENV('PATH_PUBLIC') ?>">Home</a></li>
                <li class='has-sub'><a href='#'>Tintos</a>
                  <ul>
                    <li>
                      <a href="<?php echo env('PATH_PUBLIC')?>varietal/1">Varietales</a>
                    </li>
                    <li>
                      <a href="<?php echo env('PATH_PUBLIC')?>varietal/2">Blends</a>
                    </li>
                    <li>
                      <a href="<?php echo env('PATH_PUBLIC')?>varietal/3">Naturales</a>
                    </li>
                  </ul>
                </li>
                <li class='has-sub'><a href='#'>Blancos</a>
                  <ul>
                    <li>
                      <a href="<?php echo env('PATH_PUBLIC')?>varietal/4">Varietales</a>
                    </li>
                    <li>
                      <a href="<?php echo env('PATH_PUBLIC')?>varietal/5">Blends</a>
                    </li>
                    <li>
                      <a href="<?php echo env('PATH_PUBLIC')?>varietal/6">Naturales</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="<?php echo env('PATH_PUBLIC')?>varietal/7">
                    Espumantes
                  </a>
                </li>
                <li>
                  <a href="<?php echo env('PATH_PUBLIC')?>seccion/4">
                    Oliva
                  </a>
                </li>                
                <li class='has-sub'><a href='#'>Populares</a>
                  <ul>

                    <li class="dropdown-header">Recien Llegados</li>
                    <?php foreach ($varshome['RecienLlegados'] as $Producto) { ?>
                      <li>
                        <div class="sidebar_product_wrapper">
                          <div class="product_image">
                            <figure>
                              <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Producto->file_imagen_principal ?>" alt="<?php echo $Producto->titulo_del_producto ?>">
                            </figure>
                          </div>
                          <div class="product_text">
                            <h5>
                              <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Producto->id ?>">
                                <?php echo $Producto->titulo_del_producto ?>
                              </a>
                            </h5>
                            <div class="product_rating">
                              <?php 
                              for ($i=1; $i<=5; $i++) { 
                                
                                if ($Producto->cantidad_de_estrellas >= $i) {
                                  $o = '';
                                }
                                else {
                                  $o = '-o';  
                                }
                                echo '<i class="fa fa-star'.$o.'"></i>';
                              }
                              ?>
                            </div>
                            <div class="product_price">
                                $<?php echo number_format($Producto->moneda_importe, 2, ',', '.') ?>
                            </div>
                          </div>
                        </div>
                      </li>
                    <?php } ?>

                    <li class="dropdown-header">Recien Llegados</li>
                    <?php foreach ($varshome['MasVendidos_3'] as $Producto) { ?>
                      <li>
                        <div class="sidebar_product_wrapper">
                          <div class="product_image">
                            <figure>
                              <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Producto->file_imagen_principal ?>" alt="<?php echo $Producto->titulo_del_producto ?>">
                            </figure>
                          </div>
                          <div class="product_text">
                            <h5>
                              <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Producto->id ?>">
                                <?php echo $Producto->titulo_del_producto ?>
                              </a>
                            </h5>
                            <div class="product_rating">
                              <?php 
                              for ($i=1; $i<=5; $i++) { 
                                
                                if ($Producto->cantidad_de_estrellas >= $i) {
                                  $o = '';
                                }
                                else {
                                  $o = '-o';  
                                }
                                echo '<i class="fa fa-star'.$o.'"></i>';
                              }
                              ?>
                            </div>
                            <div class="product_price">
                                $<?php echo number_format($Producto->moneda_importe, 2, ',', '.') ?>
                            </div>
                          </div>
                        </div>
                      </li>
                    <?php } ?>

                    <?php if ($varshome['Popular']->count() > 0) { ?>
                      <?php $Popular = $varshome['Popular'][0]; ?>
                      <li>
                        <div class="sidebar_header_img fade-out-in">
                          <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Popular->id ?>" class="header_img_link">
                            <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Popular->file_imagen_principal ?>" alt="<?php echo $Popular->titulo_del_producto ?>">
                          </a>
                        </div>
                      </li>
                    <?php } ?>

                  </ul>
                </li>
                <li><a href="<?php echo ENV('PATH_PUBLIC') ?>blog">Blog</a></li>
                <li><a href="<?php echo ENV('PATH_PUBLIC') ?>contacto">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <!-- header end -->
  
  @yield('contenido') 
  
  <!-- footer start -->
    <div class="footer">
        <div class="container">
            <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
           <div class="footer_top_wrapper">
            <div class="footer_logo_wrapper">
                            <a href="<?php echo ENV('PATH_PUBLIC') ?>">
                <img src="<?php echo ENV('PATH_PUBLIC') ?>images/logoLB-blanco.png" alt="logo_img">
              </a>
             </div>
             <div class="copyright_icon_wrapper">
              <ul class="copyright_icons">
                <li><a href="https://www.facebook.com/Living-Boutique-114671533603393/"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="https://www.instagram.com/lboutiquevinos/"><i class="fa fa-instagram"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-whatsapp"></i></a>
                </li>
              </ul>
             </div>
           </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Nosotros</h4>
            <div class="abotus_content">
              <p>De momentos compartidos, y común disfrute de un buen vino, nace Living Boutique.Te proponemos ser parte de esta búsqueda ofreciendote nuevas gamas de vinos para encerrar en una copa esos instantes únicos.</p>
            </div>
            
                    </div>
                </div>
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="footer_widget widget_4">
                        <h4 class="widget_title">Contactanos</h4>
                        <ul class="footer_widget_list">
              <li>
                <i class="fa fa-whatsapp"></i>
                +54 9 3462 514408
              </li>
                            <li>
                <i class="fa fa-phone"></i>
                +54 9 3462 563034
                            </li>
                            <li>
                <i class="fa fa-envelope"></i>
                <a href="#">
                  lbvinos@gmail.com
                </a>
                            </li>
              <li>
                <i class="fa fa-globe"></i>
                <a href="http:www.lbvinos.com.ar">
                  www.lbvinos.com.ar
                </a>
                            </li>
            </ul>
                    </div>
                </div>
                
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <div class="widget4_text_wrapper">
                            <div class="widget4_content_first">
                                <p>Por favor dejanos tu email recibiras nuestras mejores ofertas e informacion destacada.</p>
                            </div>
                            <div class="widget4_content_second">
                                <p>Recibe las novedades y ofertas.</p>
                            </div>
                            <input type="text" placeholder="Email..."><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->

    <!-- copyright_wrapper start -->
  <div class="copyright_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-6">
                    <div class="copyright_content">
                        <p>© Copyright 2020  <a href="<?php echo ENV('PATH_PUBLIC') ?>"> Living Boutique </a>- todos los derechos reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright_wrapper end -->

    <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="body_product_view">

                </div>
            </div>
        </div>
    </div>
  </li>


  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Bootstrap js -->
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/jquery.min.js"></script>
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/owl.carousel.js"></script>
  <!-- Magnific Popup js -->
  <script src="<?php echo ENV('PATH_PUBLIC') ?>js/jquery.magnific-popup.js"></script>
  <!-- Portfolio Filter js -->
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/jquery.shuffle.min.js"></script>
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/jquery.inview.min.js"></script>
  <script src="<?php echo ENV('PATH_PUBLIC') ?>js/portfolio.js"></script>
  <!-- Product js -->
  <script src="<?php echo ENV('PATH_PUBLIC') ?>js/jquery-ui.min.js"></script>
   <!-- Custom js -->
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/shop.js"></script>
    <!-- Custom js -->
    <script src="<?php echo ENV('PATH_PUBLIC') ?>js/custom.js"></script>

<script type="text/javascript">
        const config = {
          locale: 'es', 
        };
        //moment.locale('es');
        //console.log(moment());
        Vue.use(VeeValidate, config);

        var app = new Vue({
          el: '#app-fe',

          data: {
            carro_cant: <?php echo $varshome['carro_cant'] ?>,
            carro_importe: <?php echo $varshome['carro_importe'] ?>
          },

          methods: {                

            addItem: function (producto_id, cantidad) {              

              $.ajax({
                url: '<?php echo env('PATH_PUBLIC')?>additem',
                type: 'POST',
                dataType: 'html',
                async: true,
                data:{
                  _token: "{{ csrf_token() }}",
                  producto_id: producto_id,
                  cantidad: cantidad
                },
                success: function success(data, status) {    

                    resulltado = data.split("|");
                    $("#alert_"+resulltado[0]).fadeTo(2000, 500).slideUp(500, function() {
                      $("#success-alert").slideUp(500);
                    });
                    $("#alert2_"+resulltado[0]).fadeTo(2000, 500).slideUp(500, function() {
                      $("#success-alert").slideUp(500);
                    });
                    app["carro_cant"] = resulltado[1]
                    app["carro_importe"] = resulltado[2]
                  
                },
                error: function error(xhr, textStatus, errorThrown) {
                    alert(errorThrown);
                }
              });

            },

            bodyProdcutView: function (producto_id, cantidad) {              

              $.ajax({
                url: '<?php echo env('PATH_PUBLIC')?>body-product-view',
                type: 'POST',
                dataType: 'html',
                async: true,
                data:{
                  _token: "{{ csrf_token() }}",
                  producto_id: producto_id
                },
                success: function success(data, status) {    
                    $("#body_product_view").html(data);                  
                },
                error: function error(xhr, textStatus, errorThrown) {
                    alert(errorThrown);
                }
              });

            },

          },


        })
    </script>
<!-- FIN APP app-solicitud -->

<script type="text/javascript">
  $(document).ready(function() {
  $(".alert").hide();
});
</script>

</body>
</html>