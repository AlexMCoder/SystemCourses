@extends('master')

@section('content')
	<main class="conteudoPrincipal">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 15px;">Detalhe do Curso {{ $curso->name }}</h1>

			

			@foreach ($detalhe as $detalhe)
						<h2>{{ $detalhe->titulo}}</h2>
			@endforeach
		</div>
	</main>
@endsection