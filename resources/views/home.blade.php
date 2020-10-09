<!DOCTYPE html>
<html class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Product Catalog </title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon.png') }}" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('/plugins/themefisher-font/style.css')}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
  
  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css">

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/navigation.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-4">
                <div class="contact-number">
                    <i class="tf-ion-ios-telephone"></i>
                    <span>+62-8122-1654-460</span>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
                <!-- Site Logo -->
                <div class="logo text-center">
                    <a href="#">
                        <!-- replace logo here -->
                        <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40" font-family="AustinBold, Austin" font-weight="bold">
                                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                                    <text id="name">
                                        <tspan x="108.94" y="325">Catalog</tspan>
                                    </text>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-4">
            <!-- Cart -->
            <ul class="top-menu text-right list-inline">
              @if (Route::has('login'))
                    @if (Auth::check())
                        <li>
                            <a href="{{ url(ADMIN . '/') }}">Admin</a>
                        </li>
                        <li>
                            <a href="{{ url('logout') }}">Logout</a>   
                        </li>
                    @else
                        <li>
                            <a href="{{ url('login') }}">Login</a> 
                        </li>
                        <li>
                            <a href="{{ url('/register') }}">Register</a>
                        </li>
                    @endif
            @endif
            </ul><!-- / .nav .navbar-nav .navbar-right -->
            </div>
        </div>
    </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
    <nav class="navbar navigation">
        <div class="container">
          <div class="navbar-header">
            <h2 class="menu-title">Main Menu</h2>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div><!-- / .navbar-header -->

          <!-- Navbar Links -->
          <div id="navbar" class="navbar-collapse collapse text-center">
            <ul class="nav navbar-nav">

              <!-- Home -->
              <li class="dropdown ">
                <a href="#">Home</a>
              </li><!-- / Home -->

            </ul><!-- / .nav .navbar-nav -->

            </div><!--/.navbar-collapse -->
        </div><!-- / .container -->
    </nav>
</section>

<section class="main-slider">
    <div id="home_slider_wrapper" class="rev_slider_wrapper fullscreen-container" >
        <div id="home_slider" class="rev_slider fullscreenbanner tiny_bullet_slider" data-version="5.4.1">
            <ul>    <!-- SLIDE  -->
                <li data-index="rs-73" 
                data-thumb="images/slider/slider-1.jpg"
                data-transition="fade" 
                data-slotamount="default" 
                data-hideafterloop="0" 
                data-hideslideonmobile="off"  
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="300"   
                data-rotate="0"  
                data-saveperformance="off"  
                data-title="Slide" 
                data-param1="" 
                data-param2="" 
                data-param3="" 
                data-param4="" data-param5="" 
                data-param6="" 
                data-param7="" 
                data-param8="" 
                data-param9="" 
                data-param10="" 
                data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/slider/slider-1.jpg" 
                    data-bgposition="cover" 
                    data-bgfit="cover" 
                    data-bgrepeat="no-repeat" 
                    data-bgparallax="on" 
                    class="rev-slidebg" 
                    data-no-retina
                    alt="Slider image" />
                    <!-- LAYERS -->
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-74" 
                    data-transition="fade" 
                    data-slotamount="default" 
                    data-hideafterloop="0" 
                    data-hideslideonmobile="off"  
                    data-easein="default" 
                    data-easeout="default" 
                    data-masterspeed="300"  
                    data-thumb="images/slider/slider-3.jpg"  
                    data-rotate="0"  
                    data-saveperformance="off"  
                    data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="images/slider/slider-3.jpg" alt=""  
                        data-bgposition="cover"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        data-bgparallax="on" 
                        class="rev-slidebg" data-no-retina />
                    <!-- LAYERS -->

                    

                    <!-- LAYER NR. 6 -->
                    <a  
                        href="#"
                        class="tp-caption rev-btn  tp-resizeme" 
                        data-x="['left','left','left','left']"
                        data-hoffset="['880','760','600','330']" 
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['120','250','150','110']" 
                        data-width="150px"
                        data-height="50px"
                        data-whitespace="normal"
                        data-type="button" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":500,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[8,8,8,8]"
                        
                        style="z-index: 6; white-space: normal; font-size: 22px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop Now</a>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-74-layer-3" 
                        data-x="['left','left','left','left']" data-hoffset="['820','700','540','270']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":400,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[20,20,20,20]"

                        style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">Product Catalog </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-74-layer-2" 
                        data-x="['left','left','left','left']" data-hoffset="['360','240','110','80']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']" 
                        data-fontsize="['70','70','70','50']"
                        data-lineheight="['70','70','70','50']"
                        data-width="['650','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['right','right','right','right']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[20,20,20,20]"

                        style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Trusted E Store In Bandung. 
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-75" 
                    data-transition="fade" 
                    data-slotamount="default" 
                    data-hideafterloop="0"
                    data-hideslideonmobile="off"  
                    data-easein="default" 
                    data-easeout="default" 
                    data-masterspeed="300" 
                    data-thumb="images/slider/slider-2.jpg"
                    data-rotate="0"  
                    data-saveperformance="off"  
                    data-title="Slide" 
                    data-param1="" 
                    data-param2="" 
                    data-param3="" 
                    data-param4="" 
                    data-param5=""
                    data-param6="" 
                    data-param7="" 
                    data-param8="" 
                    data-param9="" 
                    data-param10="" 
                    data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/slider/slider-2.jpg"
                    data-bgposition="center center"
                    data-bgfit="cover"
                    data-bgrepeat="no-repeat" 
                    data-bgparallax="on" 
                    class="rev-slidebg" 
                    data-no-retina  alt="slider img" />
                    <!-- LAYERS -->


                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-75-layer-2" 
                        data-x="['center','center','center','center']" 
                        data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" 
                        data-voffset="['-100','-100','-100','-90']" 
                        data-fontsize="['70','70','70','50']"
                        data-lineheight="['70','70','70','50']"
                        data-width="['650','650','620','380']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":200,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[30,30,30,30]"
                        data-paddingleft="[20,20,20,20]"

                        style="z-index: 6; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Friendly price, Premium Quality, and Original Product. </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme" 
                        id="slide-75-layer-3" 
                        data-x="['center','center','center','center']" 
                        data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" 
                        data-voffset="['-247','-247','-247','-217']" 
                        data-width="none"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":300,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[20,20,20,20]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[20,20,20,20]"

                        style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">Product Catalog </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption rev-btn  tp-resizeme" 
                        data-x="['center','center','center','center']"
                        data-hoffset="['0','0','0','0']" 
                        data-y="['middle','middle','middle','middle']" 
                        data-voffset="['80','80','80','50']" 
                        data-width="150px"
                        data-height="50px"
                        data-whitespace="normal"
                        data-type="button" 
                        data-responsive_offset="on" 
                        data-frames='[{"delay":400,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[6,6,6,6]"
                        style="z-index: 8; white-space: normal; font-size: 22px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-align:center!important;">Shop Now
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
        
        
</section>

