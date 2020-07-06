<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="https://www.powerfitness.cl/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.powerfitness.cl/images/favicon.ico" type="image/x-icon">
    <title> Gimnasio Power Fitness </title>
    <!-- META -->
    <meta name="fb_admins_meta_tag" content="powerfitnesscoyhaique">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Gimnasio Power Fitness">
    <meta property="og:title" content="Gimnasio Power Fitness">
    <meta property="og:url" content="https://www.powerfitness.cl">
    <meta property="fb:admins" content="powerfitnesscoyhaique">
    <!-- -->
    <script src="https://kit.fontawesome.com/1ab39e0b26.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css?id=ec3bb52a00e176a7181d" />
    <link type="text/css" href="/css/animate.css?id=6ff853ff7ca6e0567f72" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="/css/owl.carousel.min.css?id=4d9c37258b236aa87290">
    <link type="text/css" rel="stylesheet" href="/css/jquery.fancybox.css?id=eb9d41f2cd449cf1869b">
    <link type="text/css" rel="stylesheet" href="https://www.powerfitness.cl/webkit/webkit.css">
    <link type="text/css" rel="stylesheet" href="/css/font-awesome.css?id=ba93cd6a0164f45462f0">
    <link type="text/css" href="/css/style.css?id=d21f6f9ecee716249165" rel="stylesheet" />
    <link type="text/css" href="/css/media.css?id=f4e015c552dba743c13f" rel="stylesheet" />
    <link type="text/css" href="/css/red-style.css?id=31929ecdbc845374b274" rel="stylesheet">

</head>

