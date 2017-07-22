@extends('master')

@section('content')
	<div class="banner">
		<h3>Compartilhando Conhecimento</h3>
		<h4>Ajudando a Sociedade</h4>
		<div class="arrow">
			<a href="#contact" class="scroll"><img src="img/arrow.png" alt=" " /></a>
		</div>
	</div>
	<!-- about -->
	<div class="about-w3-agile" id="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-6 wthree_about_grid_left">
					<h3>A Plataforma</h3>
							<p>A Plaforma foi pensada e elaborada para compartilhar conhecimento com os melhores professores
							na área de TI. Nosso objetivo é distribuir cursos gratuitos, professores qualificados e vídeos com alta qualidade
							e um excelente suporte dos próprios professores. Além de distribuir as aulas temos como objetivo principal
							a colaboração dos alunos para ajudar instituições através de doações.</p>
						<p>
							Os alunos colaboradores terão previlégios com materiais, vídeos e livros exclusivos, além do básico já
							ofericido pela plataforma.
						</p>
								<a href="#" data-toggle="modal" data-target="#myModal">Mais Informação</a>
				</div>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Nosso Pensamento</h4>
						  </div>
						  <div class="modal-body">
							<p>
									Com o aumento do uso da internet dentro das empresas, como por
									exemplo as bibliotecas, implementação de sistemas capazes de adiantar
									serviços que eram feitos manualmente, o aumento de informações, novos
									usuários e a comunicação que está cada dia maior, muitas empresas utilizam a
									internet para divulgar ações sociais, uma forma extremamente útil para alcançar
									um número maior de usuários.
									Através desse crescimento a sociedade pode entrar nesse ambiente online
									com ideias que ajudem as instituições que necessitam de doações para adquirir
									novos recursos, assim tudo isso pode ser feito na troca de informação.
									Para isso, elaboramos esta plataforma online de ensino funciona,
									hoje em dia para alunos que estão cursando graduações ou que pretende
									ingressar em um curso profissionalizante, será enfatizado um sistema capaz de
									ajudar no conhecimento e também utilizar este tipo de ferramenta como forma
									de colaborar na sociedade através de doações.
							</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-md-6 wthree_about_grid_right">
					<img src="img/11.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about
	<div class="featured-work">
		<div class="container">
			<h3>Nosso Projeto</h3>
			<div class="col-md-6 featured-left">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="img/f1.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="img/f2.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<img src="img/f3.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
					</div>
				</div>
			</div>
			<script src="js/jquery.wmuSlider.js"></script>
								<script>
									$('.example1').wmuSlider();
								</script>

			<div class="col-md-6 featured-right">
				<h4>Quisque lobortis</h4>
				<p>Nam a leo porta, pulvinar eros id, facilisis nisi. Proin ut blandit tortor, in tempor tellus. Sed lacus metus, hendrerit eu orci ac, aliquam commodo lacus.Morbi gravida pulvinar orci, et consectetur enim consectetur non. Proin nunc leo, tincidunt sed lacinia</p>
				<p>Fusce eu felis et sapien malesuada pretium a ac eros. Praesent quis hendrerit quam. Integer mollis est a cursus pulvinar. Proin leo neque, posuere eu metus </p>
				<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>-->
	<div class="feat-bottom">
		<h4>"A educação tem raízes amargas, mas os seus frutos são doces." <strong>Aristóteles</strong></h4>
	</div>
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3>Equipe de Professores</h3>
			<div class="agile_team_grids">
			@foreach ($professores as $professor)
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="img/user.gif" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>{{ $professor->name }}</h4>
					</div>
				</div>
			@endforeach
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
	<div class="services" id="services">
		<div class="container">
			<h3>Cursos em Destaque</h3>
			@foreach ($cursos as $curso)
			<div class="col-md-4 services-grids services-grids1">
				<!--<span class="glyphicon glyphicon-education" aria-hidden="true"></span>-->
				<img src="/img/cursos/{{ $curso->file }}" alt="" width="128px">
				<h4>{{ $curso->name }}</h4>
				<p>{{ $curso->descricao }}</p>
			</div>
			@endforeach

			<a class="btn btn-primary services-bottom" href="cursos">
				Ver todos os cursos
			</a>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="contact-w3-agileits" id="contact">
		<div class="container">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Contato</h3>
				<!--<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<h5>Parma Via Modena,BO, Italy</h5>
					</div>
					<div class="clearfix"></div>
				</div>-->
				<div class="mail">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>E-mail</h4>
						<h5><a href="mailto:alexmpprog@gmail.com">alexmpprog@gmail.com</a></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Celular</h4>
						<h5>9 9883-2621</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Work hours</h4>
						<h5>Mon-Sat 09:00 AM - 05:00PM</h5>
					</div>
					<div class="clearfix"></div>
				</div>-->
			</div>

			<div class="col-md-7 contact-right-w3l">
				<h3>Enviar Mensagem</h3>
				<form action="contato-enviar" method="post">
					{!! csrf_field() !!}
					<input type="text"  class="name" name="name" placeholder="Nome" required>
					<input type="text"  class="email" name="email" placeholder="E-mail" required>
					<input type="text"  class="assunto" name="assunto" placeholder="Assunto" required>
					<textarea name="mensagem" placeholder="Digite a mensagem..." required></textarea>
					<input type="submit" value="Enviar Mensagem">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection