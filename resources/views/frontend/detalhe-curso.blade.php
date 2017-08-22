@extends('frontend.master')

@section('content')
	<main class="conteudoPrincipal" style="background: #eef1f2;">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 40px;">
				Detalhe do Curso {{ $curso->name }}
			</h1>

			@foreach ($detalhe as $detalhe)
				<div class="row" style="padding: 20px;background: #ffffff;">
					<div class="col-md-6">
						{!! $detalhe->link !!}
					</div>
					<div class="col-md-6">
						<h1 style="font-size: 30px;font-weight: bold;padding: 15px;">{{ $detalhe->titulo }}</h1>
						<div class="detalhe-descricao">
							<p style="font-size: 17px;line-height: 24px;text-align: justify;">
								{{ $detalhe->descricao }}
							</p>
						</div>
					</div>
				</div>
				<hr>
			@endforeach
		</div>
	</main>
@endsection