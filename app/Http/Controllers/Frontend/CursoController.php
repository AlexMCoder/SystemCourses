<?php

namespace App\Http\Controllers\Frontend;

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

	//preview in FRONT
	public function listarCursos() {
		$professores = professorUser::all();

		$cursos = Curso::all();

		return view('cursos', compact('professores', 'cursos'));
	}
}
