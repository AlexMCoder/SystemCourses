<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use App\Models\Curso;
use App\Models\CursoVideo;
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

		return view('backend.cursos.index')->with('cursos', $cursos);
	}

	/**
	 * Show the form for creating a new Curso.
	 *
	 * @return Response
	 */
	public function create() {
		return view('backend.cursos.create');
	}

	/**
	 * Store a newly created Curso in storage.
	 *
	 * @param CreateCursoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCursoRequest $request) {

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
			Flash::error('Curso não existe!');

			return redirect(route('backend.cursos.index'));
		}

		return view('backend.cursos.show')->with('curso', $curso);
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

			return redirect(route('backend.cursos.index'));
		}

		return view('backend.cursos.edit')->with('curso', $curso);
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
}
