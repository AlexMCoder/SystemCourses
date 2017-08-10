<?php

namespace App\Http\Controllers;

use App\Models\CursoVideo;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Models\Curso;
use App\Models\professorUser;
use App\Repositories\CursoRepository;
use Flash;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class CursoController extends AppBaseController {
	/** @var  CursoRepository */
	private $cursoRepository;

	public function __construct(CursoRepository $cursoRepo) {
		$this->cursoRepository = $cursoRepo;
	}

	/**
	 * Display a listing of the Curso.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index(Request $request) {
		$this->cursoRepository->pushCriteria(new RequestCriteria($request));
		$cursos = $this->cursoRepository->all();

		return view('cursos.index')
			->with('cursos', $cursos);
	}

	/**
	 * Show the form for creating a new Curso.
	 *
	 * @return Response
	 */
	public function create() {
		return view('cursos.create');
	}

	/**
	 * Store a newly created Curso in storage.
	 *
	 * @param CreateCursoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCursoRequest $request) {
		// $input = $request->all();

		$request->file('file')->move('img/cursos', $request->file('file')->getClientOriginalName());
		$request->merge(['file' => $request->file('file')->getClientOriginalName()]);

		$input = $request->all();

		$curso        = $this->cursoRepository->create($input);
		$course       = Curso::find($curso->id);
		$course->file = $request->file('file')->getClientOriginalName();
		$course->update();

		Flash::success('Curso cadastrado com sucesso!');

		return redirect(route('cursos.index'));
	}

	public function storeVideo(Request $request) {
		// $input = $request->all();

		$video = $request->link;

		$iframe = "<iframe width='560' height='315' src='https://www.youtube.com/watch?v=$video' frameborder='0' itemprop='video' allowfullscreen></iframe>";

		if($value = str_contains($request->link, '<iframe')){

		}

		if($value = str_contains($request->link, 'http')){
			$iframe = "<iframe width='560' height='315' src='$video' frameborder='0' itemprop='video' allowfullscreen></iframe>";
		}
		$request['link'] = $iframe;
		CursoVideo::create($request->all());


		Flash::success('Curso cadastrado com sucesso!');

		return redirect(route('cursos.index'));
	}

	/**
	 * Display the specified Curso.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id) {
		$curso = $this->cursoRepository->findWithoutFail($id);

		if (empty($curso)) {
			Flash::error('Curso not found');

			return redirect(route('cursos.index'));
		}

		return view('cursos.show')->with('curso', $curso);
	}

	/**
	 * Show the form for editing the specified Curso.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id) {
		$curso = $this->cursoRepository->findWithoutFail($id);

		if (empty($curso)) {
			Flash::error('Curso not found');

			return redirect(route('cursos.index'));
		}

		return view('cursos.edit')->with('curso', $curso);
	}

	/**
	 * Update the specified Curso in storage.
	 *
	 * @param  int              $id
	 * @param UpdateCursoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateCursoRequest $request) {
		$curso = $this->cursoRepository->findWithoutFail($id);

		if (empty($curso)) {
			Flash::error('Curso not found');

			return redirect(route('cursos.index'));
		}

		$curso = $this->cursoRepository->update($request->all(), $id);

		Flash::success('Curso updated successfully.');

		return redirect(route('cursos.index'));
	}

	/**
	 * Remove the specified Curso from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id) {
		$curso = $this->cursoRepository->findWithoutFail($id);

		if (empty($curso)) {
			Flash::error('Curso not found');

			return redirect(route('cursos.index'));
		}

		$this->cursoRepository->delete($id);

		Flash::success('Curso deleted successfully.');

		return redirect(route('cursos.index'));
	}

	public function submitVideo($code) {
	$videos = CursoVideo::where('curso_id', $code)->get();

		return view('cursos.list', ['videos' => $videos, 'code' => $code]);
	}

	public function listarCursos() {
		$professores = professorUser::all();

		$cursos = Curso::all();

		return view('cursos', compact('professores', 'cursos'));
	}

	public function createVideo($code){
		$videos = Curso::where('id', $code)->first();
		return view('cursos.video', compact('videos'));
	}
}