<section class="products section bg-gray">
    <div class="container">
        <div class="row">
            <div class="title text-center">
                <h2>Best-Selling</h2>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-4">
                <div class="product-item">
                    <div class="product-thumb">
                        <span class="bage">Sale</span>
                        <img class="img-responsive" src="images/shop/products/product-1.jpg" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                                <li>
                                    <span  data-toggle="modal" data-target="#product-modal">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </span>
                                </li>
                                <li>
                                    <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="tf-ion-android-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Pods</a></h4>
                        <p class="price">Rp. 30.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="product-thumb">
                        <img class="img-responsive" src="images/shop/products/product-2.jpg" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                                <li>
                                    <span  data-toggle="modal" data-target="#product-modal">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </span>
                                </li>
                                <li>
                                    <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="tf-ion-android-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Berry Juicy Ripe - 100 ml</a></h4>
                        <p class="price">Rp 40.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="product-thumb">
                        <img class="img-responsive" src="images/shop/products/product-3.jpg" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                                <li>
                                    <span  data-toggle="modal" data-target="#product-modal">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </span>
                                </li>
                                <li>
                                    <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="tf-ion-android-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Blueberry Juicy Ripe - 100 ml</a></h4>
                        <p class="price">Rp 30.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="product-thumb">
                        <img class="img-responsive" src="images/shop/products/product-4.jpg" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                                <li>
                                    <span  data-toggle="modal" data-target="#product-modal">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </span>
                                </li>
                                <li>
                                    <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="tf-ion-android-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Tropical Strawberry Cloudy Cristal - 30 ml</a></h4>
                        <p class="price">Rp 20.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <div class="product-thumb">
                        <img class="img-responsive" src="images/shop/products/product-5.jpg" alt="product-img" />
                        <div class="preview-meta">
                            <ul>
                                <li>
                                    <span  data-toggle="modal" data-target="#product-modal">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </span>
                                </li>
                                <li>
                                    <a href="#" ><i class="tf-ion-ios-heart"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="tf-ion-android-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Space Jam Collection Pack - 100 ml</a></h4>
                        <p class="price">Rp 200.000</p>
                    </div>
                </div>
            </div>
        
        <!-- Modal -->
        <div class="modal product-modal fade" id="product-modal">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tf-ion-close"></i>
            </button>
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <div class="modal-image">
                                    <img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-short-details">
                                    <h2 class="product-title">Berry Juicy Ripe - 100 ml</h2>
                                    <p class="product-price">Rp 40.000</p>
                                    <p class="product-short-description">
                                        Vapor liquid Berry Juicy Ripe 100 ml.
                                    </p>
                                    <a href="cart.html" class="btn btn-main">Add To Cart</a>
                                    <a href="#" class="btn btn-transparent">View Product Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        </div>
    </div>
</section>


<footer class="footer section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Contact Details -->
                <div class="contact-details col-md-4 " >
                    <h2 align="left">Contact Us</h2>
                    <ul align="left" class="contact-short-info" >
                        <li>
                            <i class="tf-ion-ios-home"></i>
                            <span>Jalan A.H Nasution, No. 104</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>Phone: +62-856-4893-6744</span>
                        </li>
                        <li>
                            <i class="tf-ion-social-whatsapp-outline"></i>
                            <span>WA: +62-856-4893-6744</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: ProductCatalog@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <!-- / End Contact Details -->
                <!-- Another Link -->
                <div class="contact-details col-md-4 " >
                    <h2 align="center">Another Link</h2>
                    <ul class="contact-short-info">
                        <li>
                            <a href="">CONTACT</a>
                        </li>
                        <li>
                            <a href="">SHIPPING</a>
                        </li>
                        <li>
                            <a href="">TERMS OF SERVICE</a>
                        </li>
                        <li>
                            <a href="">PRIVACY POLICY</a>
                        </li>
                    </ul>
                </div>
                <!-- End -->
                <!-- Footer Social Links -->
                    <div class="social-icon">
                        <h2 align="center">Follow Us</h2>
                        <ul>
                            <li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->
            </div>
            <div class="col-md-12">
                <p class="copyright-text">Est 2016-2020 &copy; <b>ProductCatalog</b></p>
                <p class="copyright-text">Powered By Mamanracing<b>&trade;</b></p>
            </div>
        </div>
    </div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed-js/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/SyoTimer/build/jquery.syotimer.min.js"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- <script type="text/javascript" src="plugins/revolution-slider/assets/warning.js"></script>   -->



    <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
