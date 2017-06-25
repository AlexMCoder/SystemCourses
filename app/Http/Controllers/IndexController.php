<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\professorUser;

class IndexController extends Controller {
	public function index() {
		$professores = professorUser::limit(4)->get();

		$cursos = Curso::limit(3)->get();

		return view('index', compact('professores', 'cursos'));
	}
}
