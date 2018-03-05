<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo $datos[0]->title; ?></title>
	<meta name="description" content="<?php echo $datos[0]->description; ?>">
	<meta name="author" content="johnjce.github.io/inicio/">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="./assets/front/css/style.css">
    <link rel="stylesheet" href="./assets/front/css/responsive.css">
	<link rel='stylesheet' href="./assets/front/css/camera.css">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="Est&aacute;s usando un navegador desactualizado. Para una experiencia de navegaci&oacute;n más r&aacute;pida y segura, actual&iacute;zate gratis hoy mismo." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

	<link href='./assets/front/images/favicon.ico' rel='icon' type='image/x-icon'/>

	<script type='text/javascript' src='./assets/front/js/jquery.min.js'></script>
	<script type='text/javascript' src='./assets/front/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='./assets/front/js/camera.min.js'></script>

    <script>
		jQuery(function(){
			jQuery('#camera_wrap').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>

</head>
<body>
<!--------------Header--------------->

<header>
	<div class="pagetop">
		<div class="wrap-pagetop">
			<div class="shareicons">
				<ul>
					<li><a href="#"><img src="./assets/front/images/facebook-icon.png" title="Facebook"/></a></li>
					<li><a href="#"><img src="./assets/front/images/google-icon.png" title="Google+"/></a></li>
					<li><a href="#"><img src="./assets/front/images/twitter-icon.png" title="Twitter"/></a></li>
					<li><a href="#"><img src="./assets/front/images/sharethis-icon.png" title="Sharethis"/></a></li>
					<li><a href="#"><img src="./assets/front/images/linkedin-icon.png" title="Linkedin"/></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wrap-header">
		<div id="logo"><a href="<?php echo $helper->url("index","index"); ?>"><img src="./assets/front/images/logo.png"/></a></div>
		<nav>
			<ul>
				<li <?php if(!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] == "index")) echo "class='current'"; ?>><a href="<?php echo $helper->url("index","index"); ?>">Inicio</a></li>
				<li <?php if(isset($_GET['action']) && $_GET['action'] == "trabajos") echo "class='current'"; ?>><a href="<?php echo $helper->url("index","trabajos"); ?>">Trabajos</a></li>
				<li <?php if(isset($_GET['action']) && $_GET['action'] == "contacto") echo "class='current'"; ?>><a href="<?php echo $helper->url("index","contacto"); ?>">Contacto</a></li>
			</ul>
		</nav>
	</div>
</header>