


@extends('layouts.frontend')


@section('title')
  <?php echo $titulo ?> | LBVinos
@endsection

@section('contenido')
  
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/shop.css" rel="stylesheet">
    <link href="<?php echo ENV('PATH_PUBLIC') ?>fonts/wine/font/flaticon.css" rel="stylesheet" type="text/css">
    <!-- page_header start -->
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
                    <h1> <?php echo $titulo ?> </h1>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="<?php echo env('PATH_PUBLIC')?>"> Home </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li> <?php echo $titulo ?> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_header end -->

  <!--cart product wrapper Wrapper Start -->
  <div class="cart_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head">
                        <h1>Tus Productos Seleccionados (<?php echo $varshome['carro_cant'] ?>)</h1>
                    </div>
                </div>
                <div class="shop_cart_page_wrapper">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="table-responsive cart-calculations">
                            <table class="table">

                                <thead class="cart_table_heading">
                                    <tr>
                                        <th>item</th>

                                        <th>Producto</th>
                                        <th>Detalle</th>
                                        <th>Precio</th>

                                        <th>Cantidad</th>

                                        <th>Precio Total</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Lineas_de_pedido as $Linea) { ?>
                                      <tr>
                                          <td>
                                              1
                                          </td>
                                          <td>
                                            <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Linea->producto_id ?>">
                                              <div class="table_cart_img">
                                                 
                                                      <img src="<?php echo ENV('PATH_PUBLIC') ?>storage/<?php echo $Linea->file_imagen_principal ?>" alt=""  style="max-width: 100px" />
                                                 
                                              </div>
                                              </a>
                                          </td>
                                          <td>
                                            
                                              <div class="table_cart_cntnt">
                                                <a href="<?php echo ENV('PATH_PUBLIC') ?>producto/<?php echo $Linea->producto_id ?>">
                                                  <h1><?php echo $Linea->titulo_del_producto ?></h1>
                                                </a>
                                                  <p><?php echo $Linea->seccion ?> | <?php echo $Linea->varietal ?></p>
                                              </div>
                                          </td>
                                          <td class="cart_page_price">$<?php echo $Linea->moneda_importe ?></td>
                                          <td>
                                              <?php echo $Linea->cantidad ?>
                                          </td>
                                          <td class="cart_page_totl">$<?php echo $Linea->moneda_importe_total ?></td>
                                          <td>
                                              <a href="<?php echo ENV('PATH_PUBLIC') ?>del-item/<?php echo $Linea->id ?>"> <i class="fa fa-trash"></i></a>
                                          </td>
                                      </tr>
                                    <?php } ?>


                                    <tr>

                                        <td> </td>
                                        <td class="shop_btn_wrapper shop_car_btn_wrapper">

                                            <ul>
                                                <li><a href="<?php echo ENV('PATH_PUBLIC') ?>">Continuar Comprando</a>
                                                </li>
                                                <li><a href="<?php echo ENV('PATH_PUBLIC') ?>enviar-pedido">Realizar Pedido</a>
                                                </li>
                                            </ul>

                                        </td>
                                        <td> </td>
                                        <td> </td>
                                        <td></td>

                                        <td class="cart_btn_cntnt"> Total : <span>$ <?php echo $varshome['carro_importe'] ?> </span> </td>
                                        <td></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                        
                </div>

            </div>
        </div>
    </div>
    <!-- cart product wrapper end -->
@endsection

