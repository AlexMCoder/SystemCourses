@extends('master')

@section('content')
	<div class="banner">
		<h3>Compartilhando Conhecimento</h3>
		<h4>Ajudando a Sociedade</h4>
		<div class="arrow">
			<a href="#contact" class="scroll"><img src="img/arrow.png" alt=" " /></a>
		</div>
	</div>
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