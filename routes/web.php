<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'IndexController@index');
Route::get('/cursos', 'CursoController@listarCursos');
Route::get('/galeria', 'GaleriaController@index');
Route::get('/about', 'AboutController@index');
Route::get('/doacao', 'DoacaoController@index');
Route::get('/loginAluno', 'AlunoController@index');
Route::get('/cadastrar', 'CadastroController@index');

Route::get('/detalhe-curso/{code}', 'VideoController@detalheCurso')->name('detalhe.curso');

Route::post('/contato-enviar', 'ContatoController@contatoEnvia')->name('save.contato');;

Route::get('/contato', 'ContatoController@contatoEnviaFront');

Auth::routes();

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::group(['middleware' => 'auth', 'prefix' => '/sistema'], function () {
		Route::get('/', 'HomeController@index');

		Route::resource('/professorUsers', 'professorUserController');

		Route::resource('/cursos', 'CursoController');

		Route::resource('/contatos', 'ContatoController');
		Route::resource('usuarios', 'UsuariosController');

		Route::resource('users', 'UserController');

		Route::get('/cursos/{code}/videos', 'VideoController@submitVideo')->name('enviar.video');
		Route::post('/cursos/videos/add', 'VideoController@storeVideo')->name('add.video');
		Route::get('/cursos/{code}/videos/create', 'VideoController@createVideo')->name('create.video');
		Route::get('/cursos/{code}/videos/{id}/edit', 'VideoController@editVideo')->name('edit.video');
		Route::post('/cursos/videos/save', 'VideoController@update')->name('save.video');
	});



// Route::get('/cursos/{code}/videos/list', 'CursoController@listVideos')->name('list.video');
