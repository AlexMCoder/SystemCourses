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
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class VideoController extends Controller
{

	public function detalheCurso($code){

		$detalhe = CursoVideo::where('curso_id', $code)->get();

		$curso = Curso::where('id', $code)->first();

		return view('detalhe-curso', ['detalhe' => $detalhe, 'code' => $code, 'curso' => $curso]);
	}
}