<body id="mainBox" class="creamBg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="150">
    @csrf
    
    <div id="site-head">

        <!-- Top Header Section Begins -->
        <div class="top-head">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class=" pull-right">
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i><span style="color: #FF3751">LUN A VIE</span> 11 am – 13 pm | 16 pm – 22 pm</li>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i><span style="color: #FF3751">SAB</span> 16 pm – 19 pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Section Ends -->

        <!-- Header Section Begins -->
        <header id="header" class="float-panel" data-top="0" data-scroll="100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-menu">
                        <div class="menuBar scrollbtn">
                            <nav class="navbar navbar-default">
                                <div class="skewbox"> </div>
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <div class="logo">
                                            <a class="navbar-brand" href="index.html"><img src="images/logo-trans-blanco.png" alt="logo" /></a>
                                        </div>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#class">Horarios y clases </a></li>
                                            <li><a href="#gallery">Galería</a></li>
                                            <li><a href="#plans">Precios </a></li>
                                            <li><a href="#footer">Contáctanos</a></li>
                                            <li><a href="/login">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section Ends -->

        <!-- Banner Section Begins -->
        <section class="banner wow animated fadeInLeft" data-wow-delay="0.5s">
            <div class="container pr">
                <div class="banskew"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="bannerText">
                            <h1 class="slideout"> El dolor </h1>
                            <h3> de hoy <br/>Mañana será tú </h3>
                            <h1>Fuerza.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section Ends -->

        <!-- Scroll Down Section Begins -->
        <section class="scrollDown scrollbtn">
            <h6> <a href="#boxes"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Scroll Down </a> </h6>
        </section>
        <!-- Scroll Down Section Ends -->

    </div>

    <div class="main">

        <!-- Class Section Begins -->
        <section id="class" class="class pad-top-115 pad-bottom-115">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">Alcanza tus objetivos</h6>
                                <h2 class="sectionTitle">Horarios y <span>Clases</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp animated" data-wow-delay="0.5s">
                    <div class="tabs-header">
                        <div id="filters" class="button-group isogrp" data-option-key="filter">
                            <button class="button is-checked clickfix" data-filter=".mon"><span>Lun</span></button>
                            <button class="button" data-filter=".tue"><span>Mar</span></button>
                            <button class="button" data-filter=".wed"><span>Mie</span></button>
                            <button class="button" data-filter=".thu"><span>Jue</span></button>
                            <button class="button" data-filter=".fri"><span>Vie</span></button>
                            <button class="button" data-filter=".sat"><span>Sab</span></button>
                            <div class="border-move border"></div>
                        </div>
                    </div>
                    <div id="classbox" class="grid clickable clearfix">
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition mon tue wed thu fri">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> 11 am - 13 pm | 16 pm - 22 pm</h6>
                                </div>
                                <i class="fIcons flaticon-exercise-bike"></i>
                                <h4> Sala de maquinas </h4>
                                <p>Esculpe tu figura con nuestra completísima sala de entrenamiento de 100 mt 2 equipada con pesos libres, maquinas de resistencia variable y cardio. La otra sala de igual tamaño cuenta con implementos para realizar tus entrenamientos funcionales. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition sat">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> 16 pm - 19 pm</h6>
                                </div>
                                <i class="fIcons flaticon-exercise-bike"></i>
                                <h4> Sala de maquinas </h4>
                                <p>Esculpe tu figura con nuestra completísima sala de entrenamiento de 100 mt 2 equipada con pesos libres, maquinas de resistencia variable y cardio. La otra sala de igual tamaño cuenta con implementos para realizar tus entrenamientos funcionales. </p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition mon wed fri">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> 19 pm - 20 pm </h6>
                                </div>
                                <i class="fIcons flaticon-shoe"></i>
                                <h4> Zumba </h4>
                                <p> Una de las disciplinas más divertidas y eficaces para estar en forma, combina ejercicios aeróbicos con ritmos latinos como salsa, merengue, flamenco, bachata, reggaetón, samba. Ven a quemar calorías moviendo el esqueleto al ritmo de la moda.</p>
                            </div>
                        </div>
                        <div class="elemnt celement col-lg-3 col-md-4 col-sm-4 col-xs-12 transition mon tue wed thu fri">
                            <div class="element">
                                <div class="blckbox">
                                    <h6> 20 pm - 21 pm </h6>
                                </div>
                                <i class="fIcons flaticon-boxing-mannequin"></i>
                                <h4> Combat </h4>
                                <p> El más innovador Entrenamiento Fitness de Artes Marciales Mixtas con clases sin contacto. Un entrenamiento a intervalos y al ritmo de la mejor música. Quema calorías sacando al GUERRERO que llevas dentro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Class Section Ends -->

        <!-- Gallery Section Begins -->
        <section id="gallery" class="gallery pad-top-115 pad-bottom-115 parallax">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">Excelentes instalaciones</h6>
                                <h2 class="sectionTitle pad-bottom-60">Nuestra <span>Galería</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp animated" data-wow-delay="0.5s">
                    <div class="gallery-isotope col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div id="gallery-box" class="gallery-grid clickable clearfix">
                            <div class="elemnt transition gymn yoga grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="images/sala-pesas.jpg" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="images/sala-pesas.jpg">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness yoga grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="images/sala-pesas-gente.jpg" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="images/sala-pesas-gente.jpg">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition fitness running grid-item">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="images/sala-multiuso-vacia.jpg" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="images/sala-multiuso-vacia.jpg">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition workout gymn grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="images/sala-multiuso.jpg" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="images/sala-multiuso.jpg">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                            <div class="elemnt transition running grid-item grid-item--width2">
                                <div class="gImg">
                                    <div class="gImgpath">
                                        <img src="images/recepcion.jpg" alt="images" />
                                    </div>
                                    <a class="grouped_gallery" href="images/recepcion.jpg">
                                        <div class="circle-icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section Ends -->

        <!-- Plans Section Begins -->
        <section id="plans" class="plans pad-top-115 pad-bottom-120">
            <div class="container pr">
                <div class="secHead wow fadeInLeft animated" data-wow-delay="0.5s">
                    <div class="skewpink"></div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="titleText">
                                <h6 class="titleTop">¿ ESTÁS LISTO ?</h6>
                                <h2 class="sectionTitle">NUESTROS  <span>PLANES</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing-tables pad-top-55">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding pricebox">
                            <div class="element">
                                <div class="plan-top">
                                    <!--<div class="skewpink"></div>-->
                                    <h5> Diario &nbsp; &nbsp; </h5>
                                </div>
                                <div class="plan-side">
                                    <div class="skewback">
                                        <h2> $5.000</h2>
                                    </div>
                                </div>
                                <ul class="plan-list">
                                    <li> Uso ilimitado de máquinas </li>
                                    <li> Acceso a clases de Combat </li>
                                    <li> Sin restricción de días ni horarios</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding pricebox midprice">
                            <div class="element midelement">
                                <div class="plan-top">
                                    <!--<div class="skewpink"></div>-->
                                    <h5> Mensual </h5>
                                </div>
                                <div class="plan-side">
                                    <div class="skewback">
                                        <h2> $25.000</h2>
                                    </div>
                                </div>
                                <div class="midIcon"><i class="flaticon-gym fIcons"></i></div>
                                <ul class="plan-list">
                                    <li> Uso ilimitado de máquinas </li>
                                    <li> Acceso a clases de Combat </li>
                                    <li> Sin restricción de días ni horarios</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding pricebox">
                            <div class="element">
                                <div class="plan-top">
                                    <!--<div class="skewpink"></div>-->
                                    <h5> Trimestral </h5>
                                </div>
                                <div class="plan-side">
                                    <div class="skewback">
                                        <h2> $60.000</h2>
                                    </div>
                                </div>
                                <ul class="plan-list">
                                    <li> Uso ilimitado de máquinas </li>
                                    <li> Acceso a clases de Combat </li>
                                    <li> Sin restricción de días ni horarios</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 no-padding">
                        <div class="element">
                            <div class="plan-top">
                                <!--<div class="skewpink"></div>-->
                                <h5> Zumba &nbsp; &nbsp; </h5>
                            </div>
                            <div class="plan-side">
                                <div class="skewback">
                                    <h2> $2.000</h2>
                                </div>
                            </div>
                            <ul class="plan-list">
                                <li> Acceso a 1 clase de Zumba </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Plans Section Ends -->

        <!-- footer Section Begins -->
        <section id="footer" class="footer pad-top-120 pad-bottom-120">
            <div class="footerBg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer_logo">
                            <figure><img src="images/logo-trans-footer.png" alt="image" /></figure>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-address btm-brdr">
                            <h4 class="fTitle"> Contácta<span>nos</span> </h4>
                            <div id="map"></div>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Francisco Bilbao 741, Coyhaique (Entrada por supermercado Marvin)</span>
                                </li>
                                <li>
                                    <a href="tel:+56672212521"> <i class="fa fa-phone" aria-hidden="true"></i> <span>(67) 221 25 21</span> </a>
                                </li>
                                <li>
                                    <a href="mailto:info@powerfitness.cl"> <i class="fa fa-envelope-o" aria-hidden="true"></i> <span>info@powerfitness.cl</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="social-icons">
                            <h4 class="fTitle"> Redes <span>Sociales</span> </h4>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/gympowerfitness" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/powerfitnesscoyhaique" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer Section Ends -->

        <!-- copyright Section Begins -->
        <section id="copyright" class="copyright">
            <div class="container wow animated fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h6> © 2017 PowerFitness Coyhaique <a href="javascript:;" target="_blank">Chile.</a> </h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- copyright Section Ends -->

        <!-- Back to top Section Begins -->
        <a href="javascript:void(0);" class="back-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
        <!-- Back to top Section Ends -->

    </div>



