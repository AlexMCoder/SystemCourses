@extends('master')

@section('content')
	<main class="conteudoPrincipal" style="background: #eef1f2;">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 40px 10px 0px 10px;">Nossos cursos</h1>

			<nav>
				<ul class="conteudoPrincipal-cursos">
					@foreach ($cursos as $curso)
						<li class="conteudoPrincipal-cursos-link">
							<img src="/img/cursos/{{ $curso->file }}" alt="" width="60px">
							<a href="{{route('detalhe.curso', ['code' => $curso->id])}}">{{ $curso->name }}</a>
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
@endsection