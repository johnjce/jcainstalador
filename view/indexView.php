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
			<div id="search">
				<div class="button-search"></div>
				<input type="text" value="Buscar..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Buscar...&#39;;}">
			</div>
		</div>
	</div>
	<div class="wrap-header">
		<div id="logo"><a href="#"><img src="./assets/front/images/logo.png"/></a></div>
		<nav>
			<ul>
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="single.html">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>

<!--------------Content--------------->
<section id="content">
	<div class="feature">
		<div class="camera_wrap camera_azure_skin" id="camera_wrap">
            <div data-thumb="./assets/front/images/slides/thumbs/1.jpg" data-src="./assets/front/images/slides/slide1.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="./assets/front/images/slides/thumbs/2.jpg" data-src="./assets/front/images/slides/slide2.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="./assets/front/images/slides/thumbs/3.jpg" data-src="./assets/front/images/slides/slide3.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
			<div data-thumb="./assets/front/images/slides/thumbs/4.jpg" data-src="./assets/front/images/slides/slide4.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
			<div data-thumb="./assets/front/images/slides/thumbs/5.jpg" data-src="./assets/front/images/slides/slide5.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
			<div data-thumb="./assets/front/images/slides/thumbs/6.jpg" data-src="./assets/front/images/slides/slide6.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
			<div data-thumb="./assets/front/images/slides/thumbs/7.jpg" data-src="./assets/front/images/slides/slide7.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
			<div data-thumb="./assets/front/images/slides/thumbs/8.jpg" data-src="./assets/front/images/slides/slide8.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
            <div data-thumb="./assets/front/images/slides/thumbs/9.jpg" data-src="./assets/front/images/slides/slide9.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
        </div>
		<div style="clear:both; display:block; height:10px"></div>
	</div>
	<div class="welcome">
		<p><?php print_r($datos); ?></p>
	</div>
	<div class="zerogrid">
		<div class="row block01">
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/1.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/2.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/3.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/4.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/5.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/6.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/7.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/8.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
			<div class="col-1-3">
				<article>
					<a href="blog.html"><img src="./assets/front/images/slides/thumbs/9.jpg" class="grayscale"/><h2>Sed accumsan libero</h2></a>
				</article>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="zerogrid">
		<div class="row block02">
			<section class="col-1-3">
				<div class="heading"><h2>About us</h2></div>
				<div class="content">
					<p>Free Html5 Templates created by <a href="https://johnjce.github.io/inicio/" target="_blank" style="color: #DA251D;">ZEROTHEME</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
				</div>
			</section>
			<section class="col-1-3">
				<div class="heading"><h2>Categories</h2></div>
				<div class="content">
					<ul>
						<li><a href="https://johnjce.github.io/inicio/">Free Html5 Templates</a></li>
						<li><a href="https://johnjce.github.io/inicio/">Free Responsive Themes</a></li>
						<li><a href="https://johnjce.github.io/inicio/">Free Html5 and Css3 Themes</a></li>
					</ul>
				</div>
			</section>
			<section class="col-1-3">
				<div class="heading"><h2>Popular Post</h2></div>
				<div class="content">
					<div class="post">
						<img src="./assets/front/images/slides/slide6.jpg"/>
						<h4><a href="blog.html">Lorem ipsum dolor sit amet</a></h4>
						<p>November 11 ,2012</p>
					</div>
					<div class="post">
						<img src="./assets/front/images/slides/slide7.jpg"/>
						<h4><a href="blog.html">Lorem ipsum dolor sit amet</a></h4>
						<p>November 11 ,2012</p>
					</div>
					<div class="post">
						<img src="./assets/front/images/slides/slide9.jpg"/>
						<h4><a href="blog.html">Lorem ipsum dolor sit amet</a></h4>
						<p>November 11 ,2012</p>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © 2012 - Designed by <a href="https://johnjce.github.io/inicio/">..::jhonts::..</a></p>
	</div>
</footer>
</body></html>
