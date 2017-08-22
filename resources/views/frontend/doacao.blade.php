@extends('frontend.master')

@section('content')
	<main class="conteudoPrincipal" style="background: #eef1f2;">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 40px;">
				Faça a sua doação e ajude as instituições carentes
			</h1>
			<p class="text-center" style="font-size: 20px;font-weight: bold;padding: 10px;">Após preencher os dados, iremos entrar em contato</p>
			<div class="form-content">
				<form action="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="nameIt">Nome</label>
							    <input type="text" class="form-control" id="nameIt" placeholder="Digite o nome da instituição por completo">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="email">E-mail</label>
							    <input type="email" class="form-control" id="email" placeholder="Digite o e-mail para contato">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="fone">Telefone</label>
							    <input type="text" class="form-control" id="fone" placeholder="Fone para contato">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="valor">Valor</label>
							    <input type="number" class="form-control" id="valor" placeholder="Digite o e-mail para contato">
							</div>
						</div>
					</div>

					<div class="form-group">
					  	<label for="mensagem">Mensagem</label>
					  	<textarea class="form-control" rows="10" id="mensagem" placeholder="Tem algo a nos dizer?"></textarea>
					</div>
					<button class="btn success" type="submit">Enviar Solicitação</button>
				</form>
			</div>
		</div>
	</main>
@endsection