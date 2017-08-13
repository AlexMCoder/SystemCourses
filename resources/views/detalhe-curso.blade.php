@extends('master')

@section('content')
	<main class="conteudoPrincipal">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 15px;">
				Detalhe do Curso {{ $curso->name }}
			</h1>

			@foreach ($detalhe as $detalhe)
				<div class="row">
					<div class="col-md-6">
						{!! $detalhe->link !!}
					</div>
					<div class="col-md-6">
						<h1>{{ $detalhe->titulo }}</h1>
						<div class="detalhe-descricao">
							{{ $detalhe->descricao }}
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</main>
@endsection