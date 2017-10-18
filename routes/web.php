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

Route::get('/', 'Frontend\IndexController@index');
Route::get('/cursos', 'Frontend\CursoController@listarCursos');
Route::get('/galeria', 'Frontend\GaleriaController@index');
Route::get('/about', 'Frontend\AboutController@index');
Route::get('/doacao', 'Frontend\DoacaoController@index');
Route::get('/loginAluno', 'Frontend\AlunoController@index');
Route::get('/cadastrar', 'Frontend\CadastroController@index');

Route::get('/detalhe-curso/{code}', 'Frontend\VideoController@detalheCurso')->name('detalhe.curso');

Route::post('/contato-enviar', 'Frontend\ContatoController@contatoEnvia')->name('save.contato');;

Route::get('/instituicao', 'Frontend\InstituicaoController@index');

Auth::routes();

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::group(['middleware' => 'auth', 'prefix' => '/sistema'], function () {
		Route::get('/', 'Backend\HomeController@index');
		Route::get('/home', 'Backend\HomeController@index');

		Route::resource('/professorUsers', 'Backend\professorUserController');

		Route::resource('/cursos', 'Backend\CursoController');

		Route::resource('/contatos', 'Backend\ContatoController');

		Route::resource('users', 'UserController');

		Route::get('/cursos/{code}/videos', 'Backend\VideoController@submitVideo')->name('enviar.video');
		Route::post('/cursos/videos/add', 'Backend\VideoController@storeVideo')->name('add.video');
		Route::get('/cursos/{code}/videos/create', 'Backend\VideoController@createVideo')->name('create.video');
		Route::get('/cursos/{code}/videos/{id}/edit', 'Backend\VideoController@editVideo')->name('edit.video');
		Route::post('/cursos/videos/save', 'Backend\VideoController@update')->name('save.video');

		Route::get('/galeriaPainel', 'Backend\GaleriaController@index')->name('index.galeria');
		Route::get('/instituicoes', 'Backend\InstituicoesController@index')->name('index.instituicoes');
		Route::get('/doacoes', 'Backend\DoacoesController@index')->name('index.doacoes');

		Route::get('/alunos', 'Backend\AlunosController@index')->name('index.aluno');
	});



// Route::get('/cursos/{code}/videos/list', 'CursoController@listVideos')->name('list.video');
