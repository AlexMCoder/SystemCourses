<!DOCTYPE html>
<html lang="en">
<head>
<title>Cursos T.I</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inspire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/popup-box.css') }}" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
<link rel="stylesheet" 	href="{{ asset('css/chocolat.css') }}" type="text/css" media="all">
<!--// css -->
<!-- font -->
<link href="{{ asset('//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic') }}" rel='stylesheet' type='text/css'>
<link href='{{ asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') }}" rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
	<!-- Popup-Box-JavaScript -->
	<script src="{{ asset('js/modernizr.custom.97074.js') }}"></script>
	<script src="{{ asset('js/jquery.chocolat.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
			<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.custom.53451.js') }}"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
</script>

<style>
	/* Author: Alex;
			description: flexbox menu-top;
		*/
		.box {
		  height: 50px;
		  width: 50px;
		  background-color: green;
		}
		.grid {
		  display: flex;
		}
		.course {
		  width: 31.3%;
		  margin: 1%;
		}
		.conteudoPrincipal-cursos-link {
		    width: 23%;
		    margin-bottom: 1%;
		}
		.conteudoPrincipal-cursos {
		    display: flex;
		    flex-wrap: wrap;
		}
		.conteudoPrincipal-cursos-link:nth-child(4n) {
		     margin-right: 0;
		}
		.conteudoPrincipal-cursos-link: nth-child(4n+1) {
		     margin-left: 0;
		}
		.conteudoPrincipal-cursos-link {
			height: 100px;
			background-color: #FFF;
			text-align: center;
			margin: 1%;
			transition: .3s;
			box-shadow: 2px 2px 2px #CCC;
			position: relative;
		}
		.conteudoPrincipal-cursos-link a {
			text-decoration: none;
			color: #000;
			font-weight: bold;
			display: block;
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0;
			left: 0;
		}
		.conteudoPrincipal-cursos-link:hover {
			box-shadow: 4px 4px 4px #CCC;
		}
		.conteudoPrincipal-cursos-link a:before {
			content: '';
			display: block;
			width: 50px;
			height: 50px;
			margin: 10px auto;
		}
		.conteudoPrincipal-cursos-link:nth-child(even) a:before {
			background: url(../img/background1.svg) no-repeat;
		}
		.conteudoPrincipal-cursos-link:nth-child(odd) a:before {
			background: url(../img/background2.svg) no-repeat;
		}
		.videoSobre {
			background-color: #5E9EDC;
			padding: 25px 0;
		}
		.videoSobre-video {
			max-width: 100%;
		}
		.videoSobre .container {
			color: #FFF;
		}
		.videoSobre-sobre-title {
			font-size: 1.2em;
			font-weight: bolder;
		}
		.videoSobre-sobre {
			font-size: 1.3em;
			line-height: 2;
		}
		.videoSobre-button {
			border-radius: 8px;
			background-color: #ec6e5a;
			display: block;
			color: #FFF;
			border: none;
			height: 50px;
			font-size: .8em;
			outline: none;
		}
		/* http://meyerweb.com/eric/tools/css/reset/
		   v2.0 | 20110126
		   License: none (public domain)
		*/
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			font: inherit;
			vertical-align: baseline;
		}
		/* HTML5 display-role reset for older browsers */
		article, aside, details, figcaption, figure,
		footer, header, hgroup, menu, nav, section {
			display: block;
		}
		body {
			line-height: 1;
		}
		ol, ul {
			list-style: none;
		}
		blockquote, q {
			quotes: none;
		}
		blockquote:before, blockquote:after,
		q:before, q:after {
			content: '';
			content: none;
		}
		table {
			border-collapse: collapse;
			border-spacing: 0;
		}
</style>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="w3l_header_left">
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(44) 44 9 4444 4444</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:alexmpprog@gmail.com">alexmpprog@gmail.com</a></li>
				</ul>
			</div>

			<div class="w3l_header_right">
				<ul>
					<li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Entrar</a></li>
					<li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Cadastrar</a></li>
				</ul>
			</div>

			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="">
			<h2>Desenvolvimento de Aplicações Web e Dispositivos Móveis</h2>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<main class="conteudoPrincipal">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 15px;">Nossos cursos</h1>

			<nav>
				<ul class="conteudoPrincipal-cursos">
					@foreach ($cursos as $curso)
						<li class="conteudoPrincipal-cursos-link">
							<img src="/img/cursos/{{ $curso->file }}" alt="" width="60px">
							<a href="#">{{ $curso->name }}</a>
						</li>
					@endforeach
				</ul>
			</nav>
		</div>

		<section class="videoSobre">
			<div class="container">

				<iframe class="videoSobre-video" width="560" height="315" src="https://www.youtube.com/embed/y7OVY6qEsHg" frameborder="0" allowfullscreen></iframe>

				<div class="videoSobre-sobre">
					<h2 class="videoSobre-sobre-title">Vantagens dos nossos cursos</h2>
					<ul class="videoSobre-sobre-list">
						<li class="videoSobre-sobre-item">Estude onde quiser</li>
						<li class="videoSobre-sobre-item">Novos cursos todos os meses</li>
						<li class="videoSobre-sobre-item">Cursos compatíveis com o mercado</li>
						<li class="videoSobre-sobre-item">Cursos Gratuitos</li>
					</ul>
					<button class="videoSobre-button">Cadastre-se já</button>
				</div>
			</div>
		</section>

	</main>
</body>
</html>