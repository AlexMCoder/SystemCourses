<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\AppBaseController;
use App\Models\Galeria;
use App\Models\professorUser;
use Flash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class GaleriaController extends Controller {

	/**
	 * Display a listing of the Curso.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function index() {
		return view('galeria.index');
	}

	/**
	 * Show the form for creating a new Curso.
	 *
	 * @return Response
	 */
	public function create() {

	}

	/**
	 * Store a newly created Curso in storage.
	 *
	 * @param CreateCursoRequest $request
	 *
	 * @return Response
	 */
	public function store() {

	}

	/**
	 * Display the specified Curso.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id) {

	}

	/**
	 * Show the form for editing the specified Curso.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id) {

	}

	/**
	 * Update the specified Curso in storage.
	 *
	 * @param  int              $id
	 * @param UpdateCursoRequest $request
	 *
	 * @return Response
	 */
	public function update() {

	}

	/**
	 * Remove the specified Curso from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id) {

	}

	//preview in FRONT
	public function listarCursos() {

	}
}
