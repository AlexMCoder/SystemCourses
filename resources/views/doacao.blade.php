@extends('master')

@section('content')
	<main class="conteudoPrincipal" style="background: #eef1f2;">
		<div class="container">
			<h1 style="font-size: 30px;font-weight: bold;padding: 40px;">
				Faça a sua doação e ajude as instituições carentes
			</h1>
			<div class="form-content">
				<form action="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="nameIt">Nome da Instituição</label>
							    <input type="text" class="form-control" id="nameIt" placeholder="Digite o nome da instituição por completo">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="siteFacebook">Site ou Facebook</label>
							    <input type="text" class="form-control" id="siteFacebook" placeholder="Digite o site ou o Facebook da instituição">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="email">E-mail</label>
							    <input type="email" class="form-control" id="email" placeholder="Digite o e-mail para contato">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="fone">Telefone</label>
							    <input type="text" class="form-control" id="fone" placeholder="Fone para contato">
							</div>
						</div>
					</div>

					<div class="form-group">
					  	<label for="mensagem">Descreva sobre a necessidade da instituição</label>
					  	<textarea class="form-control" rows="10" id="mensagem" placeholder="Descreva aqui quais acessórios a instituição está mais precisando atualmente"></textarea>
					</div>
					<button class="btn success" type="submit">Button</button>
				</form>
			</div>
		</div>
	</main>
@endsection