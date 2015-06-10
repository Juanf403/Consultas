<?php 
# http://livedemo00.template-help.com/wt_53534
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/search-form.css">
<link rel="stylesheet" href="css/font-awesome.css">
<!--JS-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<script src="js/camera.js"></script>
<script src="js/sForm.js"></script> 
<!--[if (gt IE 9)|!(IE)]><!-->
      <script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script>
    $(document).ready(function(){
        jQuery('.camera_wrap').camera();
    });
</script>
<script>
$(window).load(function() {
    $(function() {
        $('#foo1').carouFredSel({
			auto: false,
			responsive: true,
			width: '100%',
			scroll: 1,
            pagination  : "#foo2_pag",
			items: {
				height: 'auto',
				width:370,
				visible: {
					min: 1,
					max: 1
				}
			},
			mousewheel: true,
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
	}); 	 				
});
</script>


<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow.js"></script>
<script src="js/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.http://livedemo00.template-help.com/wt_53534/js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<!--header-->
<header class="indent clearfix">
    <div class="follow-box">
        <div class="container"> 
            <h1 class="navbar-brand navbar-brand_"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>
            <ul class="address_icon">
                <li><span class="fa fa-map-marker"></span>Independecia #3335, Nuevo Laredo, Tamps.</li>
                <li><span class="fa fa-envelope"></span><a href="#">marthaeva@consultasaduanales.com.mx</a></li>
                <li><span class="fa fa-phone"></span>+1 (52) (867) 712 34 48</li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
        <div class="container">
            <ul class="nav sf-menu clearfix">
                <li class="active"><a href="/index.php">Inicio</a></li>
                <li class="sub-menu"><a href="/nosotros/">Nosotros</a><span></span>
                    <ul class="submenu">
        				<li><a href="#">Quienes Somos</a></li>
        				<li><a href="#">Nuestra Editorial</a></li>
        			</ul>
                </li>
                <li class="sub-menu"><a href="/nosotros/">Nuestras Ediciones</a><span></span>
                    <ul class="submenu">
                        <li><a href="#">Tarifa Impresa</a></li>
                        <li><a href="#">Tarifa En Lin&eacute;a</a></li>
                    </ul>
                </li>
                <li><a href="/acceso/">Acceso a Clientes</a></li>
                <li class="sub-menu"><a href="/tarifa/">Tarifa</a><span></span>
                    <ul class="submenu">
                        <li><a href="/sicer/">SICER</a></li>
                        <li><a href="http://24.173.218.108/consultasaduanales/login.aspx">Enlace SLAM</a></li>
                    </ul>
                </li>
                <li><a href="/contacto/">Contacto</a></li>
            </ul>
            <div class="js-search flt__l flt__n-xl">
            	<div class="toggle"></div>
            	<form id="search" class="search-form" action="search.php" method="GET" accept-charset="utf-8">
            		<label class="input" for="in">
            			<input id="in" type="text" name="s" value="Search" onblur="if(this.value == '') { this.value='Search'}" onfocus="if (this.value == 'Search') {this.value=''}">
                        <a href="#" onClick="document.getElementById('search').submit()" class="js-find"></a>
            		</label>
            	</form>
            </div>
        </div>
    </nav>
</header>
<div class="slider">  
    <div class="camera_wrap">
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture1.jpg"><div class="camera-caption fadeIn"><p class="title">LEY DE LOS IMPUESTOS <br>GENERALES DE IMPORTACIÓN <br>Y EXPORTACIÓN</p><a href="#" class="btn-default btn1">leer más</a></div></div>
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture2.jpg"><div class="camera-caption fadeIn"><p class="title">NOTAS <br>EXPLICATIVAS </p><a href="#" class="btn-default btn1">leer más</a></div></div>
        <div data-src="http://livedemo00.template-help.com/wt_53534/img/picture3.jpg"><div class="camera-caption fadeIn"><p class="title">COMPENDIO DE <br>COMERCIO EXTERIOR </p><a href="#" class="btn-default btn1">leer más</a></div></div>
    </div>
</div>
<!--content-->
<div class="content"> 
    <div class="thumb-box">
        <div class="container">
            <strong>CONSULTAS ADUANALES DE NUEVO LAREDO</strong>
            <p>Es una empresa dedicada a la venta y reproduccion de TARIFAS ARANCELARIAS, con el fin de responder a las necesidades en materia de comercio exterior e información aduanera.</p>
        </div>
    </div>
    <div class="thumb-box1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-delay="0.15s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon4.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Nosotros</a>
                                <!-- <p>Just starting out? There's no need to worry about inexperience. We can find your best attributes while displaying your unlimited potential.</p> -->
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInLeft">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon1.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Editorial</a>
                                <!-- <p>This type of resume is best for those who are already established in a particular field or have an impressive history to back-up a job change.</p> -->
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInRight">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon2.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Clientes</a>
                                <!-- <p>With this resume your career accomplishments will be emphasized while highlighting your experience as an executive level professional.</p> -->
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 wow fadeInRight" data-wow-delay="0.15s">
                    <div class="thumb-pad1 maxheight">
                        <div class="thumbnail">
                            <figure><img src="img/page1_icon3.png" alt=""></figure>
                            <div class="caption">
                                <a href="#">Contacto</a>
                                <!-- <p></p> -->
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="thumb-box4">
        <div class="container">
            <div class="box">
                <div class="box1">
                    <strong>Enterate, ultimas publicaciones</strong>
                    <span>Suscribete en nuestro listado de correo.</span>
                </div>
                <form id="newsletter" accept-charset="utf-8">
        			<div class="success">Your subscribe request has been sent!</div>
                    <label class="email">
        		    	<input type="email" value="">
        		    	<span class="error">*This is not a valid email address.</span>
        		    </label>
                    <a href="#" data-type="submit" class="btn-default btn4">registrar</a>
        		</form>
            </div>
            <br>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="tools-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <strong>Consultas <br> Aduanales</strong>
                        <p class="title">Enlaces de Interes</p>
                        <ul class="follow-list">
                            <li><a href="http://www.sat.gob.mx/Paginas/Inicio.aspx">SAT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <p class="title">Redes Sociales</p>
                        <ul class="follow-list">
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">you tube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="maxheight3">
                        <!-- falta acento -->
                        <p class="title">Direccion</p>
                        <p>Independecia #3335, Sector Centro, <br> Nuevo Laredo, Tamps.</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="indent maxheight3">
                        <p class="title">Contacto</p>
                        <br>Telefono:  +1 (52) (867) 712 3448 <br><a href="#">marthaeva@consultasaduanales.com.mx
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- {%FOOTER_LINK} -->
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/superfish.js"></script>
</body>
</html>