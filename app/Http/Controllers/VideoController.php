<?php

namespace App\Http\Controllers;

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

class VideoController extends Controller
{

	public function storeVideo(Request $request) {
		// $input = $request->all();

		$video = $request->link;

		$iframe = "<iframe width='560' height='360' src='https://www.youtube.com/embed/$video' frameborder='0' itemprop='video' allowfullscreen></iframe>";

		if ($value = str_contains($request->link, '<iframe')) {

		}

		if ($value = str_contains($request->link, 'http')) {
			$iframe = "<iframe width='160' height='115' src='$video' frameborder='0' itemprop='video' allowfullscreen></iframe>";
		}
		$request['link'] = $iframe;
		CursoVideo::create($request->all());

		Flash::success('Curso cadastrado com sucesso!');

		return redirect(route('cursos.index'));
	}

    public function submitVideo($code) {
		$videos = CursoVideo::where('curso_id', $code)->get();

		return view('cursos.videos.list', ['videos' => $videos, 'code' => $code]);
	}

	//preview in FRONT
	public function listarCursos() {
		$professores = professorUser::all();

		$cursos = Curso::all();

		return view('cursos', compact('professores', 'cursos'));
	}

	public function createVideo($code) {
		$videos = Curso::where('id', $code)->first();
		return view('cursos.videos.video', compact('videos'));
	}

	//preview in FRONT
	public function detalheCurso($code){
		
		$detalhe = CursoVideo::where('curso_id', $code)->get();

		$curso = Curso::where('id', $code)->first();

		return view('detalhe-curso', ['detalhe' => $detalhe, 'code' => $code, 'curso' => $curso]);
	}
}
