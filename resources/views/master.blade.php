<!DOCTYPE html>
<html lang="en">
<head>
<title>Cursos T.I</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cursos gratuitos com os melhores professores do Brasil" />
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
					<li><a href="/sistema"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Entrar</a></li>
					<li><a href="#small-dialog2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Cadastrar</a></li>
				</ul>
			</div>

			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="logo-w3">
			<h3>Desenvolvimento de Aplicações Web e Dispositivos Móveis</h3>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="/" class="active">Inicio</a></li>
						<li class="agileits w3layouts"><a href="/about">Quem Somos</a></li>
						<!--<li class="agileits w3layouts"><a class="scroll" href="#team">Quem Somos</a></li>-->
						<li class="agileits w3layouts"><a href="/cursos">Cursos</a></li>
						<li class="agileits w3layouts"><a href="/galeria">Galeria de Fotos</a></li>
						<li class="agileits w3layouts"><a href="#contact">Contato</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

        @yield('content')

    <div class="footer-w3l">
		<p> 2017 todos os direitos reservados</p>
	</div>
</body>
</html>