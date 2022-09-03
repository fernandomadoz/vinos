<?php 
use App\Http\Controllers\GenericController;

$GenCon = new GenericController();
?>


@extends('layouts.frontend')


@section('title')
  Contacto | LBVinos
@endsection

@section('contenido')
  
    <link href="<?php echo ENV('PATH_PUBLIC') ?>fonts/wine/font/flaticon.css" rel="stylesheet" type="text/css">

    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/contact_us4.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!-- Web Fonts -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/fonts.css" rel="stylesheet">
  <!-- Animation Css -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Css -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/magnific-popup.css" rel="stylesheet">
    <!-- Style Css -->
    <link href="<?php echo ENV('PATH_PUBLIC') ?>css/blog_single_3.css" rel="stylesheet">

    <!-- page_header start -->
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
                    <h1> Contacto </h1>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="<?php echo env('PATH_PUBLIC')?>"> Home </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li> Contacto </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_header end -->

  <!-- comments_form_section start -->
  <!--div class="comments_form_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                <div class="section_heading">
                    <h2>Dejanos Tu Mensaje</h2>
                    <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
                </div>
                <div class="section_content">
                    <p>Envianos tus inquietudes y te responderemos a la brevedad.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="formsix-pos">
                            <div class="form-group i-name">
                                <label class="sr-only">Nombre</label>
                                <input type="text" class="form-control" required="" id="namTen-first" placeholder="Nombre Completo *">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="formsix-e">
                            <div class="form-group i-email">
                                <label class="sr-only">E-mail</label>
                                <input type="email" class="form-control" required="" id="emailTen" placeholder="Correo Electronico *">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="formsix-e">
                            <div class="form-group i-subject">
                                <label class="sr-only">Asunto</label>
                                <input type="text" class="form-control" required="" id="subjectTen" placeholder="Asunto">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="formsix-m">
                            <div class="form-group i-message">
                                <label class="sr-only">Mensaje</label>
                                <textarea class="form-control" required="" rows="7" id="messageTen" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">&nbsp;</div>
                  <div class="col-md-6">&nbsp;</div>
                </div>
              <button type="submit" class="btn btn-primary btn-block">Enviar !</button>
            </div>
        </div>
    </div>
  </div-->
  <!-- /.comments_form_section end-->


  <!-- contact_info_section start -->
  <div class="contact_info_section">
        <div class="container">
            <div class="row">
              <center><h3>Contactanos por alguna de nuestras vías de comuniación</h3></center><br><br><br><br>
                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                  <div class="contact_info_content">
                      <div class="contact_info_icon">
                          <i class="fa fa-whatsapp" aria-hidden="true"></i>
                      </div>
                      <div class="contact_info_details">
                          <h2><a href="https://api.whatsapp.com/send?phone=5493462563034">whatsapp</a></h2>
                          <p><a href="https://api.whatsapp.com/send?phone=5493462563034">+54 9 3462 563034</a>
                          <br>Marina</p>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                    <div class="contact_info_content">
                        <div class="contact_info_icon">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </div>
                        <div class="contact_info_details">
                            <h2><a href="https://api.whatsapp.com/send?phone=54934625144084">whatsapp</a></h2>
                            <p><a href="https://api.whatsapp.com/send?phone=54934625144084">+54 9 3462 514408</a>
                            <br>Ivana</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                    <div class="contact_info_content">
                        <div class="contact_info_icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact_info_details">
                            <h2>Telefonos</h2>
                            <p>+54 9 3462 563034
                            <br>+54 9 3462 514408</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                    <div class="contact_info_content">

                        <div class="contact_info_icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="contact_info_details">
                            <h2>E-mail</a></h2>
                            <p><a href="mailto:lbvinos@gmail.com">lbvinos@gmail.com</a>
                            <br><a href="mailto:info@lbvinos.com.ar">info@lbvinos.com.ar</a></p>
                        </div>
                    </div>
                </div>
      </div>
        </div>
    </div>
    <!-- contact_info_section end -->
          
            </div>
      
      </div>
    </div>
  <!-- blog_section start -->

@endsection

