@extends('frontend.master')

@section('content')
	<main class="conteudoPrincipal" style="background: #eef1f2; height: 100vh;">
	 	<div class="row" id="pwd-container">
		    <div class="col-md-4"></div>
		    
	    <div class="col-md-4">
	      <section class="login-form">
	        <form method="post" action="#" role="login">
	          {{-- <img src="" class="img-responsive" alt="" /> --}}
	          <h1>Acessar Aluno Online</h1>
	          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
	          
	          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
	          
	          
	          <div class="pwstrength_viewport_progress"></div>
	          
	          
	          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Entrar</button>
	          <div>
	            <a href="#">Criar uma conta</a> ou <a href="#">Esqueci minha Senha</a>
	          </div>
	          
	        </form>
	        
	      </section>  
	      </div>
	      
	      <div class="col-md-4"></div>
		</section>

	</main>
@endsection