<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Curso;
use App\Models\professorUser;
use App\Http\Controllers\Controller;

class IndexController extends Controller {
	public function index() {
		$professores = professorUser::limit(4)->get();

		$cursos = Curso::limit(3)->get();

		return view('frontend.index', compact('professores', 'cursos'));
	}
}
