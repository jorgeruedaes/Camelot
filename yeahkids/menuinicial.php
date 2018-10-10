<?php
include('Admin/php/conexion.php');
include('Admin/php/funciones.php');
include('Admin/php/datos.php');
date_default_timezone_set('America/Bogota');
setlocale(LC_TIME, 'es_ES.UTF-8');
?>
<!-- Mirrored from eyecix.com/html/eyesports/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 07 Apr 2017 20:18:38 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base  href="<?php echo base_url_usuarios();?>"/>
  <title><?php echo String_Get_Valores('titulo');?></title>
  <!-- Favicon-->
  <link rel="icon" href="webs/images/<?php echo String_Get_Valores('favicon') ?>" type="image/x-icon">
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicon and Apple Touch Icons -->
  <link rel="shortcut icon" href="img/favicon/favicon1.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.html">

  <!-- Stylesheets -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="css/style5fd0.css?114">

  <link rel="stylesheet" href="css/mediab6ae.css?037">

  <!--[if lt IE 9 ]>
<script src="/js/html5shiv-master/html5shiv.js"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->

</head>
    <body>

  <div class="loader">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>

  <header id="home">
    <div class="section_logo">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="logo_block">
              <a href="index.php"><img src="img/header/logo.png" alt="" style="width: 200px;">
                <span></span>
              </a>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="reg_block">
              <ul>
                <li><a href="mailto:<?php echo String_Get_Valores('email') ?>"><?php echo String_Get_Valores('email') ?></a></li>
                <li class="reg_style">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px"
                  viewBox="0 0 14 14" style="enable-background:new 0 0 14 14;" xml:space="preserve">
                  <g transform="translate(96 384)">
                    <path class="svg_icons svg_phone" d="M-82.1-372.8l-0.1-0.2c-0.2-0.5-0.7-1-1.2-1.1l-1.8-0.5c-0.5-0.1-1.2,0-1.6,0.4l-0.7,0.7c-2.4-0.7-4.3-2.6-5-5
                    l0.7-0.7c0.4-0.4,0.5-1.1,0.4-1.6l-0.5-1.8c-0.1-0.5-0.6-1-1.1-1.2l-0.2-0.1c-0.5-0.2-1.2,0-1.6,0.4l-1,1c-0.2,0.2-0.3,0.7-0.3,0.7
                    c0,3.2,1.2,6.2,3.4,8.4c2.2,2.2,5.3,3.5,8.4,3.4c0,0,0.5-0.1,0.7-0.3l1-1C-82.1-371.6-81.9-372.3-82.1-372.8L-82.1-372.8z"/>
                  </g>
                </svg><?php echo String_Get_Valores('telefono') ?></li>
                <li class="reg_style"><a href="login.html">
                  <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px"
                  viewBox="0 0 18 14" style="enable-background:new 0 0 18 14;" xml:space="preserve">
                  <path class="svg_icons svg_login" d="M13.9,7c0,0.2-0.1,0.4-0.2,0.5l-6.4,5.9c-0.1,0.1-0.3,0.2-0.5,0.2s-0.4-0.1-0.5-0.2S6,13.1,6,12.9V9.8H0.8
                  c-0.2,0-0.4-0.1-0.5-0.2S0,9.3,0,9.1V4.9c0-0.2,0.1-0.4,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2H6V1c0-0.2,0.1-0.4,0.2-0.5s0.3-0.2,0.5-0.2
                  s0.4,0.1,0.5,0.2l6.4,5.9C13.8,6.6,13.9,6.8,13.9,7z M18,3.2v7.7c0,0.9-0.3,1.6-1,2.2c-0.7,0.6-1.5,0.9-2.4,0.9h-3.8
                  c-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.1-0.2c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.2,0.1-0.2
                  c0.1,0,0.1-0.1,0.2-0.1h3.8c0.5,0,1-0.2,1.3-0.5c0.4-0.3,0.6-0.8,0.6-1.2V3.2c0-0.5-0.2-0.9-0.6-1.2c-0.4-0.3-0.8-0.5-1.3-0.5H11
                  l-0.1,0l-0.1,0l-0.1-0.1l-0.1-0.1l0-0.1c0,0,0-0.1,0-0.2s0-0.2,0-0.3s0-0.2,0-0.3s0.1-0.2,0.1-0.2S10.8,0,10.9,0h3.8
                  c0.9,0,1.7,0.3,2.4,0.9S18,2.3,18,3.2z"/>
                </svg>
                Ingresar</a></li>
                <li class="reg_style"><a href="reg.html">
                  <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px"
                  viewBox="0 0 14 14" style="enable-background:new 0 0 14 14;" xml:space="preserve">
                  <path class="svg_icons svg_key" d="M0,11.5l0,1.8C0,13.7,0.3,14,0.7,14h1.8c0.2,0,0.4-0.1,0.5-0.2l0.5-0.5v-1.4h1.4v-1.4h1.4l1-1
                  c0.5,0.2,1.1,0.3,1.8,0.3c2.7,0,4.9-2.2,4.9-4.9S11.8,0,9.1,0S4.2,2.2,4.2,4.9c0,0.6,0.1,1.2,0.3,1.8L0.2,11C0.1,11.1,0,11.3,0,11.5
                  z M8.4,3.8c0-1,0.8-1.8,1.8-1.8s1.8,0.8,1.8,1.8s-0.8,1.8-1.8,1.8S8.4,4.8,8.4,3.8z"/>
                </svg>
                Registrar</a></li>
              </ul>
            </div>
          </div>
        </div>  
      </div>    
    </div>
    <div class="section_menu">
      <div class="mnu_fixed">
       <!-- <div class="mnu_wave"></div>-->
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="mnu mnu_mobile hidden-lg hidden-md">
                <div class="icon_shop hidden-lg hidden-md">
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div class="input_search hidden-lg hidden-md">
                  <input type="text" placeholder="Search...">
                  <a class="btnsearch" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="toggle_block hidden-lg hidden-md">
                  <a href="#" class="toggle-mnu"><span></span></a>
                </div>
              </div>
              <div class="logo_block">
                <img src="img/header/logo.png" alt="">
              </div>
             <!-- <div class="icon_shop hidden-sm hidden-xs">
                <a href="shop_cart.html"><i class="fa fa-shopping-cart"></i></a>
              </div>-->
              <div class="search hidden-sm hidden-xs">
             <!--   <div class="icon_search hidden-sm hidden-xs">
                  <a class="btnopen" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="input_search">
                  <input type="text" placeholder="Search...">
                  <a class="btnclose" href="#">×</a>
                  <a class="btnsearch" href="#"><i class="fa fa-search"></i></a>
                </div>-->
              </div>
              <div class="mnu hidden-sm hidden-xs">
                <ul>
                    <?php
                    $contador =1;
                    $vector = Array_Get_Modulos_All_Users();
                    foreach ($vector as $value) {

                     if ($value['submenu']=='0')
                     {
                      ?>
                      <li class="drop<?php echo $contador  ?>"><a href="<?php echo $value['ruta']; ?>"><?php echo $value['nombre']; ?></a></li>
                      <?php 
                      $contador ++;
                    }
                    }
                    ?>
                  </ul>
                </div>
              </div>
              <!-- menu movil -->
              <div class="col-sm-12 col-xs-12 top_mnu">
                <div class="mobile_mnu">
                  <ul>
                      <?php
                    $contador =1;
                    $vector = Array_Get_Modulos_All_Users();
                    foreach ($vector as $value) {

                     if ($value['submenu']=='0')
                     {
                      ?>
                      <li class="drop<?php echo $contador  ?>"><a href="<?php echo $value['ruta']; ?>"><?php echo $value['nombre']; ?></a></li>
                      <?php 
                      $contador ++;
                    }
                    }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

</body>