<!-- Jquery Js -->
<script type="text/javascript" src="/js/jquery.min.js?id=0bdc04968d2fe6799360"></script>
<script type="text/javascript" src="/js/bootstrap.min.js?id=5869c96cc8f19086aee6"></script>
<script type="text/javascript" src="/js/element.js?id=c9c3309f1d61e3877fa0"></script>
<script type="text/javascript" src="/js/modernizr.js?id=5f23b182ebbf290a2bc4"></script>
<script type="text/javascript" src="/js/owl.carousel.js?id=7cf395d03c72f749c52a"></script>
<script type="text/javascript" src="/js/wow.min.js?id=36050285bfeeb7395752"></script>
<script type="text/javascript" src="/js/imagesloaded.pkgd.min.js?id=511ef2f6ee750edc32bb"></script>
<script type="text/javascript" src="/js/waypoints.min.js?id=dfe0eedf8da578f4a4c4"></script>
<script type="text/javascript" src="/js/jquery.isotope.min.js?id=f53a96076ebcc1e5f00b"></script>
<script type="text/javascript" src="/js/jquery.fancybox.js?id=921e9cb04ad6e2559869"></script>

<script>
    function initMap() {
        var uluru = {lat: -45.574061, lng: -72.064389};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            label: 'Power Fitness',
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGdD0bP7Xjidcqt3x28-szP8I4-tJCdbk&callback=initMap">
</script>

</body>

</html>
