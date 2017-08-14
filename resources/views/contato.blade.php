@extends('master')

@section('content')
	<main class="conteudoPrincipal" style="background: #eef1f2;">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 40px;">
				Enviar Mensagem
			</h1>

			<form action="{{ route('save.contato') }}" method="post">
			{!! csrf_field() !!}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name">Nome</label>
						    <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="email">E-mail</label>
						    <input type="text" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail">
						</div>
					</div>
				</div>

				<div class="form-group">
				  	<label for="mensagem">Mensagem</label>
				  	<textarea class="form-control" rows="10" name="mensagem" id="mensagem" placeholder="Digite a mensagem aqui"></textarea>
				</div>
				<button class="btn success" type="submit">Enviar Solicitação</button>
			</form>
		</div>
	</main>
@endsection